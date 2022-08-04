<?php 

include 'db_config.php';

// Check connection
$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con) {
    echo "Failed to connect to MySQL: " . mysql_error();
}

else {
    // Deleting Old DB
    $sql = "DROP DATABASE IF EXISTS $dbname";
    if (mysql_query($sql)) {echo "- Old DB deleted (If existed)<br>";}
	else {echo "- Failed to delete old DB. Error: " . mysql_error(); echo "<br>";}

    // Creating New DB
    $sql = "CREATE database $dbname CHARACTER SET `gbk`";
	if (mysql_query($sql)) {echo "- New DB Created<br>";}
	else {echo "- Failed to create new DB. Error: " . mysql_error(); echo "<br>";}

    // Creating Users Table
    $sql="CREATE TABLE IF NOT EXISTS $dbname.$user_table (
        userid INT(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username CHAR(32) NOT NULL,
		user_passwd CHAR(32) NOT NULL
        email CHAR(32) NOT NULL)";
	if (mysql_query($sql)) {echo "- New Users Table Created: '$user_table' successfully<br>";}
	else {echo "- Failed to create new Table. Error: " . mysql_error(); echo "<br>";}

    // Inserting Admin Username & Password
    $admin_password_hash = md5($admin_password);
    $sql = "INSERT INTO $dbname.$user_table VALUES (1, '$admin_username', '$admin_password_hash', '$admin_email')";
    if (mysql_query($sql)) {echo "- Admin Entry Created in $user_table<br>";}
    else {echo "- Failed to create admin entry. Error: " . mysql_error(); echo "<br>";}

    echo "<script> setTimeout(function(){ window.location.href = 'http://127.0.0.1/sqli_challenges/index.php';}, 3000); </script>";

}

?>