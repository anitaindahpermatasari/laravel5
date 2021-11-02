@extends('layouts.app')

@section('title', 'Family')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
    <div class="card border-dark mb-3" style="max-width: 30rem;">
            <div class="card-header bg-dark text-light">
                <b>Family Card</b>
            </div>
            <div class="card-body bg-dark p-2 text-dark bg-opacity-10">
                <h5 class="card-title">First Name : {{ $familys['first_name'] }} {{ $familys['last_name'] }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Number Phone : {{ $familys['number_phone'] }}</li>
                <li class="list-group-item">Address : {{ $familys['address'] }}</li>
                <li class="list-group-item">Email : {{ $familys['email'] }}</li>
            </ul>
            </div>
    </div>

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
