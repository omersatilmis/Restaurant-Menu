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
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

      <!-- Bootstrap Stylesheeti -->
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
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner Sonu -->

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
              Menümüz
            </h1>
          </div>
        </div>
      </div>
      <!-- Navbar sonu -->

      <!-- Menü başlangıcı -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Yemek Menümüze Göz Atabilirsiniz
            </h5>
            <h1 class="mb-5">En meşhur lezzetlerimiz</h1>
          </div>
          <div
            class="tab-class text-center wow fadeInUp"
            data-wow-delay="0.15s"
          >
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
              <!-- Kahvaltı üst navigasyon başlangıç [tab-1] -->
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                > 
                <i class="fa fa-coffee" style="font-size:36px"></i>
                  <div class="ps-3">
                    <small class="text-body">Türk ve doğu</small>
                    <h6 class="mt-n1 mb-0">Kahvaltıları</h6>
                  </div>
                </a>
              </li>
              <!-- Kahvaltı üst navigasyon bitiş -->

              <!-- Akşam yemeği üst navigasyon başlangıç [tab-2] -->
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                <i class="fa solid fa-utensils" style="font-size:36px"></i>
                  <div class="ps-3">
                    <small class="text-body">Aşkla dolu</small>
                    <h6 class="mt-n1 mb-0">Akşam yemekleri</h6>
                  </div>
                </a>
              </li>
              <!-- Akşam yemeği üst navigasyon bitiş -->

              <!-- İçecekler üst navigasyon başlangıç [tab-3] -->
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-glass-martini" style="font-size:36px;"></i>
                  <div class="ps-3">
                    <small class="text-body">Rahatlatan</small>
                    <h6 class="mt-n1 mb-0">İçecekler</h6>
                  </div>
                </a>
              </li>
              <!-- İçecekler üst navigasyon bitiş -->

              <!-- Tatlılar üst navigasyon başlangıç [tab-4] -->
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-4"
                >
                  <i class="fa fa-birthday-cake" style="font-size:36px"></i>
                  <div class="ps-3">
                    <small class="text-body">Tatlı konuşturan</small>
                    <h6 class="mt-n1 mb-0">Dünya tatlıları</h6>
                  </div>
                </a>
              </li>
              <!-- Tatlılar üst navigasyon bitiş -->
            </ul>

            <!-- Kahvaltı çeşitleri açıklamaları [tab-1] -->
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/SogusTabagı.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Zeytinyağlı söğüş</span>
                          
                          <span class="text-primary">90₺</span>
                        </h5>
                        <small class="fst-italic"
                          >İri küpler halinde doğranmış domatesler, uzun dilimli
                          salatalıklar, zeytinyağlı avakado ve özel baharatlarla
                          harmanlanmış, maydonozla süslenmiş eşsiz izmir
                          lezzeti.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/SucukluYumurta.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Sucuklu yumurta</span>
                          <span class="text-primary">40₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Helal dana etinden elde edilmiş, özel tavalarda
                          kızartılan sucuklar ve çiftlik tavuklarının
                          yumurtaları ile hazırlanan eşsiz Türk - Osmanlı
                          mutfağının sabah lezzetiyle buluşun.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/Mihlama.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Mıhlama</span>
                          <span class="text-primary">45₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Genişçe bir tavada tereyağı eritilip, mısır unuyla
                          hafif kavrularak hazırlanan mıhlamamızın tepsinizden
                          çatalınıza kadar uzamasına tanık olun..
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/Menemen.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Menemen </span>
                          <span class="text-primary">30₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Çiftlik tavuklarının yumurtası, biber ve domates
                          kullanılarak yapılan bir Türk yemeğidir. İlk kez
                          mübadele ile İzmir'in Menemen ilçesine gelen Girit
                          Türkleri tarafından yapılmıştır ve adını ilçeden
                          almaktadır.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/KutBoregı.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Küt böreği </span>
                          <span class="text-primary">40₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Kürt böreği veya sade börek, ince katmanlar halinde
                          hazırlanmış, Üzerine pudra şekeri serpilerek servis
                          edilen "Rengo" lakabıyla tanınan Bileceli Mehmet Efendi'nin hazırladığı eşsiz tadımızdır.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/Bal.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Bal, kaymak, tereyağı </span>
                          <span class="text-primary">40₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Anadolu'nun engin bozkırlarından arılarımızın
                          topladığı polenlerlerle ürettiği eşsiz ballarımızı,
                          hayvanlarımızın tereyağı ve kaymaklarını sofranıza
                          getiriyoruz.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/PeynirZeytin.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span
                            >Zeytin çeşitleri, peynir çeşitleri, özel salata tabağı</span
                          >
                          <span class="text-primary">45₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Batı Ege'nin eşsiz zeytinleri, zeytinyağları ve
                          baharatları ile harmanlanmış doğal tatlarımız,
                          Anadolu'nun bereketli mahsülleri ile yetişen
                          hayvanları sütleri ile tapılan leziz peynir çeşitleri
                          ile sofralarınıza renk katan tatlarımız.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kahvaltılar/RecelPekmez.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Reçeller, tahin-pekmez </span>
                          <span class="text-primary">30₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Çeşitli meyve ve sebzelerden elde edilmiş tatlı ve ekşimsi binbir çeşit
                          reçellerimiz ve tahin ile pekmezin eşsiz buluşmasına tanıklık edin.</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Kahvaltı çeşitleri açıklamaları bitişi [tab-1] -->

              <!-- Akşam yemeği açıklamaları başlangıcı [tab-2]-->
              <!-- -->
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/Mercimek.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Mercimek çorbası  </span>
                          <span class="text-primary">40₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Yaz kış demeden her mevsim, her zaman, her durumda
                          elimizin gittiği tariftir mercimek çorbası tarifi. En
                          çok sevilen çorbalardan biridir o! Bu yüzden zamansız
                          çorbadır. Belki de bütün yemek tarifleri için
                          böyledir.
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/Ezogelin.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Ezogelin çorbası </span>
                          <span class="text-primary">40₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Türk mutfağına özgü, buram buram Anadolu kokan,
                          binlerce yıllık bir çorba tarifiyle karşınızdayız.
                          Yemek tarifleri arasından seçtiğiniz ana yemek ne
                          olursa olsun, ona mutlaka yakışacak olan ezogelin
                          çorbasından bahsediyoruz.
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/pilav.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Tereyağlı pilav </span>
                          <span class="text-primary">45₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Sadelikten yana olanların tercihi mis gibi şehriyeli
                          tereyağlı pirinç pilavımızı da böyle alalım, hemen her
                          yemeğin yanına çok yakışan bu nefis tadı
                          sofralarımızdan eksik etmeyelim. "Benim yaptıklarım
                          tane tane dökülmüyor, ya lapa oluyor ya da çok katı
                          kalıyor" diyenler için de minik püf noktalarımız var,
                          baştan söylemiş olalım.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/buritto.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Buritto </span>
                          <span class="text-primary">65₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Meksika dürümünü ayağınıza getiriyoruz. Beyaz pilav
                          tavuk ve eşsiz soslarla hazırlanan burittomuzun
                          bitmesini hiç istemeyeceksiniz.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/makarna.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Makarna </span>
                          <span class="text-primary">55₺</span>
                        </h5>
                        <small class="fst-italic"
                          >İtalya'nın sokaklarından ve en lüks restoranlarından
                          gelen İtalyan makarnasının tadını sizlerle
                          buluşturuyoruz. Özel soslar ve bitkilerle harmanlanmış
                          makarnalarımızla İtalya ile tanışın.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/ratatuy.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Ratatuy </span>
                          <span class="text-primary">60₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Özenle dilimlenmiş ve kızartılmış kabak, patlıcan,
                          domates, patatesin güçlerini birleştiriyor. Üzerine de
                          domatesli, baharatlı bir sos. Tabii bir de kaşar
                          peyniri ile taçlandırıyoruz ratatouilleyi.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/tapas-.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Tapas </span>
                          <span class="text-primary">65₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Tapas, ekmek üzeri şenlik olarak tanımlanabilir. Ara
                          öğün ya da ara sıcak olarak tercih edilmesi muhtemel
                          olan bu tarif, aslında oldukça pratik. Bizim damak
                          tadımıza da çokça benzeyen tapasla tanışın.
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Akşam Yemekleri/Apfelstrudel.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Apfelstrudel </span>
                          <span class="text-primary">75₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Avusturya mutfağından seçtiğimiz apfelstrudel tarifi
                          ile karşınızdayız! İncecik ve çıtır hamuru arasına
                          gizlenen çeşitli marmelatlarla nefis bir tatlı
                          diyebiliriz. Elmalısının yanı sıra; vişneli, kayısılı
                          ya da portakallı gibi birçok türü de mevcut.
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Akşam yemeği açıklamaları bitişi -->

              <!-- İçecekler açıklamaları başlangıcı [tab-3]-->
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/osmanlı şerbbeti.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Osmanlı Şerbeti </span>
                          <span class="text-primary">30₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Kırmızı eriklerden rengini alan şerbeti hazırlamak
                          için az malzemeye ihtiyacınız var. Kırmızı erikler,
                          tarçın ve karanfil... Şekerle tatlandırarak servis
                          edin. Mideleri hafifletin, damaklara ferahlık katın.
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/ayran.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Yayık ayran </span>
                          <span class="text-primary">20₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Ayran dünyaya Türklerden yayılmış bir içecektir.
                          Yoğurt, su ve tercihen tuzla elde edilen, içimi
                          lezzetli ayran ana yemeklerin, atıştırmalıkların
                          yanında vazgeçilmezdir. Özellikle yaz sıcaklarında
                          serinlemek isterseniz bir bardak ayran size iyi
                          gelecektir.
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/GulSerbet.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Gül Şerbeti </span>
                          <span class="text-primary">20₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Gül şerbeti, pişirmeden yapılan bir Osmanlı
                          şerbetidir. Geleneksel Osmanlı içeceklerinden olan gül
                          şerbeti, yapımı oldukça basit bir şerbet olup eski
                          zamanlarda hem ferahlamak hem de vücudun ya da terin
                          güzel kokması için tüketilen içeceklerden
                          birisidir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/kizilcik-serbeti-tarifi.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Kızılcık Şerbeti </span>
                          <span class="text-primary">20₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Çekirdekleri çıkarılarak ezilen kızılcıklar üzerine
                          sıcak su dökülerek bir gece bekletilir. Ertesi gün
                          ince bir süzgeçten geçirilir ve arzuya göre bir
                          tatlandırıcı ile lezzetlendirilir.Çekirdekleri
                          çıkarılarak ezilen kızılcıklar üzerine sıcak su
                          dökülerek bir gece bekletilir. Ertesi gün ince bir
                          süzgeçten geçirilir ve arzuya göre bir tatlandırıcı
                          ile lezzetlendirilir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/kızılcık.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Gelincik Şerbeti </span>
                          <span class="text-primary">25₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Gelincik çiçeklerinin sadece taç yaprakları alınır,
                          limon suyu, limon tuzu ve su eklenerek elde edilen
                          karışım kıpkırmızı bir renk alana dek yaklaşık 3 gün
                          ile 1 hafta arası bir kavanozda bekletildikten sonra
                          tüketime hazır hale gelir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/HibiskusSerbeti.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Hibiskus Şerbeti </span>
                          <span class="text-primary">30₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Sıcak su, tarçın, karanfil bir tencereye koyulur ve
                          beş dakika kadar kaynatıldıktan sonra içinden
                          tarçınlar alınarak tencerenin altı kapatılır;
                          kurutulmuş hibiskus çiçekleri, limon tuzu ve şeker
                          eklenerek yirmi dakika kadar bekletilir ve soğutularak
                          içilir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/da-hong-pao.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Da Hong Pao çayı </span>
                          <span class="text-primary">25₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Yüksek kalitesi sebebiyle Çin başta olmak üzere bazı
                          ülkelerde üst düzey devlet yetkilileri tarafından
                          yabancı konuklara ikram edilir. Oldukça nadir ve
                          eşsizdir. Çay tutkunlarının koleksiyonlarının en
                          nadide parçasıdır. Çin’in ünlü oolong çayları arasında
                          yer alır.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Icecekler/AyvaSerbeti.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Ayva Şerbeti </span>
                          <span class="text-primary">20₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Ayva şerbetinin püf noktası; ayvanın çekirdeklerini
                          ve kabuklarını da kaynattığınız şerbete ekleyerek
                          şerbetin kıvam ve renk almasını sağlamaktır. Şerbeti
                          iyice soğutulduktan sonra süzülerek servis
                          edilir.</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- İçecekler açıklamaları bitişi -->

              <!-- Dünya tatlıları açıklamaları başlangıcı [tab-4]-->
              <div id="tab-4" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/Sekerpare.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Şekerpare</span>
                          <span class="text-primary">25₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Şekerpare, Türk mutfağından şerbetli ve hamurlu bir
                          tatlı. Osmanlı mutfağında yer alır. Çeşitli yapım
                          teknikleri olan Şekerpare'nin, değişmeyen tek özelliği
                          şerbetli olmasıdır; bu nedenle bazı yörelerde adı
                          "Şerbetli kurabiye" olarak da geçer. Farklı bir aroma
                          katmak amacıyla genelde şerbetine az miktarda limon
                          suyu, limon kabuğu rendesi ya da vanilya
                          eklenir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/SanSebastian.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>San Sebastian </span>
                          <span class="text-primary">85₺</span>
                        </h5>
                        <small class="fst-italic"
                          >San sebastian cheesecake, yanık cheesecake olarak da
                          bilinir. Lezzetiyle olduğu kadar görünümüyle de dikkat
                          çeken bu nefis tatlımızın sırrı içindeki peynirinin
                          yumuşaklığı. Diğer cheesecake'lerden farkı da
                          tabanının olmaması.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/Asure.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Aşure </span>
                          <span class="text-primary">60₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Aşure, tahıllar, meyveler, kuru meyveler ve 
                          kuruyemişlerden oluşan bir karışımdan yapılan mükemmel 
                          lezzette bir tatlıdır. Geleneksel olarak, Nuh, Büyük 
                          Tufan'dan sonra karaya ayak bastığında elinde kalan 
                          son malzemelerle bu tatlıyı yapmıştır.<< </small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/Baklava.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Baklava </span>
                          <span class="text-primary">70₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Baklava Türk, Orta Doğu, Balkan ve Güney Asya
                          mutfaklarında yer etmiş önemli bir hamur tatlısıdır.
                          İnce yufkaların arasına yöreye göre ceviz, antep
                          fıstığı, badem veya fındık konarak yapılır. Genel
                          olarak şeker şerbeti ile tatlandırılır. Ayrıca bal
                          şerbeti de kullanılabilir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/Sutlac.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Sütlaç </span>
                          <span class="text-primary">65₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Türk mutfağında yer alan birçok sütlü tatlı içinde en
                          yaygın yapılanlarından ve tanınanlarından biridir.
                          Başlıca malzemeleri pirinç, süt ve şekerdir. Kıvamı
                          kişilerin zevkine göre değişse de genelde kabul gören
                          ve beğenilen kıvam pirinç tanelerinin çok sert olmamak
                          kaydıyla tek tek ağza gelebilecek şekilde
                          olmasıdır.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/DulcedeLecher.jpeg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Dulce de Lecher </span>
                          <span class="text-primary">80₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Süt reçeli süt ve şekerin kazan veya tencerelerde
                          ağır ağır, sürekli karıştırılarak pişirilmesi sonucu
                          elde edilen, katı ile sıvı arası kıvamda viskoz yapıda
                          bir tatlı. Daha çok bir kahvaltı ve çay saati yiyeceği
                          olarak, başta Arjantin ve Şili olmak üzere hemen bütün
                          Latin Amerika ülkelerinde yaygın olarak tüketilir.
                          Ayrıca kek, pasta ve benzer ürünlerin yapımında, ya da
                          içlerinin doldurulmasında kullanılır.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/DaifukuMochi.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Daifuku Mochi </span>
                          <span class="text-primary">90₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Japonya'nın ünlü tatlısı Daifuku Mochi, hafif, çok
                          ağır olmayan bir tatlı çeşididir. İçinde taze meyve
                          bulunan tatlı, glutenli pirinç unundan yapılır. Kekin
                          içine marmelat kıvamında meyveli tatlar, çilek gibi
                          taze meyveler veya çikolata sosu koyulabilir.
                          Sonrasında dışı pudra şekeri ile kaplanıp, servis
                          edilir.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tatlılar/Waffle.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Waffle </span>
                          <span class="text-primary">75₺</span>
                        </h5>
                        <small class="fst-italic"
                          >Hamurun piştiği o anın enfes kokusu zaten iştahınızın
                          açılması için yeter de artar bile. Sade olarak üzerine
                          pudra şekeri dökülüp yenebileceği gibi üzerine krema,
                          çikolata, meyve, fındık, fıstık tozu eklenerek de
                          yenebilir. en güzel ve hafif yeme şekli ise taze
                          meyveler ve çok az çikolata sosu eklenmesidir.</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tatlılar açıklamaları bitişi -->
            </div>
          </div>
        </div>
      </div>
      <!-- Menü Bitişi -->

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

    <!-- JavaScript kütüphaneleri  -->
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

    <!-- Javascript templatei -->
    <script src="js/main.js"></script>
  </body>
</html>
