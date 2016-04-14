<?php 


    session_start(); //starts the session
    if($_SESSION['user']){ //checks if user is logged in
    }
    else{
        header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value


$id1=$_POST['id1'];
$id2=$_POST['id2'];
$id3=$_POST['id3'];
$id4=$_POST['id4'];
$id5=$_POST['id5'];
$id6=$_POST['id6'];
$time_data = array();

if($id1==$id2&&$id3==$id4&&$id5==$id6&&$id1==$id3&&$id1==$id5&&$id1!=""){

/*
$myfile = fopen("data.txt", "a+") or die("Unable to open file!");
$str= fread($myfile,filesize("data.txt"));
echo $str;
fclose($myfile);

	$time_data=explode(',',$str);
	print_r($time_data);

*/


$myfile = fopen("data.txt","r");
$str=fread($myfile,filesize("data.txt"));
$str=$user.",".$str;
	//print_r ($str);
$arr=explode(".",$str);
//print_r ($arr);



$file = fopen("timing.csv","a");

foreach ($arr as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 

  fclose($myfile);

  $myfile = fopen("data.txt","w");  // to empty that file
    fclose($myfile);



	Print '<script>
	alert("you are successfully entered the logistics");
	window.location.assign("profile.php");</script>'; // redirects to register.php



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