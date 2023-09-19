<?php
include_once('conn.php');
if(isset($_POST['submit']))
{
    $image_name=$_FILES['img']['name'];
    $image_tmp_name=$_FILES['img']['tmp_name'];
    $sql=" INSERT INTO host(img)VALUES('$image_name')";
    $result= mysqli_query($connection,$sql);
    if($result){
        move_uploaded_file($image_tmp_name,$image_name);
    }
}
?>
<html>
    <head>
        <body>
            <h1>upload image</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="img"><br><br>
                <input type="submit" value="upload" name="submit"><br><br>
                <?php
                $sql="SELECT *FROM host";
                $result=mysqli_query($connection,$sql);
                while($row=mysqli_fetch_array($result))
                {
                    ?>
                    <img src="<?php echo $row['img']?>"alt="" width="300px" height="300px">
                    <?php
                }
                ?>
            </form>
        </body>
    </head>
</html>
