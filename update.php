<!DOCTYPE html>

<?php 
session_start();
require "showBook.php";
if (!isset($_SESSION['name'])) {
    header('location:home.php');
}
?>

<html>
<head>
	<title>Appointment Form</title>
	<link rel="stylesheet" type="text/css" href="F381.css">
    <script src="F381.js" type="text/javascript"></script>

</head>
<body onload="init()">
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
            <li><a href="sessionBreak.php">Logout</a></li>
            <li><a href="booking.php">Appointment Form</a></li>
            <li><a href="service2.php">Service Provided</a></li>
            <li><a href="doctor2.php">Our Doctors</a></li>
            <li><a href="home2.php">Home</a></li>
        </ul>
    </nav>
    <div class="update">
        <div class="updateWrapper">
            <div class="updateForm">
                <h2>Rescheduling Form</h2>
                <p>You have currently have an Appointment with <strong>Dr <?php echo $_SESSION['doctor'] ?></strong> on the <strong><?php echo $_SESSION['day'] ?></strong> at <strong><?php echo $_SESSION['timing'] ?></strong></p>
                <hr>
                <br>
                <p id="updateP">Please fill in the form below if you wish to reschedule.</p>
                <form action="updateBook.php" method="post">
                    <input type="date" id="updateDate" name="updateDate" placeholder="Date" min="2020-11-14" required>
                    <select id="updateDoctor" name="updateDoctor" onchange="doctorSelect(this.id,'updateTime')" required>
                        <option value="" selected disabled hidden>Choose Doctor</option>
                        <option value="Corey">Dr Corey Damien</option>
                        <option value="Josephine">Dr Josephine Sophocle</option>
                        <option value="Joanne">Dr Joanne Fontaine</option>
                    </select>
                    <select id="updateTime" name="updateTime" required>
                        <option value="" selected disabled hidden>Select Doctor First</option></select>
                    <input type="submit" id="updateSubmit" name="submit" value="Reschedule">
                </form>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedbackForm">
            <h2>Feedback / Questions</h2>
            <form action="mailhandler_feedback10.php" method="post">
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