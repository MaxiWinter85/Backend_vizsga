<?php

        include_once '../app/db.php';
        if (isset($_GET['all']) == "all"){
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1'";
        }else if(isset($_GET['pizza'])== "pizza"){
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1' and kategoria = 'pizza'";
        }else if(isset($_GET['hamburger'])== "hamburger"){
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1' and kategoria = 'hamburger'";
        }else if(isset($_GET['sutemeny'])== "sütemény"){
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1' and kategoria = 'sütemény'";
        }else if(isset($_GET['italok'])== "italok"){
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1' and kategoria = 'italok'";
        }else{
            $sqltermek = "SELECT * FROM termekek WHERE rendelheto = '1'";
        }
        $resulttermekek = mysqli_query($conn,$sqltermek);
        if($resulttermekek){
        if (mysqli_num_rows($resulttermekek) > 0 ) {
            while($rowtermekek = mysqli_fetch_assoc($resulttermekek)) {
                $id = $rowtermekek['idtermekek'];
                $kep = $rowtermekek['kep'];
                $termeknev = $rowtermekek['termeknev'];
                $ar = $rowtermekek["ar"];
                $leiras = $rowtermekek["leiras"];
                print "<article class='menu-item'>";
                print "<img src=".$kep." alt=".$termeknev."   " . " class='photo'>";
                print "<div class='item-info'>
                    <header>
                    <h4>$termeknev</h4>
                    <h4 class='price'> ".$ar."Ft </h4>
                    </header>
                    <p class='item-text'>
                        $leiras
                    </p>
                </div>";
                
                require '../app/rendelesgomb.php';
                
                print "</article>";
                }
            }
        }
        mysqli_close($conn);
/*<form class='my-btnForm' action='./rendeles.php' method='GET'>
                <input type='hidden'  name='termek' value='".$id."'>
                <button type='submit' class='btn'>Rendelés</button>
                </form>*/