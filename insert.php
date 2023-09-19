<?php
include_once('connection.php');
if(isset($_POST['ok']))
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $age=$_POST['age'];
    $addres=$_POST['addres'];
    $img_name=$_FILES['img']['name'];
    $img_tmp_name=$_FILES['img']['tmp_name'];

    $sql="INSERT INTO host(fname,lname,email,phoneno,age,addres,img)VALUES('$fname','$lname','$email','$phoneno','$age','$addres','$img_name')";
    $result=mysqli_query($connection,$sql);
    if($result){
        move_uploaded_file($img_tmp_name,$img_name);
    }
    
    if($result){
        echo'data inserted successfully';
        header("location:form.php");
    }
    else{
        echo"error:.mysqli_error($connection)";
    }
}
?>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Firstname</td>
                    <td><input type="text" name="fname" value=""></td>
            <tr>
                <td>Lastname</td>
                    <td><input type="text" name="lname" value=""></td>
            <tr>
                <td>email</td>
                    <td><input type="text" name="email" value=""></td>
            <tr>
            <tr>
                <td>phoneno</td>
                    <td><input type="text" name="phoneno" value=""></td>
            <tr>
            <tr>
                <td>age</td>
                    <td><input type="text" name="age" value=""></td>
            <tr>
            <tr>
                <td>addres</td>
                    <td><input type="text" name="addres" value=""></td>
            </tr>
            <tr>
                <td>img</td>
                    <td><input type="file" name="img" ></td>
            </tr>
            <tr>
                <td><button type="submit" name="ok" value="">submit</button>
            </tr>
        </table>
</body>
