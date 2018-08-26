<?php
session_start();
$SESSION['$loginuser']=$_POST['loginUname'];
?>
<?php
include('config/db.php');


$login="login"; // Table name 

// username and password sent from form
$username=$_POST['loginUname'];
$password=$_POST['loginPwd'];



// To protect MySQL injection (more detail about MySQL injection)
$username = trim($username);
$password = trim($password);
$username = stripslashes($username);
$password = stripslashes($password);
$username = htmlspecialchars($username);
$password = htmlspecialchars($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);




//------query for login----
$sql="SELECT  * FROM $login WHERE username = '$username' and password= '$password'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row in login table
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row

if($count>0){
include("userPage.php");
}
else {
echo "<script type='text/javascript'>alert('wrong username or password');</script>";
include('index.php');
}
?>