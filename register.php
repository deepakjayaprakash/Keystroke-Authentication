
<!DOCTYPE html>
<html>
<head>
  <title>Web Authentication via Keystroke Dynamics</title>
  <?php
$myfile = fopen("data.txt","w");
          fclose($myfile);
          ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- //css files -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link href="css/component.css" rel="stylesheet" type="text/css"  />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">


<!-- //js files -->
<script src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/jquery.min.js"></script>


  <style>
  .modal-header, h4, .close {
      background-color: #2a2a2a;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #2a2a2a;
  }
  </style>


</head>


  <!--  Header Section  -->
  <header>

  <!--  Logo Section  -->
    <div class="container">
      <div class="logo pull-left animated wow fadeInLeft">
        
      </div>

      
      <nav class="pull-left">
        <ul class="list-unstyled">
          <li class="animated wow fadeInLeft" data-wow-delay="0s"></li>
          <a href="#" style="font-size:20pt;color:#e8e51c">Keystroke Authentication</a>
      
        
        </ul>
      </nav>

      <nav class="social pull-right">
        <ul class="list-unstyled">
          <li class="animated wow fadeInRight" data-wow-delay=".1s">
          <a href="index.php" style=" font-size:15pt;color: #e8e51c;">Home
          </a></li>
          <li class="animated wow fadeInRight" data-wow-delay=".2s">
          <a href="index.php" style=" font-size:15pt;color: #e8e51c;">About
          </a></li>
          <li class="animated wow fadeInRight" data-wow-delay=".3s">
          <a href="index.php" style=" font-size:15pt;color: #e8e51c;">Github
          </a></li>
          <li class="animated wow fadeInRight" data-wow-delay=".4s">
          <a href="register.php" style=" font-size:15pt;color: #e8e51c;">Register
          </a></li>

      


  <!--  Modal Section  -->      
<a href="" data-toggle="modal" data-target=".bannerformmodal" style=" font-size:15pt;color: #e8e51c;" >Login</a>

<div class="modal fade bannerformmodal" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-content">
                <div class="modal-header">
              <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                 <h4></span> Login</h4>
                      </div>

             <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="checklogin.php" method="POST">
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" align="center">
            </div>
            <div class="form-group">
              <label for="psw"> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
          
              <button type="submit" class="btn btn-success btn-block"></span> Login</button>
          </form>
        </div>

                              
           <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          Cancel</button>
          <p><a href="register.php">Not a member?  Sign Up</a></p><br>

        </div>        
        </div>
        </div>
      </div>
    </div>



        </ul>
      </nav>

      <span class="burger_icon">menu</span>
    </div>
  </header>


  <body>
  <div class="container" align="center">
  <div class="reg" >
    <h2 >Registration Page</h2>
    
    <form action="register.php" method="post">
     <p>Enter Username: </p> <br><input type="text" name="username" required="required"/> <br/>
        <p>Enter Password:</p> <br><input type="password" name="password" required="required" /> <br/> <br/> <br/>
      <button type="submit" value="Register"><span style="color:black">Register</span></button>
    </form>
    </div>
    </div>
  </body>
</html>

<?php
  mysql_connect("localhost", "root","root") or die(mysql_error()); //Connect to server
  mysql_select_db("keystroke") or die("Cannot connect to database"); //Connect to database

  
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
  
  $query = mysql_query("Select * from users"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO users (username, password,done) VALUES ('$username','$password',0)"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered! Please Login with your credentials");</script>'; // Prompts the user
    Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
}
?>