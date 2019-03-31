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

      <div class="jumbotron jumbotron-fluid">
        <div class="container" align="center">

       <!--navbar code -->
       <nav class="navbar navbar-expand-sm justify-content-end">
         <a class="navbar-brand mr-auto ml-1 btn btn-link">Noah's Cloud</a>
         <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
           <ul class="navbar-nav text-right">
             <li class="nav-item">
               <a class="nav-link btn btn-link">About</a>
             </li>
             <li class="nav-item">
               <a class="nav-link btn btn-link">Contact</a>
             </li>
             <li class="nav-item">
               <a class="nav-link btn btn-link">Projects</a>
             </li>
             <li class="nav-item">
               <a class="nav-link btn btn-link" data-toggle="modal" data-target=".login-modal-lg">Login/Register</a>
             </li>
           </ul>
        </div>
      </nav><hr class="my-4">

      <!--Hero text -->
      <h1 class="display-2">Noah's Cloud</h1>
      <p class="lead">This is my website for all of my projects and stuff!</p>

    </div>
  </div>

  <!-- main body text cards -->
  <div class="container">
    <h1 class="float-sm-right">Projects</h1><br>
    <hr class="my-4">
    <div class="card-deck">
      <div class="card" href="#">
        <div class="card-body" href="#">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
      </div>
    </div>
  </div>



  <div class="page-scroll"></div>









      <!--Login/Register Modal -->
      <div class="modal fade login-modal-lg bg-secondary" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" align="center">
            <div class="mt-0 mb-1">
              <h1>Login</h1>
            </div>

            <div class="w-50" align="center">
              <form class="form-inline" action="" method="post" align="center">
                <input class="form-control w-100" type="text" name="logusername" placeholder="Username">
                <input class="form-control w-100" type="password" name="logpassword" placeholder="Password">
                <input class="form-control w-100" type="submit" name="logsubmit" placeholder="Log In">
              </form>
            </div>

            <div class="mt-1 mb-1">
              <p>Don't already have an account? Click
              <a href="#">here!</a>
              </p>
            </div>

          </div>
        </div>
      </div>


   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </html>
