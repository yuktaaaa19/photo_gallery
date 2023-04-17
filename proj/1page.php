<html>
  <head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
  </head>
  <body>
    <?php //echo '<p>Hello World</p>';

?> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#quotes">Quotes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
          
        </div>
<li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#about us">About Us</a>
      </li>
           <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
    <form action="https://www.google.com/search" method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="photos\Free Christian wallpapers.jpg" alt="Quotes">
      <div class="carousel-caption d-none d-md-block">
    <h4>Quotes</h4>
    <p>Take Inspiration</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="photos\Travel Wallpaper - Wallpaper Sun.jpg" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
    <h4>Travel</h4>
    <p>Magnificent Traveller Views</p>
  </div>
    </div>
    
    <div class="carousel-item">
      
      <img class="d-block w-100" src="photos\National%20Geographic%20Wallpaper_%20Nature%20Full%20HD%20Wallpaper.jpg" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
    <h4>Nature</h4>
    <p>Fall in Nature's Lap</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a id="nature">
    <h2 class="text-center">Nature</h2>
  
    <div class="row">
  <div class="column">
    <img src="photos\Download%20wallpaper%201920x1080%20daisies,%20flowers,%20blur%20full%20hd,%20hdtv,%20fhd,%201080p%20hd%20background.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\Scenery%20Sky%20Mountains%20Grass%20Nature.jpg" alt="" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\download.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
    
	</a>
	<a id="travel"> 
    <h2 class="text-center">Travel</h2>
  
    <div class="row">
  <div class="column">
    <img src="photos\Itinerarios%20para%20recorrer%20Europa%20en%2020%20d%C3%ADas.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\Premium%20Photo%20_%20View%20of%20paris,%20france.jpg" alt="" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\When%20to%20Shoot%20in%20Manual%20Mode%20-%20Loaded%20Landscapes.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

</a>
<a id="quotes">
    <h2 class="text-center">Quotes</h2>
  
    <div class="row">
  <div class="column">
    <img src="photos\Twilight Script.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\do%20sth%20today%20that%20youre%20future%20self%20will%20be%20proud%20of.png" alt="" style="width:100%">
  </div>
  <div class="column">
    <img src="photos\Unsplash%20is%20a%20website%20with%20free%20high-res%20photo%20downloads,%20so%20I%20made%20a%20wallpaper_%20Hopefully%20the%20words%20from%20Cinderella%20will%20help%20me%20remember%20to%20have%20courage%20and%20always%20be%20kind_.jpg" alt="Quote" style="width:100%">
  </div>
</div>
</a>
<a id="contact">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact us</h2>
  </div>
  <div class="w-50 m-auto">
<form action="contact.php" method="post">
  <div class="form-group">
    <label>Name :</label>
    <input type="text" name="name" class="form-control">
  </div>
<div class="form-group">
    <label>Email :</label>
    <input type="email" name="email" class="form-control">
  </div>
<div class="form-group">
    <label>Number :</label>
    <input type="text" name="number" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

    </div>
  </div>
  
</section>
</a>
<a id="about us">
    <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About us</h2>
  </div>
      <div class="container-fluid">
      <h3 class="text-center">Mac</h3><br>
        <p class="text-center"><b>Beautiful Design
Loaded with styles and layouts

The X3 website is highly customizable, with hundreds of style combinations to choose from. Select from a variety of skins, colors, layouts and fonts to create a truly unique website design. X3 also comes loaded with image gallery layouts including slideshow, columns, grids and carousels.
X3 Website Demo

* Use the Styler interface to preview X3 style combinations.
X3 Styles</b> </p>
      </div>
    </section>
   </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs//cloudflare.com/ajax/libs/popper-js/1.16.0/umd/popper/.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>