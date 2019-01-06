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
                <h1>Kelola Zawiyah</h1><!-- Navbar content -->  
                </nav>  <br>
                                    <form action="proses-create.php"class="form-group text-left" method="POST">
                                          <div class="form-group">
                                            <label for="zawiyah">Zawiyah</label>
                                            <input type="text" class="form-control" name="zawiyah" id="zawiyah" placeholder="zawiyah">  
                                          </div>
                                          <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">   
                                          </div>
                                          <div class="form-group">
                                            <label for="kontak">Kontak</label>
                                            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak">
                                          </div>

                                          <div class="form-group">
                                            <label for="telp">Telpon</label>
                                            <input type="text" class="form-control"name="telp" id="telp" placeholder="telp">
                                            
                                          </div>
                                          <div class="form-group">
                                            <label for="link_maps">Maps</label>
                                            <input type="text" class="form-control"name="link_maps" id="link_maps" placeholder="link">
                                            
                                          </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                            <h1>Tabel</h1><!-- Navbar content --> 
                            </nav>  

                          <table border="1">
                            <?php
                            $sql='SELECT * FROM zawiyah_1';
                            $query=mysqli_query($conn, $sql);
                            $i=1;
                            //<table>
                                
                            //</table>
                            echo "<tr>";
                            echo"<td class='text-left'>nomer</td>";
                            echo"<td class='text-left'>zawiyah</td>";
                            echo"<td class='text-left'>alamat</td>";
                            echo"<td class='text-left'>kontak</td>";
                            echo"<td class='text-left'>telp</td>";
                            echo"<td class='text-left'>maps</td>";
                            echo"<td class='text-left'>aksi</td>";
                            echo"<td class='text-left'>aksi</td>";
                            while($data = mysqli_fetch_array($query))
                              {
                                  echo "<tr>";
                                  echo "<td>".$i."</td>";
                                  $i++;
                                  echo"<td class='text-left'>".$data["zawiyah"]."</td>";
                                  echo"<td class='text-left'>".$data["alamat"]."</td>";
                                  echo"<td class='text-left'>".$data["kontak"]."</td>";
                                  echo"<td class='text-left'>".$data["telp"]."</td>";
                                  echo"<td class='text-left'>".$data["link_maps"]."</td>";
                                  $update = "<a href='form_update.php?id=".$data['id']."'>Edit</a>";
                                  $delete = "<a href='proses_delete.php?id=".$data['id']."'>Hapus</a>";
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
