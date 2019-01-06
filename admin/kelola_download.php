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
                <h1>Kelola Download</h1><!-- Navbar content -->  
                </nav>  <br>
                         <form action="download_proses_update.php" class="form-group text-left" method="POST">

                            <div class="form-group">
                                <label for="bacaan">Bacaan</label>
                                <input type="file" class="form-control"name="bacaan" id="bacaan" placeholder="bacaan">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                            <h1>Tabel</h1><!-- Navbar content --> 
                            </nav>  

                          <table border="1">
                            <?php
                            $sql='SELECT * FROM download';
                            $query=mysqli_query($conn, $sql);
                            $i=1;
                            //<table>
                                
                            //</table>
                            echo "<tr>";
                            echo"<td class='text-left'>nomer</td>";
                            echo"<td class='text-left'>bacaan</td>";
                            echo"<td class='text-left'>aksi</td>";
                            echo"<td class='text-left'>aksi</td>";
                            
                            while($data = mysqli_fetch_array($query))
                            {
                                echo "<tr>";
                                echo "<td>".$i."</td>";
                                $i++;
                                echo"<td class='text-left'>".$data["bacaan"]."</td>";

                                $update = "<a href='download_form_update.php?id=".$data['id']."'>Edit</a>";
                                $delete = "<a href='download_proses_delete.php?id=".$data['id']."'>Hapus</a>";
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













