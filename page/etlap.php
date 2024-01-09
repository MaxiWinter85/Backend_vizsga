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
        <title>Étlap</title>
        <link rel="stylesheet" href="../etlap.css">
    </head>
    <body>
        <?php
        include_once '../app/navbar.php';
        $navbar = new navbar();
        $navbar->navbarPage();
        ?>
        <section class="menu">
    <!-- title -->
    
    <div class="title">
      <h2>Étel és Ital ajánlat</h2>
      <div class="underline"></div>
    </div>
    <!-- itt lesz a menü gombok -->
    <div class="btn-container">
       <?php
       
               
               print "<form action='etlap.php' method='GET'>
                    <input style='border:hidden' type='submit' class='filter-btn' name='all' value='all'>
                      </form> ";
               print "<form action='etlap.php' method='GET'>
                    <input style='border:hidden' type='submit' class='filter-btn' name='pizza' value='pizza'>
                      </form> ";
               print "<form action='etlap.php' method='GET'>
                    <input style='border:hidden' type='submit' class='filter-btn' name='hamburger' value='hamburger'>
                      </form> ";
               print "<form action='etlap.php' method='GET'>
                    <input style='border:hidden' type='submit' class='filter-btn' name='sutemeny' value='sütemény'>
                      </form> ";
               print "<form action='etlap.php' method='GET'>
                    <input style='border:hidden' type='submit' class='filter-btn' name='italok' value='italok'>
                      </form> ";
       ?>
    </div>
    <!-- menu items -->
    <div class="section-center">
      <!-- ide jönnek a termékek-->
      <?php
      include_once '../app/termekek.php';
        ?>
    </div>
  </section>

    </body>
</html>
