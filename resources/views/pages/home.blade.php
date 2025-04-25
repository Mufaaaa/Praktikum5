@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di berita batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

        @include('components.card', [
        'imgsrc' =>   'img/baju.jpg',
        'title' => 'Baju Nikah' ,
        'description' => 'baju ini sangat bagus'
            
    ])
@endsection
