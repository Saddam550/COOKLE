<form action="sesstion.php" method="post">
<input type="text" name="nam">
<button>Clack</button>

</form>

<?php


session_start(); 
  $_SESSION["name"] = $_REQUEST['nam']; 

// if ($thik_thake==true) {
//     header("location:sesstion.php");
//  }else{
//      header("location: sesstion_index.php");
//  }
?>