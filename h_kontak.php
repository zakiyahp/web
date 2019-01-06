<?php

include('admin/koneksi.php');


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kampung Sholawat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
  <header>
    <!-- Navigation--> 
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Kampung Sholawat</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="h_tentang.php">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="h_berita.php">Berita</a>
            </li>
      
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Berita
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="h_berita.php">Nasional</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Daerah</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Internasional</a>
                
              </div>
            </li>-->
            
              <li class="nav-item">
              <a class="nav-link" href="h_download.php">Dwonload</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="h_zawiyah.php">Zawiyah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="h_jadwal.php">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="h_kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="h_video.php">Video</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/login_admin_form.php">Admin</a>
            </li>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lain-lain
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="pricing.html">Pricing Table</a>
              </div>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

    
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('g4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p>1</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('g2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p>2</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('g3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3></h3>
              <p>3</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Mulai Harimu Dengan Bismillah</h1>


      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
          <a href="#"><img class="card-img-top" src="foto/fb.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
               
              </h4>
              <p class="card-text">Kampung-sholawat</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
          <a href="#"><img class="card-img-top" src="foto/g.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
               
              </h4>
              <p class="card-text">Kampung-sholawat </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="foto/linkedin.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                
                </h4>
                <p class="card-text">Kampung-sholawat</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="foto/twitter.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                
                </h4>
                <p class="card-text">Kampung-sholawat</p>
            </div>
          </div>
        </div>
</div>

      
        
      

        <br><br>
        <p>Silahkan Hubungi Kami jika anda memerlukan bantuan :)
    </p>
</div>
      
      
     
    </div>
      <!-- /.row -->

      <!-- Features Section -->
    <!-- /.container -->
                            <br><br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Kampung-Sholawat 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>