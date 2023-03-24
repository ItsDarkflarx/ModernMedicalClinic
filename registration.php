<!DOCTYPE html>
<html>
<head>
	<title>Registration / Travel Declaration</title>
	<link rel="stylesheet" type="text/css" href="F381.css">
    <script src="F381.js" type="text/javascript"></script>
</head>
<body>
	<div class="registrationBanner">
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
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="registration">
        <div class="regisWrapper">
            <div class="regisForm">
                <h2>Modern Medical Care Registration Form</h2>
                <p>Please fill in the form below. This is for your account to book appointments with us.</p>
                <hr>
                <form action="register.php" method="post">
                    <input type="text" id="regisName" name="regisName" placeholder="Name" required pattern="[a-zA-Z+\s]{1,}">
                    <input type="text" id="regisNric" name="regisNric" placeholder="NRIC" required pattern="[A-Z0-9]{9,}">
                    <input type="email" id="regisEmail" name="regisEmail" placeholder="Email" required pattern="[a-zA-z0-9.-]+@([\w]+\.){1,3}[\w]{2,3}$">
                    <input type="number" id="regisNumber" name="regisContact" placeholder="Phone">
                    <input type="password" id="regisPassword" name="regisPassword" placeholder="Password" required pattern="[a-zA-Z0-9]{8,}">
                    <input type="submit" id="regisSubmit" name="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedbackForm">
            <h2>Feedback / Questions</h2>
            <form action="mailhandler_feedback5.php" method="post">
                <input type="text" id="feedBackName" name="feedName" placeholder="Name">
                <input type="email" id="feedBackEmail" name="feedEmail" placeholder="Email">
                <input type="number" id="feedBackPhone" name="feedPhone" placeholder="Phone">
                <input type="text" id="feedBackSubject" name="feedSubject" placeholder="Subject">
                <input type="text" id="feedBackMessage" name="feedMessage" placeholder="Message">
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