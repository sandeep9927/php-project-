<?php

include('../dbcon.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM `student` WHERE `id`='$id'";
print_r($query);
$run = mysqli_query($database,$query);
if($run == true){
    ?>
    <script>
    alert("Student successfully deleted ")
    window.open('deletestudent.php','_self');
    </script>
    <?php
}else{
    ?>
    <script>
    alert("There was some problem ")
    window.open('deletestudent.php','_self');
    </script>
    <?php
}


?>