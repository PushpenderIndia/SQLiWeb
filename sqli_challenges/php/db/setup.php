<?php 

include 'db_config.php';

// Check connection
$con = new mysqli($host, $dbuser, $dbpass);
if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_error($con);
}

else {
    // Deleting Old DB
    $sql = "DROP DATABASE IF EXISTS $dbname";
    if (mysqli_query($con, $sql)) {echo "- Old DB deleted (If existed)<br>";}
	else {echo "- Failed to delete old DB. Error: " . mysqli_error($con); echo "<br>";}

    // Creating New DB
    $sql = "CREATE database $dbname CHARACTER SET `gbk`";
	if (mysqli_query($con, $sql)) {echo "- New DB Created<br>";}
	else {echo "- Failed to create new DB. Error: " . mysqli_error($con); echo "<br>";}

    // Creating Users Table
    $sql="CREATE TABLE IF NOT EXISTS $dbname.$user_table (
        userid INT(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username CHAR(32) NOT NULL,
		user_passwd CHAR(32) NOT NULL,
        email CHAR(32) NOT NULL)";
	if (mysqli_query($con, $sql)) {echo "- New Users Table Created: '$user_table' successfully<br>";}
	else {echo "- Failed to create new Table. Error: " . mysqli_error($con); echo "<br>";}

    // Creating Secret Table
    $sql="CREATE TABLE IF NOT EXISTS $dbname.$secret_table (
        code_name CHAR(32) NOT NULL,
		code CHAR(32) NOT NULL)";
	if (mysqli_query($con, $sql)) {echo "- New Secret Table Created: '$secret_table' successfully<br>";}
	else {echo "- Failed to create new Secret Table. Error: " . mysqli_error($con); echo "<br>";}    

    // Inserting Admin Username & Password
    $admin_password_hash = md5($admin_password);
    $sql = "INSERT INTO $dbname.$user_table VALUES (1, '$admin_username', '$admin_password_hash', '$admin_email')";
    if (mysqli_query($con, $sql)) {echo "- Admin Entry Created in $user_table<br>";}
    else {echo "- Failed to create admin entry. Error: " . mysqli_error($con); echo "<br>";}

    // Inserting Secret Codes in Secret Table
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $code1 = substr(str_shuffle($str_result), 0, 32);
    $code2 = substr(str_shuffle($str_result), 0, 32);
    $code3 = substr(str_shuffle($str_result), 0, 32);
    $code4 = substr(str_shuffle($str_result), 0, 32);
    $code5 = substr(str_shuffle($str_result), 0, 32);
    $code6 = substr(str_shuffle($str_result), 0, 32);
    $code7 = substr(str_shuffle($str_result), 0, 32);
    $code8 = substr(str_shuffle($str_result), 0, 32);
    $code9 = substr(str_shuffle($str_result), 0, 32);
    $code10 = substr(str_shuffle($str_result), 0, 32);
    $code11 = substr(str_shuffle($str_result), 0, 32);
    $code12 = substr(str_shuffle($str_result), 0, 32);
    $code13 = substr(str_shuffle($str_result), 0, 32);

    $codes_list = array($code1, $code2, $code3, $code4, $code5, $code6, $code7, $code8, $code9, $code10, $code11, $code12, $code13);
    $index = 2;
    foreach ($codes_list as $code_value) {
        $sql = "INSERT INTO $dbname.$secret_table VALUES ('code_$index', '$code_value')";
        if (mysqli_query($con, $sql)) {echo "- Secret Code: code_$index inserted in $user_table<br>";}
        else {echo "- Failed to insert secret code entry. Error: " . mysqli_error($con); echo "<br>";}
        $index += 1;
    }

    echo "<br><br>Page will auto redirect to main lab website page in 5 seconds ...";

    echo "<script> setTimeout(function(){ window.location.href = '../../index.php';}, 5000); </script>";

}

?>