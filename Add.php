<?php
include 'connect.php';

if(isset($_POST["submit"])){

    //our data which will be saved to the database getting from the form by post method
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["pass"];

    $sql="INSERT INTO `data` (name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql) ;
    
    if($result){
        header("location: display.php");
    }else{
        mysqli_error($con);
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
    <title>AddUser</title>
</head>
<body>
    <div class="form" >
        <form method="post" action="Add.php">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

            <label for="mobile">Mobile</label><br>
            <input type="number" name="mobile" id="mobile" placeholder="Enter your mobile"><br><br>

            <label for="pass">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="Enter your password" required><br><br>
            <input type="submit" name="submit" value="save" >
        </form>
    </div>
</body>

</html>