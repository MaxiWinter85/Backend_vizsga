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

if(isset($_POST['felhasznalonev'])&& isset($_POST['teljesnev'])&& isset($_POST['email'])&& isset($_POST['jelszo'])&& isset($_POST['jelszoC'] )){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['jelszo'] === $_POST['jelszoC']){
            $felhasznalonev = $_POST['felhasznalonev'];
            $teljesnev = $_POST['teljesnev'];
            $email = $_POST['email'];
            $jelszo = password_hash($_POST['jelszo'],PASSWORD_DEFAULT);
            include_once '../app/db.php';
    }

    $sqlEllenorzes = "SELECT felhasznalonev, email 
                        FROM felhasznalo 
                        WHERE email='" . $felhasznalonev . "' OR felhasznalonev='" . $email . "'";
    $sqlInsert = "INSERT INTO felhasznalo (felhasznalonev,teljesnev,email,jelszo,regdatum,szerkeszto)
                     VALUES ('".$felhasznalonev ."','".$teljesnev."','" .$email."','".$jelszo."',DATE_FORMAT(NOW(),'%Y-%m-%d'),0)";
    $resultEllenorzes = mysqli_query($conn,$sqlEllenorzes);

    if(!mysqli_num_rows($resultEllenorzes) > 0){
                    $input = mysqli_query($conn, $sqlInsert);
                    print'<div class="logo">
                    <span class="logo-font">Regisztráció sikeres volt!</span>
                    <br>
                    <span class="logo-font">Jelentkezz be!</span>
                    </div>';
                    header( "refresh:5;url=http://localhost/pizzafaloda/page/belepes.php" );
                    /*header('location: http://localhost/pizzafaloda/page/etlap.php');*/
                }else{
                    header('location: http://localhost/pizzafaloda/page/belepes.php');
                }
                
        mysqli_close($conn);
    }
    ?>
</body>
</html>


