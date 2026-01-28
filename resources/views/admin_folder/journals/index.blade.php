@extends('admin_folder.index')
@section('content')

<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<style>
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
    .custom-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .custom-modal-content {
        background: #fff;
        width: 100%;
        max-width: 500px;
        margin: 10% auto;
        border-radius: 8px;
        overflow: hidden;
    }

    .custom-modal-header,
    .custom-modal-footer {
        padding: 15px;
        background: #f8f9fa;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .custom-modal-body {
        padding: 15px;
    }

    .close-modal {
        cursor: pointer;
        font-size: 22px;
        font-weight: bold;
    }
</style>

<div class="col-md-9">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">📘 Lectural Journals Manager</h4>
        </div>

        <div class="card-body">

            <!-- Upload Form -->
            <form id="journalForm" enctype="multipart/form-data">
                <div class="">
                    <div class="col-sm-6">
                        <input type="text" name="title" class="form-control" placeholder="Journal Title" required>

                        <br />

                        <input type="text" name="author" class="form-control" placeholder="Author">
                        <br />

                        <label>Description (optional)</label>
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>




                    </div>

                    <div class="col-sm-6">

                        <label>Upload Cover Image (optional)</label>

                        <input type="file" name="picture" class="form-control">
                        <br />

                        <label>Upload File</label>

                        <input type="file" name="file" class="form-control" required>
                        <br />


                        <button class="btn btn-primary mt-3">Upload Journal</button>
                    </div>

                </div>

            </form>

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
                            <th>Author</th>
                            <th>Status</th>
                            <th>Cover Image</th>
                            <th width="300">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="journalTable"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<!-- EDIT MODAL (PURE JS) -->
<div id="editModal" class="custom-modal">
    <div class="custom-modal-content">
        <div class="custom-modal-header">
            <h5>Edit Journal</h5>
            <span class="close-modal">&times;</span>
        </div>

        <div class="custom-modal-body">
            <input type="hidden" id="edit_id">

            <div class="mb-3">
                <label>Title</label>
                <input type="text" id="edit_title" class="form-control">
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text" id="edit_author" class="form-control">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea id="edit_description" class="form-control"></textarea>
            </div>



            <div class="mb-3">
                <label>Replace Picture (optional)</label>
                <input type="file" id="edit_picture" class="form-control">
                <small class="text-muted">Leave empty to keep existing picture</small>
            </div>

            <div class="mb-3">
                <label>Replace File (optional)</label>
                <input type="file" id="edit_file" class="form-control">
                <small class="text-muted">Leave empty to keep existing file</small>
            </div>
        </div>

        <div class="custom-modal-footer">
            <button class="btn btn-secondary close-modal">Cancel</button>
            <button class="btn btn-primary" id="saveEdit">Save</button>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

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


    function loadJournals() {
        $.get('{{ route("admin.journals.list") }}', function(data) {
            let rows = '';
            data.forEach(j => {
                rows += `
            <tr data-id="${j.id}">
                <td><span class="drag-handle me-2">☰</span>${j.title}</td>
                <td>${j.author ?? '-'}</td>
                <td>
                    <span class="badge ${j.is_published ? 'bg-success' : 'bg-secondary'}">
                        ${j.is_published ? 'Published' : 'Draft'}
                    </span>
                </td>
                <td>
                    ${j.picture? `<img src="/storage/${j.picture}" alt="Cover" width="50">` : 'No Image'}
                </td>
                <td>
                    <a href="{{ route('admin.journals.download','') }}/${j.id}"
                       class="btn btn-sm btn-info text-white">Download</a>

                   <button class="btn btn-sm btn-primary edit"
                        data-id="${j.id}"
                        data-title="${j.title}"
                        data-description="${j.description ?? ''}"
                        data-author="${j.author ?? ''}">
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
            $('#journalTable').html(rows);
            enableSorting();
        });
    }

    function enableSorting() {
        $("#journalTable").sortable({
            handle: ".drag-handle",
            placeholder: "ui-state-highlight",
            update() {
                let order = [];
                $("#journalTable tr").each(function() {
                    order.push($(this).data('id'));
                });
                $.post('{{ route("admin.journals.reorder") }}', {
                    order
                });
            }
        });
    }

    loadJournals();

    /* Upload with progress */
    $('#journalForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#uploadProgress').removeClass('d-none');

        $.ajax({
            url: '{{ route("admin.journals.store") }}',
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
            success() {
                $('#uploadProgress').addClass('d-none');
                $('#uploadProgress .progress-bar').css('width', '0%').text('0%');
                $('#journalForm')[0].reset();
                loadJournals();
            }
        });
    });

    /* Delete */

    $(document).on('click', '.delete', function() {

        if (!confirm('Delete this journal?')) return;

        let btn = $(this);
        let id = btn.data('id');

        setButtonLoading(btn, true);

        $.ajax({
            url: '/admins/journals/delete/' + id,
            type: 'DELETE',
            success: function() {
                loadJournals();
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
            url: '/admins/journals/toggle/' + id,
            type: 'POST',
            success: function() {
                loadJournals();
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
        $('#edit_author').val($(this).data('author'));
        $('#edit_description').val($(this).data('description'));

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

        let formData = new FormData();
        let id = $('#edit_id').val();

        formData.append('title', $('#edit_title').val());
        formData.append('author', $('#edit_author').val());
        formData.append('description', $('#edit_description').val());


        let fileInput = document.getElementById('edit_file');
        let pictureInput = document.getElementById('edit_picture');
        if (fileInput.files.length > 0) {
            formData.append('file', fileInput.files[0]);
        }
        if (pictureInput.files.length > 0) {
            formData.append('picture', pictureInput.files[0]);
        }

        $.ajax({
            url: '/admins/journals/update/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function() {
                $('#editModal').fadeOut(200);
                $('#edit_file').val('');
                loadJournals();
            }
        });
    });
</script>

@endsection