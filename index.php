<?php
include_once './app/session.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <?php
        include_once './app/head.php';
        headIndex();
        ?>
        <title>Pizza Faloda</title>
    </head>
    <body>
        
        <?php
        include_once './app/navbar.php';
        $navbar = new navbar();
        $navbar->navbarIndex();
        ?>
        <!--bootsrtap carousel-->
    <div
      id="carouselExampleAutoplaying"
      class="carousel slide my-carousel"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img
            src="./images/fokepNEW.jpg"
            class="d-block w-100 carouselIMG"
            alt="slide1"
          />
          <div class="carousel-caption d-none d-md-block carouselBackG">
            <h5>Isteni Pizza</h5>
            <p>Rendelj most és egy órán belül kiszállítjuk.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img
            src="./images/fokepNEW3.jpg"
            class="d-block w-100 carouselIMG"
            alt="slide2"
          />
          <div class="carousel-caption d-none d-md-block carouselBackG">
            <h5>Akciós Pizzáink</h5>
            <p>Rendelj most és a harmadik pizza ajándék.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img
            src="./images/fokepNew2.jpg"
            class="d-block w-100 carouselIMG"
            alt="slide3"
          />
          <div class="carousel-caption d-none d-md-block carouselBackG">
            <h5>Ital választékunk</h5>
            <p>Rendelj most Pizzád mellé egy finom italt</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">hátra</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">előre</span>
      </button>
    </div>
  </header>
    <!--- Étel választék-->
    <main>
    <section id="food">
      <h2>Étel és Ital választékunk</h2>
      <div class="food-container my-container">
        <div class="food-type">
          <div class="img-container">
            <img src="./images/pizza300.jpg" alt="pizza" />
            <div class="img-content">
              <h3>Pizza</h3>
              <a id="pizza" href="http://localhost/pizzafaloda/page/etlap.php?pizza=pizza" class="btn btn-primary">Rendelés</a>
            </div>
          </div>
        </div>
        <div class="food-type">
          <div class="img-container">
            <img src="./images/hambi300.jpg" alt="hamburger" />
            <div class="img-content">
              <h3>Hamburger</h3>
              <a id="hamburger" href="http://localhost/pizzafaloda/page/etlap.php?hamburger=hamburger" class="btn btn-primary">Rendelés</a>
            </div>
          </div>
        </div>
        <div class="food-type">
          <div class="img-container">
            <img src="./images/sutemeny300.jpg" alt="sütemény" />
            <div class="img-content">
              <h3>Sütemény</h3>
              <a id="sutemeny" href="http://localhost/pizzafaloda/page/etlap.php?sutemeny=s%C3%BCtem%C3%A9ny" class="btn btn-primary">Rendelés</a>
            </div>
          </div>
        </div>
        <div class="food-type">
          <div class="img-container">
            <img id="italok" src="./images/italok300.jpg" alt="ital" />
            <div class="img-content">
              <h3>Italok</h3>
              <a href="http://localhost/pizzafaloda/page/etlap.php?italok=italok" class="btn btn-primary">Rendelés</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---Kamu értékelés-->
    <section id="testimonials">
      <h2 class="testimonial-title">Vélemények rólunk</h2>
      <div class="testimonial-container my-container">
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img
                src="https://media.istockphoto.com/id/1318858332/photo/headshot-portrait-of-smiling-female-employee-posing-in-office.jpg?b=1&s=170667a&w=0&k=20&c=xaXWxTDSzfZp6Xa16RFBfFknXBRQkfkZD8BKr07-Aac="
                alt=""
              />
              <p class="customer-name">Szabó Andrea</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
            voluptas cupiditate aspernatur odit doloribus non.
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img
                src="https://c.pxhere.com/photos/9d/61/man_profile_male_face_young_man_beard_deep_look-835356.jpg!s2"
                alt=""
              />
              <p class="customer-name">Kiss Gergő</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
            voluptas cupiditate aspernatur odit doloribus non.
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <img
                src="https://images.assetsdelivery.com/compings_v2/fizkes/fizkes2011/fizkes201102042.jpg"
                alt=""
              />
              <p class="customer-name">Csáki Anita</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
            voluptas cupiditate aspernatur odit doloribus non.
          </p>
        </div>
      </div>
    </section>
  </main>
    <!----Elérhetőség a főoldalon-->
    <footer >
      <h2>Elérhetőség</h2>
      <div class="my-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85747.39088825374!2d19.951850049999997!3d47.808473549999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47405a0f823e231f%3A0xf1b008aea774ed94!2zR3nDtm5necO2cw!5e0!3m2!1shu!2shu!4v1690194530885!5m2!1shu!2shu" class="my-IframG" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="myContact">
        <p> Rendelésfelvétel - 06 1 1234-333</p>
         <p> Panaszkezelés: - 06 80 999-1234 </p>
         <p> Panasz e-mail cím: panasz@pizzafaloda.hu</p>
          <p> Marketing megkeresés: marketing@pizzafaloda.hu</p>
          <p> Munkaügy: iroda@pizzakfaloda.hu</p>
           
          
          <p> www.pizzafaloda.hu-n leadott bankkártyás rendelés reklamáció esetén:</p>
          
          <p> (Hétfőtől - Pénteking: 10:00 - 17:00 óra között)</p>
          
          <p> Bankkártyás reklamációs vonal:  + 3 6 1 6 1 2 3 5 6 3</p>
          <p>E-mail cím: v e v o i b a n k k a r t y a s r e k l a m a c i o @ k o o l l s i t e . e u</p>
          
      </div>
    </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    </body>
</html>
