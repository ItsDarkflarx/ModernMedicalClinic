<!DOCTYPE html>
<html>
<head>
	<title>Our Services</title>
	<link rel="stylesheet" type="text/css" href="F381.css">
    <script src="F381.js" type="text/javascript"></script>
</head>
<body>
	<div class="serviceBanner">
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
    <div class="service">
        <div class="serviceWrapper">
            <h2>Our Services</h2>
            <table>
                <tr>
                    <td>
                        <div class="service1">
                            <div class="serviceIcon1"></div>
                            <h3>Acute and Chronic Care</h3>
                            <a href="javascipt:()" onclick="showPopup1();">Learn More</a>
                        </div>
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon2"></div>
                            <h3>Geriatric Care</h3>
                            <a href="javascipt:()" onclick="showPopup2();">Learn More</a>
                        </div> 
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon3"></div>
                            <h3>Health Screening</h3>
                            <a href="javascipt:()" onclick="showPopup3();">Learn More</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="service1">
                            <div class="serviceIcon4"></div>
                            <h3>Lady Doctors</h3>
                            <a href="javascipt:()" onclick="showPopup4();">Learn More</a>
                        </div>
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon5"></div>
                            <h3>Men and Women's Health</h3>
                            <a href="javascipt:()" onclick="showPopup5();">Learn More</a>
                        </div>  
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon6"></div>
                            <h3>Vaccination</h3>
                            <a href="javascipt:()" onclick="showPopup6();">Learn More</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="service1">
                            <div class="serviceIcon7"></div>
                            <h3>Medical Examinations</h3>
                            <a href="javascipt:()" onclick="showPopup7();">Learn More</a>
                        </div> 
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon8"></div>
                            <h3>Specialist Referral</h3>
                            <a href="javascipt:()" onclick="showPopup8();">Learn More</a>
                        </div>  
                    </td>
                    <td>
                        <div class="service2">
                            <div class="serviceIcon9"></div>
                            <h3>Minor Surgery / Procedures</h3>
                            <a href="javascipt:()" onclick="showPopup9();">Learn More</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
     <div class="feedback">
        <div class="feedbackForm">
            <h2>Feedback / Questions</h2>
            <form action="mailhandler_feedback3.php" method="post">
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
    <div class="popup" id="popup1">
        <div class="blanket"></div>
        <div class="content1">
            <h2>Acute & Chronic Care</h2>
            <p>
                An acute illness or injury is a medical problem with rapid onset. Our acute care includes treating and managing conditions such as common cold and flu, aches and pains, gastric discomfort, minor cuts and wounds, etc.
                <br><br> 
                Our doctors also treat chronic illnesses, which involve managing long-term conditions such as diabetes, heart disease, high cholesterol, high blood pressure, asthma and others.
                <br><br>
                Our acute medical care services include, but are not limited to:
                <br><br> 
                1. Allergies<br>
                2. Asthma<br>
                3. Cough and flu<br>
                4. Diarrhoea<br>
                5. Fever<br>
                6. Gastric discomfort<br>
                <br><br>
                Our chronic medical care services include, but are not limited to:
                <br><br>
                1. Diabetes<br>
                2. High blood pressure<br>
                3. High cholesterol<br>
                4. Asthma
            </p>
            <button class="close" onclick="hidePopup1();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup2">
        <div class="blanket"></div>
        <div class="content2">
            <h2>Geriatric Care</h2>
            <p>
                Our geriatric care caters to the health needs of our senior and elderly patients. Some of the geriatric syndromes we manage include dementia, difficulties in walking, frequent falls, memory loss, incontinence and others.
                <br><br> 
                All Pioneer Generation (PG) and Community Health Assist Scheme (CHAS) cardholders can enjoy subsidised medical care at all Modern Medical Clinic™ outlets.
                <br><br>
                Our geriatric care services include, but are not limited to:
                <br><br> 
                1. Chronic disease management<br>
                2. Dementia<br>
                3. Incontinence<br>
                4. Joint and bone care<br>
            </p>
            <button class="close" onclick="hidePopup2();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup3">
        <div class="blanket"></div>
        <div class="content3">
            <h2>Health Screening</h2>
            <p>
                We believe that prevention is just as, if not, more important than treatment. Early detection of serious conditions such as cancer and high blood pressure can make a difference between life and death.
                <br><br> 
                At Modern Medical Care, we offer a selection of holistic health screening packages that is customised for different demographics. To find out more about our health screening services, visit any of our clinics and have a chat with our friendly doctors.
                <br><br>
                A wide range of health screening packages are available, but are not limited to:
                <br><br> 
                1. Cervical cancer<br> 
                2. Chronic diseases<br> 
                3. Cholesterol panel<br> 
                4. Colorectal cancer<br> 
                5. Diabetic screening<br> 
                6. Full blood count<br> 
                7. Kidney and liver function<br> 
                8. Tumour markers<br> 
                9. Men & women’s health screening
            </p>
            <button class="close" onclick="hidePopup3();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup4">
        <div class="blanket"></div>
        <div class="content4">
            <h2>Appointments with Lady GP Doctor</h2>
            <p>
                We recognised the need to offer our female patients various medical services that are gender-specific, especially for women-related health and medical conditions. We have lady doctors providing women’s health services and medical checkups for gender-sensitive health conditions.
                <br><br> 
                Our women’s health services and examinations include, but are not limited to:
                <br><br>
                1. Antenatal and postnatal check-up<br>
                2. Family planning<br>
                3. Menopause<br>
                4. Weight management<br>
                5. Vaccination against cervical cancer – Human Papillomavirus (HPV) vaccine<br>
                6. Health screening<br>
                7. Pap smear test
            </p>
            <button class="close" onclick="hidePopup4();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup5">
        <div class="blanket"></div>
        <div class="content5">
            <h2>Men & Women’s Health</h2>
            <p>
                Common men’s health conditions treated in our clinics include urological disease, erectile dysfunction, prostate cancer screening, weight management and others.
                <br><br> 
                Some of the women’s health conditions we treat include gynaecological screening, pap smears, antenatal care, postnatal care, weight management, family planning as well as detection and treatment of osteoporosis.
                <br><br>
                Our men’s health medical care services include, but are not limited to
                <br><br> 
                1. Andropause<br> 
                2. Fertility management<br> 
                3. Prostate cancer screening<br> 
                4. eight management
                <br><br>
                Our women’s health medical care services include, but are not limited to:
                <br><br>
                1. Antenatal and postnatal check-up<br>
                2. Family planning<br>
                3. Menopause<br>
                4. Weight management<br>
            </p>
            <button class="close" onclick="hidePopup5();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup6">
        <div class="blanket"></div>
        <div class="content6">
            <h2>Vaccination</h2>
            <p>
                Vaccination provides you with protection against infectious diseases. A wide range of vaccinations is available at Modern Medical Clinic for everyone, including infants, children, adults and elderly, and for general well-being and travel.
                <br><br> 
                Now you can use your Medisave for the approved vaccines under the National Adult Immunisation Schedule (NAIS) if you are aged 18 and above. Visit our clinic to find out more about these vaccinations.
                <br><br>
                Some of our vaccination programmes include, but are not limited to:
                <br><br> 
                1. Chicken pox<br>
                2. Hepatitis A and B<br>
                3. Immunisation for infants and children<br>
                4. Influenza<br>
                5. National Adult Immunisation Schedule (NAIS)<br>
                6. Overseas travel
            </p>
            <button class="close" onclick="hidePopup6();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup7">
        <div class="blanket"></div>
        <div class="content7">
            <h2>Medical Examinations</h2>
            <p>
                Pre-employment medical examination for foreign workers and domestic helpers/ maids are required in Singapore before their work permits are issued. Work Permits will only be issued if they pass the medical examination. Otherwise, they cannot commence work and will have to be sent home. This ensures that workers are medically fit to work in Singapore.
                <br><br> 
                Our medical examinations for Foreign Worker include, but are not limited to:
                <br><br>
                1. MOM Work permit (New application / Renewal)<br>
                2. Employment pass (EP)<br>
                3. Dependent pass<br>
                4. S-pass
                <br><br> 
                Our medical examinations for Foreign Domestic Worker (FDW) / Domestic Helpers/ Maids include, but are not limited to:
                <br><br>
                1. Ministry of Manpower maid employment medical check-up<br>
                2. Six-monthly medical examination (6ME)<br>
                3. Four types of infectious disease (tuberculosis, HIV, syphilis and malaria)
            </p>
            <button class="close" onclick="hidePopup7();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup8">
        <div class="blanket"></div>
        <div class="content8">
            <h2>Specialist Referral</h2>
            <p>
                We have carefully selected a network of more than 250 experienced specialists from 22 medical specialties offering quality, accessible and comprehensive specialist care for our patients who require special attention in order to deliver better care.
                <br><br> 
                With the assurance of fee transparency and measures to safeguard patients’ safety, we work closely with our specialist partners to maintain the standard of care for our patients.
                <br><br>
                Our Specialist Panel of doctors provide expertise in the fields not limited to the following:
                <br><br> 
                1. Ear, Nose and Throat (ENT) surgery<br>
                2. Cancer treatment<br>
                3. Colorectal surgery<br>
                4. Hip and knee surgery<br>
                5. Kidney dialysis<br>
                6. Orthopaedic surgery
            </p>
            <button class="close" onclick="hidePopup8();">Close</button>
        </div>
    </div>
    <div class="popup" id="popup9">
        <div class="blanket"></div>
        <div class="content9">
            <h2>Minor Surgery/ Procedure</h2>
            <p>
                Our doctors are able to handle selected minor surgeries or procedures in our clinic setting. These include excisions, incisions and other surgical procedures that can be carried out at the clinic.
                <br><br> 
                Our minor surgery and procedure include, but are not limited to:
                <br><br>
                1. Cyst, lumps and bumps removal<br> 
                2. Draining of abscess and pus<br> 
                3. Ingrown toe-nails removal<br> 
                4. Removal of sutures<br> 
                5. Stitching<br> 
                6. Surgical dressing and wound care 
            </p>
            <button class="close" onclick="hidePopup9();">Close</button>
        </div>
    </div>
</body>
</html>