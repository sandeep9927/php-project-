<?php 
include('header.php');
$pass = "password";
$pass = password_hash($pass,PASSWORD_BCRYPT);
echo "$pass";

?>
 <form action="title.php" method="POST">
 <input type="text" name="name">
 <input type="submit" name="submit" value="submit">
 </form>
 <?php
 if(isset($_POST['submit'])){
    $database = mysqli_connect('localhost','root','','sms');
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($database,$name);
    echo $name;
    
 }
 
 ?>
 