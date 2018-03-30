<?php
session_start();
include("connect.php");

if( isset($_SESSION['user_id']) ){
	
}

if(isset($_POST['username'])){
	$error = array();
	
	//username
	if(empty($_POST['username'])){
		$error[] = 'Username cannot be empty. ';
	}else if( ctype_alnum($_POST['username']) ){
		$username = $_POST['username'];
	}else{
		$error[] = 'Username can only consist of letters and numbers';
	}
	
	//password
	if(empty($_POST['username'])){
		$error[] = 'Please enter a password';
	}else{
		$password = mysqli_real_escape_string($connect, $_POST['password']);
	}
	
	if(empty($error)){
			//login code
			$result = mysqli_query( $connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password' " ) or die(mysqli_error($connect));
			if(mysqli_num_rows($result)==1){
				while($row = mysqli_fetch_array($result)){
					$_SESSION['id'] = $row['id'];
					header('Location:data_home.php');
				}
			}else{
				$error_message = '<span class="error">Username or Password is incorrect</span><br /><br />';
			}
	}else{
		$error_message = '<span class="error">';
		foreach($error as $key => $value){
			$error_message.= "$value";
		}
		$error_message.= "</span><br /><br />";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="header">
            <h1><span id="spanh1">heshima</span> property venture</h1>
            <div class="nav">
                <div id="nav">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="about us.php">About us</a></li>
                        <li><a href="properties.php">properties</a></li>
                    </ul>
                </div>
                <div id="login">
                    <a href="login.php" class="login">Login </a> <span id="slash">|</span> 
			        <a href="register.php" id="signin" class="register"> Register</a>
                </div>
            </div>
    </div>	
		<section id="right_side">
			<form id="generalform" method="post" action="" >
				<h4>Sign Up</h4>
				<?php 
					if(isset($error_message)){
						echo $error_message; 
					}	
				?>
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" class="input" name="username" maxlength="20"/>
				</div>
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" class="input" id="password" name="password" maxlength="20" />
				</div>
				<input type="submit" name="submit" id="submit" class="button" value="Login" />
			</form>
		</section>
		<?php echo ""; ?>
</body>
</html>