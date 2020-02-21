
//this page is to connect to the database and validate the Admin
<?php
session_start();
//get the connection
$dbname = 'tedschool';
$link = mysqli_connect("127.0.0.1", "root", "", "tedschool");
//check if connects and woks
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//print to debug
echo 'Success... ' . mysqli_get_host_info($link) . "\n";
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
/* mysqli_select_db($link,$dbname); */

//getting attributes to be able to use them in query
//these attributes are from Admin_Login.php
$name = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['Email'];

//SQL query to see if the Admin exists.
$query = "SELECT * FROM admin WHERE Name = '$name' && password = '$pass';";

//if it does the result going to be a number of admins which should be always 1
$result = mysqli_query($link, $query);

//debug printing
echo 'this is result :   ', '    ', $name, $pass;
echo $query;

$num = mysqli_num_rows($result);
//check if we found it
//if we did then we go to the admin mangment page whih the Admin can add or delete questions
if ($num == 1) {
    header('location:admin.php');
    echo 'successfull Login';
    //if not,we go back to the admin_Loin page to try again
} else {
    header('location:Admin_login.php');
    echo 'taken already';
}

//close the connection
mysqli_close($link);
