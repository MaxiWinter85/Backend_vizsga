<?php
include_once '../app/session.php';
if(isset($_GET['rendelesV'])){
    $felhasznaloid = $_SESSION["idfelhasznalo"];
    $allapot = $_GET['rendelesV'];
    $azonositoUP = $_GET['azonositoUP'];
    include_once '../app/db.php';

$sqlEllenorzes = "SELECT * 
                 FROM rendeles 
                 WHERE azonosito = '" .$azonositoUP."' AND 
                       felhasznalo_idfelhasznalo='" . $felhasznaloid. "'";

$resultEllenorzesUP = mysqli_query($conn,$sqlEllenorzes);

if($resultEllenorzesUP){
        if(mysqli_num_rows($resultEllenorzesUP) > 0 ){
                    $sqlRendelesUpdate = "UPDATE rendeles
                       SET allapot = '" .$allapot."'
                       WHERE azonosito = '" .$azonositoUP."' AND 
                                           felhasznalo_idfelhasznalo='" . $felhasznaloid. "'
                                        AND allapot= 0";
                    $update = mysqli_query($conn, $sqlRendelesUpdate);
                    header('location: http://localhost/pizzafaloda/page/rendeles.php');
                    
                    
        }    
     
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

