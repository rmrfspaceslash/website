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

      <div class="jumbotron-header jumbotron-fluid">
        <div class="container" align="center">

       <!--navbar code -->
       <nav class="navbar navbar-expand-sm justify-content-end" style="color: white;">
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
               <a class="nav-link btn btn-link" data-toggle="modal" data-target=".login-modal-sm">Login/Register</a>
             </li>
           </ul>
        </div>
      </nav>

      <!--Hero text -->
      <h1 class="display-2" style="padding-top: 60px; color: white;" >Noah's Cloud</h1>
      <p class="lead" style="color: white;">This is my website for all of my projects and stuff!</p>

    </div>
  </div>

  <!-- main body text cards -->
  <div class="container">

    <!-- temp non-finished alert -->
    <div class="alert alert-danger" role="alert">
      <strong>Hey Listen!</strong> This website is not complete! It is getting updated daily! Start Date: 3/31/19 | Last Modified: 4/1/19
    </div>

    <!-- Begin About Me section -->
    <h1 class="float-sm-right">About Me</h1><br>
    <hr class="my-4">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p>Filler text to see how this section will be formatted and how the design looks overall
        This is nothing but filler text to see how this section will be formatted and how the design will looks
        Please note this is filler text.
        Filler text to see how this section will be formatted and how the design looks overall
        This is nothing but filler text to see how this section will be formatted and how the design will looks
        Please note this is filler text.
        Filler text to see how this section will be formatted and how the design looks overall
        This is nothing but filler text to see how this section will be formatted and how the design will looks
        Please note this is filler text.
        Filler text to see how this section will be formatted and how the design looks overall
        This is nothing but filler text to see how this section will be formatted and how the design will looks
        Please note this is filler text.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <img class="d-block w-100" src="img/holder1.jpg" alt="Holder image">
      </div>
    </div><br>

    <!-- Begin Project section -->
    <h1 class="float-sm-right">Projects</h1><br>
    <hr class="my-4">
</div>

    <div class="jumbotron-projects jumbotron-fluid">
      <div class="container">

        <div class="card-deck">
          <!-- Project card 1 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal1">
            <div class="card-body shadow">
              <h4 class="card-title">Noah's Cloud</h4>
              <p class="card-text">This is my website that your currently viewing. Click to find
                out why I created this site</p>
            </div>
          </a>

          <!-- Project card 2 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal2">
            <div class="card-body shadow">
              <h4 class="card-title">Sunday Night Drive</h4>
              <p class="card-text">This is a podcast focusing on updates in the tech world</p>
            </div>
          </a>

          <!-- Project card 3 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal3">
            <div class="card-body shadow">
              <h4 class="card-title">Web-based Code Editor</h4>
              <p class="card-text">This editor is an idea I have for a simple web-based IDE</p>
            </div>
          </a>
        </div>
        <br>
        <div class="card-deck">
          <!-- Project card 4 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal1">
            <div class="card-body shadow">
              <h4 class="card-title">Noah's Cloud</h4>
              <p class="card-text">This is my website that your currently viewing. Click to find
                out why I created this site</p>
            </div>
          </a>

          <!-- Project card 5 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal2">
            <div class="card-body shadow">
              <h4 class="card-title">Sunday Night Drive</h4>
              <p class="card-text">This is a podcast focusing on updates in the tech world</p>
            </div>
          </a>

          <!-- Project card 6 -->
          <a class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal3">
            <div class="card-body shadow">
              <h4 class="card-title">Web-based Code Editor</h4>
              <p class="card-text">This editor is an idea I have for a simple web-based IDE</p>
            </div>
          </a>
        </div>
      </div>

    </div>








  <div class="page-scroll"></div>



      <!--Login/Register Modal -->
      <div class="modal fade login-modal-sm bg-secondary" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content" align="center">
            <div class="mt-0 mb-1">
              <h1>Login</h1>
            </div>

            <div class="w-100" align="center">
              <form class="form-inline" action="" method="post" align="center">
                <input class="form-control w-100" type="text" name="logusername" placeholder="Username">
                <input class="form-control w-100" type="password" name="logpassword" placeholder="Password">
                <input class="form-control w-100" type="submit" name="logsubmit" value="Log In">
              </form>
            </div>

            <div class="mt-1 mb-1">
              <p>Need an account? Click
              <a href="#">here!</a>
              </p>
            </div>

          </div>
        </div>
      </div>

      <!--Project card modal 1 -->
      <div class="modal fade projmodal1" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            Text will go here
          </div>
        </div>
      </div>

      <!--Project card modal 2 -->
      <div class="modal fade projmodal2" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            Text will go here
          </div>
        </div>
      </div>

      <!--Project card modal 3 -->
      <div class="modal fade projmodal3" tabindex="-1" role="dialog"
           aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            Text will go here
          </div>
        </div>
      </div>


   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
 </html>
