<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leap year finder</title>
</head>
<body>
    <?php 
    for($i=1980; $i<=2018; $i++){
        if($i % 4 == 0){
            echo "$i Leap year <br/>";
        }else{
            echo "$i <br/>";
        }
        
    }
    ?>
 <p>Total number of leap years is <span id="total">TEN</span></p>
</body>
</html>