@extends('layouts.app')

@section('title', 'Family')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
    <a href="/familys/tambah"><button class="card-link btn-primary">Add Family</button></a>
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
@foreach ($familys as $family)
    <div class="card border-dark mb-3" style="max-width: 20rem;">
        <div class="card-header bg-dark text-light">
                <b>MY FAMILY</b>
            </div>
        <div class="card-body bg-dark p-2 text-dark bg-opacity-10">
            <a href="/familys/{{$familys['id']}}" class="card-title">Name : {{ $family['first_name'] }} {{ $family['last_name'] }}</a>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Number Phone : {{ $family['number_phone'] }}</li>
                <li class="list-group-item">Address : {{ $family['address'] }}</li>
                <li class="list-group-item">Email : {{ $family['email'] }}</li>
            </ul>
            <div class="card-body">
                <a href="/familys/{{$familys['id']}}/edit"><button class="card-link btn-warning">Edit Family</button></a>
                <form action="/familys/{{$familys['id']}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="card-link btn-danger">Delete Family</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
    <div>
    {{ $familys->links() }}
    </div>
@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
