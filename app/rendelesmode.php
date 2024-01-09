<?php
if (isset($_SESSION["idfelhasznalo"])){
    include_once '../app/rendeleskiir.php';
    include_once '../app/rendelesbeir.php';
    if(isset($allapot)&&$azonosito){
        print "<h1>Véglegesítsd a rendelésed!</h1>";
        //print "<br>";
       // print $azonosito;
        //print "<br>";
        //print $_get['termek'];
        //print $termekek_idtermekek." termék id"; 
        //print "<br>";
        
        include_once '../app/rendelttermekek.php';
        
    }else{
        print "<h1>Még nem rendeltél!</h1>";
    }
}else{
    print "<h1>Lépj be hogy rendelhes!</h1>";
}
    /* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/*AND datum = DATE_FORMAT(NOW(),'%Y-%m-%d') AND allapot = 0*/