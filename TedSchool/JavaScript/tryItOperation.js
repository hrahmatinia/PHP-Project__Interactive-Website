//try _it files are all the same,but different value.which is the practice file
//I have used ACe to be able to make the editor

function update()
{
    var idoc = document.getElementById('iframe').contentWindow.document;

    idoc.open();
    idoc.write(editor.getValue());
    idoc.close();
}

function setupEditor()
{
    window.editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
    editor.setValue(`<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Operators</h2>

<p>You can also change text to integer variable and do Operation to see the results.</p>
<p>+= can concatenate strings.</p>

<p id="test"></p>

<script>
txt1 = "Hi ";
txt1 += "TED";
document.getElementById("test").innerHTML = txt1;
</script>

</body>
</html>`, 1); //1 = moves cursor to end

    editor.getSession().on('change', function () {
        update();
    });

    editor.focus();


    editor.setOptions({
        fontSize: "12pt",
        showLineNumbers: true,
        showGutter: false,
        vScrollBarAlwaysVisible: false,
        enableBasicAutocompletion: false, enableLiveAutocompletion: false
    });

    editor.setShowPrintMargin(false);
    editor.setBehavioursEnabled(false);
}

//caliing both functions in load function
//load function is runing at the time of loading in body tag
function load() {
    setupEditor();
    update();

}








