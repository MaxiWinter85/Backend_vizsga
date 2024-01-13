<?php
if (isset($_SESSION["idfelhasznalo"])){
    include_once '../app/rendeleskiir.php';
    include_once '../app/rendelesbeir.php';
    if(isset($allapot)&& isset($azonosito)){
        print '
        <div class="title">
            <h2>Rendelés véglegesítése</h2>
            <div class="underline"></div>
            
        </div>';
        //print "<br>";
       // print $azonosito;
        //print "<br>";
        //print $_get['termek'];
        //print $termekek_idtermekek." termék id"; 
        //print "<br>";
        
        include_once '../app/rendelttermekek.php';
        
    }else{
        print '
        <div class="title">
            <h2>Még nem rendeltél!</h2>
            <div class="underline"></div>
        </div>';
    }
}else{
    print '
        <div class="title">
            <h2>Lépj be hogy rendelhes!</h2>
            <div class="underline"></div>
        </div>';
    
}
    /* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/*AND datum = DATE_FORMAT(NOW(),'%Y-%m-%d') AND allapot = 0*/