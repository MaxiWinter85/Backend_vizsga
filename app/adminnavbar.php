<?php
function navbarAdmin() {
        print '<nav class="my-navbar">';
          print '<div class="my-navbar-container my-container">';
            print '<input type="checkbox" name="" id="" />';
            print '<div class="my-hamburger-lines">';
              print '<span class="my-line my-line1"></span>';
              print '<span class="my-line my-line2"></span>';
              print '<span class="my-line my-line3"></span>';
            print '</div>';
            print '<ul class="my-menu-items">';
              print '<li><a href="../index.php">Pizza Faloda</a></li>';
              print '<li><a href="#etlap">Étlap</a></li>';
              print '<li><a href="#belepes">Belépés</a></li>';
              print '<li><a href="#rendeles">Rendelés</a></li>';
              print '<li><a href="#rolunk">Rólunk</a></li>';
            print '</ul>';
            print '<h1 id="my_logo" class="my-logo">';
              print '<a href="./admin.php">Admin felület</a>';
            print '</h1>';
          print '</div>';
        print '</nav>';
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

