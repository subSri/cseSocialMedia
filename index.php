<?xml version = "1.0" encoding = "UTF-8"?>
<!DOCTYPE = "html PUBLIC">
<html xmlns=" ">

<html style="background-image:url(a.jpg)">
	<head>
		<title>SignUpPage</title>
		<link rel="stylesheet" href="login.css">
			
	</head>
	<body>
        
	<div class="outFrame">
		<div class="inFrame">
			<div class="leftpic">
                <img src="signUp.jpg" height="100%" width="100%">
                <div class="textonpic">
                <h2 style="color:white;">Sign-Up and be a part of our world!!</h2>
                </div>
			</div>
			<div class="rightact">
                 <div class="myIcon"><img src="blueIcon.jpg" height="30px" width="30px"></div>
				<form class="block1" method = "post" action="process.php"  enctype = "multipart/form-data">
                    <h3 class="2">SIGN-UP FORM</h3>
					<input type="text" name = "username" placeholder="Enter your Name"><br>
                    <input type="text"  name = "emailid" placeholder="Enter your Email-Id"><br>
					<input type="Password" name="pass" placeholder="Enter your Password"><br>
                    <input type="Password" name="confpass" placeholder="Confirm your Password"><br><br>
					<input type="submit" class="LoginButton" value="Sign Up"><br><br>
					<a href="LoginPage.html" style="float:right; margin-right: 50px; font-family: monospace; color:#008CBA;">LOGIN INSTEAD?</a>
                </form>
				
			</div>
		</div>
	</div>
    </body></html>