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

<p id="demo"></p>

<script>
var mark = 50;
  var message="";  
switch (mark) {
  case (40):
    message = "Failed";
    break;
    
  case (50) :
    message = "Nice,you have passed";
    break;
  case (70):
    
    message = "congrats";
    break;
  
}
document.getElementById("demo").innerHTML = message;
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










