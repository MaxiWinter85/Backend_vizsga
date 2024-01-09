<?php
include_once '../app/session.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
         <?php
        include_once '../app/head.php';
        headPage();
        ?>
        <title>Belépés</title>
    </head>
    <body>
        <?php
        include_once '../app/navbar.php';
        $navbar = new navbar();
        $navbar->navbarPage();
        ?>
        <section class="my-body">
      <div class="container">
        <div class="login-box">
          <div class="row">
            <div class="col-sm-6">
              <div class="logo">
                <span class="logo-font">Pizza Faloda</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <br />
              <?php
                      include '../app/bejelentkezesFelulet.php';
              ?>
            </div>
            <div class="col-sm-6 hide-on-mobile">
              <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="slider-feature-card">
                      <img src="../images/pizzakNEW.jpg" alt="" />
                      <h3 class="slider-title">Pizza Faloda</h3>
                      <p class="slider-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Iure, odio!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <?php
        include_once '../app/bejelentkezes.php';
        //print $_SESSION["felhasznalonev"];
        include_once '../app/regisztracio.php';
        
        ?>
    </body>
</html>
