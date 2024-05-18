<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Show Cast {{$cast->id}}</h2>
        </div>
        <div class="card-body">
            <h4 class="card-title">{{$cast->nama}}</h4>
            <p class="card-text">{{$cast->umur}}</p>
            <p class="card-text">{{$cast->bio}}</p>
            <a href="/cast" class="btn btn-secondary mt-3">Back to cast</a>
        </div>
    </div>
</div>