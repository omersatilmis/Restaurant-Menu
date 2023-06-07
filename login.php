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
            <a href="index.php" class="nav-item nav-link">Anasayfa</a>
              <a href="menu.php" class="nav-item nav-link">Menümüz</a>
              <a href="contact.php" class="nav-item nav-link">İLETİŞİM</a>
              <a href="login.php" class="nav-item nav-link">RESTAURANT GİRİŞİ </a>
            </div>
            <a href="booking.php" class="btn btn-primary py-2 px-4"
              >Masa rezerve et</a
            >
            <a href="sepet.php" class="btn btn-primary py-2 px-4">SİPARİŞ VER</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          
        </div>
      </div>
      <!-- Navbar Sonu -->

      <!-- Giriş Yap Başlangıç -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                  <div class="card-body p-4 p-sm-5">
                    <h1 class="card-title text-center mb-5 fw-light fs-5">Giriş Yap</h5>
                    <form action="login.php" method="POST" style="margin-left: 250px;">
                      <div class="form-floating mb-3">
                        <label for="floatingInput">Kullanıcı Adı:</label>
                        <input type="" class="form-control" id="floatingInput" placeholder="" name="kullaniciadi">
                      </div>
                      <div class="form-floating mb-3">
                        <label for="floatingPassword" style="margin-left: 58px;">Şifre:</label>
                        <input type="password" class="form-control" id="floatingPassword" placeholder="" name="sifre">
                      </div>
        
                      <div class="form-check mb-3" style="margin-left: 100px;">
                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                        <label class="form-check-label" for="rememberPasswordCheck">
                          Beni Hatırla
                        </label>
                      </div>
                      <div class="d-grid" >






                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"
                         style="width: 282px;" name="girisyap">GİRİŞ Yap</button><br><br>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Giriş Yap sonu -->

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


<?php

include("baglanti.php");


if(isset($_POST['girisyap'])){


    

    $kullaniciadi = mysqli_real_escape_string($baglan,$_POST['kullaniciadi']);
    $sifre = mysqli_real_escape_string($baglan,$_POST['sifre']);

    

    if ($kullaniciadi != "" && $sifre != ""){

        $sql_query = "select count(*) as cntUser from yoneticigiris where kullaniciAdi='".$kullaniciadi."' and kullaniciSifre='".$sifre."'";
        $result = mysqli_query($baglan,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['kullaniciadi'] = $kullaniciadi;
            $_SESSION['emailState'] = "1";
            
            $_SESSION['loginin'] = TRUE;
            echo "<script>alert('Giriş işlemi başarılı.')</script>";
            echo'<meta http-equiv="refresh" content="0;URL=admin.php">';
        }else{
          echo "<script>alert('Kullanıcı adı veya parola hatalı.')</script>";
        }

    }

}



?>


