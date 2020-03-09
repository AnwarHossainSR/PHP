<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php

    if(isset($_POST['showbtn'])){
      include 'configconnection.php';
      $stu_id=$_POST['id'];
      $sql="select * from products where id={$stu_id}";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){ while($row=mysqli_fetch_assoc($result)){

    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="<?php echo $row['description']; ?>" />
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php }
        }
    }
?>
</div>
</div>
</body>
</html>
