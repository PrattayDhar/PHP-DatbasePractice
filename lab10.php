<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Connection With Databse  -->
    <?php
    $con=mysqli_connect('localhost','root','','labpractice');
    if($con){
        echo"Succesfuly Connected";

    }
    else{
        echo("error");
    }
// Insart Into Datbase 
    //  $sql="insert into studentinfo (ID,Name)
    //  values(1,'hasan')";
    //  if(mysqli_query($con,$sql)){
    //     echo "new record update";
    //  }
    //  else{
        
    //        echo "Error: ".$sql."<br>";
        
    //  }

    // select Into datbase 

    //   $sql="select ID,Name from studentinfo";
    //   $result=mysqli_query($con,$sql);
    //   if(mysqli_num_rows($result)>0){
    //     //outputdata of each row
    //     while($row=mysqli_fetch_assoc($result)){
    //         echo "ID :" .$row["ID"]."Name :".$row["Name"]."<br>";
    //     }
    //   }
    //   else{
    //     echo "0 result";
    //   }


    // update***

    // $sql="update studentinfo set Name='Mim'where ID=1";
    // if(mysqli_query($con,$sql)){
    //     echo "Record Update";
    // }
    // else{
    //     echo "eror update";
    // }

    $sql="delete form studentinfo where ID=1";
    if(mysqli_query($con,$sql)){
        echo "Delete";
    }
    else{
        echo "eror";
    }

    //   $sql="select ID,Name from studentinfo";
    //   $result=mysqli_query($con,$sql);
    //   if(mysqli_num_rows($result)>0){
    //     //outputdata of each row
    //     while($row=mysqli_fetch_assoc($result)){
    //         echo "ID :" .$row["ID"]."Name :".$row["Name"]."<br>";
    //     }
    //   }
    //   else{
    //     echo "0 result";
    //   }
    ?>

  

</body>
</html>