<?php
if(isset($_GET['tartalom']) && isset($_GET['id'])){
            include '../app/db.php';
            $sqlTartalomUpdate = "UPDATE weblaptartalom
                                   SET tartalom = '" .$_GET['tartalom']."'
                                   WHERE idweblapTartalom = '" .$_GET['id']."'";
                                $update = mysqli_query($conn, $sqlTartalomUpdate);
                                mysqli_close($conn);
            header('location: http://localhost/pizzafaloda/app/admin.php');
}else{
            include '../app/db.php';
            $sqlTartalomUpdate = "UPDATE weblaptartalom
                                   SET elnevezes = '" .$_GET['tartalom2']."'
                                   WHERE idweblapTartalom = '" .$_GET['id']."'";
                                $update = mysqli_query($conn, $sqlTartalomUpdate);
                                mysqli_close($conn);
            header('location: http://localhost/pizzafaloda/app/admin.php');
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

