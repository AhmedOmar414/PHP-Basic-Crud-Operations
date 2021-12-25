<?php
include 'connect.php';
$id=$_GET['upId'];
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['pass'];

    $sql="UPDATE `crudn.data` SET id=$id,name=$name,email=$email,mobile=$mobile,password=$password  WHERE id= $id";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "updated successfully";
    }else{
        die(mysqli_error($con));
    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="style.css"></link>
    <title>UpdateUser</title>
</head>
<body>
    <div class="form" >
        <form method="post" action="update.php">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

            <label for="mobile">Mobile</label><br>
            <input type="number" name="mobile" id="mobile" placeholder="Enter your mobile"><br><br>

            <label for="pass">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Enter your password" required><br><br>
            <input type="submit" name="submit" value="Update" >
        </form>
    </div>
</body>

</html>