<?php

if(isset($_GET['termek'])){
    $termekid = $_GET['termek'];
    $felhasznaloid = $_SESSION["idfelhasznalo"];
    $mennyiseg = 1;
    include_once '../app/db.php';


if(isset($azonositoNEW)){
    $azonositoUP = $azonositoNEW;
    //print $azonositoNEW." ÚJ";
}else{
    $azonositoUP = $azonosito;
    //print $azonosito." Régi";
}
$sqlEllenorzes = "SELECT * 
                 FROM rendeles 
                 WHERE azonosito = '" .$azonositoUP."' AND 
                       felhasznalo_idfelhasznalo='" . $felhasznaloid. "' AND
                       termekek_idtermekek='" . $termekid . "'";

$sqlRendelesUP = "INSERT INTO rendeles (azonosito, allapot, felhasznalo_idfelhasznalo, termekek_idtermekek, datum, mennyiseg)
                     VALUES ('" .$azonositoUP."',0,'".$felhasznaloid."','" .$termekid."',DATE_FORMAT(NOW(),'%Y-%m-%d'),'" .$mennyiseg."')";

$resultEllenorzesUP = mysqli_query($conn,$sqlEllenorzes);

    if(!mysqli_num_rows($resultEllenorzesUP) > 0){
                    $input = mysqli_query($conn, $sqlRendelesUP);
                    header('location: http://localhost/pizzafaloda/page/rendeles.php');
        }
    if($resultEllenorzesUP){
        if(mysqli_num_rows($resultEllenorzesUP) > 0 ){
                    while($rowRendeltTermekUP= mysqli_fetch_assoc($resultEllenorzesUP)) {
                        $mennyiseg = $rowRendeltTermekUP['mennyiseg'];
                        $allapot = $rowRendeltTermekUP['allapot'];
                        if($mennyiseg > 0 && $allapot == 3){
                            $mennyiseg = 1;
                        }else{
                            $mennyiseg += 1;
                        }
                    }
                    include_once '../app/mennyisegUPDATE.php';
                    header('location: http://localhost/pizzafaloda/page/rendeles.php');
        }    
    
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

