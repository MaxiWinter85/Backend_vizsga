<?php
function adminFtartalom($id) {
       
        print '<form class="adminContainer" action="../app/adminUPDATE.php" method="GET">
                        <textarea name="tartalom" rows="2" cols="60">'.weblapSQLTartalom($id).'</textarea>
                        <input type="hidden"  name="id" value="'.$id.'">
                        <input  type="submit" class="btn" value="Módosítás">
        </form>';

}

function adminFtartalom2($id) {
        
        print '<form class="adminContainer" action="../app/adminUPDATE.php" method="GET">
                        <textarea name="tartalom2" rows="2" cols="60">'.weblapSQLTartalom2($id).'</textarea>
                        <input type="hidden"  name="id" value="'.$id.'">
                        <input  type="submit" class="btn" value="Módosítás">
        </form>';

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

