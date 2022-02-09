<?php

//Method 1

// $connection = mysqli_connect('localhost', 'root', '', 'cms');

// if($connection){
//     echo "We are connected!!!";
// }


//Method 2

//Associative array
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

//Make it constant
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

//DB connection
$connection  = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($connection){
    
    // echo "We are connected!!";
}


?>