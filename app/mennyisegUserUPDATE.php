<?php
include_once '../app/session.php';
if(isset($_GET['mennyiseg'])){
    $termekid = $_GET['id'];
    $felhasznaloid = $_SESSION["idfelhasznalo"];
    $mennyiseg = $_GET['mennyiseg'];
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
                    /*while($rowRendeltTermekUP= mysqli_fetch_assoc($resultEllenorzesUP)) {
                        $mennyiseg = $rowRendeltTermekUP['mennyiseg'];
                        $mennyiseg += 1;
                    }*/
                    include_once '../app/mennyisegUPDATE.php';
                    header('location: http://localhost/pizzafaloda/page/rendeles.php');
        }    
     
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

