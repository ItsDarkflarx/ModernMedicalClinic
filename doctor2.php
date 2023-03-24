<!DOCTYPE html>

<?php 
session_start();
if (!isset($_SESSION['name'])) {
    header('location:home.php');
}
?>

<html>
<head>
	<title>Our Doctors</title>
	<link rel="stylesheet" type="text/css" href="F381.css">
    <script src="F381.js" type="text/javascript"></script>
</head>
<body>
	<div class="doctorBanner">
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
    <div class="doctors">
    	<div class="wrapper1200">
            <h2>Our Doctors</h2>
    		<div class="doctor1">
    			<div class="doctor1Photo"></div>
    			<div class="doctor1Details">
                    <h3 class="docName">Dr Corey Damien</h3>
                    <p>Dr Corey Damien graduated from the National University of Singapore (NUS), School of Medicine in 1997 with a Bachelor of Medicine and Bachelor of Surgery (MBBS). <br><br> After completing his initial training in various speciality fields of medicine and surgery, Dr Corey answered his calling in Family Medicine and pursued a Post-graduate Diploma in Family Medicine. He is an accredited Family Physician on the Register of Family Physicians in Singapore and has completed his training in Basic and Advanced Cardiac Life Support and Advanced Trauma Life Support.
                    </p>         
                </div>
    		</div>
            <div class="doctor2">
                <div class="doctor2Photo"></div>
                <div class="doctor2Details">
                    <h3 class="docName">Dr Josephine Sophocle</h3>
                    <p>Dr Josephine Sophocles graduated with a Bachelor of Medicine and a Bachelor of Surgery (MBBS) from the National University of Singapore (NUS) in 2013.<br><br>She rotated through clinical postings in Internal Medicine, Obstetrics & Gynaecology and Orthopaedic Surgery during her houseman year at SGH, obtaining the Best House Officer award upon completion of her housemanship. Subsequently, she spent more than 3 years in the ENT departments of CGH, SGH and KKH, actively involved in managing a wide variety of ear, nose, throat and neck conditions both conservatively and surgically before joining Modern Medical Clinic.
                    </p>         
                </div>
            </div>
            <div class="doctor3">
                <div class="doctor3Photo"></div>
                <div class="doctor3Details">
                    <h3 class="docName">Dr Joanne Fontaine</h3>
                    <p>Dr Joanne Fontaine graduated from the University of Southampton, United Kingdom. <br><br> She returned to Singapore upon graduation and practised in several hospitals including Singapore General Hospital, Tan Tock Seng Hospital, National University Hospital and Changi General Hospital, where she has gained experience in multiple specialities such as General Medicine, General Surgery, Obstetrics & Gynaecology, General Practice, Endocrinology, Gastroenterology and Geriatrics. After leaving the government service, she joined Raffles Medical Group for three years before joining Modern Medical Clinic.
                    </p>         
                </div>
            </div>
    	</div>
    </div>
    <div class="feedback">
        <div class="feedbackForm">
            <h2>Feedback / Questions</h2>
            <form action="mailhandler_feedback7.php" method="post">
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