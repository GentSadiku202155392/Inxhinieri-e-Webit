<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhuro Gjak&euml;</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="kerkuesit.css" />
  </head>
  <body>
    <header>
        <a href="Kerkogjak.php" class="brand">
          <svg height="130" width="300">
  <defs>
  <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
  <stop offset="0%" 
  style="stop-color:rgb(233, 11, 11); stop-opacity:1" />
  <stop offset="100%" 
  style="stop-color:rgb(209, 233, 229); stop-opacity:1" />
  </linearGradient>
  </defs>
  <ellipse cx="117" cy="70" rx="95" ry="50" fill="url(#grad1)"/>
  <text fill="black" font-size="17" font-family="Brush Script MT" x="45" y="70">Kërko Gjak</text>
  </svg>
  </td></a>
        <div class="menu">
          <div class="btn">
            <i class="fas fa-times close-btn"></i>
          </div>
          <a href="Ballina.php">Ballina</a>
          <a href="dhuruesit.php">Dhuruesit</a>
          <a href="kerkuesit.php">Kerkuesit</a>
          <a href="kontakti.php">kontakti</a>
          <a href="logout.php">Logout</a>
        </div>
        <div class="btn">
          <i class="fas fa-bars menu-btn"></i>
        </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container-1">
          <div class="box-1">
            
                             <p><b>P&euml;r t&euml; gjetur se cilit grup mund ti dhuroni gjak&euml; dhe nga cili mund t&euml; merrni ju lutem zgjedhni grupin tuaj te gjakut m&euml; posht&euml;:</b> </p>
          
                             <br>
                    
                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="a_pozitiv()">A+</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="a_negativ()">A-</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="b_pozitiv()">B+</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="b_negativ()">B-</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="ab_pozitiv()">AB+</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="ab_negativ()">AB-</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="o_pozitiv()">O+</button>
                             &nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" onclick="o_negativ()">O-</button>
                             
                             <br>
                             <br>
                             
                             <p id="demo"> Ju lutem shtypni nj&euml;rin nga butonet:</p>
                             
                             
                            
           </div>
           </div> 
           <br>
           <br>
              
                  
                <div class="container-2">
                  <div class="container-2-box">
                    <br>
                    <br>
                 
                    <p><b>Emri :</b> Agim   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Mbiemri:</b> Gashi <br> <br>  
          
                     <b> Grupi i gjakut:</b> A+  &nbsp&nbsp<b>Lokacioni:</b> Prishtinë <br> <br>
                      
                     <b>Koha:</b> Urgjent    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Tel:</b> 044-111-212 </p>
                      
                     
                  </div>
                  <div class="container-2-box">
                      <img src=Images\nopicture.png >
                  </div>
                  <div class="container-2-box">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.865081554925!2d21.155884810435154!3d42.643020109402556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e915de88a4f%3A0xdd725b95c5b659fb!2sSpitali%20Amerikan!5e0!3m2!1sen!2s!4v1621064360771!5m2!1sen!2s" width="100%" height="100%" style="border:1;"  ></iframe>
                    
                  </div>
                </div>
                <br>
                <br>
                <div class="container-2">
                  <div class="container-2-box">
                    <br>
                    <br>
                 
                    <p><b>Emri :</b> Gazmend   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Mbiemri:</b> Rexhepi <br> <br>  
          
                     <b> Grupi i gjakut:</b> O- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Lokacioni:</b> Pejë <br> <br>
                      
                     <b>Koha:</b> 3 ditë    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Tel:</b> 044-000-111</p>
                      
                     
                  </div>
                  <div class="container-2-box">
                      <img src=Images\pb.jpg  >
                  </div>
                  <div class="container-2-box">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933.9592169432517!2d20.271462450911248!3d42.66221962906551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1352fc37afbc9e91%3A0x6c47373c033d4413!2sRegional%20Hospital%20-%20Pej%C3%AB%2C%20Pej%C3%AB!5e0!3m2!1sen!2s!4v1621065192637!5m2!1sen!2s" width="100%" height="100%" style="border:1;"  ></iframe>
                    
                  </div>
                </div>
                <br>
                <br>
                <div class="container-2">
                  <div class="container-2-box">
                    <br>
                    <br>
          
                 
                    <p><b>Emri :</b> Egzon   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Mbiemri:</b> Berisha <br> <br>  
          
                     <b> Grupi i gjakut:</b> O+  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Lokacioni:</b> Gjilan <br> <br>
                      
                     <b>Koha:</b> 1 javë    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Tel:</b> 044-222-111</p>
                      
                     
                  </div>
                  <div class="container-2-box">
                      <img src=Images\nath.jpg  >
                  </div>
                  <div class="container-2-box">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.578871961396!2d21.460635614963916!3d42.457975636905815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13548d27e6f49f19%3A0x8709a091bca8b593!2sGjilani%20Hospital!5e0!3m2!1sen!2s!4v1642802232992!5m2!1sen!2s" width="100%" height="100%" style="border:1;"  ></iframe>
                    
                  </div>
                </div>
                <br>
                <br>
                <div class="container-2">
                  <div class="container-2-box">
                    
                    
                 
                    <p><b>Emri :</b> Drita  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Mbiemri:</b> Shala <br> <br>  
          
                     <b> Grupi i gjakut:</b> AB+  &nbsp&nbsp&nbsp<b>Lokacioni:</b> Ferizaj <br> <br>
                      
                     <b>Koha:</b> Urgjent    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Tel:</b> 044-232-322</p>
                      
                     
                  </div>
                  <div class="container-2-box">
                      <img src=Images\nopicture.png   >
                  </div>
                  <div class="container-2-box">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.6586068635356!2d21.144438342441966!3d42.3711143833456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547e54406e856f%3A0xcfaad7b75ee775c8!2sSpitali%20Rajonal%20Ferizaj%2C%20Ferizaj%2070000!5e0!3m2!1sen!2s!4v1621065072894!5m2!1sen!2s" width="100%" height="100%" style="border:1;"  ></iframe>
                    
                  </div>
                </div>
                <br>
                <br>
                <br>

                <script type="text/javascript">
                  //java script per gjakun
        
                  function a_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve: A+ dhe AB+ Dhe mund të merrni nga:A+, A-, O+ dhe O-";
                               }
                               function a_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:A-, A+, AB- dhe AB+ Dhe mund të merrni nga:A- dhe O-";
                               }
                               function b_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:B+ dhe AB+ Dhe mund të merrni nga:B+, B-, O+ dhe O-";
                               }
                               function b_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB-, AB+, B- dhe B+ Dhe mund të merrni nga:B- dhe O-";
                               }
                               function ab_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB+ Dhe mund te merrni nga të gjitha grupet";
                               }
                               function ab_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:AB+ dhe AB- Dhe mund të merrni nga:AB+, A-, B- dhe O-";
                               }
                               function o_pozitiv() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni grupeve:O+, A+, B+ dhe AB+ Dhe mund të merrni nga:O+ dhe O-";
                               }
                               function o_negativ() {
                               document.getElementById("demo").innerHTML = "Ju mund ti dhuroni the gjitha grupeve Dhe mund të merrni vetem nga O-";
                               }
                   
          //javascript kodi per efektin e menys ne levizje
                   window.addEventListener("scroll", function(){
                     var header = document.querySelector("header");
                     header.classList.toggle('sticky', window.scrollY > 0);
                   });
               
                       //javascript kodi per menun responsive ansore
                   var menu = document.querySelector('.menu');
                   var menuBtn = document.querySelector('.menu-btn');
                   var closeBtn = document.querySelector('.close-btn');
               
                   menuBtn.addEventListener("click", () => {
                     menu.classList.add('active');
                   });
               
                   closeBtn.addEventListener("click", () => {
                     menu.classList.remove('active');
                   });
                   </script> </body>
        </html>