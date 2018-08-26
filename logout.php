<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["$loginUser"]);
header("Location:index.php");
?> 