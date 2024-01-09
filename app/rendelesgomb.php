<?php
if(isset($_SESSION["idfelhasznalo"])){
            print "<form class='my-btnForm' action='./rendeles.php' method='GET'>
                <input type='hidden'  name='termek' value='".$id."'>
                <button type='submit' class='btn'>Rendelés</button>
                </form>";
}else{
            print "<form class='my-btnForm' action='./belepes.php' method='GET'>
            <button type='submit' class='btn'>Rendeléshez jelentkezbe</button>
            </form>";
}
    
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

