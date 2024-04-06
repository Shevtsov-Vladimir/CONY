@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/cart.css') }}">
    @routes()
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Корзина</li>
            </ol>
        </nav>
    </div>

    <div id="cart" class="container">
        <h3 class="h3">Корзина</h3>

        <cart></cart>

    </div>
@endsection

@push('script')
    <script src="/js/cart.js"></script>
@endpush
