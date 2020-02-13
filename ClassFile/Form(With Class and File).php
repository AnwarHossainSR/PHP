<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
class User
 {
  
  public $name;
  public $gender;
  public $blood;
  public $degree;
  public $email;
  public $date;
  
   function __construct($name,$email,$date,$gender,$degree,$blood) 
   {
	   
    $this->name = $name;
	
	$this->email = $email;
	
	$this->gender = $gender;
	
    $this->blood = $blood;
	
	$this->degree = $degree;
	
	$this->date = $date;
	
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
  function set_blood($blood)
  {
    $this->blood = $blood;
  }
  function get_blood() 
  {
    return $this->blood;
  }
  function set_degree($degree)
  {
    $this->degree = $degree;
  }
  function get_degree()
  {
    return $this->degree;
  }
  function set_date($date)
  {
    $this->date = $date;
  }
  function get_date()
  {
    return $this->date;
  }
  
}
?>


<?php
$nameErr = $emailErr = $genderErr = $dateErr =$degreeErr= $bloodErr="";
$name = $email = $gender = $degree = $date = $blood="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }
  else
  {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    $email = $_POST["email"];
  }
    
  if (empty($_POST["d1"]) || empty($_POST["d2"])|| empty($_POST["d3"]))
  {
    $dateErr = "Date is required";
  } 
  else 
  {
    $date = $_POST["d1"]."/".$_POST["d2"]."/".$_POST["d3"];
  }

  if (empty($_POST["degree"]))
  {
    $degreeErr = "Degree is required";
  }
  else
  {
    $degree = $_POST["degree"];
  }

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["blood"])) 
  {
    $bloodErr = "blood is required";
  } 
  else
  {
    $blood = $_POST["blood"];
  }
}


?>

<h2>My Form </h2>
<p><span class="error">*Please fill up the form</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date: <input type="text" name="d1">/day <input type="text" name="d2"> /month <input type="text" name="d3"> /year
  <span class="error">*<?php echo $dateErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
   Degree:
  <input type="checkbox" name="degree" value="Bsc.">Bsc.
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
  <input type="checkbox" name="degree" value="Phd">Phd.
  
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  
   BloodGroup:
   <select name="blood">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>
  
  
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>"." data for : ".$name.":</h2>";

$user = new User($name,$email,$date,$gender,$degree,$blood);

echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";

echo $user->get_date();

echo "<br>";

echo $user->get_degree();

echo "<br>";

echo $user->get_gender();

echo "<br>";

echo $user->get_blood();
?>

<?php

$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_date()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

$data = $user->get_degree()."\n";

fwrite($file, $data);

$data = $user->get_blood()."\n";

fwrite($file, $data);

fclose($file);


?>




</body>
</html>