<?php
session_start();
require_once "db_connect.php";

$usr_username = $_GET["user"];
$usr_password = $_GET["password"];
$sql = "SELECT USERNAME, PASSWORD FROM users where username = ?";
	if($statement = mysqli_prepare($connection, $sql)){
		mysqli_stmt_bind_param($statement, "s", $param_username);
		$param_username = $usr_username;
		if(mysqli_stmt_execute($statement)){
			mysqli_stmt_store_result($statement);
			if(mysqli_stmt_num_rows($statement) == 1){
				mysqli_stmt_bind_result($statement, $username, $hashed_password);
				if(mysqli_stmt_fetch($statement)){
					if($usr_password == $hashed_password){
						session_start();
						$_SESSION["loggedin"] = true;
						$_SESSION["username"] = $usr_username;
						header("location: timekeep.php");
					}else{
						echo "Invalid Username or Password";
					}
				}
					mysqli_stmt_close($statement);
			}
		}
		mysqli_close($connection);
	}
?>
