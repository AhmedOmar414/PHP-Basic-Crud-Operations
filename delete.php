<?php
include 'connect.php';

if(isset($_GET["delid"])){
    $id=$_GET["delid"];

    $sql= "DELETE FROM `data` where id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location:display.php");
    }else{
        die(mysqli_error($con));
    }
}
?>