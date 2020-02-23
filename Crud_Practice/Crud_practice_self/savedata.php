<?php

$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['sclass'];
$stu_phone=$_POST['sphone'];

      include 'configconnection.php';

      $sql="INSERT INTO student(sname,saddress,sclass,sphone)VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");
      header("Location: http://localhost/Crud_Practice/crud_html_example/index.php");

      mysqli_close($con);



?>