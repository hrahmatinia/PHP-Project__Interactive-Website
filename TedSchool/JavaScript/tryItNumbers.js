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

<h2>Numbers</h2>

<p>The result is:</p>

<p id="demo"></p>

<br>
<hr>
 <p>The Hexadecimal of the number is:</p>

<p id="toString"></p>  
<script>
var a = 6.02;
var b = 56;
var number = 255;   

document.getElementById("demo").innerHTML = a + b;
document.getElementById("toString").innerHTML = number.toString(16);
</script>

</body>
</html>
`, 1); //1 = moves cursor to end

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






