<?php
session_start();

$dbname='tedschool';
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

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];


$query = "SELECT * FROM user WHERE UserName = '$name' && Password = '$pass';";

$result = mysqli_query($link, $query);

echo 'this is result :   ' ,'    '  ,$name ,$pass;
echo $query;
$num = mysqli_num_rows($result);

if($num ==1){
    header('location:index.php');
    echo 'taken already';
    
} else {
    header('location:loginRegister.php');
    echo 'successfull Login';
}
 
 
mysqli_close($link);
 