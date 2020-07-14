<?php 
session_start();
if(isset($_SESSION['uid'])){
    echo "";

}else{
    header('location: ../login.php');
}
?>
<?php 
include('header.php')
?>

  
  <div class="list-group" style="width: 50%; margin-left:25%;" align="center" >
  <a href="addstudent.php" class="list-group-item list-group-item-action list-group-item-primary" >Instert Student Details </a>
  <a href="updatestudent.php" class="list-group-item list-group-item-action list-group-item-secondary">Update Student Details</a>
  <a href="deletestudent.php" class="list-group-item list-group-item-action list-group-item-success">Delete Student Details</a>