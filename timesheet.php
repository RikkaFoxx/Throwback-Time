<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timekeep Server v1.4.2</title>
  </head>
  <style media="screen">
    .padding-container {
      padding-right: 75%;
    }
    .left-container {
      border-style: solid;
    }
    .version {
      text-align: center;
    }
    .title {
      padding-left: 3%;
    }
    .welcome-container {
      border-style: solid none solid none;
      background-color: #F0F0F0;
    }
    .date {
      padding-left: 3%;
    }
    .welcome {
      padding-left: 3%;
    }
    .clock {
      text-align: center;
    }
    .menu-container {
      padding-left: 3%;
      color: blue;
      text-decoration: underline;
    }
    .logout {
      text-align: center;
      color: blue;
      text-decoration: underline;
    }
    .title-container {
      border-style: none none solid none;
    }
    .property {
      text-align: center;
      color: #525252;
    }
    .warning-container {
      padding: 1%;
      border-style: none none solid none;
      background-color: #fffdc4;
    }
  </style>
  <body>
    <div class='padding-container'>
      <div class='left-container'>
        <div class='title-container'>
        <center><h3 class='title'>Timekeep Server v1.4.2</h3></center>
                  		<center>
			      	<?php
			      	date_default_timezone_set('Australia/Melbourne');
			      $date = date('m/d/Y h:i:s a', time());
			      echo $date;
			      ?>
			     	<br>
			      <?php echo "Welcome: ",$_SESSION["username"];?>
       			</center>
			<br>
        </div>
        <div class='clock'>
        	<br>
          <img src='clock.gif' class='clock'></img>
        </div>
        <div class='warning-container'>
          <p class='warning'>This server is to be accessed only by Throwback Hacks Security. This domain is monitored</p>
      </div>
      <center>
          <h5>
       		<h5>
				Upload Timesheet.xlsx
			</h5>
		</center>
        <div class='menu-container'>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			  <input type="file" name="fileToUpload" id="fileToUpload">
			  <input type="submit" value="Upload" name="submit">
		</form>
        </div>
        <h5 class='version'>Throwback Hacks Security</h5>
        <h4 class='logout'><a href="timekeep.php">Return Home</a></h4>
        <h4 class='logout'><a href="logout.php">Log Out</a></h4>
      </div>
    </div>
  </body>
</html>
