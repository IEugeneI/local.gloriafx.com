<?php
$background = 'background.png';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <style>
            body{

                background:url('../image/<?= $background ?>')   center no-repeat;


                background-size:cover;

            }
        </style>
        <title>Gloria FX studio!</title>
    </head>
    <body>

        <div class="d-md-none">
            <div class="navbar navbar-dark bg-dark  ">
                <div class="navbar-header">
                    <a class="navbar-brand mylogo" href="#">
                        <img  id="brand-image" src="../../public/image/logo.png" alt="" ></img>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#responsiveMenu" >
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse id="responsiveMenu">
                     <ul class="nav navbar-nav">
                        <li><a href="#">321</a></li>
                        <li><a href="#">4324</a></li>
                        <li><a href="#">3rwer</a></li>
                    </ul>
                </div>
            </div>
            <!--  <div class="navbar navbar-dark bg-dark  ">
                  <div class="container">
                      <div class="navbar-header">
                          <a class="navbar-brand" href="#">Логотип</a>

                      </div>
                      <button class="navbar-toggle " type="button" data-toggle="collapse" data-target="#menu" >
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="menu">

                          <ul class="nav navbar-nav">
                              <li class="active"><a href="#">Home</a></li>
                              <li><a href="#">rwe213</a></li>
                              <li><a href="#">rwe421</a></li>
                              <li><a href="#">rwe111</a></li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                          </ul>
                      </div>
                  </div>
              </div>-->
        </div>
        <div class="col offset-lg-11 offset-xl-11 offset-md-11 d-none d-md-block media">

            <a class="fa fa-instagram fa-2x " href="https://www.instagram.com/gloriafx/" target="_blank"></a>
            <a class="fa fa-facebook fa-2x " href="https://www.facebook.com/gloriafx" target="_blank"></a>


        </div>



    </body>
</html>