<!DOCTYPE html>
<html lang="en">

<head>

<style>
.users h1 {
    color: white;
    background: #040044;
    /* height: 704px; */
    width: 100%;
    text-align: center;
    align-content: center;
    align-items: center;
    padding:21% 0px;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="" method="post">

    <input type="submit" name="btn_one" id="bn" value="Logout">

</form>






<body>


    <!-- your are profile start -->
    <?php
    if (isset($_COOKIE["nam"])) {
        $users = $_COOKIE["nam"];
        echo "  <div class='users'><h1>Hello <span style='color:red;'> $users</span> welcome my site</h1></div>  ";
              


    } else {
        header("location:cookie_users_form.php");
    }


   ?>   
   <!-- your are profile end -->







    <?php
    //your are  Logout start



    if (isset($_REQUEST["btn_one"])) {
        $btn_one = $_REQUEST["btn_one"];
        if ($btn_one == true) {

            if (isset($_COOKIE["nam"]))
                setcookie("nam", $name, time() - 1225);
            header("location:cookie_users_form.php"); {
            }
        }
    }


  ?>  
    <!-- your are Logout end -->
</body>

</html>