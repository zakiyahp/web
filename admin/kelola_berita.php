<?php
include('koneksi.php');
 session_start();
 if(!isset($_SESSION['login'])){
     header("Location: login_admin_form.php");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
         <!-- Sidebar -->
       <!-- Sidebar -->
       <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                <a href="index.php">
                        Admin
                    </a>
                </li>
                <li>
                    <a href="kelola_berita.php">Berita</a>
                </li>
                <li>
                    <a href="kelola_download.php">Download</a>
                </li>
                <li>
                    <a href="kelola_jadwal.php">Jadwal</a>
                </li>
                <li>
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
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                <h1>Kelola Berita</h1><!-- Navbar content -->  
                </nav>  <br>
                                    <form action="berita_proses_create.php" class="form-group text-left" method="POST">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">  
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">  
                                    </div>
                                    <div class="form-group">
                                        <label for="bacaan">Tanggal</label>
                                        <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal" >  
                                    </div>
                                    <div class="form-group">
                                        <label for="bacaan">Kategori</label>
                                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori">  
                                    </div>
                                    <div class="form-group">
                                        <label for="bacaan">Isi</label>
                                        <input type="text" class="form-control" name="isi" id="isi" placeholder="isi">
                                    </div>
                                    <div class="form-group">
                                        <label for="bacaan">Link</label>
                                        <input type="text" class="form-control" name="link" id="link" placeholder="link">  
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                            <h1>Tabel</h1><!-- Navbar content --> 
                            </nav>  

                          <table border="1">
                            <?php
                            $sql='SELECT * FROM berita';
                            $query=mysqli_query($conn, $sql);
                            $i=1;
                            //<table>
                                
                            //</table>
                            echo "<tr>";
                            echo"<td class='text-left'>nomer</td>";
                            echo"<td class='text-left'>judul</td>";
                            echo"<td class='text-left'>nama</td>";
                            echo"<td class='text-left'>tanggal</td>";
                            echo"<td class='text-left'>kategori</td>";
                            echo"<td class='text-left'>isi</td>";
                            echo"<td class='text-left'>aksi</td>";
                            echo"<td class='text-left'>aksi</td>";
                            while($data = mysqli_fetch_array($query))
                            {
                                echo "<tr>";
                                echo "<td>".$i."</td>";
                                $i++;
                                echo"<td class='text-left'>".$data["judul"]."</td>";
                                echo"<td class='text-left'>".$data["nama"]."</td>";
                                echo"<td class='text-left'>".$data["tanggal"]."</td>";
                                echo"<td class='text-left'>".$data["kategori"]."</td>";
                                echo"<td class='text-left'>".$data["isi"]."</td>";
                                echo"<td class='text-left'>".$data["link"]."</td>";
                                $update = "<a href='berita_form_update.php?id=".$data['id']."'>Edit</a>";
                                $delete = "<a href='berita_proses_delete.php?id=".$data['id']."'>Hapus</a>";
                                echo"<td>".$update."</td>";
                                echo"<td>".$delete."</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
    </div>

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
