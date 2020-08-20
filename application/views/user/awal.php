<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('assets/'); ?>Regna/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('assets/'); ?>Regna/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('assets/'); ?>Regna/css/style.css" rel="stylesheet">
  <?php $this->load->view('user/tampilan/head.php') ?>


  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a class="navbar-brand" href="#">
              <img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
        <a href=""><?= $user['name']; ?></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Prestasi</a></li>
          <li><a href="#team">Gallery</a></li>
          <li class="menu-has-children"><a href="">Edit</a>
            <ul>
              <li><a href="<?= base_url('user/profile');?>">My Profile</a></li>
              <li><a href="<?= base_url('Prestasi/');?>">Add Prestasi</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="<?= base_url('auth/logout');?>">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h2>Welcome to</h2>
      <h2>DATA PRESTASI MAHASISWA</h2>
      <h2>JURUSAN TEKNIK INFORMATIKA</h2>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Visi Misi Jurusan Teknik Informatika</h2>
            <p>
              Visi -- Menjadi Jurusan/Prodi Teknik Informatika yang Unggul dan Kompetitif di ASEAN pada Tahun 2025 dalam Bingkai Akhlak Karimah.
            </p>
            <br>
            <p>Misi --</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-laptop-code"></i></div>
              <p class="description">Menyelenggarakan dan mengelola Jurusan/Prodi yang profesional, akuntabel, dan berdaya saing untuk memperkuat pengembangan ilmu pengetahun dan teknologi bidang informatika pada tingkat nasional maupun internasional berbasis wahyu memandu ilmu</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-car-battery"></i></div>
              <p class="description">Menyelenggarakan pendidikan tinggi bidang informatika yang mampu menciptakan lulusan yang terampil, profesional, berjiwa entrepreneurship dan berakhlak karimah</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fas fa-calculator"></i></div>
              <p class="description">Menyelenggarakan penelitian guna mengembangkan dan menerapkan ilmu pengetahuan dan teknologi bidang informatika yang dilandasi nilai Islami</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fab fa-grav"></i></div>
              <p class="description">Menyelenggarakan pengabdian kepada masyarakat, untuk menyebarluaskan pengetahuan dan teknologi bidang informatika, guna mengembangkan potensi dan daya saing masyarakat yang berakar pada nilai Islami</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section>
  
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Data Prestasi Mahasiswa</h3>
        </div>

        <div class="card mb-3">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                      <tr>
                        
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jenis Prestasi</th>
                        <th scope="col">Tingkat Prestasi</th>
                        <th scope="col">Juara ke</th>
                        <th scope="col">Tahun Prestasi</th>
                        <th scope="col">Penyelenggara</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach($prestasi as $p) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <th><?= $p['name']?></th>
                        <th><?= $p['username']?></th>
                        <th><?= $p['jenis_p']?></th>
                        <th><?= $p['tingkat_p']?></th>
                        <th><?= $p['juara']?></th>
                        <th><?= $p['tahun_p']?></th>
                        <th><?= $p['penyelenggara']?></th>
                      </tr>
                      
                      <?php $i ++;?>
                      <?php endforeach; ?>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>



      </div>
    </section><!-- #services -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?= base_url('assets/'); ?>Regna/img/juara1.jpg" alt=""></div>
              <h4>Juara Umum IF 2017</h4>
              <span>Pada Kegiatan Porsenif</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?= base_url('assets/'); ?>Regna/img/lomba.jpg" alt=""></div>
              <h4>Bola Voli Putri</h4>
              <span>Pada Kegiatan Pekan Olahraga</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?= base_url('assets/'); ?>Regna/img/juara3.jpeg" alt=""></div>
              <h4>Juara 3</h4>
              <span>Lomba Media Pembelajaran</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?= base_url('assets/'); ?>Regna/img/volii.jpg" alt=""></div>
              <h4>Tim Bola Voli Putra</h4>
              <span>Pada Kegiatan Saintek Cup</span>
            
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <p class="section-description">Silahkan menghubungi kami</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>IF SAINTEK, UIN Bandung
                  <br>
                  Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614</p>
              </div>

              <div>
                <a href="http://if.uinsgd.ac.id/"><i class="fa fa-envelope"></i></a>
                <p>http://if.uinsgd.ac.id/</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Data Prestasi Mahasiswa</strong>. Jurusan Teknik Informatika Uin Bandung
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
   <script src="<?= base_url('assets/'); ?>Regna/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/easing/easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/wow/wow.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url('assets/'); ?>Regna/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url('assets/'); ?>Regna/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url('assets/'); ?>Regna/js/main.js"></script>


        <?php $this->load->view("user/tampilan/js.php") ?>

</body>
</html>
