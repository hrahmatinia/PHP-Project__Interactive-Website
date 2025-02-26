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
    editor.session.setMode("ace/mode/html");
    editor.getSession().setMode("ace/mode/javascript");
    editor.setValue(`<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Comments</h2>

<p>This example calls a function which performs a<br> calculation and returns the result:</p>
<p>Try to switch between to values of a and b --> <br> var x = myFunction(4, 3) to have different results</p>
<p id="demo"></p>

<script>
//var x = myFunction(4, 3); 
//by adding comment symbol infront of the line this line
// is a comment now and we can run program with the next line.
var x = myFunction(5, 7);
document.getElementById("demo").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}
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
        enableBasicAutocompletion: false,
        enableLiveAutocompletion: false
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