//this page is to validate user from data base

<?php
session_start();
//make connection
$dbname = 'tedschool';
$link = mysqli_connect("127.0.0.1", "root", "", "tedschool");
//if it is not connected then echo some error
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//if it dos connect then echo some message
echo 'Success... ' . mysqli_get_host_info($link) . "\n";
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
/* mysqli_select_db($link,$dbname); */

//get attributes from inde page .login form
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

//excute the query 
$query = "SELECT * FROM user WHERE UserName = '$name' && Password = '$pass';";
//get the result and print it for debug purposes
$result = mysqli_query($link, $query);
echo 'this is result :   ', '    ', $name, $pass;
echo $query;
//get the count of the result.how many rows are back.if it is greater than zero then user is valid
$num = mysqli_num_rows($result);
//if valid then go to first page which is Introduction
if ($num == 1) {
    header('location:Introduction.php');
    echo 'successfull Login';
    //if it is not valid then you have to go bach and try again or register 
} else {
    header('location:index.php');
    echo 'taken already';
}

//close connection
mysqli_close($link);
