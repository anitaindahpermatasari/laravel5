@extends('layouts.app')

@section('title', 'Friends')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
    <a href="/friends/create"><button class="card-link btn-primary">Add Friends</button></a>
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
@foreach ($friends as $friend)
    <div class="card border-dark mb-3" style="max-width: 20rem;">
        <div class="card-header bg-dark text-light">
                <b>MY FRIEND</b>
        </div>
        <div class="card-body bg-dark p-2 text-dark bg-opacity-10">
            <a href="/friends/{{$friend['id']}}" class="card-title">Nama : {{ $friend['nama'] }}</a>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nomor Telepon : {{ $friend['no_telp'] }}</li>
                <li class="list-group-item">Alamat : {{ $friend['alamat'] }}</li>
            </ul>
            <div class="card-body">
                <a href="/friends/{{$friend['id']}}/edit"><button class="card-link btn-warning">Edit Friends</button></a>
                <form action="/friends/{{$friend['id']}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="card-link btn-danger">Delete Friends</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
    <div>
    {{ $friends->links() }}
    </div>
@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
