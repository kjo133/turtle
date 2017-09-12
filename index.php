<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sprinting Turtles</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>

  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

   <!--   HERO SECTION -->
     <div class="hero">
        <div id="heroLogo">
         <h1>The Sprinting Turtles</h1>
        </div> 
     </div>
     <!-- MAIN -->
     <section class="main" id="about">
       <div class="wrapper row">
         <div class="medium-12 column">
          <h1>ABOUT</h1>
          <p>We are The Sprinting Turtles.  Rock band from Washington DC.  Check out our music and who we are!</p>
          <br />
            <div class="row">
              <div class="col-sm-3 bandMember">
                <h3>Justin Johnson</h3>
                <h4>Bass & Vocals</h4>
                <img src="images/justin.jpg">
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Kevin Olson</h3>
                <h4>Lead Guitar & Vocals</h4>
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Kevin Ralph</h3>
                <h4>Drums</h4>
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Glen Nuenighoff</h3>
                <h4>Rhythm Guitar</h4>
              </div>

            </div>
            
         </div>
       </div>
     </section>

<!-- Photo Gallery -->
     <section class="gallery">
     	<div class="wrapper" id="gallery">
     		<h1>Adventure Gallery</h1>
          <div class="ImageContainer">
            <h2 class="text-center">Check out these awesome views and epic adventures taken by all of our Mountain Air Addix.  <br/> Send us your latest and greatest conquests at <a href='#'>mountainairaddix@gmail.com </a></h2>
            <div class="lightbox-gallery">
                <?php  
                  $dirname = "images/images/";
                  $images = glob($dirname."*.JPG");
                  foreach ($images as $image) {
                    echo '<div><img src="'.$image.'" /></div>';
                  }
                ?>         
            </div>
         </div>
     	</div>
     </section>

<!-- FOOTER -->
  <footer>
    <div class="container text-center">
      <a target="_blank" href="https://www.instagram.com/ma_addix/"><i class="fa fa-2x fa-instagram"></i></a> &nbsp
      <a target="_blank" href="https://www.youtube.com/channel/UCEjYZO3Mw_voTiDboWBl7Sg"><i class="fa fa-2x fa-youtube"></i></a>
    </div>
  </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
