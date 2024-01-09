<?php
$sqlRendelesUpdate = "UPDATE rendeles
                       SET mennyiseg = '" .$mennyiseg."'
                       WHERE azonosito = '" .$azonositoUP."' AND 
                                           felhasznalo_idfelhasznalo='" . $felhasznaloid. "' AND
                                           termekek_idtermekek='" . $termekid . "'";
                    $update = mysqli_query($conn, $sqlRendelesUpdate);
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

