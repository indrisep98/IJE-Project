<?php

$host="localhost"; // Host name 
$username="Admin"; // Mysql username 
$password="admin123"; // Mysql password 
$db_name="dbipt"; // Database name 
$tbl_name="tb_pegawai"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$dbipt")or die("cannot select DB");

// Get values from form 
$username = $_POST['username'];
$status= $_POST['status'];
$nippos = $_POST['nippos'];

// Insert data into mysql 
$sql="INSERT INTO $tb_pegawai(username, status, nippos)VALUES('$username', '$status', '$nippos')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='data_pegawai.php'></a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>