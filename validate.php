<?php 

 	
    session_start(); //starts the session
    if($_SESSION['user']){ //checks if user is logged in
    }
    else{
        header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value


	mysql_connect("localhost", "root","root") or die(mysql_error()); //Connect to server
	mysql_select_db("keystroke") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from users WHERE username='$user'"); //Query the users table if there are matching rows equal to $username
	while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
			$done=$row['done'];
		}


$id1=$_POST['id1'];
$id2=$_POST['id2'];
$id3=$_POST['id3'];
$id4=$_POST['id4'];
$id5=$_POST['id5'];
$id6=$_POST['id6'];
$time_data = array();

if($id1==$id2&&$id3==$id4&&$id5==$id6&&$id1==$id3&&$id1==$id5&&$id1!=""&&$table_password==$id1){




$myfile = fopen("data.txt","r");
$str=fread($myfile,filesize("data.txt"));
$str=$user.",".strlen($table_password).",".$str;
	
$arr=explode(".",$str);	// since we later explode using comma as delimiter I need to convert str to an array, that's all
//print_r ($arr);



$file = fopen("timing.csv","a");

foreach ($arr as $line)
  {
  fputcsv($file,explode(',',$line));  // each array becomes a row in excel
  }

fclose($file); 

  fclose($myfile);

  $myfile = fopen("data.txt","w");  // to empty that file
    fclose($myfile);



	Print '<script>
	alert("you are successfully entered the logistics");
	window.location.assign("profile.php");</script>'; // redirects to register.php
	$done_update = mysql_query("update users set done=1 WHERE username='$user'"); //Query the users table if there are matching rows equal to $username



}
else{
	// erase the contents of the file!
	$myfile = fopen("data.txt", "w") or die("Unable to open file!");
fclose($myfile);


	Print '<script>
	alert("you could not register man! sorry!");
	window.location.assign("create_account.php");</script>'; // redirects to register.php

}





 ?>