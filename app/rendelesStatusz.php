<?php
include_once '../app/session.php';
if(isset($_GET['id'])){
    $termekid = $_GET['id'];
    $felhasznaloid = $_SESSION["idfelhasznalo"];
    $allapot = $_GET['delete'];
    $azonositoUP = $_GET['azonositoUP'];
    include_once '../app/db.php';

$sqlEllenorzes = "SELECT * 
                 FROM rendeles 
                 WHERE azonosito = '" .$azonositoUP."' AND 
                       felhasznalo_idfelhasznalo='" . $felhasznaloid. "' AND
                       termekek_idtermekek='" . $termekid . "'";

$resultEllenorzesUP = mysqli_query($conn,$sqlEllenorzes);

if($resultEllenorzesUP){
        if(mysqli_num_rows($resultEllenorzesUP) > 0 ){
                    $sqlRendelesUpdate = "UPDATE rendeles
                       SET allapot = '" .$allapot."'
                       WHERE azonosito = '" .$azonositoUP."' AND 
                                           felhasznalo_idfelhasznalo='" . $felhasznaloid. "' AND
                                           termekek_idtermekek='" . $termekid . "'";
                    $update = mysqli_query($conn, $sqlRendelesUpdate);
                    header('location: http://localhost/pizzafaloda/page/rendeles.php');
        }    
     
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

