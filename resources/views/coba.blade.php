<!-- Cara memanggil app.blade.php -->

@extends('layouts.app')
<!-- extends (nama file. nama folder) -->

@section('title', 'Home')
<!-- section (key, value) karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
<!-- section untuk memanggil isi dari yield -->

    <h1>Selamat Datang Dalam Laravel Pertama Saya<h1>
    <!-- isi body di letaka di dalam section -->

@endsection
