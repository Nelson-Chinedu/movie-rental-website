<?php
$to =  $_POST['email'];
$subject = "Acknolegment mail";
$txt = "Hello  <?php $_POST['name']; ?> Thank you for contacting us we will reach out to you within 24hrs if your message requires response.";
$headers = "From: xbox@example.com";

mail($to,$subject,$txt,$headers);
?> 

<?php 
$name = "";
$email = "";
$message = "";

// error variables
$nameErr = '';
$emailErr = '';
$messageErr = '';

function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submitForm'])){
	if(empty($_POST['name'])){
		$nameErr = 'Name is required';
	}else{
		$name = check_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z]*$/",$name)){
			$nameErr = 'Only letters and whitespace allowed';
		}
	}
	if(empty($_POST['email'])){
		$emailErr = 'Email is required';
	}else{
		$email = check_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "invalid email format";
		}
	}
	if(empty($_POST["message"])){
		 $messageErr = 'Message is required';
	}else{
		 $message = check_input($_POST['message']);
	}

	if($nameErr == "" && $emailErr == "" && $messageErr == ""){
		$file_open = fopen('contact.csv','a');
		$num_rows = count(file('contact.csv'));
		if($num_rows > 1){
			$num_rows = ($num_rows - 1) + 1;
		}
		$form_data = array(
			"SN" => $num_rows,
			"NAME" => $name,
			"EMAIL" => $email,
			"MESSAGE" => $message
		);
		fputcsv($file_open, $form_data);
		$name = "";
		$email = "";
		$message = "";
	}
} //end of script for contact form
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
        <h3>Thank you for reaching out <?php echo $_POST['name']; ?></h3>
        <p>We have received your message successfully and wil get back to you as 
            soon as we can.</p>
        <p><a class="btn btn-info btn-md btn-send" href="index.php">Back to home</a></p>
        </div>
    </div>
</body>
</html>