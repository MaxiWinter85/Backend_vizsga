<?php
include_once '../app/db.php';

$ids = array();
        $sqlrendeles = "SELECT * FROM rendeles WHERE azonosito LIKE '".$_SESSION["felhasznalonev"]."%'AND datum = DATE_FORMAT(NOW(),'%Y-%m-%d') AND allapot = 0";
        $resultrendeles = mysqli_query($conn,$sqlrendeles);
        if($resultrendeles){
            if (mysqli_num_rows($resultrendeles) > 0 ) {
                while($rowrendeles = mysqli_fetch_assoc($resultrendeles)) {
                    $azonosito = $rowrendeles['azonosito'];
                    $termekek_idtermekek = $rowrendeles['termekek_idtermekek'];
                    $allapot = $rowrendeles['allapot'];
                $ids[] = $termekek_idtermekek;
                }
            }
        }
    if(!isset($azonosito)){
        $sqlrendeles = "SELECT * FROM rendeles WHERE azonosito LIKE '".$_SESSION["felhasznalonev"]."%'ORDER BY idrendeles DESC LIMIT 1";
        $resultrendeles = mysqli_query($conn,$sqlrendeles);
        if($resultrendeles){
            if (mysqli_num_rows($resultrendeles) > 0 ) {
                while($rowrendeles = mysqli_fetch_assoc($resultrendeles)) {
                    $azonosito = $rowrendeles['azonosito'];
                    $azonositoDarab = explode($_SESSION["felhasznalonev"],$azonosito);
                    $azonositoDarab[1] += 1;
                    $azonositoNEW= $_SESSION["felhasznalonev"].$azonositoDarab[1];
                }
            }
        } 
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

