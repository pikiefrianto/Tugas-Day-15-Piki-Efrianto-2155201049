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
    <a href="/cast/create" class="btn btn-info" role="button">Add New +</a>
    <div class="container">
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <td style="text-align:center; font-wight:bold;">No</td>
                <td style="text-align:center; font-wight:bold;">Nama</td>
                <td style="text-align:center; font-wight:bold;">Umur</td>
                <td style="text-align:center; font-wight:bold;">Bio</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->umur }}</td>
                    <td>{{ $value->bio}}</td>
                    <td>
                        <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/cast/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan='4' align='center'>No Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>