<?php



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Noah's Cloud</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   </head>
    <body class="">
      <div class="jumbotron" style="background-image: url(https://images.unsplash.com/photo-1460411794035-42aac080490a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80); background-size: cover;">
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
      </nav>

      <h1 class="display-4 ">Noah's Cloud</h1>
      <p class="lead">This is my website for all of my projects and stuff!</p>

    </div>
  </div>










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
