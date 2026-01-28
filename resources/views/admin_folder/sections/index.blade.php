@extends('admin_folder.index')
@section('content')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<style>
    .d-none {
        display: none !important;
    }

    .drag-handle {
        cursor: grab;
        font-size: 18px;
    }

    .ui-state-highlight {
        height: 55px;
        background: #e9ecef;
        border: 2px dashed #adb5bd;
    }

    /* Custom Modal */
    /* Modal Overlay */
    .custom-modal {
        display: none;
        position: absolute;
        /* key change */
        inset: 0;
        /* shorthand for top, right, bottom, left */
        background: rgba(0, 0, 0, 0.6);
        z-index: 9999;

        /* center modal */
       /*  display: flex; */
        
        padding: 40px 15px;
        min-height: 100vh;
    }

    /* Modal Box */
    .custom-modal-content {
        background: #fff;
        width: 100%;
         max-width: 1000px; 
        border-radius: 10px;
        overflow: hidden;

        animation: modalFade 0.25s ease-in-out;
    }

    /* Header & Footer */
    .custom-modal-header,
    .custom-modal-footer {
        padding: 15px 20px;
        background: #f8f9fa;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Body */
    .custom-modal-body {
        padding: 20px;
    }

    /* Close Button */
    .close-modal {
        cursor: pointer;
        font-size: 22px;
        font-weight: bold;
        line-height: 1;
    }

    /* Animation */
    @keyframes modalFade {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile adjustments */
    @media (max-width: 576px) {
        .custom-modal {
            padding: 20px 10px;
        }

        .custom-modal-content {
            max-width: 100%;
            border-radius: 6px;
        }
    }
</style>


<div class="col-md-9">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">📘 Section Management</h4>
        </div>

        <div class="card-body">

            <button class="btn btn-primary mb-3" id="addSectionBtn">Add Section</button>



            <div class="form-content d-none">
                <br />

                <!-- Upload Form -->
                <form id="sectionForm" enctype="multipart/form-data">
                    <div class="">
                        <div class="col-sm-12">

                            <div>

                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                                <br />
                            </div>



                            @include('admin_folder.sections.color_field' ,
                            ['title' => "Background Color" , 'name' => "background_color" ,
                            'id' => "background-color"])

                            <br />


                            <!-- Visible inputs (one shown at a time) -->


                            @include('admin_folder.sections.color_field' ,
                            ['title' => "Text Color" , 'name' => "color"
                            , 'id' => "text-color"])
                            <br />


                            @include('admin_folder.sections.editor' , [ 'id' => 'code' , 'name' => 'code'])

                            <br />
                            <button class="btn btn-primary mt-3">Upload</button>


                        </div>


                    </div>

                </form>

            </div>

            <div class="col-sm-12">

                <!-- Progress -->
                <div class="progress mt-3" id="uploadProgress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                        style="width:0%">0%</div>
                </div>

            </div>

            <hr>

            <!-- Table -->
            <div class="table-responsive  col-sm-12">
                <br />
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Title</th>
                            <th>Back. Color</th>
                            <th>Text Color</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sectionTable"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<!-- EDIT MODAL (PURE JS) -->
@include('admin_folder.sections.edit_modal')



</div>

<style>
    .color-field {
        max-width: 320px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
    }

    .color-field label {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
        font-weight: 500;
        color: #333;
    }

    .color-input {
        position: relative;
        display: flex;
        align-items: center;
        border: 1px solid #d0d5dd;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
    }

    /* Common input style */
    .color-input input {
        border: none;
        outline: none;
        height: 42px;
        width: 100%;
        padding: 0 44px 0 12px;
        font-size: 14px;
    }

    /* Color picker styling */
    .color-picker {
        padding: 4px;
        cursor: pointer;
    }

    /* Hide default color picker border */
    .color-picker::-webkit-color-swatch-wrapper {
        padding: 0;
    }

    .color-picker::-webkit-color-swatch {
        border: none;
        border-radius: 6px;
    }

    /* Text input hidden by default */
    .color-text {
        display: none;
    }

    /* Eye toggle */
    .color-toggle {
        position: absolute;
        right: 12px;
        cursor: pointer;
        font-size: 18px;
        user-select: none;
        opacity: 0.7;
    }

    .color-toggle:hover {
        opacity: 1;
    }

    /* Focus effect */
    .color-input:focus-within {
        border-color: #4f46e5;
        box-shadow: 0 0 0 2px rgba(79, 70, 229, 0.15);
    }
</style>
<!-- Editor Styles -->
@include('admin_folder.sections.editorstyle')

@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<!-- Color Picker -->
<script>
    document.addEventListener('click', function(e) {
        const toggle = e.target.closest('.color-toggle');
        if (!toggle) return;

        const wrapper = toggle.closest('.color-input');
        const picker = wrapper.querySelector('.color-picker');
        const text = wrapper.querySelector('.color-text');

        const isTextVisible = text.style.display === 'block';

        if (isTextVisible) {
            picker.value = text.value || picker.value;
            text.style.display = 'none';
            picker.style.display = 'block';
        } else {
            text.value = picker.value;
            picker.style.display = 'none';
            text.style.display = 'block';
            text.focus();
        }
    });

    // Sync text → picker
    document.addEventListener('input', function(e) {

        const wrapper = e.target.closest('.color-input');
        if (!wrapper) return;

        const colorPicker = wrapper.querySelector('.color-picker');
        const colorText = wrapper.querySelector('.color-text');

        // HEX validation
        const isValidHex = value => /^#([0-9A-F]{3}){1,2}$/i.test(value);

        // Text → Picker
        if (e.target.classList.contains('color-text')) {
            if (isValidHex(e.target.value)) {
                colorPicker.value = e.target.value;
            }
        }

        // Picker → Text
        if (e.target.classList.contains('color-picker')) {
            colorText.value = e.target.value;
        }
    });
</script>


<!-- Editor Scripts -->

@include('admin_folder.sections.editorscript')



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function setButtonLoading(btn, loading = true) {
        if (loading) {
            btn.prop('disabled', true);
            btn.data('original-text', btn.html());
            btn.html(`
            <span class="spinner-border spinner-border-sm"></span>
            Loading...
        `);
        } else {
            btn.prop('disabled', false);
            btn.html(btn.data('original-text'));
        }
    }


    function loadSections() {
        $.get('{{ route("admin.sections.list") }}', function(data) {
            let rows = '';
            data.forEach(j => {
                rows += `
            <tr data-id="${j.id}">
                <td><span class="drag-handle me-2">☰</span>${j.title}</td>
                <td>${j.background_color ?? '-'}</td>
                <td>${j.color ?? '-'}</td>

                  <td>
                    <span class="badge ${j.is_published ? 'bg-success' : 'bg-secondary'}">
                        ${j.is_published ? 'Published' : 'Draft'}
                    </span>
                </td>
                
                <td>
                   

                  <button class="btn btn-sm btn-primary edit"
                    data-id="${j.id}"
                    data-title="${j.title}"
                    data-background="${j.background_color ?? ''}"
                    data-color="${j.color ?? ''}"
                    data-code='${encodeURIComponent(j.code ?? "")}'
                >
                    Edit
                </button>



                    <button class="btn btn-sm 
                    btn-warning toggle"
                    data-label="Toggle "

                        data-id="${j.id}">Toggle</button>

                    <button class="btn btn-sm btn-danger 
                    delete"
                     data-label="Delete"
                        data-id="${j.id}">Delete</button>
                </td>
            </tr>`;
            });
            $('#sectionTable').html(rows);
            enableSorting();
        });
    }

    function enableSorting() {
        $("#sectionTable").sortable({
            handle: ".drag-handle",
            placeholder: "ui-state-highlight",
            update() {
                let order = [];
                $("#sectionTable tr").each(function() {
                    order.push($(this).data('id'));
                });
                $.post('{{ route("admin.sections.reorder") }}', {
                    order
                });
            }
        });
    }

    loadSections();

    /* Upload with progress */
    $('#sectionForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#uploadProgress').removeClass('d-none');

        $.ajax({
            url: '{{ route("admin.sections.store") }}',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            xhr() {
                let xhr = new XMLHttpRequest();
                xhr.upload.onprogress = function(e) {
                    let p = Math.round((e.loaded / e.total) * 100);
                    $('#uploadProgress .progress-bar').css('width', p + '%').text(p + '%');
                };
                return xhr;
            },
            success(data) {
                if (data.success) {

                    $('#uploadProgress').addClass('d-none');
                    $('#uploadProgress .progress-bar').css('width', '0%').text('0%');
                    $('#sectionForm')[0].reset();
                    loadSections();
                } else {
                    alert(data.message);
                }


            }
        });
    });

    /* Delete */

    $(document).on('click', '.delete', function() {

        if (!confirm('Delete this section?')) return;

        let btn = $(this);
        let id = btn.data('id');

        setButtonLoading(btn, true);

        $.ajax({
            url: '/admins/sections/delete/' + id,
            type: 'DELETE',
            success: function() {
                loadSections();
            },
            error: function() {
                alert('Delete failed');
                setButtonLoading(btn, false);
            }
        });
    });



    /* toggle */

    $(document).on('click', '.toggle', function() {

        let btn = $(this);
        let id = btn.data('id');

        setButtonLoading(btn, true);

        $.ajax({
            url: '/admins/sections/toggle/' + id,
            type: 'POST',
            success: function() {
                loadSections();
            },
            error: function() {
                alert('Toggle failed');
                setButtonLoading(btn, false);
            }
        });
    });

    /* Edit */

    $(document).on('click', '.edit', function() {
        $('#edit_id').val($(this).data('id'));
        $('#edit_title').val($(this).data('title'));

        $('.edit_background_color').val($(this).data('background'));
        $('.edit_text_color').val($(this).data('color'));

        const code = decodeURIComponent($(this).data('code') || '');

        const iframec = document.querySelector('.code-preview-edit');

        iframec.srcdoc = `
                <html><body contenteditable="true">${code}</body></html>
            `;


        $('.code-editor-edit').val(code);

        $('#editModal').fadeIn(200);
    });

    $(document).on('click', '.close-modal', function() {
        $('#editModal').fadeOut(200);
    });


    $(window).on('click', function(e) {
        if ($(e.target).is('#editModal')) {
            $('#editModal').fadeOut(200);
        }
    });



    $('#saveEdit').click(function() {

        let id = $('#edit_id').val();

        let formData = {
            title: $('#edit_title').val(),
            background_color: $('#edit_background_color').val(),
            color: $('#edit_text_color').val(),
            code: $('.code-editor-edit').val()
        };

        $.ajax({
            url: '/admins/sections/update/' + id,
            type: 'POST',
            data: formData,
            success: function() {
                $('#editModal').fadeOut(200);
                loadSections();
            },
            error: function() {
                alert('Update failed');
            }
        });
    });
</script>


<script>
    const addSectionBtn = document.getElementById('addSectionBtn');
    const content = document.querySelector('.form-content');

    addSectionBtn.addEventListener('click', function() {
        content.classList.toggle('d-none');

        if (content.classList.contains('d-none')) {
            addSectionBtn.textContent = 'Add Section';
            addSectionBtn.classList.remove('btn-danger');
            addSectionBtn.classList.add('btn-primary');
        } else {
            addSectionBtn.textContent = 'Hide Form';
            addSectionBtn.classList.remove('btn-primary');
            addSectionBtn.classList.add('btn-danger');
        }
    });
</script>





@endsection