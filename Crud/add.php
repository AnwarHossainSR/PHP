<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" />
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="quantity" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
