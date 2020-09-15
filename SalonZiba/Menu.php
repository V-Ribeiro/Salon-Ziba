<!DOCTYPE html>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>


<!-- importar ficheiros necessários -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/imagesheet.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="canonical" href="https://www.salonziba.com/special-offers" /> 
</head>

<body>


<nav class="navbar navbar-center fixed-top navbar-expand-lg navbar-light bg-light menuPrincipal">

  <a class="navbar-brand" href="index.php" style="width:200px; margin-left:5%;"><img src="images/index/salon-ziba-logo-nyc.jpg" width="100%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="our-team.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="our-team.php">All</a>
          <a class="dropdown-item" href="our-team.php#midtownTeam">Midtown Team</a>
          <a class="dropdown-item" href="our-team.php#downtownTeam">Downtown Team</a>
          <a class="dropdown-item" href="our-team.php#reviewsTeam">Reviews</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="services/haircut-styling.php">Haircut/Styling</a>
          <a class="dropdown-item" href="services/color.php">Color</a>
          <a class="dropdown-item" href="services/other-styling-services.php">Other Styling Services</a>
          <a class="dropdown-item" href="services/make-up-application.php">Make Up Application</a>
          <a class="dropdown-item" href="services/studio-at-home.php">Studio At Home</a>
          <a class="dropdown-item" href="services/treatments.php">Treatments</a>
          <a class="dropdown-item" href="services/texturizing-services.php">Texturizing Services</a>
          <a class="dropdown-item" href="services/bridal-studio-at-home-services.php">Bridal Studio at Home Services</a>
          <a class="dropdown-item" href="services/bridal-in-salon-services.php">Bridal in Salon Services</a>
          <a class="dropdown-item" href="">Packages</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Special Offers</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book-an-appointment.php">Book Appointment</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="services/haircut-styling.php">Haircut/Styling</a>
          <a class="dropdown-item" href="services/color.php">Color</a>
          <a class="dropdown-item" href="services/other-styling-services.php">Other Styling Services</a>
          <a class="dropdown-item" href="services/make-up-application.php">Make Up Application</a>
          <a class="dropdown-item" href="services/studio-at-home.php">Studio At Home</a>
          <a class="dropdown-item" href="services/treatments.php">Treatments</a>
          <a class="dropdown-item" href="services/texturizing-services.php">Texturizing Services</a>
          <a class="dropdown-item" href="services/bridal-studio-at-home-services.php">Bridal Studio at Home Services</a>
          <a class="dropdown-item" href="services/bridal-in-salon-services.php">Bridal in Salon Services</a>
          <a class="dropdown-item" href="">Packages</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Special Offers</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="gallery.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="gallery.php#midtownGallery">Salon Photos</a>
          <a class="dropdown-item" href="gallery.php#modelsGallery">Style Gallery</a>
          <a class="dropdown-item" href="video.php">Video</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="book-an-appointment.php">Contact</a>
      </li>
      
      
    </ul>
  </div>

</nav>




<!-- script para abrir menu no hover -->

<script>
$(document).ready(function(){
	$(".dropdown, .btn-group").hover(function(){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass("open");
		}
	});
});		
</script>

</body>
</html>