<?php



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Noah's Cloud</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
               <a class="nav-link btn btn-link" data-toggle="modal" data-target=".login-modal-lg">Login/Register</a>
             </li>
           </ul>
        </div>
      </nav>


      <!--Login/Register Modal -->
      <div class="modal fade login-modal-lg" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <form class="form-inline" action="" method="post" align="center">
              <input align="center" class="form-control w-75" type="text" name="logusername" placeholder="Username">
              <input class="form-control w-75" type="password" name="logpassword" placeholder="Password">
              <input class="form-control w-75" type="submit" name="logsubmit" placeholder="Log In">

            </form>
          </div>
        </div>
      </div>









      <!--Beginning carousel code
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/holder1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/holder2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/holder1.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      -->


    </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </html>
