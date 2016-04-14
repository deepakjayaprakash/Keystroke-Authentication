<?php
$list = array
(
"Peter,Griffin,Oslo,Norway",
"Glenn,Quagmire,Oslo,Norway",
);

$myfile = fopen("data.txt","r");
$str=fread($myfile,filesize("data.txt"));
$str="username,".$str;
	print_r ($str);
$arr=explode(".",$str);
print_r ($arr);



$file = fopen("timing.csv","a");

foreach ($arr as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 

  fclose($myfile);

?>
