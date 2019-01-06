<?php

include ('koneksi.php');

$id=$_GET['id'];
$sql="SELECT * FROM download WHERE id=$id";

$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($query)){
    //var_dump($data);
    if(mysqli_num_rows($query)>0){
        $bacaan=$data['bacaan'];
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
    
<form action="download_proses_update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id?>">
  <div class="form-group">
    <label for="bacaan">Bacaan</label>
    <input type="text" class="form-control" name="bacaan" id="bacaan" placeholder="bacaan" value=
    '<?php echo $bacaan ?>'>  
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>