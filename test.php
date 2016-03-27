<html>
<head>
<script>


var s=new Array(7),curr;
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
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="validate.php" method="post"> 

Enter a string 1:
  <input type="text" onkeyup="javascript:keypress('date1',1)" name="id1"><p id="date1">0</p><br>

Enter a string 2:
  <input type="text" onkeyup="javascript:keypress('date2',2)" name="id2"><p id="date2">0</p><br>

Enter a string 3:
  <input type="text" onkeyup="javascript:keypress('date3',3)" name="id3"><p id="date3">0</p><br>
Enter a string 4:
  <input type="text" onkeyup="javascript:keypress('date4',4)" name="id4"><p id="date4">0</p><br>
Enter a string 5:
  <input type="text" onkeyup="javascript:keypress('date5',5)" name="id5"><p id="date5">0</p><br>
Enter a string 6:
  <input type="text" onkeyup="javascript:keypress('date6',6)" name="id6"><p id="date6">0</p><br>
</form>



<p id="demo"><p>
</body>
</html>