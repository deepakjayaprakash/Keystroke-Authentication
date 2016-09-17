
<!DOCTYPE html>
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

<?php
$myfile = fopen("data.txt","w");
          fclose($myfile);
          ?>
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

  function keypress (d) 
  {
    //var x=document.getElementById("demo");
    var evt = event || e; // for trans-browser compatibility
        var charCode = evt.which || evt.keyCode;
    d=new Date();
    curr=d.getTime();
    if(charCode==8)
    {
        window.alert("Backspace kyu dabaya be!");
        window.location="index.php"

    }
    else if(charCode!=9) 
    {   
       // x.innerHTML+=" "+curr;
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
</head>


<body>

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
					<a href="http://github.com/deepakjayaprakash/Keystroke-Authentication" style=" font-size:15pt;color: #e8e51c;">Github
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
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter email" align="center">
            </div>
            <div class="form-group">
              <label for="password"> Password</label>
              <input type="text" class="form-control" onkeyup="javascript:keypress('password')" name="password" placeholder="Enter password">
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
	<!--  End Header Section  -->
 <div class="copy-right">
		<p>Copyright © Codeblooded | All rights reserved </a></p>
	</div>
</body>
<html>