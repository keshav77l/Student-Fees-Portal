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
  $user=$_SESSION['name'];
switch($user){
case "Admin":?>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
<h2>Welcome Admin</h2>
  <hr>
  <div class="form">
    <h2>REGISTRATION NUMBER</h2>
    <form class="login-form" action="admin_detail.php" method="post">
      <i class="fas fa-user-circle"></i>
            <input class="user-input" type="text" name="search" placeholder="Registration Number" required>
      <input class="btn" type="submit" name="submit" value="SEARCH">
    </form>
  </div>
  <hr>
  <div class="bottom-container">
<?php
break;
case "Cashier1":?>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
<h2>Welcome Cashier 1</h2>
  <hr>
  <div class="form">
    <h2>REGISTRATION NUMBER</h2>
    <form class="login-form" action="detail.php" method="post">
      <i class="fas fa-user-circle"></i>
            <input class="user-input" type="text" name="search" placeholder="Registration Number" required>
      <input class="btn" type="submit" name="submit" value="SEARCH">
    </form>
  </div>

  <hr>
  <div class="bottom-container">
<?php
break;
case "Cashier2":?>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
<h2>Welcome Cashier 2</h2>
  <hr>
  <div class="form">
    <h2>REGISTRATION NUMBER</h2>
    <form class="login-form" action="detail.php" method="post">
      <i class="fas fa-user-circle"></i>
            <input class="user-input" type="text" name="search" placeholder="Registration Number" required>
      <input class="btn" type="submit" name="submit" value="SEARCH">
    </form>
  </div>

  <hr>
  <div class="bottom-container">
<?php
break;
case "Cashier3":?>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
<h2>Welcome Cashier 3</h2>
  <hr>
  <div class="form">
    <h2>REGISTRATION NUMBER</h2>
    <form class="login-form" action="detail.php" method="post">
      <i class="fas fa-user-circle"></i>
            <input class="user-input" type="text" name="search" placeholder="Registration Number" required>
      <input class="btn" type="submit" name="submit" value="SEARCH">
    </form>
  </div>

  <hr>
  <div class="bottom-container">
<?php
break;
case "Cashier4":?>
  <div class="top-container">
    <img class="top-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" height="30%;">
    <h1>MAK International School</h1>
    <img class="bottom-cloud" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/285/cloud_2601-fe0f.png" alt="cloud" height="30%">
    <img src="https://scontent.fdel42-1.fna.fbcdn.net/v/t31.18172-8/1410663_801122649950512_9079611559485096049_o.jpg?_nc_cat=101&amp;ccb=1-4&amp;_nc_sid=09cbfe&amp;_nc_ohc=X1nwWc8l8WUAX_Q74YN&amp;_nc_ht=scontent.fdel42-1.fna&amp;oh=2e2dc3f7f16f298bf75e1840a7f9e365&amp;oe=61357479" alt="cloud" height="200px" width="200px">
  </div>
<h2>Welcome Cashier 4</h2>
  <hr>
  <div class="form">
    <h2>REGISTRATION NUMBER</h2>
    <form class="login-form" action="detail.php" method="post">
      <i class="fas fa-user-circle"></i>
            <input class="user-input" type="text" name="search" placeholder="Registration Number" required>
      <input class="btn" type="submit" name="submit" value="SEARCH">
    </form>
  </div>

  <hr>
  <?php
  break;
  }
  
  ?>
</body>
</html>