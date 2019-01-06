<?php
include('koneksi.php');
 session_start();
 if(!isset($_SESSION['login'])){
     header("Location: login_admin.php");
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
                <h1>Kelola Jadwal</h1><!-- Navbar content -->  
                </nav>  <br>
                                    <form action="jadwal_proses_create.php"class="form-group text-left" method="POST">
                                          <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <input type="text" class="form-control" name="hari" id="hari" placeholder="hari">   
                                          </div>
                                          <div class="form-group">
                                            <label for="tempat">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal">
                                          </div>

                                          <div class="form-group">
                                            <label for="waktu">Waktu</label>
                                            <input type="text" class="form-control"name="waktu" id="waktu" placeholder="waktu">
                                            
                                          </div>
                                          <div class="form-group">
                                            <label for="tempat">Tempat</label>
                                            <input type="text" class="form-control"name="tempat" id="tempat" placeholder="tempat">
                                            
                                          </div>
                                          <div class="form-group">
                                            <label for="kegiatan">Kegiatan</label>
                                            <input type="text" class="form-control"name="kegiatan" id="kegiatan" placeholder="kegiatan">
                                            
                                          </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                            <h1>Tabel</h1><!-- Navbar content --> 
                            </nav>  

                          <table border="1">
                            <?php
                            $sql='SELECT * FROM jadwal';
                            $query=mysqli_query($conn, $sql);
                            $i=1;
                            //<table>
                                
                            //</table>
                            echo "<tr>";
                            echo"<td class='text-left'>No</td>";
                            echo"<td class='text-left'>Hari</td>";
                            echo"<td class='text-left'>Tanggal</td>";
                            echo"<td class='text-left'>Waktu</td>";
                            echo"<td class='text-left'>Tempat</td>";
                            echo"<td class='text-left'>Kegiatan</td>";
                            echo"<td class='text-left'>Aksi</td>";
                            echo"<td class='text-left'>Aksi</td>";
                            
                            //echo"<td class='text-left'>maps</td>";
                            
                            while($data = mysqli_fetch_array($query))
                              {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  $i++;
                                  echo"<td class='text-left'>".$data["hari"]."</td>";
                                  echo"<td class='text-left'>".$data["tanggal"]."</td>";
                                  echo"<td class='text-left'>".$data["waktu"]."</td>";
                                  echo"<td class='text-left'>".$data["tempat"]."</td>";
                                  echo"<td class='text-left'>".$data["kegiatan"]."</td>";
                                  
                                  //echo"<td class='text-left'>".$data["link_maps"]."</td>";
                                  $update = "<a href='jadwal_form_update.php?id=".$data['id']."'>Edit</a>";
                                  $delete = "<a href='jadwal_proses_delete.php?id=".$data['id']."'>Hapus</a>";
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
