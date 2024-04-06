@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/order_registration.css') }}">
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

    <div id="orderRegistration" class="container">
        <order-registration :user-id="{{ Auth::user()->id }}">
            {{ csrf_field() }}
        </order-registration>
    </div>

    </div>
@endsection

@push('script')
    <script src="/js/orderRegistration.js"></script>
@endpush
