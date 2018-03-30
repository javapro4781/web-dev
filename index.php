<?php
session_start();
include("connect.php");

//validating
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
	
	//fname
	if(empty($_POST['fname'])){
		$error[] = 'First Name cannot be empty. ';
	}else if( ctype_alnum($_POST['fname']) ){
		$fname = $_POST['fname'];
	}else{
		$error[] = 'First Name can only consist of letters and numbers';
	}
	
	//fname
	if(empty($_POST['mname'])){
		$error[] = 'Middle Name cannot be empty. ';
	}else if( ctype_alnum($_POST['mname']) ){
		$mname = $_POST['mname'];
	}else{
		$error[] = 'Middle Name can only consist of letters and numbers';
	}
	
	//lname
	if(empty($_POST['lname'])){
		$error[] = 'Last Name cannot be empty. ';
	}else if( ctype_alnum($_POST['lname']) ){
		$lname = $_POST['lname'];
	}else{
		$error[] = 'Last Name can only consist of letters and numbers';
	}
	
	//email validation
	if(empty($_POST['email'])){
		$error[] = 'Please enter your email. ';
	}else if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])){
		$email = mysqli_real_escape_string($connect, $_POST['email']);
	}else{
		$error[] = 'Your e-mail address is invalid. ';
	}
	
	//password
	if(empty($_POST['username'])){
		$error[] = 'Please enter a password';
	}else{
		$password = mysqli_real_escape_string($connect, $_POST['password']);
	}
	
	if(empty($error)){
		$result = mysqli_query($connect, "SELECT * FROM user WHERE email='$email' OR username='$username' ") or die(mysqli_error($connect));
		if(mysqli_num_rows($result)==0){
			$activation = md5(uniqid(rand(), true));
			$result2 = mysqli_query($connect, " INSERT INTO user (fname, mname, lname, username, password, email) VALUES('$fname','$mname','$lname','$username','$password','$email') ") or die(mysql_error());
			if(!$result2){
				die('Could not insert into database: '.mysqli_error($connect));
			}else{
				header('Location: login.php?x=1');
			}
		}else{
			header('Location: login.php?x=2');
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>Heshima properties</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
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
			        <a href="" id="signin" class="register"> Register</a>
                </div>
            </div>

        </div>
        <div id="top">
        </div>
        <div id="down">
            <div id="down1">
                <h1>houses for sale in kenya</h1>
            </div>
        <div id="downlinks">
            <div id="down2">
                <ul>
                    <li><a href="properties Nairobi.php">Nairobi</a></li>
                    <li><a href="properties Nakuru.php">Nakuru</a></li>
                    <li><a href="properties Naivasha.php">Naivasha</a></li>
                    <li><a href="properties Laikipia.php">Laikipia</a></li>
                </ul>
            </div> 
            <div id="down3">
                <ul>
                    <li><a href="properties kisumu.php">kisumu</a></li>
                    <li><a href="properties%20kericho.php">kericho</a></li>
                </ul>
            </div>
            <div id="down4">
                <ul>
                    <li><a href="properties Eldoret.php">Eldoret</a></li>
                    <li><a href="properties Kajiado.php">Kajiado</a></li>
                    <li><a href="properties kiambu.php">kiambu</a></li>
                    <li><a href="properties machakos.php">machakos</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div id="bottom">
           <h2>new year offer</h2>
            
            <div class="slideshow-container">

<div class="mySlides fade" height="500px">
  <div class="numbertext">offer</div>
  <img src="images/pic4.jpg" style="width:100%" height="500px">
</div>

<div class="mySlides fade" height="500px">
  <div class="numbertext">offer</div>
  <img src="images/pic1.jpg" style="width:100%" height="500px">
</div>

<div class="mySlides fade" height="500px">
  <div class="numbertext">offer</div>
  <img src="images/pic.jpg" style="width:100%" height="500px">
  <div class="text">diani real estate</div>
</div>
<div class="mySlides fade" height="500px">
  <div class="numbertext">offer</div>
  <img src="images/pic5.jpg" style="width:100%" height="500px">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

        </div>
        
        <div id="center">
            <div id="examplesimg3">
                <div id="text3">
                    <h3>mega housing projects</h3>
                </div>
            </div>
            <div id="examples">
                <h3>real examples from our customers</h3>
            </div>
            <div id="examples1">
                <div id="examplesimg">

                </div>

                <div id="examplesimg2">

                </div>
                <div id="text">
                    <h3>selling solutions not promises</h3>
                </div>
                <div id="text1">
                    <h3>invest with us & watch your money grow<br></h3>
                </div>
            </div>
        </div>
        <div class="footer">
           <div id="subfooter">
               <h3><span id="subfooterspan">Who We Are</span><br><br>Heshima Property Ltd is a fully-fledged real estate company registered in Kenya and provides bespoke products and services. We source, identify and develop value-based properties and services for individuals and businesses across all social and economic strata. We offer unmatched service to our clients.</h3>
           </div> 
           <div id="subfooter1">
               <section id="right_side">
                
			<form id="generalform" method="post" action=""  >
				<h3 class="h3">Sign Up</h3>
				<p class="p">Please fill this form to create an account.</p>
				<?php 
					if(isset($error_message)){
						echo $error_message; 
					}	
				?>
				<div class="field">
					<input type="text" class="input" id="fname" name="fname" maxlength="20" placeholder="first name"/>
				</div>
				<div class="field">
					
					<input type="text" class="input" id="mname" name="mname" maxlength="20" placeholder="middle name"/>
				</div>
				<div class="field">
					<input type="text" class="input" id="lname" name="lname" maxlength="20" placeholder="last name"/>
				</div>
				<div class="field">
					<input type="text" class="input" id="username" name="username" maxlength="20" placeholder="username"/>
				</div>
				<div class="field">
					<input type="text" class="input" id="email" name="email" maxlength="80" placeholder="email"/>
				</div>
				<div class="field">
					<input type="password" class="input" id="password" name="password" maxlength="20" placeholder="password"/>
				</div>
				<input type="submit" name="submit"  id="submit" value="Submit" />
				<input type="reset" class="reset" value="Reset">
				<p>Already have an account? <a href="login.php">Login here</a>.</p>
			</form>
		</section>
           </div>
            <?php echo ""; ?>

           <div id="subfooter2">
            <h3>find houses</h3><br>
             <ul>
                    <li><a href="properties%20Nairobi.php">Nairobi</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="properties.php">Nakuru</a></li>
                    <br>
                    <li><a href="properties%20Naivasha.php">Naivasha</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="properties.php">Laikipia</a></li>
                    <br>
                    <li><a href="properties%20eldoret.php">Eldoret</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="properties%20kajiado.php">kajiando</a></li><br>
                    <li><a href="properties%20kiambu.php">Kiambu</a></li><br>
                    <li><a href="properties%20kisumu.php">Kisumu</a></li><br>
                    <li><a href="properties%20kericho.php">Kericho</a></li><br>
                </ul>
           </div>
           <h4>Copyright © 2018 www.Heshima property.co.ke - All rights reserved | site by Hightech ICT services Ltd</h4>
        </div>
    </div>
</body>
</html>

