<!DOCTYPE html>
<html>
<head>
 <style>
.error {color: #FF0000;}
.color {color: #2c6ced;}
</style>
</head>
<body>
  <CENTER>

<legend><h3><b><span class="error">Registration</span></b></h3></legend>
<form action="registration1.php" method="post">
  <span class="color"><b>Name:</b></span>
  <input type="text" name="name">
  <br><br>
  <span class="color"><b>Email:</b></span>
  <input type="email" name="email" >
  <br><br>
  <span class="color"><b>username:</b></span>
  <input type="text" name="username" >
  <br><br>
  <span class="color"><b>password:</b></span>
  <input type="password" name="password" >
  <br><br>
  <span class="color"><b>Confirm Password:</b></span>
  <input type="password" name="Confirmassword" >

  <br><br>
  <span class="color"><b>Gender:</b></span>
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other

  <br><br>
  <span class="color"><b>DOB:</b></span>
  <input type="date" name="bday">
  <br><br>
  <input type="submit" value="Submit" style="color: green">
  
</form>
</CENTER>
</body>
</html>