<?php 
$host='localhost';
$user='root';
$pass='';
$db='library_ms';

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    echo "Connection is failed";
}

?>