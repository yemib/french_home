<style>
    .editor-wrapper   ,  .editor-wrapper-edit {
        max-width: 1000px;
        border: 1px solid #d0d5dd;
        border-radius: 8px;
        overflow: hidden;
        font-family: system-ui, sans-serif;
    }

    .editor-toolbar   , .editor-toolbar-edit {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        padding: 8px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }

    .editor-toolbar button,
    .editor-toolbar select,
    .editor-toolbar input[type="color"]   ,   .editor-toolbar-edit button,
    .editor-toolbar-edit select,
    .editor-toolbar-edit input[type="color"] {
        padding: 6px 8px;
        border: 1px solid #d1d5db;
        background: #fff;
        cursor: pointer;
        border-radius: 4px;
        font-size: 13px;
    }

    .editor-toolbar button:hover   , .editor-toolbar-edit button:hover {
        background: #eef2ff;
    }

    .toggle-view  , .toggle-view-edit {
        margin-left: auto;
        font-weight: 600;
    }

    .code-editor,
    .code-preview   ,  .code-editor-edit,
    .code-preview-edit {
        width: 100%;
        height: 350px;
        border: none;
    }

    .code-editor    ,  .code-editor-edit{
        padding: 12px;
        font-family: monospace;
        font-size: 14px;
        outline: none;
        resize: vertical;
    }

    .code-preview  , .code-preview-edit {

        background: #fff;
    }


    .code-editor   ,  .code-editor-edit {
        display: none;
    }

    .code-preview  , .code-preview-edit {
        display: block;
    }
</style>