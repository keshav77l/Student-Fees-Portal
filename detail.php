<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<meta charset="utf-8">
	<title>Fees Input</title>
	<link rel="stylesheet" href="style0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<style>
	table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 7px;
  text-align: left;    
}
	</style>
</head>

<body>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img  src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
	<hr>
<div class="form" style="margin-left:320px;">
<table style="width:70%">
<form method="post" action="final.php" >
<?php
$regn=$_POST['search'];
$flag=0;
$s=array();
$file = fopen("students.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),4,null);
  $reg_num=$str_arr[0];
  if ($str_arr[0]==$regn){
		session_start();
		$_SESSION['search']=$str_arr[0];
		$reg_num=$str_arr[0];
		echo "<tr><th><h3>STUDENT ID - </h3></th><td><h3>".$_SESSION['search']."</h3></td></tr><br>";
		echo "<tr><th><h3>STUDENT NAME - </h3></th><td><h3>".$str_arr[1]."</h3></td></tr><br>";		
echo "<tr><th><h3>FATHER'S NAME - </h3></th><td><h3>".$str_arr[2]."</h3></td></tr><br>";
echo "<tr><th><h3>TOTAL FEE - </h3></th><td><h3>100000</h3></td></tr><br>";
echo "<th><h3>Instalment Done (Rs)-</h3></th>"."<th><h3> Date and time - </h3></th>";
		$p =array();
		$rec = fopen("Record/".$reg_num.".txt",'r');
		$a = 0;
		while(!feof($rec))
		  {
		  $p=fgets($rec);
		  $str_arr2 = array_pad(explode('::', $p),4,null);
			$a += ((int)$str_arr2[0]);
if($str_arr2[0]==!null)
echo"<tr><td>".$str_arr2[0]."</td>"."<td>".$str_arr2[1]."</td>";
		  }
$t = 100000;
$l = $t-$a;
echo "<tr><th><h3>FEE SUBMITTED - Rs.</h3></th><td><h3>".$a."</h3></td></tr><br>" ;	
echo "<tr><th><h3>REMAINING FEE (RS)- </h3></th><td><h3>".$l."</h3></td></tr><br>" ;
?>
 
<tr><th rowspan="2"><h3>Enter Fees:-</h3></th><td><h3> <input type="text" name="fees" required style="width:80%; margin-left:25px;">
</tr>
<tr><td><input class="btn" align="center"  type="submit" style="padding: 5px 7px; background-color: #4CAF50; margin-left:30px ; width:80%;"></td></tr>
</table>
</form>
</div>
    <hr>
<a href="display.php" class="btn" style="margin:250px;">Click For Another Student</a>
<br>
              <div class="bottom-container">


              </div>
<center>
<?php
		$flag=1;
	  	break;
	}
  }
if ($flag==0)
	echo "<h3><mark>Please Enter Correct Student ID</mark></h3>";
fclose($file);
?>
<br>
</body>
</html>