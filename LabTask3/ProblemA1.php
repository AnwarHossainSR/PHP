
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style>
.error {color: #FF0000;}
.color {color: #2c6ced;}
</style>
</head>
<body>
	<center>
	<h2><span class="error">Personal Information</span></h2>
<span class="color"><b>Name : </b></span><?php echo $_POST["name"];?></b><br>
<span class="color"><b>Email : </b></span> <?php echo $_POST["email"]; ?><br>
<span class="color"><b>BOD : </b></span> <?php echo $_POST["bday"]; ?><br>
<span class="color"><b>Gender : </b></span> <?php echo $_POST["gender"]; ?><br>
<span class="color"><b>Degree : </b></span> <?php echo $_POST["deg"]; ?><br>
<span class="color"><b>Blood : </b></span> <?php echo $_POST["blood"]; ?><br>

</center>
</body>
</html>