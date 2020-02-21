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

<h2>JavaScript typeof</h2>
<p>The typeof operator returns the type of a variable or an expression.</p>


<p id="demo"></p>

<hr>
<br>
<p>The typeof operator returns the type of a variable or an expression.</p>
<p id="boolean"></p> 
<script>
var x = "Alan";
var y = "Becky";
var z = "Alan";
document.getElementById("boolean").innerHTML =
(x == y) + "<br>" + (x == z);
    
document.getElementById("demo").innerHTML = 
typeof "john" + "<br>" + 
typeof 3.14   + "<br>" +
typeof true   + "<br>" +
typeof false  + "<br>" +
typeof (3 + 4) + "<br>" +
typeof false  + "<br>" +
typeof 314   + "<br>" +
typeof 0     + "<br>" +
typeof ""    + "<br>" +
typeof null  + "<br>" +
typeof x;
                 
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

