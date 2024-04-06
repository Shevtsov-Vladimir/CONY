@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}">
    @routes
@endsection


@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
            </ol>
        </nav>
        <p class="wish">Будь счастлива каждую секунду!</p>
    </div>
    <div id="catalog" class="container">
        <catalog></catalog>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/catalog.js') }}"></script>
@endpush
