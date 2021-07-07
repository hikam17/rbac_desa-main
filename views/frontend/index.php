<!DOCTYPE html>
<html lang="en-US" class="no-js">
  <head>

    <!-- Title -->
    <title>Selamat Datang Kota Batu</title>

    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bootstrap HTML template and UI kit by Erilisdesign">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/fullPage.js/dist/jquery.fullpage.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/slick/slick.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/vegas/vegas.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/magnific-popup/dist/magnific-popup.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/animate.css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/font-awesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/themify-icons/css/themify-icons.css" type="text/css">
    <link rel="icon" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/batu.png" type="image/icon type">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CMontserrat:200,300,400,500,700&display=swap">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/css/theme.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/css/custom.css">

  </head>
  <body class="layout-wide">

    <!-- Loader -->
    <div class="loader bg-dark">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div id="top"></div>

    <!-- Site navigation -->
    <nav class="site-navbar site-navbar-transparent navbar navbar-expand-lg navbar-dark fixed-top bg-white shadow-light p-lg-4" data-navbar-base="navbar-dark" data-navbar-toggled="navbar-light" data-navbar-scrolled="navbar-light">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img style="filter:none; width:40px; position:relative; right:-50px;"  src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/batu.png" class="navbar-brand-img" alt="">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler-alternative" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-alternative-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Navigation -->
        <ul class="navbar-nav ml-auto" id="navigation">
          <li class="nav-item active" data-menuanchor="home">
            <a style="color:none;" class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item" data-menuanchor="our-mission">
            <a style="color:none;" class="nav-link" href="#our-mission">Visi & Misi</a>
          </li>
          <li class="nav-item" data-menuanchor="what-we-do">
            <a style="color:none;" class="nav-link" href="#what-we-do">Profil Desa</a>
          </li>
          <li class="nav-item" data-menuanchor="our-solutions">
            <a style="color:none;" class="nav-link" href="#our-solutions">Berita</a>
          </li>
          <li class="nav-item" data-menuanchor="our-work">
            <a style="color:none;" class="nav-link" href="#our-work">Galeri</a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a style="color:none;" class="nav-link" href="#contact">Hubungi Kami</a>
          </li>
        </ul>

        
    

      </div>
    </nav>

    <!-- Back To Top Button -->
    <a href="#top" class="backtotop">
      <span>Back To Top</span>
      <i style="color:silver;" class="fas fa-angle-up"></i>
    </a>

    <!-- Scroll progress -->
    <div class="scroll-progress">
      <div class="sp-left">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
      <div class="sp-right">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
    </div>

    <!-- Fullpage content -->
    <div class="ln-fullpage" data-navigation="true">

      <!-- Section - Home -->
      <section class="ln-section d-flex min-vh-100" data-anchor="home" data-tooltip="Home" data-ui="light" data-navbar="navbar-dark">
        <div class="overlay overlay-advanced">
          <div class="overlay-inner bg-image-holder bg-cover bg-bottom-center">
            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/balai-kota.jpg" alt="background">
          </div>
          <div class="overlay-inner bg-dark opacity-70"></div>
        </div>
        <div class="container align-self-center text-white">
          <div class="row">
            <div class="col-12 col-lg-9 col-xl-6">

              <h1 class="mb-4 animated" data-animation="fadeInUp">Selamat Datang di Website Desa</h1>
              <p class="mb-7 animated" data-animation="fadeInUp" data-animation-delay="200">Web Desa menghadirkan solusi efektifitas pelayanan masyarakat dengan dukungan teknologi terpadu dan mudah digunakan. Web Desa siap menjadi teman untuk maju bersama membangun desa di dunia digital.</p>
              <a href="#our-mission " style="color:white; background-color:rgba(255,255,255,0.3);" class="btn btn-white mr-3 scrollto animated" data-animation="fadeInUp" data-animation-delay="400">Selengkapnya</a>
             

            </div>
          </div>
        </div>
      </section>

      <!-- Section - Our mission -->
      <section class="ln-section d-xl-flex" data-anchor="our-mission" id="our-mission" data-tooltip="Our mission" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">

          
            
              <h2 class="mb-4 animated" data-animation="fadeInUp" data-animation-delay="150">Visi Kami</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">Desa Berdaya Kota Berjaya Terwujudnya Kota Batu Sebagai Sentra Agro Wisata Internasional Yang Berkarakter, Berdaya Saing Dan Sejahtera.</p>
              <h2 class="mb-4 animated" data-animation="fadeInUp" data-animation-delay="150">Misi Kami</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">1. Meningkatkan Kualitas Kehidupan Sosial Masyarakat  Yang Berlandaskan Nilai Nilai Keagamaan  dan Kearifan Budaya Lokal.</p>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">2. Meningkatkan Pembangunan Kualitas dan Kesejahteraan Sumber Daya Manusia.</p> 
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">3. Mewujudkan Daya Saing Perekonomian Daerah yang Progresif, Mandiri  Berbasis Agrowisata.</p>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">4. Meningkatkan Pembangunan Infrastruktur dan Kawasan Perdesaan Yang Berkualitas  dan Berwawasan Lingkungan.</p>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">5. Meningkatkan Tata Kelola Pemerintahan Yang Baik, Bersih dan Akuntabel Berorientasi pada Pelayanan Publik Yang  Profesionals.</p>
             
            </div>
          </div>

        </div>
      </section>

      <section class="ln-section d-xl-flex bg-light" data-anchor="what-we-do" data-tooltip="What we do" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">

          <div class="row">
          
              <h2 class="animated mb-4" data-animation="fadeInUp">Profil Desa</h2>

              <div class="card animated" data-animation="fadeInUp" data-animation-delay="150"  style="border:none;background-color:transparent;width: 100%; height:100%;">
      <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/batu.png" class="card-img-top" style="width:150px; padding: 25px; margin-left:25px;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Desa Pandanrejo</h5>
          <p class="card-text">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kec. Bumiaji, Kota Batu, Jawa Timur
          </p>
          <p class="card-text">Nomor Telepon &nbsp;&nbsp;: 08213221129.</p>
          <p class="card-text">Sejarah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Desa Pandanrejo merupakan dataran lereng selatan 6 arjuno yang memiliki 700 – 800 M diatas permukaan air laut, 17’ – 25’ C suatu udara dan keadaan tanah yang subur. Mata pencarian penduduk Desa Pandanrejo mayoritas bertani.</p>
          <p class="card-text">Lokasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
        <a href="https://www.google.co.id/maps/place/Pandanrejo,+Kec.+Bumiaji,+Kota+Batu,+Jawa+Timur/@-7.8544192,112.5314753,14z/data=!3m1!4b1!4m5!3m4!1s0x2e788097f9b9bb71:0x189e3de295e2483a!8m2!3d-7.8671319!4d112.545369">
        <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/map.png" style="width:30px; height:30px;" alt="">  
      </a>
    </p>
    
    </div>
          
  
  

              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Section - Our solutions -->
      <section class="ln-section d-xl-flex" data-anchor="our-solutions" data-tooltip="Our solutions" data-ui="light" data-navbar="navbar-dark">
        <div class="overlay overlay-advanced">
          
          <div class="overlay-inner bg-dark opacity-50"></div>
        </div>
        <div class="container align-self-xl-center text-white">
          <div class="row mb-8">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">Berita Desa Terkini</h2>
            </div>
          </div>
          <div class="row">

            <div class="col-12 col-lg-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="150">
             <img width="150" style="margin-left:120px;" src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/koran1.svg" alt="">
            </div>

            <div class="col-12 col-lg-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="300">
              <h4>Data Penduduk Desa Pandanrejo</h4>
              <table class="table table-hover">
  <thead class="table table-secondary">
    <tr>
      <th scope="col"></th>
      <th scope="col">Laki-Laki</th>
      <th scope="col">Perempuan</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2,245</td>
      <td>2,304</td>
      <td>4,549</td>
    </tr>
  </tbody>
