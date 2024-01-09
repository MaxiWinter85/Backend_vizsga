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
        ?>
        
    </body>
</html>
