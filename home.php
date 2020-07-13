
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	input:focus
	{
		background: aqua;
	}
</style>
	<link rel="stylesheet" type="text/css" href="home_page.css">

<script type="text/javascript" src="home_script.js"></script>
</head>

<body>
	<h1>Git-HUB</h1>
	<div class="main-pop-up">
   			<img id="cancel-icon" src="download.jpg" onclick="hide_main_popup()">
   			<div id="left-shape">
            </div>
            <div id="right-shape"></div>
   			<div class="top-portion">Best Offers</div>
   			<div class="content">
   				<div>1. Apple Iphone 11, 20% off <br /> Now available in 55000₹ <label id="price">68000₹.</label></div>
   			</div>
   		</div>
	<div id="pop-up">
		<div id="image">
			<img id="cancle-image" onclick="hide_popup()" src="download.jpg">
		</div>
		<div>Already Register</div>
		<div><button id="login-button" onclick="show_login_popup()">Login</button></div>
	</div>
	<div id="pop-up-registration">
		<div id="image">
			<img id="cancle-image" onclick="hide_popup_registration()" src="download.jpg">
		</div>
			<form action="" method="post" onsubmit="return check_password()">
			<div>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input class="input-field" type="text" name="name" placeholder="Name"></div>
			<div>User E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input class="input-field" type="email" name="email" placeholder="E-mail"></div>
			<div>User GENDER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: MALE <input type="radio" class="gender-radio" name="gender" value="male"> FEMALE <input type="radio" class="gender-radio" name="gender" value="FEMALE"></div>
			<div>User Password &nbsp;&nbsp;&nbsp;: <input class="input-field" id="pass" type="password" name="pass" placeholder="Password"></div>
	        <div>Confirm Password : <input class="input-field" id="con_pass" type="password" name="con_pass" placeholder="Confirm Password" oninput="check()" required></div>
	         
	            <div><input type="submit" id="submit-button" value="submit"></div>
		</form>
	</div>
	<div id="pop-up-login">
		<div id="image">
			<img id="cancle-image-login" onclick="hide_popup_login()" src="download.jpg">
		</div>
			<form action="login.php" method="post" onsubmit="return check_password()">
			<div>User E-mail &nbsp;&nbsp;: <input class="input-field" type="email" name="email" placeholder="abc@gmail.com"></div>
			<div>User Password : <input class="input-field" id="pass" type="password" name="pass" placeholder=""></div>
	         
	            <div><input type="submit" id="submit-button" value="submit"></div>
		</form>
	</div>
	<div id="wrapper">
		<header>
			
			<div id="left-container">
					<ul>
						<li style="background: black;">Home
							
						</li>
						<li>About 
							<ul>
								<li>Sub Menue 1</li>
								<li>Sub Menue 2 >
									<ul>
								<li>Sub Menue 1</li>
								<li>Sub Menue 2</li>
								<li>Sub Menue 3</li>
								<li>Sub Menue 4</li>
								<li>Sub Menue 5</li>
								<li>Sub Menue 6</li>
							</ul>
								</li>
								<li>Sub Menue 3</li>
							</ul>
						</li>

						<li>Services
							<ul>
								<li>Sub Menue 1 >
									<ul>
								<li onclick="show_main_pop_up()">Best Offers</li>
								<li>Sub Menue 2</li>
								<a href="http://awsonlineishwarbaislatest.s3-website.ap-south-1.amazonaws.com/" target="blank"><li>Games</li></a>
							</ul>
								</li>
								<li>Sub Menue 2</li>
								<li>Sub Menue 3</li>
							</ul>
						</li>	
						<li>Contact us
							<ul>
								<li>Sub Menue 1</li>
								<li>Sub Menue 2</li>
								<li>Sub Menue 3</li>
							</ul>
						</li>
					</ul>

			</div>
			
			<div id="right-container">
					<lable class="register-login" onclick="show_registration_popup()">Register</lable>	 | <lable onclick="show_login_popup()" class="register-login">Login</lable>
			</div>
		
	    </header>
	 </div>   
		<div class="registration-success-pop-up">Registration Successfull</div>


</body>
</html>

<?php
	require_once('connection.php');
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['gender'])&&isset($_POST['pass']))

	{
		$sql = "SELECT user_email from registration where user_email='$_POST[email]'";	

		$result= mysqli_query($connection,$sql);
		$row=$result->num_rows;
		if ($row==1) 
		{
			echo "<script>show_popup()</script>";
		}
		else
		{

		$sql ="INSERT INTO `registration`(`user_id`, `user_name`, `user_email`, `user_gender`, `user_password`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[gender]', '$_POST[pass]')";
		mysqli_query($connection,$sql);
					echo "<script>show_success();timer_on();</script>";
	
		}
	}
?>
