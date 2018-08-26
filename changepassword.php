<?php 
include('config/db.php');

$changePwdOld = '';
$changePwdNew = '';
$changePwdCon = '';

$changePwdOldErr = '';
$changePwdNewErr = '';
$changePwdConErr = '';

$changePwdOld = $_POST['changePwdOld'];
$changePwdNew = $_POST['changePwdNew'];
$changePwdCon = $_POST['changePwdCon'];

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['changeUserPwd'])){
    if(empty($changePwdOld)){
        $changePwdOldErr = 'input is required';
    }else{
        $changePwdOld = test_input($changePwdOld);
    }
    if(empty($changePwdNew)){
        $changePwdNewErr = 'input is required';
    }else{
        $changePwdNew = test_input($changePwdNew);
    }
    if(empty($changePwdCon)){
        $changePwdConErr = 'input is required';
    }else{
        $changePwdCon = test_input($changePwdCon);
    }
    if($changePwdNew === $changePwdCon){
        $username = $_POST['$username'];
        $sql = "UPDATE `sign_up` SET `password`='$changePwdNew' WHERE `username`='$changeUname'";
        $sql1 = "UPDATE `login` SET `password`='$changePwdNew' WHERE `username`='$changeUname'";
        $res = mysql_query($sql) or die(mysql_error());
        //$res1 = mysql_query($sql1) or die(mysql_error());
    }else{
        echo "<script type='text/javascript'>alert('error changing password');</script>";
    include('index.php');
    }
}  

?>