<?php 
session_start();
if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 align="center">Admin Login </h1>
    <form method="post" action="login.php">
    <table align="center">
        <tr>
            <td>Uesrname</td>
            <td><input type="text" name="username" placeholder="username"></td>
        </tr>
        <tr>
            <td>password:</td>
            <td><input type="password" name="password" placeholder="password"></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="login" value="login">  <a  href="sing_up.php">singUp</a></td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php 
include('dbcon.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $username = mysqli_real_escape_string($database,$username);
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($database,$password);
    $query = "SELECT * FROM `admin` WHERE `username` ='$username' AND `password` = '$password'";
    $run = mysqli_query($database,$query);
    $row = mysqli_num_rows($run);
    if($row <1){
        ?>
        <script>
            alert("Username name and password does not match !")
            window.open('login.php','_self');
        </script>
        <?php 
        
    }else{
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        $username = $data['username'];
        //echo "$id.$username";
        session_start();
        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
    }
    
}


?>
