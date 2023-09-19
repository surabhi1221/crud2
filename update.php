<?php
include_once('conn.php');
$id=$_GET['id'];
$sql="SELECT*FROM host WHERE id='$id'";
$data=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="fname" value="<?php echo $row['fname'];?>"><br><br>
        <input type="text" name="lname" value="<?php echo $row['lname'];?>"><br><br>
        <input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>
        <input type="text" name="phoneno" value="<?php echo $row['phoneno'];?>"><br><br>
        <input type="text" name="age" value="<?php echo $row['age'];?>"><br><br>
        <input type="text" name="addres" value="<?php echo $row['addres'];?>"><br><br>
        
        <input type="submit" name="update" value="update">
    </form>
    <?php
    if(isset($_POST['update']))
    {
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $age=$_POST['age'];
        $addres=$_POST['addres'];
        
        $sql2="UPDATE host set fname='$fname',lname='$lname',email='$email',phoneno='$phoneno',age='$age',addres='$addres' WHERE id='$id'";
        $result=mysqli_query($connection,$sql2);
        


        if($result){
            echo"success";
        }
        else{
            die("colud not updated");
        }


    }
    ?>
    
</body>
</html>