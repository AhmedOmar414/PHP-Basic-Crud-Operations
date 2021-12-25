<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="table.css">
    </link>
    <title>UsersData</title>
</head>

<body>

    <div class="container">
        <div>
            <button class="but butdef"> <a href="Add.php">Add</a> </button>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
include 'connect.php';
$sql = "SELECT * FROM data"; 
$result = mysqli_query($con,$sql);


if($result){
  while($data=mysqli_fetch_assoc($result)){
      $id     = $data['id'];
      $name   = $data['name'];
      $email  = $data['email'];
      $mobile = $data['mobile'];
      $pass   = $data['password'];

      echo ' <tr>
      <th>'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$pass.'</td>
      <td>
          <button class="but but1"><a href="delete.php?delid='.$id.'">Delete</a></button>
          <button class="but but2"><a href="update.php?upId='.$id.'">Update</a></button>
      </td>
            </tr>';


  }
}else{
    
    mysqli_error($con);
    echo "no data found";
}
?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>