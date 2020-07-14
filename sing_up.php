<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sing_up.php" method="POST">

    <table align="center" border="1">
        <tr>
            <td><label for=""> username:</label>
            <input type="text" name="username" placeholder="username" id="">
            </td>
        </tr>
        <tr>
            <td><label for=""> password:</label>
            <input type="text" name="password1" placeholder="password" id="">
            </td>
        </tr>
        <tr>
            <td><label for=""> re-password:</label>
            <input type="text" name="password2" placeholder="re-password" id="">
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit" id=""> <a href="login.php">back to login</a></td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    include('dbcon.php');
    $username1 = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if($password1 == $password2 ){
        $qry = "INSERT INTO `admin`( `username`, `password`) VALUES ('$username1','$password1')";
    //echo $qry;
        $run = mysqli_query($database,$qry);
        if(isset($run) == true){
            ?>
            <script>
                alert("successfully sing Up")
                window.open('login.php','_self')
            </script>
            <?php
        }
    
    }else{
        ?>
        <script>
                alert("please enter the same password!!")
                window.open('sing_up.php','_self')
            </script>
            <?php
    }
}
?>