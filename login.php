<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="F381.css">
    <script src="F381.js" type="text/javascript"></script>
</head>
<body>
	<div class="contactBanner">
        <div class="bannerWrapper1">
            <div class="title1"><h1>modern medical care</h1></div>
        </div>
        <div class="bannerWrapper2">
            <div class="title2"><h2>tailored to your needs</h2></div>
        </div>
    </div>
    <nav>
        <a class="logo"></a>
        <ul>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="service.php">Service Provided</a></li>
            <li><a href="doctor.php">Our Doctors</a></li>
            <li><a href="home.php">Home</a></li>
        </ul>
    </nav>
    <div class="login">
        <div class="loginWrapper">
            <div class="loginForm">
                <h2>Login</h2>
                <form action="loggin.php" method="post">
                    <p>Email</p>
                    <div class="loginIcon1"></div>
                    <input type="text" id="loginEmail" name="loginEmail" placeholder="Type your email" required>
                    <p>Password</p>
                    <div class="loginIcon2"></div>
                    <input type="password" id="loginPassword" name="loginPassword" placeholder="Type your password" required>
                    <input type="submit" id="loginSubmit" name="loginSubmit" value="Login">
                </form>
                <a href="registration.php">Sign Up!</a>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedbackForm">
            <h2>Feedback / Questions</h2>
            <form action="mailhandler_feedback4.php" method="post">
                <input type="text" id="feedBackName" name="name" placeholder="Name">
                <input type="email" id="feedBackEmail" name="email" placeholder="Email">
                <input type="number" id="feedBackPhone" name="phone" placeholder="Phone">
                <input type="text" id="feedBackSubject" name="subject" placeholder="Subject">
                <input type="text" id="feedBackMessage" name="message" placeholder="Message">
                <input type="submit" id="feedBackSubmit" name="submit" value="Send Message">
            </form>
        </div>
    </div>
    <div class="contactUs">
        <div class="contactUsWrapper">
                <div class="contact1">
                    <div class="contactLogo"></div>
                    <p>We believe in careful and collaborative treatment planning with you, to ensure excellence in your medical care.</p>
                </div>
                <div class="contact2">
                    <h3>Contact Us</h3>
                    <div class="contactIcon1"></div>
                    <p>PO Box - 50 Nanyang Ave, 639798<br> Singapore</p>
                    <div class="contactIcon2"></div>
                    <p class="p2">info@gmail.com</p>
                    <div class="contactIcon3"></div>
                    <p  class="p2">(+65) 679 117 44</p>
                </div>
                <div class="contact3">
                    <h3>Subscribe</h3>
                    <p>Get healthy news, tip and solutions to your problems from our experts</p>
                    <form>
                        <input type="email" id="subEmail" name="subEmail">
                        <input type="submit" id="subSubmit" name="subSubmit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="contactUsWrapper">
            <p class="footerDetails">&copy 2020 Modern Medical Care. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>