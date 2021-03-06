<?php


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Noah's Cloud</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap/css/custom.css">
     <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
   </head>
    <body>

    <div class="jumbotron-header jumbotron-fluid">
      <div class="container" align="center">

       <!--navbar code -->
        <nav class="navbar navbar-expand-sm justify-content-end" style="color: white;">
          <a class="navbar-brand mr-auto btn btn-link mr-auto">Noah's Cloud</a>
          <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
              <li class="nav-item">
                <a class="nav-link btn btn-link" id="scrollAbout">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-link" id="scrollProjects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-link" id="scrollContact">Contact</a>
              </li>
            </ul>
          </div>
        </nav>

        <!--Hero text -->
        <img class="w-75" src="img/FinalLogo.png" style="padding-top: 20vh" alt="Noah's Cloud">
      </div>
    </div>

    <!-- main body text cards -->
    <div class="jumbotron-about jumbotron-fluid">
      <div class="container">

        <!-- temp non-finished alert -->
        <div class="alert alert-danger" role="alert">
          <strong>Hey Listen!</strong> This website is not complete! It is getting updated daily! Start Date: 3/31/19 | Last Modified: 4/1/19
        </div>
      </div>

      <!-- Begin About Me section -->
      <div class="container">
        <h1 class="float-sm-right aos-animate" data-aos="fade-left" data-aos-duration="3000" id="aboutMe">About Me</h1><br>
      </div>
      <hr class="my-4 aos-animate" data-aos="slide-right" data-aos-duration="8000">
      <!--Begin About me section -->

        <div class="container">

          <!--Row number 1 // High School-->
          <div class="row" data-aos="fade-right" data-aos-duration="3000">
            <div class="card shadow">
              <div class="card-block rounded pt-3 pb-3">
                <h4 class="card-title ml-3 mr-3">Test Title</h4>
                <p class="card-text ml-3 mr-3">Filler text to see how this section will be formatted and how the design looks overall
                  This is nothing but filler text to see how this section will be formatted and how the design will looks
                  Please note this is filler text.</p>
                </div>
              </div>
            </div><br>

          <!-- Row number 2 // South Hills-->
          <div class="row" data-aos="fade-right" data-aos-duration="3000">
            <div class="card shadow">
              <div class="card-block rounded pt-3 pb-3">
                <h4 class="card-title ml-3 mr-3">Test Title</h4>
                <p class="card-text ml-3 mr-3">Filler text to see how this section will be formatted and how the design looks overall
                  This is nothing but filler text to see how this section will be formatted and how the design will looks
                  Please note this is filler text.</p>
                </div>
              </div>
            </div><br>

          <!--testing row number 3 // testing -->
          <div class="row" data-aos="fade-right" data-aos-duration="3000">
            <div class="card shadow">
              <div class="card-block rounded pt-3 pb-3">
                <h4 class="card-title ml-3 mr-3">Test Title</h4>
                <p class="card-text ml-3 mr-3">Filler text to see how this section will be formatted and how the design looks overall
                  This is nothing but filler text to see how this section will be formatted and how the design will looks
                  Please note this is filler text.</p>
                </div>
              </div>
            </div><br>


        </div>

        <!-- Begin Project section -->
        <div class="container">
          <h1 class="float-sm-right" data-aos="fade-left" data-aos-duration="3000" id="myProjects">My Projects</h1><br>
        </div>
        <hr class="my-4" data-aos="slide-right" data-aos-duration="8000">
      </div>
      <div class="jumbotron-projects jumbotron-fluid">
        <div class="container">

          <!-- Card deck 1 -->
          <div class="card-deck">
            <!-- Project card 1 -->
            <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal1"  data-aos="fade-right" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
              <div class="card-body shadow">
                <h4 class="card-title">Noah's Cloud</h4>
                <p class="card-text">This is my website that your currently viewing. Click to find
                  out why I created this site</p>
              </div>
            </div>

            <!-- Project card 2 -->
            <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal2"  data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
              <div class="card-body shadow">
                <h4 class="card-title">Sunday Night Drive</h4>
                <p class="card-text">This is a podcast focusing on updates in the tech world</p>
              </div>
            </div>

            <!-- Project card 3 -->
            <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal3"  data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
              <div class="card-body shadow">
                <h4 class="card-title">Web-based Code Editor</h4>
                <p class="card-text">This editor is an idea I have for a simple web-based IDE</p>
              </div>
            </div>
          </div>

          <br>

          <!-- Card deck 2 -->
          <div class="card-deck">
            <!-- Project card 4 -->
            <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal1"  data-aos="fade-right" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
              <div class="card-body shadow">
                <h4 class="card-title">Web-based Note Taker</h4>
                <p class="card-text">This project is an idea I have for an online note taker. Nothing fancy, just
                  a place to keep notes.</p>
                </div>
              </div>

              <!-- Project card 5 -->
              <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal2"  data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
                <div class="card-body shadow">
                  <h4 class="card-title">Noah's Ark</h4>
                  <p class="card-text">Self built cloud idea named Noah's Ark</p>
                </div>
              </div>

              <!-- Project card 6 -->
              <div class="card" href="" style="color: black;" data-toggle="modal" data-target=".projmodal3"  data-aos="fade-left" data-aos-easing="ease-in-back" data-aos-offset="0" data-aos-duration="1000">
                <div class="card-body shadow">
                  <h4 class="card-title">Generic project card</h4>
                  <p class="card-text">This is a holder for a project</p>
                </div>
              </div>
            </div>
          </div>

        </div><br>

        <!-- Begin contact me section -->
        <div class="container">
          <h1 class="float-sm-right" data-aos="fade-left" data-aos-duration="3000" id="contactMe">Contact Me</h1><br>
        </div>
        <hr class="my-4" data-aos="slide-right" data-aos-duration="8000">
        <div class="container">
          <form>
            <div class="form-group row">
              <label for="contactEmail" class="col-sm-2 form-control-label" data-aos="fade-right" data-aos-duration="3000">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control shadow" id="contactEmail" placeholder="Email" data-aos="fade-up" data-aos-duration="3000">
              </div>
            </div>
            <div class="form-group row">
              <label for="contactMessage" class="col-sm-2 form-control-label" data-aos="fade-right" data-aos-duration="3000">Message</label>
              <div class="col-sm-10">
                <textarea class="form-control shadow" id="contactMessage" rows="4" placeholder="Enter your message here..." data-aos="fade-up" data-aos-duration="3000"></textarea>
              </div>
            </div>
            <div class="float-sm-right w-25">
              <button class="btn btn-success w-100" type="button" name="contactSubmit" data-aos="fade-up" data-aos-duration="3000">Submit Message</button>
            </div>
          </form>
        </div>

        <div class="page-scroll"></div>

        <!--Login/Register Modal -->
        <div class="modal fade login-modal-sm" tabindex="-1" role="dialog"
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
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init();
    </script>
    <!-- Add About scrolling from menu -->
    <script>
        $(document).ready(function (){
            $("#scrollAbout").click(function (){
                $('html, body').animate({
                    scrollTop: $("#aboutMe").offset().top
                }, 2000);
            });
        });
    </script>
    <!-- Add My Projects scrolling from menu -->
    <script>
        $(document).ready(function (){
            $("#scrollProjects").click(function (){
                $('html, body').animate({
                    scrollTop: $("#myProjects").offset().top
                }, 2000);
            });
        });
    </script>
    <!-- Add My Projects scrolling from menu -->
    <script>
        $(document).ready(function (){
            $("#scrollContact").click(function (){
                $('html, body').animate({
                    scrollTop: $("#contactMe").offset().top
                }, 2000);
            });
        });
    </script>
 </html>
