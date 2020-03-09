<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    
    <?php
      include 'configconnection.php';

      $sql="select * from products";
      $result=mysqli_query($con,$sql) or ("Query Unsuccessfull ");


      If(mysqli_num_rows($result)>0){

    ?>


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php

            while($row= mysqli_fetch_assoc($result)){

            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['quantity']?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']?>'>Delete</a>
                </td>
            </tr>
        <?php } ?>
            
        </tbody>
    </table>
<?php }?>
</div>
</div>
</body>
</html>
