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

<h2>JavaScript Functions</h2>

<p>This example calls a function which calculates (a * b)/2 and returns the result:</p>

<p id="Example"></p>

<script>
var x = myFunc(5, 6);
document.getElementById("Example").innerHTML = x;

function myFunc(a, b) {
  return (a * b)/2;
}
</script>

</body>
</html>`,1); //1 = moves cursor to end

  editor.getSession().on('change', function() {
    update();
  });

  editor.focus();
  
  
  editor.setOptions({
    fontSize: "15pt",
    showLineNumbers: true,
    showGutter: false,
    vScrollBarAlwaysVisible:false,
    enableBasicAutocompletion: false, enableLiveAutocompletion: false
  });

  editor.setShowPrintMargin(false);
  editor.setBehavioursEnabled(false);
}
function load(){
setupEditor();
update();
  
  }