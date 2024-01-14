<?php
include_once '../app/session.php';
if(isset($_SESSION["idfelhasznalo"]) && $_SESSION['szerkeszto'] == 1){
print '<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>';
         
        include_once '../app/head.php';
        headPage();
        
        print '<link rel="stylesheet" href="../admin.css">
        <title>Admin</title>
    </head>
    <body>';
        
        include_once '../app/adminnavbar.php';
        navbarAdmin();
        include_once '../app/weblapSQLTartalom.php';
        include_once '../app/adminfunkcio.php';
        /*<input class="adminStyle" type="text"  name="name" value="<?php print weblapSQLTartalom(1); ?>">*/
        print '
        <br>
        <br>
        <br>
        <h1>Weboldal szerkesztése</h1>
        <br>
        <br>
        <h2 id="rolunk" style="">Rólunk</h2>
        <br>
        <h3>Főcím</h3>';
        print adminFtartalom2(1);
        print "<h3>Főcím leírás</h3>";
        print adminFtartalom(1);
        print "<h3>Tulajdonos</h3>";
        print adminFtartalom(2);
        print "<h3>Tulajdonos rövid leírás</h3>";
        print adminFtartalom(3);
        print "<h3>Tulajdonos leírás</h3>";
        print adminFtartalom(4);
        print "<h3>Szakácsaink #1</h3>";
        print adminFtartalom(5);
        print "<h3>Szakácsaink #1 rövid leírás</h3>";
        print adminFtartalom(6);
        print "<h3>Szakácsaink #1 leírás</h3>";
        print adminFtartalom(7);
        print "<h3>Szakácsaink #2</h3>";
        print adminFtartalom(8);
        print "<h3>Szakácsaink #2 rövid leírás</h3>";
        print adminFtartalom(9);
        print "<h3>Szakácsaink #2 leírás</h3>";
        print adminFtartalom(10);
     print "  
    </body>
</html>";
}else{
    header('location: http://localhost/pizzafaloda/index.php');
}     
