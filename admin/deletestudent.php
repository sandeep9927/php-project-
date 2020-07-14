<?php
include('header.php');
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location:../login.php');
}
?>
<form action="deletestudent.php" method="post" >
    <table align="center" style="margin-top:10px ;" border="2">
        <tr >
            <td>choose Standerd:
            <input type="number" name = "number"  placeholder="standered" style="margin:10px 10px 10px 10px;">
            </td>
            <td>Enter Name:
            <input type="text" name="name"  placeholder="name" style="margin:10px 10px 10px 10px;">
            </td>
            <td>
            <input type="submit" name="submit" value="search" style="margin:10px 10px 10px 10px;">
            </td>
        </tr>

    </table>
</form>
<form action="updatestudent.php" method="POST">
<input type="submit" name="show_all_student"
                class="button" value="All Student" /> 
</form>

<?php 
    if(isset($_POST['submit']))

    {
        $database = mysqli_connect('localhost','root','','sms');
        $standerd = $_POST['number'];
        $name = $_POST['name'];
        $query = "SELECT * FROM `student` WHERE `starnder` = '$standerd' AND `name` LIKE '%$name%' ";
        //echo $query;
        $run = mysqli_query($database,$query);
        if(mysqli_num_rows($run)<1){
            echo "No record found";
        }else{
            $count = 0;
            ?>
             <table class="table table-hover table-dark" style="margin:10px 10px 10px 0px">
                        <thead>
                            <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Rollnuber</th>
                            <th scope="col">Name</th>
                            <th scope="col">city</th>
                            <th scope="col">parants_contact</th>
                            <th scope="col">standerd</th>
                            <th scope="col">Edit</th>
                            </tr>
                        </thead>
            
                        <?php
            while($data = mysqli_fetch_assoc($run)){
                $count++;
                ?>
                
               
                <!-- <table class="table table-hover table-dark" style="margin:10px 10px 10px 0px"> -->
                        <tbody>
                            <tr>
                            <td><?php echo "$count" ;?></td> 
                            <td><?php echo $data['rollnumber']; ?></td>
                            <td><?php echo $data['name'] ;?></td>
                            <td><?php echo $data['city'] ;?></td>
                            <td><?php echo $data['parants_contact']; ?></td>
                            <td><?php echo $data['starnder']; ?></td>
                            <td><a href="deleteform.php?id =<?php echo $data['id'];?>">delete</a></td>
                            </tr>

                        </tbody>
                </table>
                        
                <?php
            }
        }
    }
?>
<?php 
function show_all_student(){
    $database = mysqli_connect('localhost','root','','sms');
    $query = "SELECT * FROM `student` WHERE 1";
    $run = mysqli_query($database,$query);
    if(mysqli_num_rows($run)<1){
        echo "No record found";
    }else{
        $count = 0;
        ?>
        <table class="table table-hover table-dark" style="margin:10px 10px 10px 0px">
                        <thead>
                            <tr>
                            <th scope="col">Number</th>
                            <th scope="col">Rollnuber</th>
                            <th scope="col">Name</th>
                            <th scope="col">city</th>
                            <th scope="col">parants_contact</th>
                            <th scope="col">standerd</th>
                           
                            </tr>
                        </thead>
                        </table>
                        <?php
        while($data = mysqli_fetch_assoc($run)){
            $count++;
            ?>
        <table class="table table-hover table-dark" style="margin:10px 10px 10px 0px">

                        <tbody>
                            <tr>
                            <td><?php echo "$count" ;?></td> 
                            <td><?php echo $data['rollnumber']; ?></td>
                            <td><?php echo $data['name'] ;?></td>
                            <td><?php echo $data['city'] ;?></td>
                            <td><?php echo $data['parants_contact']; ?></td>
                            <td><?php echo $data['starnder']; ?></td>
                            
                            </tr>

                        </tbody>
                </table>
                    
            <?php
        }
    }
}
if(isset($_POST['show_all_student'])){
    show_all_student();
}
?>