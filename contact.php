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

    <!-- Bootstrap Stylesheet -->
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
      <!-- Spinner Son -->

      <!-- Navbar başlangıç -->
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
              İletişim
            </h1>
          </div>
        </div>
      </div>
      <!-- Navbar Sonu -->

      <!-- İletişim Başlangıç -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal">
            </h5>
            <h1 class="mb-5">Herhangi bir sorunuz için arayın.</h1>
          </div>
          <div class="row g-4">
            <div class="col-12">
              <div class="row gy-4">
                <div class="col-md-4">
                  <h5
                    class="section-title ff-secondary fw-normal text-start text-primary"
                  >
                    Masa ayırt
                  </h5>
                  <p>
                    <i class="fa fa-envelope-open text-primary me-2"></i
                    >rezervasyon@aspirate.com
                  </p>
                </div>
                <div class="col-md-4">
                  <h5
                    class="section-title ff-secondary fw-normal text-start text-primary"
                  >
                    Bilgi almak için
                  </h5>
                  <p>
                    <i class="fa fa-envelope-open text-primary me-2"></i
                    >info@aspirate.com
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s" style="margin-left: 320px; margin-right: -320px;">
              <iframe
                class="position-relative rounded w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.685984720366!2d27.934321321677174!3d40.337180833736745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d4a80f94f805%3A0x9901064bc5b1c83!2sBand%C4%B1rma%20Onyedi%20Eyl%C3%BCl%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1682618552480!5m2!1str!2str"
                frameborder="0"
                style="min-height: 350px; min-width: 400px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
            <div class="col-md-6">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <form method="POST  ">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <label for="isim">İsim ve soyisim</label>
                        <input
                          type="text"
                          class="form-control"
                          id="isim"
                          name="adsoyad"
                          placeholder="İsim ve soyisim"
                        />
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <label for="email">Eposta adresi</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Eposta adresi"
                        />
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <label for="Konu">Konu</label>
                        <input
                          type="text"
                          class="form-control"
                          id="Konu"
                          name="konu"
                          placeholder="Konu"
                        />
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <label for="Mesaj">Mesaj</label>
                        <textarea
                          class="form-control"
                          placeholder="Mesajınızı buraya yazınız."
                          id="Mesaj"
                          name="mesaj"
                          style="height: 150px"
                        ></textarea>
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 py-3" type="submit" name="gonder">
                        Mesaj gönder
                      </button>

                      <?php

                          if(isset($_POST['gonder'])){

                            include("baglanti.php");

                            $adsoyad = $_POST['adsoyad'];
                            $email = $_POST['email'];
                            $konu = $_POST['konu'];
                            $mesaj = $_POST['mesaj'];

                            $ekle = "INSERT INTO `iletisim`(`adsoyad`, `email`, `konu`, `mesaj`) VALUES ('".$adsoyad."','".$email."','".$konu."','".$mesaj."')";

                            if ($baglan->query($ekle) === TRUE) 
                              {
                                echo "<script>alert('Mesajınız Alınmıştır.')</script>";
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
      </div>
      <!-- İletişim sonu -->

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
                <i class="fa fa-map-marker-alt me-3"></i> 17 Eylül Üniversitesi, Bandırma, Balıkesir, Türkiye
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>
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

    <!-- JavaScript Kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Javascript templatesi -->
    <script src="js/main.js"></script>
  </body>
</html>
