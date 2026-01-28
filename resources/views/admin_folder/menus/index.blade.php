@extends('admin_folder.index')
@section('content')


<style>
    .menu-box {
        display: flex;
        gap: 30px
    }

    .panel {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        width: 100%;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .1)
    }

    .menu-item {
        background: #f9fafb;
        margin: 6px 0;
        padding: 10px;
        border-left: 4px solid #4f46e5;
        border-radius: 6px;
        cursor: move
    }

    .menu-item.inactive {
        opacity: .4
    }

    .children {
        margin-left: 25px
    }

    button {
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        color: #fff;
        cursor: pointer
    }

    .edit {
        background: #0ea5e9
    }

    .delete {
        background: #ef4444
    }

    .toggle {
        background: #22c55e
    }


    .menu-table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
    }

    .menu-table th {
        background: #f4f6f8;
        text-align: left;
        padding: 12px;
        font-weight: 600;
    }

    .menu-table td {
        padding: 10px 12px;
        border-bottom: 1px solid #eee;
    }

    .menu-table tr.inactive {
        opacity: 0.5;
    }

    .menu-table button {
        margin-right: 6px;
        padding: 5px 10px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    .menu-table button.edit {
        background: #2563eb;
        color: #fff;
    }

    .menu-table button.toggle {
        background: #059669;
        color: #fff;
    }

    .menu-table button.delete {
        background: #dc2626;
        color: #fff;
    }
</style>

<div class="col-md-9">
    <div class="col-sm-12">

        <div class="panel">
            <h3>Create Menu</h3>
            <input class="form-control" id="title" placeholder="Title">
            <br />
            <input class="form-control" id="url" placeholder="URL">
            <br />
            <select class="form-control" id="parent"></select>
            <br />
            <button id="addMenuBtn" class="btn btn-primary" onclick="createMenu()">Add</button>
        </div>


        <div class="">

            <div class="panel">
                <h3>Menu Structure</h3>

                <!--  <div id="tree"></div> -->

                <table id="menuTable" class="menu-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Parent</th>
                            <th style="width: 220px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tree"></tbody>
                </table>

            </div>

        </div>


    </div>
</div>





<div id="modal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);align-items:center;justify-content:center">
    <div class="panel" style="width:350px">
        <input type="hidden" id="edit_id">

        <input class="form-control" id="edit_title">
        <br />
        <input class="form-control" id="edit_url">
        <br />
        <select class="form-control" id="edit_parent"></select>
        <br />
        <button class="btn btn-primary" onclick="updateMenu()">Update</button>
        <button class="delete" onclick="closeModal()">Cancel</button>
    </div>
</div>

@endsection


@section('script')

<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
    fetchMenus();

    function fetchMenus() {
        fetch('/admins/menus/list').then(r => r.json()).then(d => {
            renderTree(d);
            buildParent(d);
        });
    }

    function renderTree(data, container = document.getElementById('tree'), level = 0) {
        if (level === 0) container.innerHTML = '';

        data.forEach(m => {
            let tr = document.createElement('tr');
            tr.className = (m.is_active ? '' : ' inactive');
            tr.dataset.id = m.id;
            tr.dataset.parent = m.parent_id ?? '';

            tr.innerHTML = `
            <td style="padding-left:${level * 25}px">
                ${level > 0 ? '↳ ' : ''}${m.title}
            </td>
            <td>
           
             ${m.parent ? m.parent.title : 'Main Menu'}
             <br/>
             <small>${m.url ?? ''}</small>

            </td>
            
            <td>
                <button class="edit" onclick="openEdit(${m.id},'${m.title}','${m.url ?? ''}',${m.parent_id})">Edit</button>
                <button class="toggle" onclick="toggle(${m.id})">Toggle</button>
                <button class="delete" onclick="del(${m.id})">Delete</button>
            </td>
        `;

            container.appendChild(tr);

            if (m.children && m.children.length) {
                renderTree(m.children, container, level + 1);
            }
        });

        Sortable.create(container, {
            group: 'menu',
            animation: 150,
            onEnd: saveOrder
        });
    }


    function saveOrder() {
        let order = [];
        document.querySelectorAll('.menu-item').forEach((el, i) => {
            order.push({
                id: el.dataset.id,
                order: i,
                parent_id: el.parentElement.closest('.menu-item')?.dataset.id || null
            });
        });
        fetch('/admins/menus/order', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                order
            })
        });
    }

    function buildParent(data) {
        let s = document.getElementById('parent');
        let e = document.getElementById('edit_parent');
        s.innerHTML = '<option value="">Main</option>';
        e.innerHTML = s.innerHTML;

        (function rec(items, prefix = '') {
            items.forEach(i => {
                s.innerHTML += `<option value="${i.id}">${prefix}${i.title}</option>`;
                e.innerHTML += `<option value="${i.id}">${prefix}${i.title}</option>`;
                if (i.children.length) rec(i.children, prefix + '— ');
            });
        })(data);
    }


    function createMenu() {
        const btn = document.getElementById('addMenuBtn');

        btn.disabled = true;
        btn.innerHTML = `
        <span class="spinner-border spinner-border-sm"></span> Loading...
    `;

        fetch('/admins/menus/store', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    title: title.value,
                    url: url.value,
                    parent_id: document.getElementById('parent').value
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    // ✅ Clear form fields
                    title.value = '';
                    url.value = '';
                    document.getElementById('parent').value = '';

                    // ✅ Reload menus
                    fetchMenus();
                } else {
                    alert(data.message || 'Failed to create menu');
                }
            })
            .catch(err => {
                console.error(err);
                alert('Something went wrong');
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerHTML = 'Add';
            });
    }




    function openEdit(id, t, u, p) {
        modal.style.display = 'flex';
        edit_id.value = id;
        edit_title.value = t;
        edit_url.value = u;
        edit_parent.value = p;
    }

    function updateMenu() {
       
        fetch(`/admins/menus/update/${edit_id.value}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                title: edit_title.value,
                url: edit_url.value,
                parent_id: edit_parent.value
            })
        }).then(() => {
            closeModal();
            fetchMenus();
        });
    }

    function closeModal() {
        modal.style.display = 'none'
    }

    function toggle(id) {
        fetch(`/admins/menus/toggle/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        }).then(fetchMenus);
    }

    function del(id) {
        if (confirm('Delete?')) {
            fetch(`/admins/menus/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                }
            }).then(fetchMenus);
        }
    }
</script>

@endsection