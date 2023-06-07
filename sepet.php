
<?php

  include("baglanti.php");
?>

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
              Sepeti görüntüle
            </h1>
          </div>
        </div>
      </div>
      <!-- Navbar Bitişi -->

      <!-- Sepet başlangıcı -->

      


      <div class="container-xxl py-5">
        <div class="container">


        <form action="sepet.php" method="POST" style="margin-left:600px;">


                  <?php
                    echo "<table border='3' width='800px'>";
                    echo "<tr>";
                    echo "<th>Yemek/İçecek adı</th>";
                    echo "<th>Adet &nbsp; &nbsp; &nbsp; &nbsp; </th>";
                    echo "<th>Not</th>";
                    echo "</tr>";
                      echo "<tr>";
                        echo "<td>
                          <select id='option1' name='yemekSecim'>
                              <option value='Zeytinyağlı söğüş'>Zeytinyağlı söğüş</option>
                              <option value='Sucuklu yumurta'>Sucuklu yumurta</option>
                              <option value='Mıhlama'>Mıhlama</option>
                              <option value='Menemen'>Menemen</option>
                              <option value='Küt Böreği'>Küt Böreği</option>
                              <option value='Bal,kaymak,tereyağı'>Bal,kaymak,tereyağı</option>
                              <option value='Zeytin çeşitleri, peynir çeşitleri, özel salata tabağı'>Zeytin çeşitleri, peynir çeşitleri, özel salata tabağı</option>
                              <option value='Reçeller, tahin-pekmez'>Reçeller, tahin-pekmez</option>
                              <option value='Mercimek çorbası'>Mercimek çorbası</option>
                              <option value='Ezogelin çorbası'>Ezogelin çorbası</option>
                              <option value='Tereyağlı Pilav'>Tereyağlı Pilav</option>
                              <option value='Buritto'>Buritto</option>
                              <option value='Makarna'>Makarna</option>
                              <option value='Ratatuy'>Ratatuy</option>
                              <option value='Tapas'>Tapas</option>
                              <option value='Apfelstrudel'>Apfelstrudel</option>
                              <option value='Osmanlı şerbeti'>Osmanlı şerbeti</option>
                              <option value='Yayık ayran'>Yayık ayran</option>
                              <option value='Gül şerbeti'>Gül şerbeti</option>
                              <option value='Kızılcık şerbeti'>Kızılcık şerbeti</option>
                              <option value='Gelincik şerbeti'>Gelincik şerbeti</option>
                              <option value='Hibiskus şerbeti'>Hibiskus şerbeti</option>
                              <option value='Da Hong Pao çayı'>Da Hong Pao çayı</option>
                              <option value='Ayva şerbeti'>Ayva şerbeti</option>
                              <option value='Şekerpare'>Şekerpare</option>
                              <option value='San Sebastian'>San Sebastian</option>
                              <option value='Aşure'>Aşure</option>
                              <option value='Baklava'>Baklava</option>
                              <option value='Sütlaç'>Sütlaç</option>
                              <option value='Dulce de Lecher'>Dulce de Lecher</option>
                              <option value='Daifuku Mochi'>Daifuku Mochi</option>
                              <option value='Waffle'>Waffle</option>
                          </select>
                        </td>";
                    echo "<td>
                          <select id='option2' name='adetSecim'>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                              <option value='4'>4</option>
                              <option value='5'>5</option>
                              <option value='6'>6</option>
                              <option value='7'>7</option>
                              <option value='8'>8</option>
                              <option value='9'>9</option>
                              <option value='10'>10</option>
                          </select>
                    </td>";
                    echo "<td>
                          <input type='text' id='yemeknotu'name='yemeknotu'>
                          <button type='submit' id='' name='kaydet'>Kaydet</button></td>
                    </td>";
                      echo "</tr>";

                      
                      
                      if(isset($_POST['kaydet'])){
                        
                        include("baglanti.php");


                        // Gelen verileri al
                        //$secimlerID = 1;
                        $yemekSecim = $_POST['yemekSecim'];
                        $adetSecim = $_POST['adetSecim'];
                        $yemeknotu = $_POST['yemeknotu'];
                        
                        $secimidsorgu = "SELECT MAX(secimlerID) as max_secimlerID FROM secimlerID";
                        $sonucsecimid = mysqli_query($baglan, $secimidsorgu);
                        $row = mysqli_fetch_assoc($sonucsecimid);
                        $secimlerID = $row['max_secimlerID'];
                        
                        $ekle = "INSERT INTO `yemeksecimleri`(`secimlerID`, `yemekSecim`, `adetSecim`, `yemekNotu`) VALUES ('".$secimlerID."','".$yemekSecim."','".$adetSecim."','".$yemeknotu."')";

                        if ($baglan->query($ekle) === TRUE) 
                        {
                            echo "Yiyecek/içecek eklendi";
                        } 
                                                
                        // tablo altına seçilen ürünlerin yazdırılması için çalışan kod parçası
                        $kaydetListeleSorgu = "SELECT * FROM yemeksecimleri WHERE secimlerID = $secimlerID";

                        $kaydetSonuc = $baglan->query($kaydetListeleSorgu);

                        while ($sonuc = $kaydetSonuc->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $sonuc["yemekSecim"] . "</td>";
                          echo "<td>" . $sonuc["adetSecim"] . "</td>";
                          echo "<td>" . $sonuc["yemekNotu"] . "</td>";
                          echo "<td> <button name='urunsil' value='" . $sonuc["yemekSecim"] . "'> Sil </button> </td>";
                          echo "</tr>";
                        }
                          $baglan->close();

                        }

                        
                         if (isset($_POST['urunsil'])) {
                          include("baglanti.php");
                        
                          $yemekSecim = $_POST['urunsil'];
                          $secimidsorgu = "SELECT MAX(secimlerID) as max_secimlerID FROM secimlerID";
                          $sonucsecimid = mysqli_query($baglan, $secimidsorgu);
                          $row = mysqli_fetch_assoc($sonucsecimid);
                          $secimlerID = $row['max_secimlerID'];
                        
                          $silquery = "DELETE FROM yemeksecimleri WHERE yemekSecim = '$yemekSecim'";
                        
                          if ($baglan->query($silquery) === TRUE) {
                            echo "Yiyecek/içecek silindi";
                          } else {
                            echo "Hata: " . $baglan->error;
                          }

                          //echo'<meta http-equiv="refresh" content="0;URL=sepet.php">';
                          

                                                
                        
                            $sorgulama = "SELECT * FROM yemeksecimleri WHERE secimlerID = $secimlerID";

                            $sorgulama2 = mysqli_query($baglan, $sorgulama);   
                            
                            if(mysqli_num_rows($sorgulama2) > 0) {

                                  while ($satir = mysqli_fetch_assoc($sorgulama2)) {
                                    echo "<tr>";
                                    echo "<td>" . $satir["yemekSecim"] . "</td>";
                                    echo "<td>" . $satir["adetSecim"] . "</td>";
                                    echo "<td>" . $satir["yemekNotu"] . "</td>";
                                    echo "<td> <button name='urunsil' value='" . $satir["yemekSecim"] . "'> Sil </button> </td>";
                                    echo "</tr>";
                                  }

                                }
                        
                          $baglan->close();
                        }

                        echo "</table>";


                      
                      


                      


                    echo "</table>";

                    echo "<table border='3' width='800px'>";
                    echo "<tr>";
                    echo "<th>İsim soyisim</th>";
                    echo "<th>Telefon numarası &nbsp; &nbsp; &nbsp; &nbsp; </th>";
                    echo "<th>Masa numarası</th>";
                    echo "</tr>";
                      echo "<tr>";
                    echo "<td>
                          <input type='text' name='adsoyad'></td>
                    </td>";
                    echo "<td>
                          <input type='text' name='telno'></td>
                    </td>";
                    echo "<td>
                    <select name='masaNo'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value=''>6</option>
                    <option value='7'>7</option>
                    <option value='8'>8</option>
                    <option value='9'>9</option>
                    <option value='10'>10</option>
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                    <option value='13'>13</option>
                    <option value='14'>14</option>
                    <option value='15'>15</option>
                    <option value='16'>16</option>
                    <option value='17'>17</option>
                    <option value='18'>18</option>
                    <option value='19'>19</option>
                    <option value='20'>20</option>
                        </select>
                         &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        <button type='submit' id='siparisver' name='siparisver'>Sipariş Ver</button></td>
                    </td>";
                      echo "</tr>";

                      if(isset($_POST['siparisver'])){

                        include("baglanti.php");
  
                        $adsoyad = $_POST['adsoyad'];
                        $telno = $_POST['telno'];
                        $masaNo = $_POST['masaNo'];

                        $secimidsorgu = "SELECT MAX(secimlerID) as max_secimlerID FROM secimlerID";
                        $sonucsecimid = mysqli_query($baglan, $secimidsorgu);
                        $row = mysqli_fetch_assoc($sonucsecimid);
                        $secimlerID = $row['max_secimlerID'];
                        
  
                        
                        $siparisikaydet = "INSERT INTO `kullanicilar`(`kullaniciAdSoyad`, `kullaniciTelNo`, `kullaniciMasaNo`, `secimlerID`) VALUES ('".$adsoyad."','".$telno."','".$masaNo."','".$secimlerID."')";

                          if ($baglan->query($siparisikaydet) === TRUE) 
                          {
                            $secimlerID = $row['max_secimlerID'] + 1;
                            $idchangesorgu = "UPDATE `secimlerid` SET `secimlerID`= ".$secimlerID."";
                            $result = $baglan->query($idchangesorgu);
                                if ($result) {    
                                        echo "<script>alert('Siparişiniz Alınmıştır.')</script>";
                                        echo'<meta http-equiv="refresh" content="0;URL=index.php">';      
                            
                          } 
  
                        } 
  
                          $baglan->close();
                      }
                      
                    echo "</table>";
                  ?>         
          </form>
          </div>
      </div>  





      <!-- Sepet bitişi -->            

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

