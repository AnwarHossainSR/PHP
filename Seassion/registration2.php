<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php



	session_start();
	$_SESSION["blood"] = $_POST["blood"];


     $myfile = fopen("Information.txt", "w") or die("Unable to open file!");
     $txt = $_SESSION["name"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["email"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["password"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["Confirmassword"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["gender"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["bday"];
     fwrite($myfile, $txt."\n");
     $txt = $_SESSION["blood"];
     fwrite($myfile, $txt."\n");

     echo "your operation is successfylly done";
     fclose($myfile);

	?>

</body>
</html>



