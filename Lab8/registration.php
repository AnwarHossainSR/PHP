<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Webpage</title>
  <link rel="stylesheet" href="css/Style.css">
</head>
  <body>
    <div id="wrapper">
    <header>
      <div id="header">
        <h2>X Company</h2>
      </div>
    </header>
    <nav>
      <div id="nav">
        <ul>
          <li><a href="home.php">Home </a></li>
          
        </ul>
      </div>
    </nav>
    <section>
   
        <br><br>
        <div id="p1">

         <form style="margin-top: 50px;" action="rtask.php" method="post">
  <fieldset>
  <legend><b><h2>Registation</h2></b></legend>
  <br>
  <b>Name:</b><br>
  <input type="text" name="name"><br>
  <hr>
  <b>Email:</b><br>
  <input type="text" name="email"><br>
  <hr>
  <b>User Name:</b><br>
  <input type="text" name="uname"><br>
  <hr>
  <b>Password:</b><br>
  <input type="Password" name="password"><br>
  <hr>
  <b>Confirm Password:</b><br>
  <input type="Password" name="cpassword"><br>
  <hr>
  <fieldset>
  <legend><b>Gender</b></legend><br>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="others">Others
  <br>
  </fieldset>
  <hr>
  <fieldset>
    <legend><b>Date of Birth</b></legend><br>
  <input type="Date" name="date">(dd/mm/yyyy)
  
  </fieldset>
  <hr>
  <br><br>

   <input style="margin-left: 80px;font-size: 20px;" type="submit" value="submit">
</fieldset>
</form>
</div>
    </section>

    <br><br><br><br><br><br>

    <footer class="footer_container">
        
        <p>Copyright &copy; 2020</p>
      
    </footer>
     </div>
    
  </body>
</html>


