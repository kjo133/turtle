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
 
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li><img src="images/logo2.jpg"></li>
            <li><a href="#">The Sprinting Turtles</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">About</a></li>
            <li><a href="#ourStuff">Music</a></li>
            <li><a target="_blank" href="https://www.instagram.com/thesprintingturtles/"><i class="fa fa-lg fa-instagram"></i></a></li>
            <li><a target="_blank" href="https://www.facebook.com/thesprintingturtles" ><i class="fa fa-lg fa-facebook"></i></a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

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
          <p>We are The Sprinting Turtles <br /> Rock band from Washington DC.  Check out our music and who we are!</p>
          <br />
            <div class="row">
              <div class="col-sm-3 bandMember">
                <a href="http://www.kevinjolson.com"><h3>Kevin Olson</h3></a>
                <h4>Lead Guitar & Vocals</h4>
                <a href="http://www.kevinjolson.com"><img src="images/kevin.jpg"></a>
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Justin Johnson</h3>
                <h4>Bass & Vocals</h4>
                <img src="images/justin.jpg">
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Kevin Ralph</h3>
                <h4>Drums and Bag Pipes</h4>
                <img src="images/kevinr.jpg">
              </div>
              <div class="col-sm-3 bandMember">
                <h3>Glen Nuenighoff</h3>
                <h4>Rhythm Guitar</h4>
                <img src="images/glen.jpg">
              </div>

            </div>
            <br />
            <br />
            <br />
            <br />
            <h1>Schedule</h1>
          <p>October 27 : Private Event
          <br />
            September 3, 2018 : Private Event
          </p>
         </div>
       </div>
     </section>

     <section class="ourStuff">
       <div class="wrapper row" id="ourStuff">
         <div class="medium-12 column">
          <h1>Our Music</h1>
          <div class="row">
            <div class="col-lg-6" id="videos">
              <h3>Videos</h3>
              <br />
              <iframe width="460" height="215" src="https://www.youtube.com/embed/6JlxyBWugdU" frameborder="0" allowfullscreen></iframe>
              <iframe width="460" height="215" src="https://www.youtube.com/embed/HVIAeI4O8jw" frameborder="0" allowfullscreen></iframe>
              <iframe width="460" height="215" src="https://www.youtube.com/embed/yuDwH_NBpWQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6" id="gallery">
              <h3>Photos</h3>
            <div class="ImageContainer">
              <div class="lightbox-gallery">
                <?php  
                  $dirname = "images/gallery/";
                  $images = glob($dirname."*.jpg");
                  foreach ($images as $image) {
                    echo '<div><img src="'.$image.'" /></div>';
                  }
                ?>         
              </div>
             </div> 
            </div>
          </div>
           
         </div>
       </div>

     </section>
<!-- FOOTER -->

  <footer>
    <h1>The Sprinting Turtles</h1>
  </footer>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
