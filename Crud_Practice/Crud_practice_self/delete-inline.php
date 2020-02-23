<?php

$stu_id=$_GET['id'];

	  include 'configconnection.php';
      $sql="DELETE FROM student WHERE sid={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: http://localhost/Crud_Practice/crud_html_example/index.php");
      mysqli_close($con);



?>