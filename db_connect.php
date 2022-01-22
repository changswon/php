<?php

$sName = "127.0.0.1:3306";
$uName = "root";
$pass = "tjdckd.1412";
$db_name = "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;db_name=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected!";
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();

}
?>