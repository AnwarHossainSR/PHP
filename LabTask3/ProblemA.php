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

<legend><h3><b><span class="error">Personal Information</span></b></h3></legend>
<form action="ProblemA1.php" method="post">
  <span class="color"><b>Name:</b></span>
  <input type="text" name="name">
  <br><br>
  <span class="color"><b>Email:</b></span>
  <input type="email" name="email" >
  <br><br>
  <span class="color"><b>DOB:</b></span>
  <input type="date" name="bday">
  <br><br>
  <span class="color"><b>Gender:</b></span>
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
  <br><br>
  <span class="color"><b>Degree:</b></span>
  <input type="checkbox" name="deg" value="ssc"> SSC
  <input type="checkbox" name="deg" value="hsc">HSC
  <input type="checkbox" name="deg" value="bsc">BSc
  <input type="checkbox" name="deg" value="msc">MSc
  <br><br>
  <span class="color"><b>Blood Group:</b></span>
  <select name="blood">
  <option value="b+">B+</option>
  <option value="a+">A+</option>
  <option value="ab+">AB+</option>
  <option value="o+">O+</option>
  </select>
  <br><br>
  <input type="submit" value="Submit" style="color: green">
  
</form>
</CENTER>
</body>
</html>