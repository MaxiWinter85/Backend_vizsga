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
        <title>Rólunk</title>
    </head>
    <body>
        <?php
        include_once '../app/navbar.php';
        $navbar = new navbar();
        $navbar->navbarPage();
        include_once '../app/weblapSQLTartalom.php';
        ?>
        <!----A tulaj és a szakácsokról egy kis paralax és a animatio-->
        <div class="parallax2"></div>
        <div class="my-container2">
          <h2><?php print weblapSQLTartalom2(1); ?></h2>
          <p>
            <?php print weblapSQLTartalom(1); ?>
          </p>
        </div>
        <div class="parallax2"></div>
        <div class="my-container3 my-containerColor">
          <h2><?php print weblapSQLTartalom2(2); ?></h2>
        </div>
        <section id="about">
          <div class="about-wrapper my-container">
            <div class="aboutF-img">
              <img src="../images/rolunk/chef3.jpg" alt="food" />
            </div>
            <div class="aboutF-text">
              <p class="small"><?php print weblapSQLTartalom(2); ?></p>
              <h2><?php print weblapSQLTartalom(3); ?></h2>
              <p>
                <?php print weblapSQLTartalom(4); ?>
              </p>
            </div>
          </div>
        </section>
        <div class="my-container2">
          <h2><?php print weblapSQLTartalom2(5); ?></h2>
        </div>
        <section id="about2">
          <div class="about-wrapper my-container">
            <div class="about-text">
              <p class="small"><?php print weblapSQLTartalom(5); ?></p>
              <h2><?php print weblapSQLTartalom(6); ?></h2>
              <p>
                <?php print weblapSQLTartalom(7); ?>
              </p>
            </div>
            <div class="about-img">
              <img src="../images/rolunk/chef1.jpg" alt="food" />
            </div>
          </div>
        </section>
        <div class="parallax"></div>
        <section id="about">
          <div class="about-wrapper my-container">
            <div class="aboutF-img">
              <img src="../images/rolunk/chef2.jpg" alt="food" />
            </div>
            <div class="aboutF-text">
              <p class="small"><?php print weblapSQLTartalom(8); ?></p>
              <h2><?php print weblapSQLTartalom(9); ?></h2>
              <p>
                <?php print weblapSQLTartalom(10); ?>
              </p>
            </div>
          </div>
        </section>
        <div class="parallax"></div>
        
    </body>
</html>
