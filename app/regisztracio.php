<?php
if(!isset($_SESSION["felhasznalonev"])){
    
print '<section class="vh-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="">
            <div class="login-box text-black">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regisztráció</p>
    
                    <form class="mx-1 mx-md-4" action="../app/regisztri.php" method="post">
                       <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" id="form3Example1c" name="felhasznalonev" class="form-control" />
                          <label class="form-label" for="form3Example1c">Adjon meg Becenevet</label>
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="text" id="form3Example1c" name="teljesnev" class="form-control" />
                          <label class="form-label" for="form3Example1c">Adja meg a teljes nevét nevét</label>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas  fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="email" id="form3Example3c" name="email" class="form-control" />
                          <label class="form-label" for="form3Example3c">Adja meg az Email címét</label>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" id="form3Example4c" name="jelszo" class="form-control" />
                          <label class="form-label" for="form3Example4c">Adjon meg egy jelszót</label>
                        </div>
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" id="form3Example4cd" name="jelszoC" class="form-control" />
                          <label class="form-label" for="form3Example4cd">Írja be újra a jelszót</label>
                        </div>
                      </div>
    
                      <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value=""  id="form2Example3c" required/>
                        <label class="form-check-label" for="form2Example3">
                          Elolvastam és elfogadom az <a href="#!">Általános Szerződési Feltételeket</a>
                        </label>
                      </div>
    
                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Regisztrálok</button>
                      </div>
    
                    </form>
    
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
    
                    <img id="my-regist" src="../images/reg.png"
                      class="img-fluid" alt="RegiszterIMG">
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>'
    ;

}
include_once '../app/regisztri.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

