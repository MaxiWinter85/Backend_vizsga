<?php

class navbar {
    private $index = "./index.php";
    private $etlap = "/etlap.php";
    private $belepes = "/belepes.php";
    private $rendeles = "/rendeles.php";
    private $rolunk = "/rolunk.php";
            
    function navbarIndex() {
        print '<nav class="my-navbar">';
          print '<div class="my-navbar-container my-container">';
            print '<input type="checkbox" name="" id="" />';
            print '<div class="my-hamburger-lines">';
              print '<span class="my-line my-line1"></span>';
              print '<span class="my-line my-line2"></span>';
              print '<span class="my-line my-line3"></span>';
            print '</div>';
            print '<ul class="my-menu-items">';
              print '<li><a href='.$this->index.'>Főoldal</a></li>';
              print '<li><a href="./page'.$this->etlap.'">Étlap</a></li>';
              print '<li><a href="./page'.$this->belepes.'">Belépés</a></li>';
              print '<li><a href="./page'.$this->rendeles.'">Rendelés</a></li>';
              print '<li><a href="./page'.$this->rolunk.'">Rólunk</a></li>';
            print '</ul>';
            print '<h1 id="my_logo" class="my-logo">';
              print '<a href='.$this->index.'>Pizza Faloda</a>';
            print '</h1>';
          print '</div>';
        print '</nav>';
    }

    function navbarPage() {
        print '<nav class="my-navbar">';
          print '<div class="my-navbar-container my-container">';
            print '<input type="checkbox" name="" id="" />';
            print '<div class="my-hamburger-lines">';
              print '<span class="my-line my-line1"></span>';
              print '<span class="my-line my-line2"></span>';
              print '<span class="my-line my-line3"></span>';
            print '</div>';
            print '<ul class="my-menu-items">';
              print '<li><a href=".'.$this->index.'">Főoldal</a></li>';
              print '<li><a href=".'.$this->etlap.'">Étlap</a></li>';
              print '<li><a href=".'.$this->belepes.'">Belépés</a></li>';
              print '<li><a href=".'.$this->rendeles.'">Rendelés</a></li>';
              print '<li><a href=".'.$this->rolunk.'">Rólunk</a></li>';
            print '</ul>';
            print '<h1 id="my_logo" class="my-logo">';
              print '<a href=".'.$this->index.'">Pizza Faloda</a>';
            print '</h1>';
          print '</div>';
        print '</nav>';
    }
    
}
