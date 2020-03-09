<?php

$stu_id=$_POST['id'];
$stu_name=$_POST['name'];
$stu_address=$_POST['description'];
$stu_class=$_POST['quantity'];

      include 'configconnection.php';

      $sql="UPDATE products SET name='{$stu_name}',description='{$stu_address}',quantity='{$stu_class}' WHERE id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: http://localhost:8082/Crud_Practice/Crud/home.php");

      mysqli_close($con);



?>