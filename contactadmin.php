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

    <!-- Google Web Fontları -->
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
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- Bootstrap Stylesheeti -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template düzeni css -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!--Spinner Başlangıç -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
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
              <a href= "index.php">
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
            <a href="admin.php" class="nav-item nav-link">Anasayfa</a>
              <a href="orders.php" class="nav-item nav-link">SİPARİŞLER</a>
              <a href="reservations.php" class="nav-item nav-link">Rezervasyonlar</a>
              <a href="contactadmin.php" class="nav-item nav-link">İLETİŞİM Soruları</a>
              <a href="logout.php" class="btn btn-primary py-2 px-4">Çıkış Yap</a>
              
              
            
        </nav>

        
      </div>
      <!-- Navbar sonu -->

      <!-- Admin iletişim Başlangıcı -->

      <div class="container-xxl py-5">
                <div class="container">




                <?php
                    echo "<table border='3' width='900px' style='margin-left:500px;'>";
                    echo "<tr>";
                    echo "<th>Müşteri adı soyadı &nbsp;&nbsp;&nbsp;</th>";
                    echo "<th>E-mail &nbsp;&nbsp;</th>";
                    echo "<th>Konu &nbsp;&nbsp;</th>";
                    echo "<th>Mesaj &nbsp;&nbsp;</th>";
                    echo "</tr>";

                    include("baglanti.php");



                    $sorgu = "SELECT * FROM iletisim";

                    // tablo altına iletisim bilgileri yazdırılması için çalışan kod parçası
                    
                    $kaydetSonuc = $baglan->query($sorgu);

                    while ($sonuc = $kaydetSonuc->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $sonuc["adsoyad"] . "</td>";
                      echo "<td>" . $sonuc["email"] . "</td>";
                      echo "<td>" . $sonuc["konu"] . "</td>";
                      echo "<td>" . $sonuc["mesaj"] . "</td>";                      
                      echo "</tr>";
                      
                    }
                    

                    
                    
                    echo "</tr>";
                    
                    echo "</table>";
                    ?>
                 </div>
         </div> 
      
      
      <!-- Admin iletişim sonu -->
      
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
              <i class="fa fa-phone-alt me-3"></i>0(266)999 99 99 
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
      <!-- Footer Bitişi -->

      <!-- Başa dönme -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Kütüphaneleri -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript Templatei  -->
    <script src="js/main.js"></script>
  </body>
</html>






