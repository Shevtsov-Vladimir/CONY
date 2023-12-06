@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/sign_in.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Вход</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-5">
                <form action="#">
                    <h3 class="h3">Вход</h3>

                    <input class="form-control" placeholder="Введите ваш Логин или E-mail" type="text" name="nickname">
                    <input class="form-control" placeholder="Пароль" type="password" name="password">

                    <button type="submit" class="btn btn-dark">Войти</button>
                </form>
            </div>


            <div class="col-12 col-md-5">
                <div class="cta-reg">
                    <h5 class="h5">Я – новый покупатель</h5>

                    <p>Регистрация на сайте позволит быстро оформлять заказы, управлять заказами через личный кабинет, в
                        полном объеме использовать возможности нашего интернет магазина.</p>

                    <a href="{{ route('sign_up') }}">Зарегистрироваться</a>
                </div>
            </div>
        </div>

    </div>
@endsection
