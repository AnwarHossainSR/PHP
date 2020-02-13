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
<?php
$nameErr = $emailErr = $genderErr = $bDayErr =$degreeErr=$bloodErr="";
$name = $email = $gender = $degree = $dob =$bg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["bday"])) {
    $bDayErr= "dob is required";
  } else {
    $dob = test_input($_POST["bday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr= "gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["deg"])) {
    $degreeErr= "degree is required";
  } else {
    $degree = test_input($_POST["deg"]);
  }


  if (empty($_POST["blood"])) {
    $bloodErr= "BG is required";
  } else {
    $bg = test_input($_POST["blood"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  
<legend><h3><b><span class="error">Personal Information</span></b></h3></legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <span class="color"><b>Name:</b></span>
  <input type="text" name="name">
  <span class="error">*<?php echo $nameErr;?></span>
  <br><br>
  <span class="color"><b>Email:</b></span>
  <input type="email" name="email" >
  <span class="error">*<?php echo $emailErr;?></span>
  <br><br>
  <span class="color"><b>DOB:</b></span>
  <input type="date" name="bday">
  <span class="error">*<?php echo $bDayErr;?></span>
  <br><br>
  <span class="color"><b>Gender:</b></span>
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
  <span class="color"><b>Degree:</b></span>
  <input type="checkbox" name="deg" value="ssc"> SSC
  <input type="checkbox" name="deg" value="hsc">HSC
  <input type="checkbox" name="deg" value="bsc">BSc
  <input type="checkbox" name="deg" value="msc">MSc
  <span class="error">*<?php echo $degreeErr;?></span>
  <br><br>
  <span class="color"><b>Blood Group:</b></span>
  <select name="blood">
  <option value="b+">B+</option>
  <option value="a+">A+</option>
  <option value="ab+">AB+</option>
  <option value="o+">O+</option>
  </select>
  <span class="error">*<?php echo $bloodErr;?></span> 
  <br><br>
  <input type="submit" value="Submit" style="color: green">
  
</form>

<?php
echo "<b><h3>Your Input</h3></b>";
echo $name;
echo "<br>";
echo $email; 
echo "<br>";
echo $dob; 
echo "<br>";
echo $gender; 
echo "<br>";
echo $degree; 
echo "<br>";
echo $bg; 
echo "<br>";
?>
</CENTER>
</body>
</html>