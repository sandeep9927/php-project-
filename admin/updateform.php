<?php
include('header.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location:../login.php');
   
}
?>
<?php
 include('../dbcon.php');
//  print_r($_REQUEST);
// die;
 $id = $_GET['id'];
 //echo "$sid";
 $query = "SELECT * FROM `student` WHERE `id` ='$id'";
 $run = mysqli_query($database,$query);
 $data = mysqli_fetch_assoc($run);
 print_r($data);
?>

<form action="updateform.php" method="post" enctype="multipart/form-data">
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
      <td><input type="text" name="roll_number"  id=""  value="<?php echo $data['rollnumber'];?>"></td>
      <td><input type="text" name="name"  id=""  value="<?php echo $data['name'];?>"></td>
      <td><input type="text" name="city"  id=""  value="<?php echo $data['city'];?>"></td>
      <td><input type="text" name="parents" id=""  value="<?php echo $data['parants_contact'];?>"></td>
      <td><input type="number" name="stander" id=""  value="<?php echo $data['starnder'];?>"></td>
      <td><input type="file" name="img"  id="" value="<?php echo $data['name'];?>"></td>
      
    </tr>
    
  </tbody>
</table>
<button type="submit" name="submit" class="btn btn-success btn-lg btn-block" style="width: 50%; margin-left:25%;">submit</button>
</form>
