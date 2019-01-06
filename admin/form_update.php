<?php

include('koneksi.php');

session_start();
if (!isset($_SESSION['login'])) {
    header('location:login_admin_form.php');
   }

   
$id=$_GET['id'];
$sql="SELECT * FROM zawiyah_1 WHERE id=$id";
$query=mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($query)){
    //var_dump($data);
    if(mysqli_num_rows($query)>0){
      $id=$data['id'];
        $zawiyah=$data['zawiyah'];
        $alamat=$data['alamat'];
        $kontak=$data['kontak'];
        $telp=$data['telp'];
        $link_maps=$data['link_maps'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="simple-sidebar.css">
</head>
<body>
    
<form action="proses_update.php" class="form-group text-left" method="POST">
  <input type="hidden" name="id" value="<?php echo $id?>">
  <div class="form-group">
    <label for="zawiyah">Zawiyah</label>
    <input type="text" class="form-control" name="zawiyah" id="zawiyah" placeholder="zawiyah" value=
    '<?php echo $zawiyah ?>'>  
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value=
    "<?php echo $alamat ?>">    
  </div>
  <div class="form-group">
    <label for="kontak">Kontak</label>
    <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value=
    "<?php echo $kontak ?>">  
  </div>

  <div class="form-group">
    <label for="telp">Telpon</label>
    <input type="text" class="form-control"name="telp" id="telp" placeholder="telp" value=
    "<?php echo $telp ?>">  
  </div>

  <div class="form-group">
    <label for="link_maps">Maps</label>
    <input type="text" class="form-control" name="link_maps" id="link_maps" placeholder="maps" value=
    '<?php echo $link_maps ?>'>  
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>