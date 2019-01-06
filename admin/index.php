<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Admin
                    </a>
                </li>
                <li class="sidebar-brand">
                    <a href="kelola_berita.php">Berita</a>
                </li>
                <li class="sidebar-brand">
                    <a href="kelola_download.php">Download</a>
                </li>
                <li class="sidebar-brand">
                    <a href="kelola_jadwal.php">Jadwal</a>
                </li>
                <li class="sidebar-brand">
                    <a href="kelola_video.php">Video</a>
                </li>
                <li>
                    <a href="kelola_zawiyah.php">Zawiyah</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
    
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <div class="container-fluid">
                <h1>Hallo Admin</h1>
                <p>Halman admin ini digunakan untuk pengelola kampung sholawat</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> Menu</a>
                <a href="#"><img class="card-img-top" src="foto/icon.jpg" alt=""></a>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
