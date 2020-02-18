<?php
session_start();

$dbname="tedschool";
$link = mysqli_connect("127.0.0.1", "root", "", "tedschool");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo 'Success... ' . mysqli_get_host_info($link) . "\n";
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
/*mysqli_select_db($link,$dbname);*/

$query = "SELECT * FROM quiz;";

$result = mysqli_query($link, $query);

echo "<center>";
echo"<h2>Creating Online Quiz Application in PHP</h2>";
echo"<h3> Using MySql</h3>";
echo"<hr>";



echo "this is a debug : " . $query;
$num = mysqli_num_rows($result);

if($num >0){
    echo"<table>";
    while($row=mysqli_fetch_array($result))
    {
        echo"<tr>";
        echo"<td>".$row['QID'].")".$row['Question']."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td><input type='radio' id='option1' name=".$row['QID']." class='radoptions' value=".$row['option1']."/>".$row['option1']."";
        echo"<input type='radio' id='option2' name=".$row['QID']." class='radoptions' value=".$row['option2']."/>".$row['option2']."";
        echo"<input type='radio' id='option3' name=".$row['QID']." class='radoptions' value=".$row['option3']."/>".$row['option3']."";
        echo"<input type='radio' id='option4' name=".$row['QID']." class='radoptions' value=".$row['option4']."/>".$row['option4']."";
        echo"</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td><span id='span1' class='radoptions' style='color:green; display:none;'><hr><b>Correct Answer Is : ".$row['correctAnswer']."</b><hr></span></td>";
        echo"</tr>";
    }
    echo"</table>";
    
} 
   

 
 
mysqli_close($link);
 
?>
<button id="but1" type='button' onclick="displayAnswers()">Submit</button>
<label id='lablemessage'></label>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function()
    {
      $("#but1").click(function()
      {
          $(".radoptions").show();
          $(".radoptions").attr("disabled",true);
          $("#btn1").attr("disabled",true);
      });
    });
    function displayAnswers()
    {
        document.getElementById("lablemessage").innerHTML="";
        var results=document.getElementsByTagName('input');
        for(i=0;i<results.length;i++)
        {
            if(results[i].type=="radio")
            {
                if(results[i].checked)
                { 
                    document.getElementById("lablemessage").innerHTML 
                            +="Q"+results[i].name+")"+"Your Selected Answer Is :" + results[i].value+"<br/>";
                }
            }  
        }
    }
</script>