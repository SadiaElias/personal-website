<?php
// database connection code
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtSubject = $_POST['txtSubject'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_connect` (`Id`, `fldName`, `fldEmail`, `fldSubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: http://localhost/Project/#/');
	exit;
}

else{
	echo "ERROR!!";
}

?>