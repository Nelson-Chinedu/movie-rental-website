<?php
include('config/db.php');
extract($_POST);

// external

$query="SELECT `username` FROM sign_up WHERE `username`='$signupUname'";
  $query_run=mysql_query($query);

  if (mysql_num_rows($query_run)==1) {
    //echo 'the username'.' ' .$signupUname.' '. 'already exist';
    echo "<script language='javascript'>alert('username already exist')
    window.location='index.php';
    </script>";
  }else{

//

$query="INSERT INTO sign_up(firstname,lastname,email,username,password)
VALUES ('$signupFname','$signupLname','$signupEmail','$signupUname','$signupPwd')";

$query1="INSERT INTO login(username,password)
VALUES ('$signupUname','$signupPwd')";




$rs=mysql_query($query) and header("location:index.php");
$rs=mysql_query($query1) and header("location:index.php");
}
?>


