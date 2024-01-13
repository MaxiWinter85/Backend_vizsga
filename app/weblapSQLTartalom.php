<?php
    function weblapSQLTartalom($id) {
        include '../app/db.php';
        $sqlWeblap = "SELECT * FROM weblaptartalom WHERE idweblapTartalom = $id";
        $resultWeblap = mysqli_query($conn,$sqlWeblap);
                if($resultWeblap){
                if (mysqli_num_rows($resultWeblap) > 0 ) {
                    while($rowWeblap = mysqli_fetch_assoc($resultWeblap)) {
                        $megjelenhet = $rowWeblap['megjelenhet'];
                        if($megjelenhet == 1){
                        $tartalom = $rowWeblap['tartalom']; 
                        //print $tartalom;
                        }else{
                            $tartalom ="A weblap szerkesztés alatt";
                        }
                        }
                    }
                }
            return $tartalom;
    }
    function weblapSQLTartalom2($id) {
        include '../app/db.php';
        $sqlWeblap = "SELECT * FROM weblaptartalom WHERE idweblapTartalom = $id";
        $resultWeblap = mysqli_query($conn,$sqlWeblap);
                if($resultWeblap){
                if (mysqli_num_rows($resultWeblap) > 0 ) {
                    while($rowWeblap = mysqli_fetch_assoc($resultWeblap)) {
                        $megjelenhet = $rowWeblap['megjelenhet'];
                        if($megjelenhet == 1){
                        $elnevezes = $rowWeblap['elnevezes']; 
                        //print $tartalom;
                        }else{
                            $elnevezes = "A weblap szerkesztés alatt";
                        }
                        }
                    }
                }
            return $elnevezes;
    }

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

