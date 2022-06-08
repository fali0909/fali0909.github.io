<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $user["name"]; ?></h1>
    <a href="astoncv.php">Logout</a>
  </body>
</html>

<?php
require 'astoncvcon.php';

$select = new Select();

//if(!empty($_SESSION["id"])){
//  $user = $select->selectUserById($_SESSION["id"]);
//}
//else{
 // header("Location: astoncv.php");
//}
?>