</table>
            </div>

            <div class="col-12 col-lg-6 mb-8 mb-lg-0 animated" data-animation="fadeInUp" data-animation-delay="450">
              <h4>Lokasi Desa Pandanrejo</h4>
              <p class="mb-0">Pandanrejo, Kec. Bumiaji, Kota Batu, Jawa Timur.</p>
            </div>

            <div class="col-12 col-lg-6 animated" data-animation="fadeInUp" data-animation-delay="600">
              <img width="280" style="margin-left:80px;" src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/map2.svg" alt="">
            </div>

          </div>
        </div>
      </section>

      <!-- Section - Our work -->
      <section class="ln-section d-xl-flex" data-anchor="our-work" data-tooltip="Our work" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">
          <div class="row mb-8">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">Galeri Foto</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">Berikut adalah gambar hasil dari kegiatan di desa batu.</p>
            </div>
          </div>
          <div class="slider animated" data-animation="fadeInUp" data-animation-delay="300" data-slick='{"dots": true}'>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/paralayang.jpg" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/paralayang.jpg" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Paralayang Batu</h4>
                      <p class="item-cat">Paralayang Batu menjadi pilihan aktivitas seru saat berwisata ke Kota Batu, Malang. Olahraga menantang sekaligus menikmati keindahan alam dari atas ketinggian yang dijamin menjadikan liburan Anda semakin berkesan.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row flex-lg-row-reverse">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/pandanrejo.jpg" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/pandanrejo.jpg" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Desa Pandanrejo</h4>
                      <p class="item-cat">Lumbung Strawberry berlokasi di desa Pandanrejo, Kawasannya cukup mencolok Teman Traveler. Hampir semua dinding rumah warga di sekitarnya dihiasi lukisan stroberi. Suasananya pun jadi terasa sangat ceria.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/orooro-ombo.jpg" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/orooro-ombo.jpg" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Oro-oro Ombo</h4>
                      <p class="item-cat">Oro Oro Ombo, Semeru. Penamaan tersebut punya arti 'padang yg luas'. Di sini kamu bakalan melihat pemandangan ungu.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row flex-lg-row-reverse">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/temas.jpg" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/temas.jpg" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Kampung Wisata Temas</h4>
                      <p class="item-cat">Desa Temas, dimana sebuah Desa kecil yang berlokasi di sisi timur Kota Batu Jawa Timur. dengan konsep wisata Desa, juga menyediakan fasilitas akomodasi penginapan berupa Home Stay yang di akomodir oleh para penduduk pribumi Desa Temas dan Home Stay yang di akomodir oleh POKD</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/makanan.jpg" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/images/makanan.jpg" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Strudle</h4>
                      <p class="item-cat">Strudle merupakan kue berlapis yang terbuat dari pastry, kemudian di isi dengan berbagai macam buah-buahan. Kue strudel ini merupakan salah satu makanan yang populer pada zaman Hasburg Ampire (1278-1780) di Austria.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="ln-section d-xl-flex bg-light" data-anchor="contact" data-tooltip="Contact" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-center">
          <div class="row mb-7">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">Hubungi Kami</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">Ingin menyapa? Ingin tahu lebih banyak tentang kami? Hubungi kami atau kirimkan email kepada kami dan kami akan segera menghubungi Anda kembali.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-5 mb-8 mb-lg-0">
              <div class="row">

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-mobile"></i>
                  </div>
                  <p class="mb-0"><br/>
                  (084) 2222 1234567</p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-location-pin"></i>
                  </div>
                  <p class="mb-0">Kec. Batu Kota Batu Jawa Timur,<br/>
                  Indonesia</p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-email"></i>
                  </div>
                  <p class="mb-0"><a href="mailto:support@example.com" class="text-dark">support@example.com</a><br/>
                  <a href="mailto:hello@example.com" class="text-dark">hello@example.com</a></p>
                </div>

              </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 animated" data-animation="fadeInUp" data-animation-delay="150">
              <div class="contact-form">
                <form class="mb-0" id="cf" name="cf" action="include/sendemail.php" method="post" autocomplete="off">
                  <div class="form-row">

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="text" id="cf-name" name="cf-name" placeholder="Masukkan Nama Anda" class="form-control required">
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="email" id="cf-email" name="cf-email" placeholder="Masukkan email address anda" class="form-control required">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" id="cf-subject" name="cf-subject" placeholder="Subject (Optional)" class="form-control">
                      </div>
                    </div>

                    <div class="col-12 mb-4">
                      <div class="form-group">
                        <textarea name="cf-message" id="cf-message" placeholder="Tinggalkan Pesan di sini..." class="form-control required" rows="7"></textarea>
                      </div>
                    </div>

                    <div class="col-12 d-none">
                      <input type="text" id="cf-botcheck" name="cf-botcheck" value="">
                    </div>

                    <input type="hidden" name="prefix" value="cf-">

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Kirim Pesan</button>
                    </div>

                  </div>
                </form>
                <div class="contact-form-result"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Footer -->
    <footer class="position-relative py-10 py-lg-12 bg-dark text-gray-500">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-12 col-xxl-10 mx-auto text-center">
            <ul class="list-inline mb-5">
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-facebook-f btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-twitter btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-linkedin-in btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-dribbble btn-icon-inner"></i>
                </a>
              </li>
            </ul>
            <p class="mb-0">© 2021 Web Desa - Batu Tracking 19 - <a href="#!" class="text-gray-400">Terms of Service</a></p>
          </div>
        </div>
      </div>
    </footer><!-- footer end -->

    <!-- Fullpage - Social icons -->
    <nav class="ln-social-icons">
      <ul class="mx-auto">
        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </nav>

    <!-- Fullpage - Copyright -->
    <div class="ln-copyright text-right">
      <p>© 2021 Web Desa - All Rights Reserved - <a href="#!">Terms of Service</a></p>
    </div>

   

	

    <!-- Libs JS -->
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/popper.js/dist/popper.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/fullPage.js/dist/scrolloverflow.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/fullPage.js/dist/jquery.fullpage.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/jquery-smooth-scroll/jquery.smooth-scroll.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/jquery-form/dist/jquery.form.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/jQuery.countdown/dist/jquery.countdown.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/granim.js/dist/granim.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/slick/slick.min.js"></script>
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/vendor/vegas/vegas.min.js"></script>

    <!-- Theme JS -->
    <script src="<?=\Yii::$app->request->BaseUrl ?>/template/assets/js/main.js"></script>

  </body>
</html>