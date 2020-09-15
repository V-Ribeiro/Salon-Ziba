<!DOCTYPE html>
<html>



<head>


<meta name="description" content="Here at Salon Ziba, viewers can take a quick look at our gallery. You'll find your next signature look at the hands of our seasoned staff.">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery</title>

<!-- importar ficheiros necessários -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/imagesheet.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="images/icons/zibaIcon.png">
<link rel="canonical" href="https://www.salonziba.com/gallery"> 

</head>

<body>

<div>
	<?php require 'Menu.php'; ?>
</div>

<!-- Modal box do not change -->
  
  <div id="myModal" class="modal" style="z-index:15000;"> <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
      <div class="mySlides">
        <div class="numbertext">1 / 25</div>
        <img src="images/gallery/salonziba-uptown1.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">2 / 25</div>
        <img src="images/gallery/salonziba-uptown2.jpg" style="width:100%" > </div>
      <div class="mySlides">
        <div class="numbertext">3 / 25</div>
        <img src="images/gallery/salonziba-uptown3.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">4 / 25</div>
        <img src="images/gallery/salonziba-uptown4.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">5 / 25</div>
        <img src="images/gallery/salonziba-downtown1.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">6 / 25</div>
        <img src="images/gallery/salonziba-downtown2.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">7 / 25</div>
        <img src="images/gallery/salonziba-downtown3.jpg" style="width:100%"> </div>
      <div class="mySlides">
        <div class="numbertext">8 / 25</div>
        <img src="images/gallery/salonziba-downtown4.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">9 / 25</div>
        <img src="images/gallery/models/m1.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">10 / 25</div>
        <img src="images/gallery/models/m2.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">11 / 25</div>
        <img src="images/gallery/models/m3.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">12 / 25</div>
        <img src="images/gallery/models/m4.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">13 / 25</div>
        <img src="images/gallery/models/m5.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">14 / 25</div>
        <img src="images/gallery/models/m6.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">15 / 25</div>
        <img src="images/gallery/models/v1.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">16 / 25</div>
        <img src="images/gallery/models/v2.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">17 / 25</div>
        <img src="images/gallery/models/v3.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">18 / 25</div>
        <img src="images/gallery/models/v4.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">19 / 25</div>
        <img src="images/gallery/models/v5.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">20 / 25</div>
        <img src="images/gallery/models/v6.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">21 / 25</div>
        <img src="images/gallery/models/v9.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">22 / 25</div>
        <img src="images/gallery/models/v10.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">23 / 25</div>
        <img src="images/gallery/models/v11.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">24 / 25</div>
        <img src="images/gallery/models/v12.jpg" style="width:100%"> </div>
        <div class="mySlides">
        <div class="numbertext">25 / 25</div>
        <img src="images/gallery/models/v13.jpg" style="width:100%"> </div>
      
      <!-- Next/previous controls --> 
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> 
      
      <!-- Caption text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>
      
      <!-- Thumbnail image controls --> 
      
    </div>
  </div>
  
  <!-- end of modal --> 



<div class="container corpoPrincipal">

<br>

<br>

<br>

<br>

	<div class="row">
    
    	<div class="col-12">
        	<p class="zibaTitle" id="midtownGallery">
            MIDTOWN LOCATION
            </p>
            
            <br>

            <hr>
            
        </div>
    
    </div>


    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-uptown1Thumb.jpg" onclick="openModal();currentSlide(1)" class="imagemEstilistas">
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-uptown2Thumb.jpg" onclick="openModal();currentSlide(2)" class="imagemEstilistas">
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-uptown3Thumb.jpg" onclick="openModal();currentSlide(3)" class="imagemEstilistas">
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-uptown4Thumb.jpg" onclick="openModal();currentSlide(4)" class="imagemEstilistas">
            <br>
    		<br>

        </div>
         
    </div>
    
    
<br>

<br>

	<div class="row">
    
    	<div class="col-12">
        	<p class="zibaTitle" id="downtownGallery">
            DOWNTOWN LOCATION
            </p>
            
            <br>

            <hr>
            
        </div>
    
    </div>


    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-downtown1Thumb.jpg" onclick="openModal();currentSlide(5)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-downtown2Thumb.jpg" onclick="openModal();currentSlide(6)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-downtown3Thumb.jpg" onclick="openModal();currentSlide(7)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/salonziba-downtown4Thumb.jpg" onclick="openModal();currentSlide(8)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
         
    </div>
    
    
<br>

<br>

	<div class="row">
    
    	<div class="col-12">
        	<p class="zibaTitle" id="modelsGallery">
            MODELS
            </p>
            
            <br>

            <hr>
            
        </div>
    
    </div>
    
    
    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/models/m1.jpg" onclick="openModal();currentSlide(9)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/m2.jpg" onclick="openModal();currentSlide(10)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/m3.jpg" onclick="openModal();currentSlide(11)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/m4.jpg" onclick="openModal();currentSlide(12)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
         
    </div>
    
    
    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/models/m5.jpg" onclick="openModal();currentSlide(13)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/m6.jpg" onclick="openModal();currentSlide(14)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v1.jpg" onclick="openModal();currentSlide(15)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v2.jpg" onclick="openModal();currentSlide(16)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
         
    </div>
    
    
    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/models/v3.jpg" onclick="openModal();currentSlide(17)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v4.jpg" onclick="openModal();currentSlide(18)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v5.jpg" onclick="openModal();currentSlide(19)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v6.jpg" onclick="openModal();currentSlide(20)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
         
    </div>
    

    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/models/v9.jpg" onclick="openModal();currentSlide(21)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v10.jpg" onclick="openModal();currentSlide(22)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v11.jpg" onclick="openModal();currentSlide(23)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
        
        <div class="col-sm-3">
        	
            <img src="images/gallery/models/v12.jpg" onclick="openModal();currentSlide(24)" class="imagemEstilistas">
            
            <br>
    		<br>

        </div>
         
    </div>
    
    
    <div class="row">
    
    	<div class="col-sm-3">
        	
            <img src="images/gallery/models/v13.jpg" onclick="openModal();currentSlide(25)" class="imagemEstilistas">
            
            <br>
    		<br>
            
        </div>
                 
    </div>


</div>


<div>
	<?php require 'Footer.php'; ?>
</div>


</body>


<!-- modal script -->

<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<!-- End modal -->

</html>
