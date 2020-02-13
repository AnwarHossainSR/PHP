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

class User
 {
  
  public $name;
  public $email;
  public $gender;
  
  
   function __construct($name,$email,$gender) 
   {
     
    $this->name = $name;
  
    $this->email = $email;
  
    $this->gender = $gender;
  
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
 
}

 ?>

<?php
$nameErr = $emailErr = $genderErr ="";
$name = $email = $gender= "";

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
    

  if (empty($_POST["gender"])) {
    $genderErr= "gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
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
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">*<?php echo $nameErr;?></span>
  <br><br>
  <span class="color"><b>Email:</b></span>
  <input type="email" name="email" value="<?php echo $email;?>">
  <span class="error">*<?php echo $emailErr;?></span>
  <br><br>
  
  <span class="color"><b>Gender:</b></span>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
  
  
  <input type="submit" value="Submit" style="color: green">

</form>


<?php
echo "<h2> Personal Information </h2>,<br><br>";

$user = new User($name,$email,$gender);

echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";

echo $user->get_gender();
?>
  
<?php

$file = fopen("Info.txt","w") or die("Unable to open file!");

$data = $user->get_name()."\n";
echo "<br>";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

fclose($file);

//echo "Info.txt has been successfully created";
//echo "<br>","<br>";
//echo "$xml_file_name has been successfully created";

?>

<?php

  $dom = new DOMDocument();

    $dom->encoding = 'utf-8';

    $dom->xmlVersion = '1.0';

    $dom->formatOutput = true;

  $xml_file_name = 'InfoXML.xml';


    $root = $dom->createElement('INFO');

    $movie_node = $dom->createElement('root');



    $child_node_title = $dom->createElement('name', $user->get_name());

    $movie_node->appendChild($child_node_title);

    $child_node_year = $dom->createElement('email', $user->get_email());

    $movie_node->appendChild($child_node_year);

    $child_node_genre = $dom->createElement('gender', $user->get_gender());

    $movie_node->appendChild($child_node_genre);

    $root->appendChild($movie_node);

    $dom->appendChild($root);

    $dom->save($xml_file_name);
    

?>

</CENTER>
</body>
</html>