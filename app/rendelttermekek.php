<?php
include_once '../app/session.php';
include_once '../app/db.php';
$osszesen = 0;
foreach ($ids as $id) {
        /*$sqlRendeltTermek = "SELECT * FROM termekek WHERE idtermekek = '".$id."'";*/
        $sqlRendeltTermek = "SELECT t.termeknev, t.kep, t.ar, r.mennyiseg FROM rendeles AS r
                            LEFT JOIN termekek AS t ON (t.idtermekek = r.termekek_idtermekek)
                            WHERE idtermekek = '".$id."' AND datum = DATE_FORMAT(NOW(),'%Y-%m-%d') AND allapot = 0";
        $resultRendeltTermek = mysqli_query($conn,$sqlRendeltTermek);
        if($resultRendeltTermek){
        if (mysqli_num_rows($resultRendeltTermek) > 0 ) {
            while($rowRendeltTermek = mysqli_fetch_assoc($resultRendeltTermek)) {
                $kep = $rowRendeltTermek['kep'];
                $termeknev = $rowRendeltTermek['termeknev'];
                $ar = $rowRendeltTermek["ar"];
                $darab = $rowRendeltTermek["mennyiseg"];
                print "<div class='rendelesContainer'>";
                print "<img src=".$kep." alt=".$termeknev."   " . " class='rendelesKep'>";
                
                print '<div class="rendelesTNEV">'.$termeknev.'</div>';
                print '<div class="rendelesAR">'.$ar.' Ft</div>';
                print ' <form class="rendelesDarab" action="../app/mennyisegUserUPDATE.php" method="GET">
                        <input class="rendelesARbevitel" type="number" name="mennyiseg" value="'.$darab.'"> db
                        <input type="hidden"  name="id" value="'.$id.'">';
                if(isset($azonositoNEW)){
                    $azonositoUP = $azonositoNEW;
                    print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                }else{
                    $azonositoUP = $azonosito;
                    print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                }       
                print ' 
                 </form>';
               /*<input  type="submit" class="btn" value="OK"><br>*/
                print '<form class="rendelesTorles" action="../app/rendelesStatusz.php" method="GET">
                        <input type="hidden"  name="id" value="'.$id.'">
                        <input type="hidden"  name="delete" value=3>';
                        if(isset($azonositoNEW)){
                    $azonositoUP = $azonositoNEW;
                        print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                    }else{
                        $azonositoUP = $azonosito;
                        print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                    }                    
                    print ' <input  type="submit" class="btn" value="Törlés"><br>
                    </form>
                    </div>';
                
                    print "<hr>";
                print "</article>";
                }
            }    
        }
    $osszesen += ($ar*$darab);
    }
    print "<div>
            <div class='osszesen'>Összesen: ".$osszesen."Ft</div><br>
            </div>";
    print '<form class="rendlesGomb" action="../app/rendelesVeglelgesites.php" method="GET">';
                    print' <input type="hidden"  name="rendelesV" value=1>';
                        if(isset($azonositoNEW)){
                            $azonositoUP = $azonositoNEW;
                                print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                            }else{
                                $azonositoUP = $azonosito;
                                print '<input type="hidden"  name="azonositoUP" value="'.$azonositoUP.'">';
                            }                    
                    print ' <input  type="submit" class="btn" value="Megrendelés"><br>
                    </form>';
    mysqli_close($conn);
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

