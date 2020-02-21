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
    editor.setValue(`<html>
 <head>
  <script type="text/javascript">
function functionOne() {
 var name = "Peter";
if(name === "Alex"){
  let hey = "Hi Alex";
  alert(hey);
} else {
  let hey = "Hi Stranger";
  alert(hey); }
}
  </script>
 </head>
<body>
<p>Try to chage variable and see what happens when you change them and click on the link</p>
<hr>
 <p><a href="#" onClick="functionOne();">Top Text</a></p>
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

