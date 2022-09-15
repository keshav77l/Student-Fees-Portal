<html>
<head>
  <link rel="stylesheet" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <title>Student ID Input</title>
</head>
<body>
<?php
session_start();
$email=$_POST['email'];
$psw=$_POST['pass'];
$flag=0;
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),3,null);
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
		
		$_SESSION['name']=$str_arr[0];
		$_SESSION['email']=$str_arr[2];
		$flag=1;
		header("Location:display.php");
		break;
		}//end if
	}//end while
  if($flag==0)
	header("Location:error.php");

?>
<p class="login" align="center"><u><a href="second.html"><mark>Login Again</mark></p></u>
</body>
</html>