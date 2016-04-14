
<!DOCTYPE HTML>
<html>
<head>
    <title>Web Authentication via Keystroke Dynamics</title>
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
</head>


    <?php
    session_start(); //starts the session
    if($_SESSION['user']){ //checks if user is logged in
    }
    else{
        header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
    ?>


<script type="text/javascript">
var s=new Array(7);
var first= new Array(7),last= new Array(7);
var diff = new Array(7);
var i=new Array(7),d;
for (var k = 0; k < 7; k++) {
  diff[k] = new Array(100);
    s[k]=new Array(100);
    i[k]=0;
}

  function keypress (d,no) 
  {
    var x=document.getElementById(d);
    var t=document.getElementById("demo");
    var evt = event || e; // for trans-browser compatibility
        var charCode = evt.which || evt.keyCode;
    d=new Date();
    curr=d.getTime();
    if(charCode!=9)
    {
    
   
        x.innerHTML+=" "+curr;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("demo").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "print.php?r=" + curr, true);
        xmlhttp.send();
    }   

    
  }

    </script>
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
                    <a href="create_account.php" style=" font-size:15pt;color: #e8e51c;">Register
                    </a></li>

            </ul>
            </nav>

            <span class="burger_icon">menu</span>
        </div>
    </header>
<body>

<h2>Hello <?php Print "$user"?>!</h2> 
<div class="container" align="center">
  <div class="reg" >
    <h2 >Registration Page</h2>

<p><b>Start typing a name in the input field below:</b></p>
<form action="validate.php" method="post"> 

Enter a string 1:<br>
  <input type="text" onkeyup="javascript:keypress('date1',1)" name="id1"><p id="date1">0</p><br>

Enter a string 2:<br>
  <input type="text" onkeyup="javascript:keypress('date2',2)"name="id2"><p id="date2">0</p><br>

Enter a string 3:<br>
  <input type="text" onkeyup="javascript:keypress('date3',3)" name="id3"><p id="date3">0</p><br>
Enter a string 4:<br>
  <input type="text" onkeyup="javascript:keypress('date4',4)" name="id4"><p id="date4">0</p><br>
Enter a string 5:<br>
  <input type="text" onkeyup="javascript:keypress('date5',5)" name="id5"><p id="date5">0</p><br>
Enter a string 6:<br>
  <input type="text" onkeyup="javascript:keypress('date6',6)" name="id6"><p id="date6">0</p><br>

  <button type="submit">Submit</button>
      </div>
    </div>

</form>




	    <div class="copy-right">
        <p>Copyright © Codeblooded | All rights reserved </a></p>
        </div>


	</body>
</html>
