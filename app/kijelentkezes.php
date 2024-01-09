<?php
session_start();
unset ($_SESSION["idfelhasznalo"]);
unset ($_SESSION["teljesnev"]);
unset ($_SESSION["felhasznalonev"]);
if(!isset($_SESSION["idfelhasznalo"])){
header('location: http://localhost/pizzafaloda/index.php');
}


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

