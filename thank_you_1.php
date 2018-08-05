<?php
$to =  $_POST['email'];
$subject = "Acknolegment mail";
$txt = "Hello world!";
$headers = "From: xbox@example.com";

mail($to,$subject,$txt,$headers);
?> 

<?php 
$emailSub = "";
// error variables
$mailErr = '';

function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['subscribe'])){
	if(empty($_POST['emailSub'])){
		$mailErr = 'Email is required';
	}else{
		$emailSub = check_input($_POST["emailSub"]);
		if(!filter_var($emailSub, FILTER_VALIDATE_EMAIL)){
			$mailErr = "invalid email format";
		}
	}

	if($emailErr == ""){
		$file_open = fopen('newsletter.csv','a');
		$num_rows = count(file('newsletter.csv'));
		if($num_rows > 1){
			$num_rows = ($num_rows - 1) + 1;
		}
		$form_data = array(
            "SN" => $num_rows,
			"EMAIL" => $emailSub
		);
		fputcsv($file_open, $form_data);
	}
} //end of script for newsletter form
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>xbox films</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Animal store">
  <meta name="keywords" content="HTML,CSS,bootstrap 4,film,movie,rental-store">
  <meta name="author" content="Chinedu Nelson">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class='container feedback'>
        <div class="jumbotron">
        <h3>Thank you <?php echo $_POST['emailSub']; ?> for subscribing to our Newsletter</h3>
        <p><a class="btn btn-info btn-md btn-send" href="index.php">Back to home</a></p>
        </div>
    </div>
</body>
</html>