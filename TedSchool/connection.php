
<?php
//create connection credentials


$db_host = 'localhost';
$db_name = 'tedschool';
$user = 'root';
$pass = '';


//creat mysqli object
$mysqli = new mysqli($db_host, $user, $pass, $db_name);

//Error handler
if ($mysqli->connect_error) {
    printf("connection failed : %s\n", $msqli->connect_error);
    exit();
}
        
