<script>
    document.querySelectorAll('.editor-wrapper').forEach(wrapper => {

        const textarea = wrapper.querySelector('.code-editor');
        const iframe = wrapper.querySelector('.code-preview');
        const toggle = wrapper.querySelector('.toggle-view');

        let isPreview = true;

        /* INIT PREVIEW */
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

        /* SYNC PREVIEW → TEXTAREA */
        const sync = () => {
            textarea.value = iframe.contentDocument.body.innerHTML;
        };

        /* TOGGLE VIEW */
        toggle.onclick = () => {
            isPreview = !isPreview;

            if (isPreview) {
                iframe.srcdoc = `
                <html><body contenteditable="true">${textarea.value}</body></html>
            `;
                textarea.hidden = true;
                textarea.style.display = 'none';
                iframe.hidden = false;
                iframe.style.display = 'block';
                toggle.textContent = '🧾 Code';
            } else {
                sync();
                iframe.hidden = true;
                iframe.style.display = 'none';
                textarea.hidden = false;
                textarea.style.display = 'block';
                toggle.textContent = '👁 Preview';
            }
        };

        /* TOOLBAR COMMANDS — ALL OF THEM */
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

            iframe.contentDocument.execCommand(cmd, false, value);
            sync(); // 🔥 keep textarea updated
        }

        /* LIVE TYPING SYNC */
        iframe.addEventListener('load', () => {
            iframe.contentDocument.body.addEventListener('input', sync);
        });

    });
</script>