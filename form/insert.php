<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect('localhost','root','','labpractice');
    if($con==false){
        die("Error: Could Not Connet".mysqli_connect_error());

    }
       $first_name =$_REQUEST['firstname'];
       $last_name =$_REQUEST['lastname'];
       $gender =$_REQUEST['gender'];
       $address =$_REQUEST['address'];
       $email =$_REQUEST['email'];

       $sql="insert into forminfo value('$first_name','$last_name','$gender','$address','$email')";
       if(mysqli_query($con,$sql)){
        echo "<h3> store</h3>";
       }
       else{
        echo "faild";
       }
     ?>
</body>
</html>