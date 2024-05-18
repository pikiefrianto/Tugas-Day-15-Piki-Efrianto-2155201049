<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootcamp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Bootcamp</a>
          </div>
          <ul class="nav navbar-nav"><li class="active"><li><a href="/cast">Cast</a></li>
          </ul>
        </div>
    </nav> 
<div class="container">
    <h2>Tambah Data Cast</h2>
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="nama" class="form-control" id="nama" placeholder="Nama cast" name="nama">
        </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="umur">Umur:</label>
          <input type="umur" class="form-control" id="umur" placeholder="Umur cast" name="umur">
        </div>
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="bio">Bio:</label>
          <input type="bio" class="form-control" id="bio" placeholder="Bio cast" name="bio">
        </div>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>