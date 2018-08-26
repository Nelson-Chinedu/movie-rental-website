<?php
include('config/db.php');


$signup="sign_up"; // Table name 

// email address sent from form
$resetPwd=$_POST['resetPwd'];

// To protect MySQL injection (more detail about MySQL injection)
$resetPwd = trim($resetPwd);
$resetPwd = stripslashes($resetPwd);
$resetPwd = htmlspecialchars($resetPwd);
$resetPwd = mysql_real_escape_string($resetPwd);


//------run query to check if email exist in table name ----
$sql="SELECT  email FROM $signup WHERE email = '$resetPwd'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row in signup table
$count=mysql_num_rows($result);


// If result matched $resetPwd, table row must be 1 row

if($count>0){
include("index.php");
}
?>