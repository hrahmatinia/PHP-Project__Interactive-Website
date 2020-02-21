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
   <body>     
      <script type = "text/javascript">
         <!--
            var mark = 120;
         
            if( mark < 70 ) {
               document.write("<b>You must study more</b>");
            }
            else{
            document.write("<b>well done!</b>");
            }
         //-->
      </script>      
      <p>Set the variable to different value and then try...</p>
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