//Register page.make a connection and then insert into user page in phpmyAdmin
<?php
session_start();
header('location:index.php');
$dbname = 'tedschool';
//make a connection
$link = mysqli_connect("127.0.0.1", "root", "", "tedschool");
//if it is not connected then echo some error
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//if it is connected the echo some message
echo 'Success... ' . mysqli_get_host_info($link) . "\n";
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
/* mysqli_select_db($link,$dbname); */
//get attributes from register page(index.php)
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

//see if that username exist.if it does then it is not going to accept it.if not,the user will be registered
$query = "SELECT * FROM user WHERE UserName = '$name';";

$result = mysqli_query($link, $query);

echo 'this is result :   ', '    ', $name, $pass;
echo $query;
$num = mysqli_num_rows($result);
//if the number come out as a result is greater than zero
//it means tat user already exist.so it is not acceptable
if ($num == 1) {
    echo 'taken already';
    //if not then i will be inserted into mysql ,user table and as we define on the top of the page we will be heading to login page
} else {
    $register = "insert into user(UserName,Password,EMail) values ('$name' , '$pass' , '$email');";
    mysqli_query($link, $register);
    echo 'successfull registeration', $register;
}

//close connection
mysqli_close($link);
