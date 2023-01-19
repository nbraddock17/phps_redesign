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
        <title>Services - Pawsitively Happy Pet Services</title>
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
                <a href="services.php" class="navActive">Services</a>
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
                <a href="contactUs.php">Contact Us</a>
                <a href="https://www.timetopet.com/portal/phps" target="_blank">Client Portal</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <main class="greyBackground">
            <div>
                <h1 class="servicesPageTitle center">
                    Services
                </h1>
                <div class="row">
                    <div class="serviceFirstRow">
                        <!--Pet Sitting-->
                        <div class="column4-22c">
                            <img src="images/services/petSitting.png" height="175">
                            <h3>
                                Pet Sitting
                            </h3>
                            <p class="left">
                                We offer flexible scheduling to owner preference, within reason. We will feed, water and play with 
                                your pets according to your instructions outlined in the PetParent Contract. We offer drop in visits 
                                as well if you have a long day at the office or a full day away from the house. This service does 
                                include dog walking and house sitting services in order to fit your needs, at no extra cost.
                            </p>
                        </div>
                        <!--Dog Walking-->
                        <div class="column4-22c">
                            <img src="images/services/dogWalking.png" height="175">
                            <h3>
                                Dog Walking
                            </h3>
                            <p class="left">
                                We offer dog walking for PetParents who cannot come home to care for their pup while they are at work. 
                                We offer this service with flexibility to meet your daily schedule. This is a separate service from 
                                pet sitting and used mainly for daily visits.
                            </p>
                        </div>
                    </div>
                    <div class="serviceSecondRow">
                        <!--Pet Waste Removal-->
                        <div class="column4-22c">
                            <img src="images/services/wasteRemoval.png" height="175">
                            <h3>
                                Pet Waste Removal
                            </h3>
                            <p class="left">
                                We offer one time/initial pet waste removal, weekly pet waste removal, or bi-weekly pet waste removal 
                                from your yard. We use our own tools and bags. Off-site disposal of waste is an additional fee.
                            </p>
                        </div>
                        <!--House Sitting-->
                        <div class="column4-22c">
                            <img src="images/services/houseSitting.png" height="175">
                            <h3>
                                House Sitting
                            </h3>
                            <p class="left">
                                We offer this service separate from pet sitting for individuals without pets at home. Services to 
                                include watering plants, bringing in mail and newspapers, rotating lights and ensuring home is secured 
                                by locking windows and doors upon exit. We also report any suspicious activity. The aspects of this 
                                service are included in the pet sitting at no addition cost.
                            </p>
                        </div>
                    </div>
                </div>
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