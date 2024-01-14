<?php
    
    if(isset($_POST['email'])&& isset($_POST['jelszo'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
            $jelszo = $_POST['jelszo'];
            include_once '../app/db.php';
    }
        $sqlBejelentkezes = "SELECT idfelhasznalo, teljesnev, email, jelszo, szerkeszto, felhasznalonev 
                            FROM felhasznalo
                            WHERE email='".$email."'";
        $resultBejelentkezes = mysqli_query($conn,$sqlBejelentkezes);

        if($resultBejelentkezes){
            if (mysqli_num_rows($resultBejelentkezes) > 0 ) {
                while($rowBejelentkezes = mysqli_fetch_assoc($resultBejelentkezes)) {
                    $jelszoYour = $rowBejelentkezes["jelszo"];
                    //print $jelszoYour;
                    if(password_verify("$jelszo","$jelszoYour")){
                        $_SESSION["idfelhasznalo"] = $rowBejelentkezes['idfelhasznalo'];
                        $_SESSION["teljesnev"] = $rowBejelentkezes['teljesnev'];
                        $email = $rowBejelentkezes['email'];
                        $szerkeszto = $rowBejelentkezes['szerkeszto'];
                        $_SESSION['szerkeszto'] = $szerkeszto;
                        $_SESSION["felhasznalonev"] = $rowBejelentkezes["felhasznalonev"];
                            if($szerkeszto == 1){
                                header('location: http://localhost/pizzafaloda/app/admin.php');
                            }else{
                                header('location: http://localhost/pizzafaloda/page/etlap.php');
                            }
                    }
                }
            }
        }
        mysqli_close($conn);
    }   

/* }
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

