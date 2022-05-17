<?php
if(isset($_POST["submit"])) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$companyname = $_POST["companyname"];
	$projdesc = $_POST["projdesc"];

	$toEmail = "richierex10@gmail.com";
    $mailHeaders = "From: " . $firstname ." ". $lastname. "<br> <". $email .">\r\n ";
    $body = "Company Name: $companyname"."\r\n";
    $body .= "Project Description: $projdesc"."\r\n";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:' .$email. "\r\n";
    $headers .= 'Cc: '.$email . "\r\n";

	if(mail($toEmail, $headers, $body, $mailHeaders)) {
        echo "<script>alert('Mail sent!!');</script>";
      // echo "<script> location.href='congrats.php';</script>";
       
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Larrani</title>
</head>

<body>
    <style>
        .aboutsection{
            background: url('img/background.png');
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 650px;
            margin-top: 2%;
        }
        @media screen and (max-width:768px){
            .formz{
                padding-top: 35%;
            }
           
        }
        @media screen and (max-width:670px){
            .homeimg{
                padding-left: 7%;
                width: 90%;
        }
        }
        @media screen and (max-width:500px){
            .homeimg{
                width: 95%;
                height: 300px;
                padding-left: 4%;
            }

            .theimg{
                height: 300px;
                width: 95%;

            }
        }
        @media screen and (max-width:468px){
            .inputs{
                width: 70%;
            }
            .projdesc{
                width: 70%;
            }
            .formhead{
            text-align: center;
            font-size: 22px;
            width: 90%;
            padding-top: 20px;
        }
    }
    </style>
    <nav>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <a href="#"><img src="img/Logo-purple.png" class="logo"></a>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <!-- Home Section -->
    <section id="home">
        <div class="welcome">
            <div class="welcometext">
                <h1>Helping businesses thrive through innovative tech solutions</h1>
                <p class="paragraph">
                    At Larrani, we help you adapt to the digital age, create wonderful
                    experiences for your customers and ease business processes through the use 
                    of cutting edge technology 
                </p>
            </div>

            <div class="welcomeimg">
                <img src="img/web img/helping business thrive.png" class="homeimg">
            </div>
        </div>
    </section>

    <!-- About us section -->
    <section class="aboutsection" id="about">
        <div class="about">
            <h1 class="abouthead">About Us</h1>
            <p class="abouttext">
                Larrani Ltd is an IT solutions company focused on transforming enterprises
                through quality digital and technological innovations. Our dedicated team is always 
                ready to help you on your digital transformation journey. We also partner with other 
                disruptors in the IT industry such as graphics and design agencies, content marketing
                agencies and research firms to deliver quality services to our clients. 
            </p>
        </div> 
    </section>

    <!--What we offer section-->
    <section id="services">
        <h1 class="servicehead">What We Offer</h1>
        <div class="services">
            <div class="sec">
                <img src="img/web img/it consulting.png" class="secimg">
                <h3 class="sechead">IT CONSULTING &amp; TRAINING</h3>
                <p class="sectext">
                    Our consultations and trainings enable individuals and organizations take 
                    advantage of emerging technologies and ICT processes.

                </p>
            </div>

            <div class="sec">
                <img src="img/web img/digital marketing.png" class="secimg" >
                <h3 class="sechead">DIGITAL &amp; CONTENT MARKETING</h3>
                <p class="sectext">
                    We help brands create tailored digital content and leverage on social media analytics, SEO, Email marketing,
                    social media ads and PPC to reach more customers.  
                </p>
            </div>

            <div class="sec">
                <img src="img/web img/web and mobile dev.png" class="secimg">
                <h3 class="sechead">WEB &amp; MOBILE DEVELOPMENT</h3>
                <p class="sectext">
                    With our experienced developers, we research, design, develop and maintain
                    websites and mobile apps that help clients achieve their desired digital goals.

                </p>
            </div>

            <div class="sec">
                <img src="img/web img/enterprise software dev.png" class="secimg">
                <h3 class="sechead">ENTERPRISE SOFTWARE DEVELOPMENT</h3>
                <p class="sectext">
                    We build effective applications to help you optimize your business processes.
                </p>
            </div>
        
        </div>
    </section>
    
    <h2 class="industrieshead">Industries We Work With</h2>
    <section class="partners">
        <div class="industries">
            <div class="industriestxt">
                <div class="wrap">
                    <img src="img/web icons/Agriculture.png" class="iconic">
                    <h3>Agriculture</h3>
                </div>
                
                <div class="wrap">
                    <img src="img/web icons/Education.png" class="iconic">
                    <h3>Education</h3>
                </div>
                
                <div class="wrap">
                    <img src="img/web icons/Manufacturing.png" class="iconic">
                    <h3>Manufacturing</h3>
                </div>
                
                <div class="wrap">
                    <img src="img/web icons/Hospitality.png" class="iconic">
                    <h3>Hospitality</h3>
                </div>
                
                <div class="wrap">
                    <img src="img/web icons/Retail and e-commerce.png" class="iconic">
                    <h3>Retail &amp; E-commerce</h3>
                </div>
                

                <div class="wrap">
                    <img src="img/web icons/Oil and Gas.png" class="iconic">
                    <h3>Oil &amp; Gas</h3>
                </div>

            </div>

            <div class="industriesimg">
                <img src="img/web img/partners.png" class="theimg">
            </div>
        </div>
    </section>

    <!-- Our processes section -->
    <h2 class="processhead">Our Processes</h2>
    <section class="ourprocesses">
        <div class="wrapper">
            <div class="divs"><img src="img/web img/web dev.png" class="processimg"></div>
                <h4>Strategy &amp; Analysis</h4>
        </div>

        <div class="wrapper">
            <div class="divs"><img src="img/web img/strategy & analysis.png" class="processimg"></div>
                <h4>Design &amp; Development</h4> 
        </div>

        <div class="wrapper">
            <div class="divs"><img src="img/web img/testing & implementation.png" class="processimg"></div>
                <h4>Testing &amp; Implementation</h4>
        </div>

    </section>

    <!--Contact us section-->
    <section class="contactsection" id="contact">
        <form class="formz" action="index.php" method="post">
            <p class="formhead" style="margin-top: -80px;margin-bottom:3%;">Let's hear about your project</p>
            <input type="text" style="height: 160px;margin-bottom:2px;" placeholder="First Name" class="inputs" name="firstname" required><br>
            <input type="text" style="height: 160px;margin-bottom:2px;"  placeholder="Last Name" class="inputs" name="lastname" required><br>
            <input type="email" style="height: 160px;margin-bottom:2px;"  placeholder="Email" class="inputs" name="email" required><br>
            <input type="text" style="height: 160px;margin-bottom:2px;"  placeholder="Company Name" class="inputs" name="companyname" required><br>
            <textarea  style="height:560px;" placeholder="Project Description" class="projdesc" name="projdesc" required></textarea>
            <input type="submit" name="submit" class="submitz" value="Submit">
            
        </form>
    </section>

    <!--Footer section-->
    <footer>
        
        <div class="divz">
            <img src="img/Logo-purple.png" class="footerlogo">
            <div class="socialmedia">                
                <a href="https://www.facebook.com/larranigroup"><img src="img/web icons/icons8-facebook-50.png" class ="iconz"></a>
                <a href="https://www.instagram.com/larranigroup"><img src="img/web icons/icons8-instagram-circle-60.png" class="iconz"></a>
                <a href="https://www.twitter.com/larranigroup"><img src="img/web icons/icons8-twitter-circled-100.png" class="iconz"></a>
                <a href="https://api.whatsapp.com/send?phone=2348131387200"><img src="img/web icons/whatsapp.png" class="iconz"></a>
                
            </div>
        </div>
        <hr class="linez">
        <div class="copyright"><p class="thetext">&copy; 2021 Larrani Ltd.</p></div>
    </footer>

    <!-- <script>
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
</script> -->
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("a").on('click',function(event){

                if(this.hash !== ""){
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop:$(hash).offset().top
                    },50,function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    <script>
        window.addEventListener("scroll", function () {
            var header = document.querySelector("nav");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

    <script src="js/app.js"></script>
</body>

</html>