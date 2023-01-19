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
        <title>Contact Us - Pawsitively Happy Pet Services</title>
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
                    <div class="dropdown">
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
                <a href="contactUs.php" class="navActive">Contact Us</a>
                <a href="https://www.timetopet.com/portal/phps" target="_blank">Client Portal</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <main class="greyBackground">
            <!--Contact Us Page-->            
            <div class="row">
                <div class="column2-64">
                    <!--Top heading and description-->
                    <h2>
                        Contact Us Below
                    </h2>
                    <!--Line-->
                    <hr class="red3Line">
                
                    <p>
                        We would love to meet your Furbabies in their home environment so they can meet us where thy are 
                        comfortable. Your pets being Pawsitively Happy is our #1 priority!
                        <br>
                        <br>
                        The first consultation is free and flexible according to scheduling.
                        <br>
                        <br>
                        Once you place your inquiry below, we will review it and respond promptly with further steps to join 
                        our Pawsitively Happy Family along with your complimentary quote!
                    </p>
                </div>
                <!--Contact Information-->
                <div class="column2-29">
                    <h2>
                        Contact Information
                    </h2>

                    <hr class="red3Line">

                    <h4><u>Email:</u></h4>
                    <p>    
                        info@pawsitivelyhappypetservices.com
                        <br>
                    </p>
                    <h4><u>Phone:</u></h4>
                    <p>
                        618.581.6948
                        <br>
                    </p>
                    <h4><u>We service within 15 minutes from our office:</u></h4>
                    <p>
                        1001 S. Lincoln Ave.
                        <br>
                        O'Fallon, IL 62269
                    </p>
                </div>
            </div>
                <hr class="red3Line">
                <!--Form for submitting an inquiry-->
                <h2 class="center">Inquire Below</h2>
                <br>
                <form class="form" action="contactUsResponse.php" method="post">
                    <input type="hidden" name="action" value="process_data">
                    <!--PetParent Name-->
                    <label for="parentName">Pet Parent Name</label>
                    <br>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                    <br>
                    <br>
                    <!--Pet's Name-->
                    <label for="petsName">Pet/s Name</label>
                    <br>
                    <input type="text" id="pet_name" name="pet_name" required>
                    <br>
                    <br>
                    <!--Phone-->
                    <label for="phone">Phone - including area code</label>
                    <br>
                    <input type="tel" id="phone" name="phone" required>
                    <br>
                    <br>
                    <!--Email-->
                    <label for="email">Email</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <br>
                    <!--Message-->
                    <label for="message">Message</label>
                    <br>
                    <textarea id="message" name="message" rows="4" cols="75" required></textarea>
                    <br>
                    <br>
                    <!--Availability Preference-->
                    <label for="availability_preference">
                        Availability Preference - The start date of your desired trip
                    </label>
                    <br>
                    <input type="date" id="availability_preference" name="availability_preference" value="<?php echo date('m-d-Y'); ?>">
                    <br>
                    <br>
                    <!--Address-->
                    <label for="address">Address</label>
                    <br>
                    <input type="text" id="street_address" name="street_address" placeholder="Street Address" class="street_address" required>
                    <br>
                    <input type="text" id="city" name="city" placeholder="City" required>
                    <input type="text" id="state" name="state" placeholder="State" required>
                    <br>
                    <input type="text" id="zip" name="zip" placeholder="Zip" required>
                    <input type="text" id="country" name="country" placeholder="Country" required>
                    <br>
                    <br>
                    <input type="submit" class="buttonGrey">
                </form>
            </div>
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