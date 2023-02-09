<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cookie_test.php" method="post">
        <input type="name" name="name" placeholder="Plaese name"><br>
       <input type="submit" value="login">
    
</form>

<?php



    if (isset($_COOKIE["nam"]) ) {

        header("location:profile.php");
    }


?>

</body>
</html>