<?php include 'header.php'; 


if(isset($_POST['deletebtn'])){

	include "configconnection.php";
	$stu_id=$_POST['id'];

	$sql="DELETE FROM products WHERE id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");

      header("Location: http://localhost:8082/Crud_Practice/Crud/home.php");
      mysqli_close($con);
  }
?>




<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>