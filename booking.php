
<?php


session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Aspirate Restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon - Sekme Yanı Iconu -->
    <link href="img/AspirateLogoPembeAid.png" rel="icon" />

    <!-- Google web fontları -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Iconların Stylesheeti -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
      rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”/>

    <!--  Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template düzeni css -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Başlangıç -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Yükleniyor...</span>
        </div>
      </div>
      <!-- Spinner Sonu -->

      <!-- Navbar Başlangıcı -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <div class="imgContainer">
              <a href="index.php">
                <img
                  src="img/AspirateLogoPembeAid.PNG"
                  alt=""
                  width="125px"
                  height="125px"
              /></a>
            </div>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              
              <?php
                if(isset($_SESSION['kullaniciAdi'])){
                  echo "<a href='index.php' class='nav-item nav-link'>Anasayfa</a>";
                  echo "<a href='orders.php' class='nav-item nav-link'>Siparişler</a>";
                  echo "<a href='reservations.php' class='nav-item nav-link'>Rezervasyonlar</a>";
                  echo "<a href='logout.php' class='btn btn-primary py-2 px-4'>Çıkış yap</a>";
                }else{
                  echo "<a href='index.php' class='nav-item nav-link'>Anasayfa</a>";
                  echo "<a href='menu.php' class='nav-item nav-link'>Menümüz</a>";
                  echo "<a href='contact.php' class='nav-item nav-link'>İletişim</a>";
                  echo "<a href='login.php' class='nav-item nav-link'>RESTAURANT GİRİŞİ</a>";
                }
              ?>
              
            </div>
            <a href="booking.php" class="btn btn-primary py-2 px-4"
              >Masa rezerve et</a
            >
            <a href="sepet.php" class="btn btn-primary py-2 px-4">SİPARİŞ VER</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Masa rezervasyonu
            </h1>
          </div>
        </div>
      </div>
      <!-- Navbar Bitişi -->

      <!-- Rezarvasyon alanı -->
      <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
          <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                Rezervasyon
              </h5>
              <h1 class="text-white mb-4">Online Rezervasyon</h1>
              <form method="post">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="İsim soyisim"
                        name="adsoyad"
                      />
                      <label for="name">İsminiz</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Mail adresiniz"
                      />
                      <label for="email">E-posta adresiniz</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div
                      class="form-floating date"
                      id="date3"
                      data-target-input="nearest"
                    >
                      <input
                        type="text"
                        class="form-control "
                        id=""
                        name="tarih"
                        placeholder="Tarih"
                        data-target="#date3"
                        data-toggle=""
                      />
                      <label for="tarih">Tarih ve Zaman</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select" id="select1" name="kisisayisi">
                        <option value="1">1 Kişi</option>
                        <option value="2">2 Kişi</option>
                        <option value="3">3 Kişi</option>
                        <option value="4">4 Kişi</option>
                        <option value="5">5 Kişi</option>
                        <option value="6">6 Kişi</option>
                        <option value="7">7 Kişi</option>
                        <option value="8">8 Kişi</option>
                        <option value="9">9 Kişi</option>
                        <option value="10">10 Kişi</option>
                      </select>
                      <label for="select1">Rezarvasyon İçin Kişi Sayısı</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Özel isteklerinizi yazabilirsiniz"
                        id="message"
                        name="mesaj"
                        style="height: 100px"
                      ></textarea>
                      <label for="message">Mesajınızı yazabilirsiniz.</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit" name="rezerve">
                      Rezerve Et
                    </button>

                    <?php

                        if(isset($_POST['rezerve'])){

                          include("baglanti.php");

                          $adsoyad = $_POST['adsoyad'];
                          $email = $_POST['email'];
                          $tarih = $_POST['tarih'];
                          $kisisayisi = $_POST['kisisayisi'];
                          $mesaj = $_POST['mesaj'];

                          $ekle = "INSERT INTO `rezervasyon`(`adsoyad`, `email`, `tarih`, `kisisayisi`, `mesaj`) VALUES ('".$adsoyad."','".$email."','".$tarih."','".$kisisayisi."','".$mesaj."')";

                          if ($baglan->query($ekle) === TRUE) 
                            {
                              echo "<script>alert('Rezervasyonunuz Alınmıştır.')</script>";
                              echo'<meta http-equiv="refresh" content="0;URL=index.php">';  
                            } 


                        }

                    ?>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Rezervasyon sonu -->


                


      <!-- Footer Başlangıç -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Aspirate
              </h4>
              <a class="btn btn-link" href="about.php">Hakkımızda</a>
              <a class="btn btn-link" href="contact.php">İletişim</a>
              <a class="btn btn-link" href="booking.php">Rezervasyon</a>
              <a class="btn btn-link" href="">Gizlilik</a>
              <a class="btn btn-link" href="">Hizmet Şartları</a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                İletişim
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>17 Eylül Üniversitesi, Bandırma, Balıkesir,
                Türkiye
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3">
              </i>0(266)999 99 99 
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@aspirate.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Bültene abone olun.
              </h4>
              <p>En yeni gelişmelerden haberdar olmak için bültene abone olun.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control border-primary w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="birisi@gmail.com"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  Giriş yap
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Aspirate</a>, Tüm
              Hakları Saklıdır. Ömer Faruk SATILMIŞ ve Emir PETEK
              tarafından tasarlandı.</a>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="index.php">Anasayfa</a>
                  <a href="">Çerezler</a>
                  <a href="">Yardım</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer sonu -->

      <!-- Başa dönme -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--  Javascript Templatesi -->
    <script src="js/main.js"></script>
  </body>
</html>
