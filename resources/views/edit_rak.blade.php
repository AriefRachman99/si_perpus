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
  <h2 class="mt-4">Form Edit Rak</h2>
  <form action="{{url('update_rak')}}" method="post">
  
    @csrf

    <div class="form-group">
      <label>ID Rak</label>
      <input type="text" class="form-control" placeholder="Masukkan ID Merek" name="id_rak_up" value="{{ $edit->id_rak }}" readonly>
    </div>
    <div class="form-group">
      <label>Nama Rak:</label>
      <input type="text" class="form-control" placeholder="Masukkan tipe" name="nama_rak_up" value="{{ $edit->nama_rak }}">
      @if ($errors->has('tipe'))
        <div class="text-danger">
            {{ $errors->first('tipe') }}
        </div>
      @endif
    </div>
    <div class="form-group">
      <label>Keterangan:</label>
      <input type="text" class="form-control" placeholder="Masukkan tipe" name="keterangan_up" value="{{ $edit->keterangan }}">
      @if ($errors->has('tipe'))
        <div class="text-danger">
            {{ $errors->first('tipe') }}
        </div>
      @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
