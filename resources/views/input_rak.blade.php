<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="mt-4">Form Input Rak</h2>
  <form action="{{url('input_rak_action')}}" method="post">
  @csrf
    <div class="form-group">
      <label>Nama Rak:</label>
      <input type="text" class="form-control" placeholder="Masukkan nama rak" name="nama_rak_in">
    </div>
    <div class="form-group">
      <label>Keterangan:</label>
      <input type="text" class="form-control" placeholder="Masukkan keterangan" name="keterangan_in">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>