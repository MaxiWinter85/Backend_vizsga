<?php
if(!isset($_SESSION["felhasznalonev"])){
        print "<h3 class='header-title'>Bejelentkezés</h3>
        <form class='login-form' action='belepes.php' method='post'>
                <div class='form-group'>
                  <input
                    type='email'
                    class='form-control'
                    name='email'
                    placeholder='Email cím'
                  />
                </div>
                <div class='form-group'>
                  <input
                    type='Password'
                    class='form-control'
                    name='jelszo'
                    placeholder='Jelszó'
                  />
                  <a href='#!' class='forgot-password'>Elfelejtett jelszó</a>
                </div>
                <div class='form-group'>
                  <button class='btn btn-primary btn-block my-button'>Bejelentkezés</button>
                </div>
                <div class='form-group'>
                  <div class='text-center'>
                   Nincs profilod? <a href='#my-regist'>Regisztrálj most!</a>
                  </div>
                </div>
              </form>";
        
    }else{
        print "<h3 class='header-title'>Üdvözlünk!</h3>
                ";
        print   "<h3 class='header-title'> ". $_SESSION["teljesnev"] ." </h3>";
        print   "<div class='form-group'>
                <a id='fooldal' href='http://localhost/pizzafaloda/page/etlap.php' 
                    class='btn btn-primary btn-block my-button'>Nézd meg az étlapunkat</a>
                <br>
                <br>
                <a id='fooldal' href='../app/kijelentkezes.php' 
                    class='btn btn-primary btn-block my-button'>Kijelentkezés</a>
                </div>";
    }
    
    /*<button class='btn btn-primary btn-block my-button'>Kijelentkezés</button>*/
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

