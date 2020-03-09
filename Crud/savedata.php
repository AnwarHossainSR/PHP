<?php

$stu_name=$_POST['name'];
$stu_address=$_POST['description'];
$stu_class=$_POST['quantity'];

      include 'configconnection.php';

      $sql="INSERT INTO products(name,description,quantity)VALUES('{$stu_name}','{$stu_address}','{$stu_class}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: http://localhost:8082/Crud_Practice/Crud/home.php");

      mysqli_close($con);



?>