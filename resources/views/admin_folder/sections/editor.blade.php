<div class="editor-wrapper">
    <div class="editor-toolbar">

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

        <button type="button" class="toggle-view">🧾 Code</button>
    </div>

    <!-- CODE -->
    <textarea  id="{{$id}}" name="code" class="code-editor  {{$id}}" hidden></textarea>

    <!-- PREVIEW -->
    <iframe  class="code-preview"></iframe>
</div>
