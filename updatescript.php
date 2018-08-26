<?php
include ('config/db.php');
extract($_POST);

if(isset($_POST['updateUser'])){
	$username = $_POST['$username'];
    $sql = "UPDATE `sign_up` SET `firstname`='$updateFname',`lastname`='$updateLname',
    `email`='$updateEmail' WHERE `username`='$updateUname'";
    $res = mysql_query($sql) or die(mysql_error());
    }                    
    header("Location:index.php");                    
?>