<?php  ?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="container" align="center">
      <div class="card shadow-lg col-lg-6 col-sm-12" style="margin-top: 25vh">
        <div class="card-body">
          <div class="card-title text-secondary" align="center">
            <form>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="email" class="form-control shadow" placeholder="Email" name="logEmail">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input class="form-control shadow" type="password" placeholder="Password" name="logPassword"></input>
                </div>
              </div>
              <div class="float-sm-right w-25">
                <button class="btn btn-success w-100" type="button" name="logSubmit">Log In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>





    <div class="page-scroll"></div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</html>
