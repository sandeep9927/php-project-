

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_management_system</title>
</head>
<body>
    
    <h3 align = "right"><a href="login.php">Admin Login</a></h3>
    <h3 align = "right"><a href="sing_up.php"> Admin singUp</a></h3>
    <h1 align = "center">Welcome to the student portal </h1>
    <from method = "post" action = "index.php">
        <table style="width: 30%;" align="center" border="1">
            <tr>
                <td  align="center" colspan="2">student informantion</td>
            </tr>
            <tr>
                <td  align="left" >choose standerd</td>
                <td>
                    <select name="std" id="">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td  align="left">enter roll_numebr</td>
                <td ><input type="text" name = "rollnumber" required></td>
            </tr>
            <tr>
                <td  align="right"><input type="submit" name="submit\" id="" value="show info"></td>
            </tr>
        </table>
    </from>

</body>
</html>