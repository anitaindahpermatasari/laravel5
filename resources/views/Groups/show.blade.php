@extends('layouts.app')

@section('title', 'Groups')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
    <div class="card border-dark mb-3" style="max-width: 30rem;">
            <div class="card-header bg-dark text-light">
                <b>Group Card</b>
            </div>
            <div class="card-body bg-dark p-2 text-dark bg-opacity-10">
                <h5 class="card-title">Name : {{ $groups['name'] }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Description : {{ $groups['description'] }}</li>
                @foreach ($groups->friends as $friends)
                <li class="list-group-item"> {{$friends->nama}} </li>
                @endforeach
                @foreach ($groups->familys as $familys)
                <li class="list-group-item"> {{$familys->first_name}} {{$familys->last_name}} </li>
                @endforeach
            </ul>
            </div>
    </div>

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
