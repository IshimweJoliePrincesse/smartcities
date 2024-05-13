<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="jquery.js"></script>
</head>
<body>
<!-- <section class="logo">
    <div class="logo">

    </div>
    
</section> -->
    <section class="header">
        <a href="home.php" class="logo">Smart Cities.</a>

        <nav class="navbar">
            <a href="home.php" class="active" >Home</a>
            <a href="about.php">About</a>
            <a href="packages.php">Packages</a>
            <a href="register.php">register</a>
            <a href="form.php">form </a>
        </nav>
       <div id="menu-btn" class="fas fa-bars"><div>
    </section>
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
           <div class="swiper-slide slide" style="background:url(webapp/home-slide-6.jpeg) no-repeat">
            <div class="content">
                <span>automation, connectivity, personalization</span>
                <h3>Technology is all around us</h3>
                <a href="packages.php"class="btn">discover more</a>

            </div>
           </div> 
           <div class="swiper-slide slide" style="background:url(webapp/home-slide-7.jpeg) no-repeat">
            <div class="content">
                <span>automation, connectivity, personalization</span>
                <h3>Technology is all around us</h3>
                <a href="packages.php"class="btn">discover more</a>

            </div>
        </div>
        <div class="swiper-slide slide" style="background:url(webapp/home-slide-8.jpeg) no-repeat">
            <div class="content">
                <span>automation, connectivity, personalization</span>
                <h3>make your living worthwile</h3>
                <a href="packages.php"class="btn">discover more</a>

            </div>
    </div>
        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
        
</section>
    <section class="services">
       <h1 class="heading-title">our services</h1> 
       <br>
       <br>
       <div class="box-container">
        <div class="box">
            <img  src="webapp/second.png" alt=" services icon" >
            <h3>urban data planning</h3>
        </div>

        <div class="box">
            <img src="webapp/k.png" alt=" services icon">
            <h3>traffic management</h3>
        </div>

        
        <div class="box">
            <img src="webapp/first.png" alt=" services icon">
            <h3>optimization of public services</h3>
        </div>

        <div class="box">
            <img src="webapp/primary.png" alt=" services icon">
            <h3>education</h3>
        </div>
        <div class="box">
            <img src="webapp/d.jpeg" alt=" services icon">
            <h3>Health care</h3>
        </div>
        <div class="box">
            <img src="webapp/ou.png" alt=" services icon">
            <h3>business forms</h3>
        </div>
        <div class="box">
            <img src="webapp/what.png" alt=" services icon">
            <h3>agriculture services</h3>
        </div>
       </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="webapp/about1.jpg" alt="KCC">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Our vision of smart cities is to create urban areas that are more livable,
                 sustainable, and efficient through the use of technology. 
                 This includes using data and technology to improve 
                transportation, energy use, waste management, public safety, and other city services. 
                Smart cities also focus on creating more inclusive and participatory communities,
                 where citizens are engaged in the decision-making process and have access to the benefits of technology.</p>
                 <a href="about.php" class="btn">read more</a>
        </div>

    </section>
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                   <img src="webapp/river.png" alt="urban data planning"> 
                </div>
                <div class="content">
                    <h3>urban data planning</h3>
                    <p>Urban data planning is a comprehensive approach to managing and analyzing
                         data to inform decision-making in urban area
                        </p>
                        <a href="register.php" class="btn">register now</a>
                </div>

            </div>
            <div class="box">
                <div class="image">
                   <img src="webapp/sign.png" alt="traffic management"> 
                </div>
                <div class="content">
                    <h3>traffic management</h3>
                    <p>Traffic management refers to the strategies, tactics, and technologies
                         used to optimize the flow of traffic on roads, highways, 
                         and other transportation networks
                        </p>
                        <a href="register.php" class="btn">register now</a>
                </div>

            </div>
            <div class="box">
                <div class="image">
                   <img src="webapp/pen.png" alt="education"> 
                </div>
                <div class="content">
                    <h3>education</h3>
                    <p>The more that you read,
                         the more things you will know, 
                         the more that you learn,
                          the more places you'll go.
                        </p>
                        <a href="register.php" class="btn">register now</a>
                </div>

            </div>
        </div>
        <div class="load-more"><a href="packages.php" class="btn" >load more</a></div>
    </section>
    <section class="home-offer">
        <div class="content">
            <h3> up to 50% off</h3>
            <p>"Unlock the power of our Smart Cities platform and elevate your living to new heights.
                 Experience seamless automation, data-driven insights, and unparalleled customer service.
                  Start your journey to a golden life today!"</p>
                <a href="register.php" class="btn">register now</a>
        </div>
    </section>
    <button class="but" style="background-color:skyblue; color:black; text-align:center;margin-top:5rem; font-size:2rem;">For more information</button>
<section class="footer" style="display:none;">
<div class="box-container">
    <div class="box" id="first">
<h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="register.php"><i class="fas fa-angle-right"></i>register</a>
            
            <a href="packages.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i>form</a>
    </div>

    <div class="box" id="second">
<h3>extra links</h3>
           
<a href="#"><i class="fas fa-angle-right"></i> ask question</a>
<a href="#"><i class="fas fa-angle-right"></i> about us</a>
<a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
<a href="#"><i class="fas fa-angle-right"></i>terms of use </a>
            
    </div>

    <div class="box" id="third">
<h3>contact info</h3>
       
<a href="#"><i class="fas fa-phone"></i> +250788845689</a>
<a href="#"><i class="fas fa-phone"></i> +250785060644</a>
<a href="#"><i class="fas fa-phone"></i> +250787765381</a> 
    
<a href="#"><i class="fas fa-envelope"></i>jolieprincesse@gmail.com</a>
<a href="#"><i class="fas fa-map"></i>Mukamira, Nyabihu</a>
</div>
<div class="box" id="fourth">
    <h3>follow us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>smart cities</a>
   
    <a href="#"><i class="fab fa-instagram"></i>smart_Cities12</a>
    <a href="#"><i class="fa fa-envelope" ></i>smartcities12@gmail.com</a> 
    <a href="#"><i class="fab fa-twitter"></i>@354cities.com</a>
    <a href="#"><i class="fab fa-linkedin"></i>smart_@cities</a>

   
</div>

</div>
<div class="credit" id="fifth">created by<span>Jolie Princesse</span>| all rights reserved! </div>
</section>


    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        
        $(".footer").fadeToggle("slow"); 
       
    });
});
</script>
        

</body>
</html>
