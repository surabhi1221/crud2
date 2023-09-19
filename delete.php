<?php
include_once('conn.php');
$id=$_GET['id'];
$query="DELETE FROM host WHERE id='$id'";
$data=mysqli_query($connection,$query);
if($data){
    ?>
    <script type="text/javascript">
    alert("data delected successfully");
    window.open('http://localhost/php/form1/form.php','_self');
    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
    alert("please try again");
    </script>
    <?php
}
?>
