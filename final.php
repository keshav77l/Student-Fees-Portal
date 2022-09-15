<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<meta charset="utf-8">
	<title>Exit</title>
	<link rel="stylesheet" href="style0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img  src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
	<hr>
<div class="form">
<?php
	session_start();
	date_default_timezone_set('Asia/Kolkata');
	$date = date("Y-n-j G:i:s");
 	 $reg_num=$_SESSION['search'];
		$myfile = fopen("Record/".$reg_num.".txt", "a") or die("Unable to open file!");
		if (isset($_POST['fees'])) {
		$txt = $_POST['fees'];
		fwrite($myfile, $txt."::".$date."::"."\n");
		fclose($myfile);
	}else{
      $txt = "Please Enter Amount";
 }
	date_default_timezone_set('Asia/Kolkata');
	$date = date("Y-n-j G:i:s");
 	 $reg_num=$_SESSION['name'];
		$myfile = fopen("Record/".$reg_num.".txt", "a") or die("Unable to open file!");
		if (isset($_POST['fees'])) {
		$txt = $_POST['fees'];
		fwrite($myfile, $txt."::".$date."::"."\n");
		fclose($myfile);
	}else{
      $txt = "Please Enter Amount";
}
	echo "<h2><mark>FEES SUBMITTED SUCCESSFULY</mark></h2><br>";	
?>
<br>
 <a href="display.php" class="btn" style="margin:220px;">Click For Another Student</a>
<a href="second.html" class="btn" style="margin:250px">Log Out</a>
<br>
 <div class="bottom-container">


              </div>
<center>
</body>
</html>