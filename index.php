<?php

require_once('header.php');

?>



  <div class="parallax">

    <main class="main-content">

      <h1 class="mt-md-8">
        <i class="neon-red">The</i>
        <i class="neon-blue">District</i>
      </h1>

     <!-- <div class="container-fluid d-flex position-relative justify-content-center">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
         
          <div id="carouseId" class="carousel-inner">
           
            <figure id="spinner" class="carousel-inner" >

     
            </div>
  
          </figure>
          <a >
            <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
          </a>
          <a>
            <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span> 
          </a>
       
    </div>
      </div>
    -->

  


      


  <!--  <input type="radio" name="slider" id="item-1" checked "> 
      <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3"> 
          <input type="radio" name="slider" id="item-4">  
            <input type="radio" name="slider" id="item-5"> 
            <input type="radio" name="slider" id="item-6">
            <input type="radio" name="slider" id="item-7">
            <input type="radio" name="slider" id="item-8">-->


      <!-- Utilisez des éléments figure pour chaque élément du carousel -->
<div class="container-fluid  col-sm-12">

<div id="carousel3d" class="carousel">

        <carousel-3d :perspective="30" :space="250" :display="7" :height="380" :widht="400" :border="4" :color="'&00b000'" :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">      
          <slide :index="0">   
             <span class="title  ">Web Development</span> 
          <label class="card cards "  for="item-1" id="song-1">
            <img class="carousel-image pos" src="assets/img/images_the_district/menu-burger.jpg" >
          </label>
      
          <a class="btn btn-secondary position-relative " href="#" role="button">View details &raquo;</a>
        </div></slide>
     
          <slide :index="1">   
            <span class="title">You know</span>
          <span class="cards " for="item-2" id="song-2">
            <img class="carousel-image" src="assets/img/images_the_district/menu-pizza.jpg">
          </span></slide>
      
          <slide :index="2"> 
            <span class="title">You know</span>
          <label class="cards" for="item-3" id="song-3">
        <img class="carousel-image"  src="assets/img/images_the_district/category/sandwich_cat.jpg">
          </label></slide>
          
          <slide :index="3"> 
            <span class="title">You know</span>         
            <label class="cards " for="item-4" id="song-4">
            <img class="carousel-image"  src="assets/img/images_the_district/food/Food-Name-433.jpeg">
          </label></slide>

          <slide :index="4">       
            <span class="title">You know</span>
          <label class="cards" for="item-5" id="song-5">
            <img class="carousel-image"  src="assets/img/images_the_district/food/Food-Name-6340.jpg">
          </label></slide>

          <slide :index="5">     
            <span class="title">You know</span>
          <label class="cards " for="item-6" id="song-6">
            <img class="carousel-image"  src="assets/img/images_the_district/food/Food-Name-3631.jpg ">
          </label></slide>

          <slide :index="6">   
            <span class="title">You know</span>
          <label class="cards"  for="item-7" id="song-7">
            <img class="carousel-image"  src="assets/img/images_the_district/food/pizza-salmon.png">
          </label></slide>
   
        </carousel-3d>
      </div>
   
    
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
            vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus
            magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
            mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>

          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
            felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
            massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span>
          </h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
            commodo.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">


  </main>


  <?php

  require_once('footer.php');
  
  ?>