<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="jquery.js"></script>
 <style>
  .clearfix{
    overflow: auto;
  }

  .image {
  flex: 1 1 41rem;
}

 .image img {
  width: 25%;
  height: 50%;

  overflow: right;
}
.content {
  flex: 1 1 41rem;
  padding: 3rem;
  background: var(--light-bg);
}
.content h3 {
  font-size: 3rem;
  color: var(--black);
}
 .content p {
  font-size: 1.5rem;
  padding: 1rem 0;
  line-height: 2;
  color: var(--black);
}
.content p i{
  font-size: 100px;
  width: 500px;
}

button[type="button"]{
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
  border-radius: 348px;
}
 </style>
   
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">Smart Cities</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="register" class="active">register</a>
            <a href="packages.php">Packages</a>
            <a href="form.php">form</a>
        </nav>

       <div id="menu-btn" class="fas fa-bars"><div>
    </section>





    <section class="about">
   <div class="image">

   <div class="content">
    <p class="clearfix"> 
        <img src="webapp/now.png" alt="register" class="img" id="registerImage">
        <h3 id="why">Why you must register</h3>
        <b class="textOnHover" id="text"> 
            Registering in smart cities offers numerous advantages that contribute to a more efficient and connected urban experience.
             By registering, residents gain access to a wide range of digital services and amenities tailored to their needs, 
             such as streamlined access to government services, convenient online payment systems for utilities and taxes, 
             and real-time information on transportation schedules and traffic conditions. Additionally, 
             registration enables participation in community engagement initiatives and feedback mechanisms, 
             empowering residents to actively contribute to the development and improvement of their city. 
             Moreover, registering in smart cities often entails enrollment in data-sharing programs,
              allowing for the collection of anonymized data that can be used to inform urban planning, enhance public safety,
               and optimize resource allocation. Overall, registration in smart cities enhances convenience, transparency, and 
               civic participation, ultimately fostering a more sustainable and inclusive urban environment.
        </b>
    </p>
</div>

   <p>CLICK THE LINK BELOW TO REGISTER IN THE Smart Cities. group and be part the most thriving group ever</p>
   <a href="register.html" ><button type="button">Register Now</button></a>
  

<br>
<br>
<br>




















    <section class="footer">
<div class="box-container">
    <div class="box">
<h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="register.php"><i class="fas fa-angle-right"></i>register</a>
            <a href="packages.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="contact.php"><i class="fas fa-angle-right"></i>form </a>
    </div>

    <div class="box">
<h3>extra links</h3>
           
<a href="#"><i class="fas fa-angle-right"></i> ask question</a>
<a href="#"><i class="fas fa-angle-right"></i> about us</a>
<a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
<a href="#"><i class="fas fa-angle-right"></i>terms of use </a>
            
    </div>

    <div class="box">
<h3>contact info</h3>
           
<a href="#"><i class="fas fa-phone"></i> +250788845689</a>
<a href="#"><i class="fas fa-phone"></i> +250785060644</a>
<a href="#"><i class="fas fa-phone"></i> +250787765381</a>    
<a href="#"><i class="fas fa-envelope"></i>jolieprincesse@gmail.com</a>
<a href="#"><i class="fas fa-map"></i>Mukamira, Nyabihu</a>
</div>
<div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>smart cities</a>
    <a href="#"><i class="fab fa-instagram"></i>smart_Cities12</a>
    <a href="#"><i class="fab fa-twitter"></i>@354cities.com</a>
    <a href="#"><i class="fab fa-linkedin"></i>smart_@cities</a>

   
</div>

</div>
<div class="credit">created by<span>Jolie Princesse</span>| all rights reserved! </div>
</section>
    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script src="js/script1.js"></script> -->
</body>
</html>

<script text="text/javascript">
  $(document).ready(function() {
    $("#text").hide();
    $('#why').hover(
        function() {
            $(this).css("color",'blue');
        });

        $('#why').hover(
        function() {
            $('#text').toggle();
        });
    
});

</script>