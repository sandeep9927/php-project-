<?php
include('header.php')
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table class="table table-hover table-dark" style=" margin-top:10px;">
  <thead>
    <tr>
      <th scope="col">Stu_rollnumber</th>
      <th scope="col">Stu_name</th>
      <!-- <th scope="col"></th> -->
      <th scope="col">Stu_city</th>
      <th scope="col">Parent_number</th>
      <th scope="col">Stander</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="roll_number" placeholder="rollnumber" id="" required></td>
      <td><input type="text" name="name" placeholder="Name" id="" required></td>
      <td><input type="text" name="city" placeholder="city" id="" required></td>
      <td><input type="text" name="parents" placeholder="parent_number" id="" required></td>
      <td><input type="number" name="stander" placeholder="standerd" id="" required></td>
      <td><input type="file" name="img" placeholder="image" id=""></td>
      
    </tr>
    
  </tbody>
</table>
<button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width: 50%; margin-left:25%;">submit</button>
</form>

<?php
if(isset($_POST['submit'])){
    $database = mysqli_connect('localhost','root','','sms');
    $Stu_rollnumber = $_POST['roll_number'];
    $Stu_rollnumber = mysqli_real_escape_string($database,$Stu_rollnumber);
    $Stu_name = $_POST['name'];
    $Stu_name = mysqli_real_escape_string($database,$Stu_name);
    $Stu_city = $_POST['city'];
    $Stu_city = mysqli_real_escape_string($database,$Stu_city);
    $Parent_number = $_POST['parents'];
    $Parent_number = mysqli_real_escape_string($database,$Parent_number);
    $Stander = $_POST['stander'];
    //$Image = $_POST['img'];
    //echo "$Stu_rollnumber.$Stu_name";
    $query = "INSERT INTO `student`( `rollnumber`, `name`, `city`, `parants_contact`, `starnder`) 
    VALUES ('$Stu_rollnumber','$Stu_name','$Stu_city','$Parent_number','$Stander')";
    $run = mysqli_query($database,$query);
    if(isset($run) == true){
        ?>
        <script>
            alert("student successfully added")
        </script>
        <?php
    }
}
?>