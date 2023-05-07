<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodWill</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Montserrat:ital,wght@0,100;0,200;1,
100&family=Poppins:wght@100;200;300;400;600;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,
400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!---------------HEADER--------------->
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo_goodwill.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><form action="home.php" method="post"><button type="submit" class="btn2">HOME</form></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><form action="index.php" method="post"><button type="submit" class="btn2">Login/Sign</form></li>
                    <li><a href="contact.html">CONTECTUS</a></li>
                    <li><form action="registration.html" method="post"><button type="submit" class="btn2">Registration</form></li>
                    <li><form action="logout.php" method="post"><button type="submit" class="btn2">LogOut</form></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>GOODWILL PUBLIC SCHOOL</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cumque explicabo assumenda! Eveniet molestias modi possimus <br> quaerat autem molestiae?</p>
            <a href="#" class="btn">Visit Us To know More</a>
        </div>
    </section>
    <!-------- COURSE -------------------------->
    <section class="course">
        <h1>Class We Have</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda officiis reiciendis quaerat temporibus <br>
            sapiente excepturi quisquam quos dicta repellendus illum </p>

            <div class="row">
                <div class="course-col">
                    <h3>Junior</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iure totam qui cum nobis sint! Omnis.</p>
                </div>
                <div class="course-col">
                    <h3>Primary</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iure totam qui cum nobis sint! Omnis.</p>
                </div>
                <div class="course-col">
                    <h3>Secondary</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iure totam qui cum nobis sint! Omnis.</p>
                </div>
            </div>
    </section>
    <!----------Campus------------------------------->
        <section class="campus">
            <h1>Our campus</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, veritatis.</p>
            <div class="row">
                <div class="campus-col">
                    <img src="images/building.jpeg" alt="campus image">
                    <div class="layer">
                        <h3>GoodWill</h3>
                    </div>
                </div>
            </div>
        </section>
    <!-----------Facilities--------------------------------->
    <section class="facilities">
        <h1>Our facilities</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis, culpa?</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/libarary.jpeg" alt="library image">
                <h3>Study Environment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, perspiciatis.</p>
            </div>
            <div class="facilities-col">
                <img src="images/playground.jpeg" alt="Ground image">
                <h3>Playground</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, perspiciatis.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.jpeg" alt="cafeteria image">
                <h3>GoodWill cafeteria</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, perspiciatis.</p>
            </div>
        </div>
    </section>

    <!-- ----------------Testimonials------------- -->
    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="images/user1.jpeg" alt="student image">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, corrupti?</p>
                    <h3>ANJALI KUMARI</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpeg" alt="student image">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, corrupti?</p>
                    <h3>ANUJ KUMAR</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>
    <!------------- Call to Action------------------------------------>
    <section class="cta">
        <h1>Admission Open For All Class Upto 6</h1>
        <a href="#" class="btn">CONTACT US</a>
    </section>

    <!-----------------Footer--------------------------------------  -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, tempore!</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>

    <!-----------JAVA SCRIPT TO TOGGLE MEANU ------------------------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.width = "200px";
        }
        function hideMenu(){
            navLinks.style.width = "0px";
            navLinks.style.overflow = "hidden";
        }
    </script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>