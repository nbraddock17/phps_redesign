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
        <title>Pet Photo Gallery - Pawsitively Happy Pet Services</title>
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
        <div class="topbar">
            <div class="topbar-image">
                <a href="index.php">
                    <img src="images/logo/logo.png" alt="logo" width="200px">
                </a>
            </div>
            <!--Navigation Links-->
            <div class="navbar" id="myNavbar">
                <a href="index.php">Home</a>
                <a href="services.php">Services</a>
                <a href="petPhotoGallery.php" class="navActive">Pet Photo Gallery</a>
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
        <main class="blueBackground">
            <h1>
                Pet Photo Gallery
            </h1>
            <p>
                The FurBabies we visit each day bring a smile to our faces. We hope to share that excitement with you! We 
                do highlight client's FurBabies in social media post as well.
            </p>
            <!--Dogs-->
            <div class="gallerySection">
                <h2>
                    Our Tail-Wagging Pups
                </h2>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Allie.png" alt="Allie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Annie.png" alt="Annie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Archie Holder.png" alt="Archie Holder - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Archie Hughes.png" alt="Archie Hughes - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Augie.png" alt="Augie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Balto.png" alt="Balto - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bandit.png" alt="Bandit - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bella Baker.png" alt="Bella Baker - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bella Dreyer.png" alt="Bella Dreyer - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bentley.png" alt="Bentley - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bernie.png" alt="Bernie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Betty.png" alt="Betty - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Birdie.png" alt="Birdie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Blake.png" alt="Blake - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Bo.png" alt="Bo - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Brutus.png" alt="Brutus - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Buster.png" alt="Buster - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Cammie.png" alt="Cammie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Charlie.png" alt="Charlie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Chevy.png" alt="Chevy - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Chief.png" alt="Chief - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Chloe.png" alt="Chloe - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Clover.png" alt="Clover - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Cooper.png" alt="Cooper - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Daisy McMillin.png" alt="Daisy McMillin - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Daisy Roberts.png" alt="Daisy Roberts - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Dixie.png" alt="Dixie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Duke Hawkins.png" alt="Duke Hawkins - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Duke Turner.png" alt="Duke Turner - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Ella.png" alt="Ella - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Fergus Kelly.png" alt="Fergus - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Fergus Ward.png" alt="Fergus Ward - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Finley.png" alt="Finley - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Finn.png" alt="Finn - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Forrest.png" alt="Forrest - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Gordy.png" alt="Gordy - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Gracie.png" alt="Gracie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Gus.png" alt="Gus - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Hana.png" alt="Hana - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Harper Harrison.png" alt="Harper Harrison - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Harper Hellin.png" alt="Harper Hellin - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Hattie.png" alt="Hattie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Hazel.png" alt="Hazel - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Holley.png" alt="Holley - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Huey.png" alt="Huey - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Iggy.png" alt="Iggy - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Jake.png" alt="Jake - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Jax.png" alt="Jax - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Karl.png" alt="Karl - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Katie.png" alt="Katie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Kipper.png" alt="Kipper - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Kobie.png" alt="Kobie - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Koda.png" alt="Koda - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Lenny.png" alt="Lenny - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Liberty.png" alt="Liberty - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Lilah.png" alt="Lilah - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Lola.png" alt="Lola - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Lucy.png" alt="Lucy - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Lugnut.png" alt="Lugnut - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Maddie.png" alt="Maddie - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Maebelle.png" alt="Maebelle - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Maisy Grace.png" alt="Maisy Grace - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Maizee.png" alt="Maizee - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Marley.png" alt="Marley - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Max.png" alt="Max - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Merle.png" alt="Merle - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Milo.png" alt="Milo - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Mimi.png" alt="Mimi - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Minkah.png" alt="Minkah - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Molly.png" alt="Molly - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Moxie.png" alt="Moxie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Murphy.png" alt="Murphy - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Nala.png" alt="Nala - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Oakley.png" alt="Oakley - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Odin.png" alt="Odin - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Otis.png" alt="Otis - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Peggy.png" alt="Peggy - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Posh.png" alt="Posh - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Potter.png" alt="Potter - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Quincy.png" alt="Quincy - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Raider.png" alt="Raider - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Remi.png" alt="Remi - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Rocky.png" alt="Rocky - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Roscoe.png" alt="Roscoe - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Rousch.png" alt="Rousch - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Roux.png" alt="Roux - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Rowan.png" alt="Rowan - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Roxy.png" alt="Roxy - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Rudy.png" alt="Rudy - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Saoirse.png" alt="Saoirse - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Scout.png" alt="Scout - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Skylar.png" alt="Skylar - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Snowball.png" alt="Snowball - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Sophie.png" alt="Sophie - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Stella.png" alt="Stella - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Tader.png" alt="Tader - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Teddy.png" alt="Teddy - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Theo.png" alt="Theo - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Truman.png" alt="Truman - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/tucker.png" alt="Tucker - Dog" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Wrigley.png" alt="Wrigley - Dog" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/dogs/Yogi.png" alt="Yogi - Dog" class="galleryImg">
                    </div>
                </div>
            </div>
            <!--Cats-->
            <div class="gallerySection">
                <h2>
                    Our Purrfect Cats
                </h2>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Bagheera.png" alt="Bagheera - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Baloo.png" alt="Baloo - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Bear.png" alt="Bear - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Beatrix.png" alt="Beatrix - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Blue.png" alt="Blue - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Boots.png" alt="Boots - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Butterscotch.png" alt="Butterscotch - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Casey.png" alt="Casey - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Charlie.png" alt="Charlie - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Col. Sanders.png" alt="Col. Sanders - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Dixie.png" alt="Dixie - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Diyah.png" alt="Diyah - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Donovan.png" alt="Donovan - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Evee.png" alt="Evee - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Fiona.png" alt="Fiona - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Frannie.png" alt="Frannie - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Freddie.png" alt="Freddie - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Gabby.png" alt="Gabby - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Ginger.png" alt="Ginger - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Gracie.png" alt="Gracie - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Hue.png" alt="Hue - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Iso.png" alt="Iso - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Jasper.png" alt="Jasper - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Lily Davies.png" alt="Lily Davies - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Lily Starr.png" alt="Lily Starr - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Loki.png" alt="Loki - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Louie.png" alt="Louie - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Lucy.png" alt="Lucy - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Macushla.png" alt="Macushla - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Magic.png" alt="Magic - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Mima.png" alt="Mima - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Miyo.png" alt="Miyo - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Momo.png" alt="Momo - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Myrtle.png" alt="Myrtle - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Oakley.png" alt="Oakley - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Oliver.png" alt="Oliver - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Onyx.png" alt="Onyx - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Poppy.png" alt="Poppy - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Rachael.png" alt="Rachael - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Rebel.png" alt="Rebel - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Reed.png" alt="Reed - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Remy.png" alt="Remy - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Russell.png" alt="Russell - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Sassafras.png" alt="Sassafras - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Smudge.png" alt="Smudge - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Tiger.png" alt="Tiger - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Tigger.png" alt="Tigger - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Tina.png" alt="Tina - Cat" class="galleryImg">
                    </div>
                </div>
                <div class="row">
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Tron.png" alt="Tron - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Twinkle.png" alt="Twinkle - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Whiskey.png" alt="Whiskey - Cat" class="galleryImg">
                    </div>
                    <div class="column4-22c">
                        <img src="images/petPhotoGallery/cats/Yara.png" alt="Yara - Cat" class="galleryImg">
                    </div>
                </div>
            </div>
        </main>
        <!--Footer - Same on every page-->
        <div class="footer">
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