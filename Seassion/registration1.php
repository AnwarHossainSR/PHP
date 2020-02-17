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

<?php

session_start();

$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["Confirmassword"] = $_POST["Confirmassword"];
$_SESSION["radio"] = $_POST["gender"];
$_SESSION["bday"] = $_POST["bday"];




?>

	<form action="registration2.php" method="post">
	<center>
		<span class="color"><b>Blood Group:</b></span>
        <select name="blood">
        <option value="b+">B+</option>
        <option value="a+">A+</option>
        <option value="ab+">AB+</option>
        <option value="o+">O+</option>
  </select>
        <br>
        <input type="submit" name="submit" value="Submit">
    </center>
</form>
</body>
</html>