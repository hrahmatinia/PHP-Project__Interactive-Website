<!--
this is the quiz page 
-->

<?php
//get the connection to the database
session_start();

$dbname = "tedschool";
$link = mysqli_connect("127.0.0.1", "root", "", "tedschool");

//if the connection is not successful thn error
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo 'Success... ' . mysqli_get_host_info($link) . "\n";
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
/* mysqli_select_db($link,$dbname); */


//make the query to fetch data from database
$query = "SELECT * FROM quiz;";

//get the result
$result = mysqli_query($link, $query);

//making the wep page 
echo "<html>";
echo "<head>";
echo "<title>Quiz</title>";
echo "<link rel='stylesheet' type='text/css' href='Styles/Kuiz.css'/>";

echo "</head>";
echo "<body >";
echo "<header>";

echo "<div class='container'>";
echo "<h1>JavaScript Quiz</h1>";
echo "</div>";
echo "</header>";
echo "<main>";


echo "<center>";
echo"<h2>JavaScript Quiz Number 1</h2>";
echo"<hr>";


//echo "this is a debug : " . $query;
//getting the number of rows
$num = mysqli_num_rows($result);

if ($num > 0) {
    echo"<table>";
    //going through all the questions in data base
    while ($row = mysqli_fetch_array($result)) {
        echo"<tr>";
        echo'<td>' . $row['QID'] . ')' . $row['Question'] . '</td>'; //1)which one is Not correct?
        echo"</tr>";
        echo"<tr>";

        // this is an example of the out put.(Variable name can not contain space.)
        echo"<td><input type='radio' id='option1' name=" . $row['QID'] . " class='radoptions' value=" . $row['option1'] . ">" . $row['option1'] . "<br>";
        echo"<input type='radio' id='option2' name=" . $row['QID'] . " class='radoptions' value=" . $row['option2'] . ">" . $row['option2'] . "<br>";
        echo"<input type='radio' id='option3' name=" . $row['QID'] . " class='radoptions' value=" . $row['option3'] . ">" . $row['option3'] . "<br>";
        echo"<input type='radio' id='option4' name=" . $row['QID'] . " class='radoptions' value=" . $row['option4'] . ">" . $row['option4'] . "<br>";
        echo"</td>";
        echo"</tr>";

        echo"<tr>";

        //this one is only visible after submission and contains the correct answer
        echo"<td><span id='span1' class='radoptions' style='color:green; display:none;'><hr><b>Correct Answer Is : " . $row['correctAnswer'] . "</b><hr></span></td>";

        echo"</tr>";
    }
    echo"</table>";
}

echo"<hr>";


mysqli_close($link);
?>

<!--submitting the answers.
//id=submit_btn is helping us to interact with JavaScript code.
//Also the onClick  event is runing the function(display answers)-->

<button id="submit_btn" type='button' onclick="showAnswers()">Submit</button>

<label id='message'></label>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="JavaScript/quiz1/quiz1.js"></script>
