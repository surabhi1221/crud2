<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <?php
    include_once('conn.php');
    $sql="SELECT * FROM host";
    $data=mysqli_query($connection,$sql);
    $total=mysqli_num_rows($data);
    if($total){
        ?>
        <table border="2">
            <tr>
                <th>fname</th>
                <th>lname</th>
                <th>email</th>
                <th>phoneno</th>
                <th>age</th>
                <th>addres</th>
                <th>edit</th>
                <th>delete</th>
                <th>image</th>
                <th>edit</th>
             </tr>
        <?php
        while($result=mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $result['fname'];?></td>
                <td><?php echo $result['lname'];?></td>
                <td><?php echo $result['email'];?></td>
                <td><?php echo $result['phoneno'];?></td>
                <td><?php echo $result['age'];?></td>
                <td><?php echo $result['addres'];?></td>
                <td><a id="edit" href="update.php? id=<?php echo $result['id'];?>">EDIT</a></td>
               <td> <a id="delete"href="delete.php? id=<?php echo $result['id'];?>">DELETE</a></td>
                <td>
                    <img src="<?php echo $result['img'];?>" alt="" width="100px">
                </td>
                
              <td> <a id="edi" href="image_edit.php? id=<?php echo $result['id'];?>">EDIT</a>

                </td>
            </tr>

            <?php

        }
    }
    else{
        echo'no reloaded found';
    }
    ?>
    </center>
</body>
</html>
