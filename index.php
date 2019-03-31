<?php



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Noah's Cloud</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <script src="bootstrap/js/bootstrap.js"></script>
   </head>
    <body>
     <div class="container">

       <!--navbar code -->
       <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-end">
         <a class="navbar-brand mr-auto ml-1" href="#">Noah's Cloud</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
           <ul class="navbar-nav text-right">
             <li class="nav-item">
               <a class="nav-link" href="#">About</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Contact</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Projects</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Login/Register</a>
             </li>
           </ul>
        </div>
      </nav>

      <!--Beginning carousel code -->
      <div id="carouselmain" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselmain" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselmain" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
   </body>
 </html>
