<?php
    $first_name = filter_input(INPUT_POST, 'first_name');
    $first_name = trim($first_name);

    $last_name = filter_input(INPUT_POST, 'last_name');
    $last_name = trim($last_name);

    $email = filter_input(INPUT_POST, 'email');
    $email = trim($email);


    // Full Name concatenated with the first letter of both names capitalized
    $first_name = strtolower($first_name);
    $first_name = ucfirst($first_name);

    $last_name = strtolower($last_name);
    $last_name = ucfirst($last_name);

    $full_name = $first_name . ' ' . $last_name;
?>

<!--
    Title: Pawsitively Happy Pet Services Website Redesign
    Author: Nicholas Braddock
    School:  Southern Illinois University
    Term: Fall 2022
    Date: 10 Dec 2022
-->
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <!--Title, Stylesheet, and Meta-->
        <title>Thank You - Pawsitively Happy Pet Services</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@300&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-with, initial-scale=1.0">
        <meta name="keywords" content="Pet Sitting, Pets, Animal Care">
        <meta name="author" content="Nicholas Braddock">
        <link rel="icon" type="image/x-icon" href="images/favicon/favicon.svg">
    </head>
    <body class="index">
        <!--Logo Above Navigation-->
        <div class="alternateTopbar">
            <div class="topbar-image">
                <a href="index.php">
                    <img src="images/logo/logo.png" alt="logo" width="200px">
                </a>
            </div>
            <!--Navigation Links-->
            <div class="navbar" id="myNavbar">
                <a href="index.php">Home</a>    
                <a href="services.php">Services</a>
                <a href="petPhotoGallery.php">Pet Photo Gallery</a>
                    <div class="dropdown navActive">
                        <button class="dropbtn">About Us
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="aboutOurTeam.php">About Our Team</a>
                            <a href="whyChooseUs.php">Why Choose Us?</a>
                            <a href="faq.php">FAQ</a>
                            <a href="joinOurTeam.php">Join Our Team</a>
                            <a href="testimonials.php">Testimonials</a>
                        </div>
                    </div>
                <a href="contactUs.php">Contact Us</a>
                <a href="https://www.timetopet.com/portal/phps" target="_blank">Client Portal</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <main class="greyBackground">
            <h1 class="center">Application Successfully Submitted</h1>
            <p>Thank you <?php echo $full_name; ?> for applying for a job at Pawsitively Happy Pet Services.</p>
            <p>We will reach out to you at <?php echo $email; ?> once we have reviewed your application and let 
            you know the next steps in our application process.</p>
            <br>
            <br>
        </main>
        <!--Footer - Same on every page-->
        <div class="alternateFooter">
            <h2 class="footerh2 footerItems">                    
                Pawsitively Happy Pet Services
            </h2>
            <p class="footerItems">
                <u>Servicing our clients within 15 minutes of:</u>
                <br>
                1001 S. Lincoln Ave.
                <br>
                O'Fallon, IL 62269
            </p>
            <!--Map-->
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.8343718382757!2d-89.91354448451868!3d38.58366177962025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887606bbf5922e0d%3A0xf86e074217721f60!2s1001%20S%20Lincoln%20Ave%2C%20O&#39;Fallon%2C%20IL%2062269!5e0!3m2!1sen!2sus!4v1662761414492!5m2!1sen!2sus" width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="footerItems"></iframe>
            <br>
            <br>
            <!--Buttons on the bottom of each page-->
            <div class="footerButtonsLayout">
                <!--Links to the Contact Us Page-->
                <a href="contactUs.php" class="buttonBlue footerInquire">Inquire Now</a>
                <!--Links to the Facebook Page-->
                <a href="https://www.facebook.com/PawsitivelyHappyPetServices/" target="_blank" class="buttonBlue footerFacebook">Facebook</a>
                <!--Links to the Instagram Page-->
                <a href="https://www.instagram.com/pawsitivelyhappypetservices/" target="_blank" class="buttonBlue footerInstagram">Instagram</a>
                <!--Links to the Nextdoor Page-->
                <a href="https://nextdoor.com/pages/pawsitively-happy-pet-services-o-fallon-il/" target="_blank" class="buttonBlue footerNextdoor">Nextdoor</a>
            </div>
        </div>
        <!--Allows the navbar to adjust depending on the screen size-->
        <script>
            function myFunction(){
                var x = document.getElementById("myNavbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } else {
                    x.className = "navbar";
                }
            }
        </script>
    </body>
</html>