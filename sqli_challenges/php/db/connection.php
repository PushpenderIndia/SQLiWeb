<?php 

include 'db_config.php';

$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

?>