<div id="editModal" class="custom-modal">
    <div class="custom-modal-content">
        <div class="custom-modal-header">
            <h5>Edit Section</h5>
            <span class="close-modal">&times;</span>
        </div>

        <div class="custom-modal-body">
            <input type="hidden" id="edit_id">

            <div class="mb-3">
                <label>Title</label>
                <input type="text" id="edit_title" class="form-control">
            </div>
            <div class="mb-3">

                @include('admin_folder.sections.color_field' ,
                ['title' => "Background Color" , 'name' => "background_color" ,
                'id' => "edit_background_color"])

            </div>
            <div class="mb-3">
                @include('admin_folder.sections.color_field' ,
                ['title' => "Text Color" , 'name' => "color" ,
                'id' => "edit_text_color"])
            </div>

            <div class="mb-3">
                <div class="editor-wrapper-edit">
                    <div class="editor-toolbar-edit">

                        <select data-cmd="formatBlock">
                            <option value="p">P</option>
                            <option value="h1">H1</option>
                            <option value="h2">H2</option>
                            <option value="h3">H3</option>
                            <option value="h4">H4</option>
                            <option value="h5">H5</option>
                            <option value="h6">H6</option>
                            <option value="pre">Code</option>
                        </select>

                        <button type="button" data-cmd="bold"><b>B</b></button>
                        <button type="button" data-cmd="italic"><i>I</i></button>
                        <button type="button" data-cmd="underline"><u>U</u></button>
                        <button type="button" data-cmd="strikeThrough"><s>S</s></button>

                        <button type="button" data-cmd="insertUnorderedList">• List</button>
                        <button type="button" data-cmd="insertOrderedList">1. List</button>

                        <button type="button" data-cmd="justifyLeft">⯇</button>
                        <button type="button" data-cmd="justifyCenter">≡</button>
                        <button type="button" data-cmd="justifyRight">⯈</button>
                        <button type="button" data-cmd="justifyFull">☰</button>

                        <input type="color" data-cmd="foreColor" title="Text color">
                        <input type="color" data-cmd="hiliteColor" title="Background color">

                        <button type="button" data-cmd="createLink">🔗</button>
                        <button type="button" data-cmd="insertImage">🖼️</button>
                        <button type="button" data-cmd="removeFormat">❌</button>

                        <button type="button" class="toggle-view-edit">🧾 Code</button>
                    </div>

                    <!-- CODE -->
                    <textarea name="code" class="code-editor-edit" hidden></textarea>

                    <!-- PREVIEW -->
                    <iframe class="code-preview-edit"></iframe>
                </div>


            </div>



        </div>

        
    <div class="custom-modal-footer">
        <button class="btn btn-secondary close-modal">Cancel</button>
        <button class="btn btn-primary" id="saveEdit">Save</button>
    </div>
    </div>

</div>

<script>
    document.querySelectorAll('.editor-wrapper-edit').forEach(wrapper => {

        const textarea = wrapper.querySelector('.code-editor-edit');
        const iframe = wrapper.querySelector('.code-preview-edit');
        const toggle = wrapper.querySelector('.toggle-view-edit');

        let isPreview = true;

        /* INIT IFRAME ONCE */
        iframe.srcdoc = `
        <html>
        <head>
            <style>
                body {
                    font-family: system-ui;
                    padding: 12px;
                    min-height: 100%;
                }
            </style>
        </head>
        <body contenteditable="true"></body>
        </html>
    `;

        iframe.addEventListener('load', () => {
            const body = iframe.contentDocument.body;

            /* LIVE SYNC */
            body.addEventListener('input', () => {
                textarea.value = body.innerHTML;
            });
        });

        /* TOGGLE VIEW */
        toggle.onclick = () => {
            isPreview = !isPreview;

            if (isPreview) {
                iframe.hidden = false;
                iframe.style.display = 'block';
                textarea.hidden = true;
                textarea.style.display = 'none';


                iframe.contentDocument.body.innerHTML = textarea.value;
                iframe.contentWindow.focus();

                toggle.textContent = '🧾 Code';
            } else {
                textarea.value = iframe.contentDocument.body.innerHTML;

                iframe.hidden = true;
                iframe.style.display = 'none';
                textarea.hidden = false;
                textarea.style.display = 'block';

                toggle.textContent = '👁 Preview';
            }
        };

        /* TOOLBAR COMMANDS */
        wrapper.querySelectorAll('[data-cmd]').forEach(el => {
            el.addEventListener('click', runCommand);
            el.addEventListener('change', runCommand);
        });

        function runCommand(e) {
            const cmd = e.target.dataset.cmd;
            if (!cmd) return;

            let value = e.target.value || null;

            if (cmd === 'createLink') {
                value = prompt('Enter URL');
                if (!value) return;
            }

            if (cmd === 'insertImage') {
                value = prompt('Image URL');
                if (!value) return;
            }

            iframe.contentWindow.focus();
            iframe.contentDocument.execCommand(cmd, false, value);

            textarea.value = iframe.contentDocument.body.innerHTML;
        }

    });
</script>