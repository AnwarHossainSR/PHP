<?php

$stu_id=$_GET['id'];

	  include 'configconnection.php';
      $sql="DELETE FROM products WHERE id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: http://localhost:8082/Crud_Practice/Crud/home.php");
      mysqli_close($con);



?>