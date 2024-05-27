@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/sign_up.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Регистрация</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-5 info">
                <form action="{{ route('auth.store') }}" method="POST">
                    @csrf

                    <h3 class="h3">Регистрация</h3>

                    @if ($errors->any())
                        <div class="errors">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <input class="form-control" placeholder="Введите имя" type="text" name="name" required>

                    <input class="form-control" placeholder="Введите фамилию" type="text" name="surname" required>

                    <input class="form-control" placeholder="Введите отчество" type="text" name="patronymic">

                    <input class="form-control" placeholder="Укажите ваш E-mail" type="email" name="email" required>

                    <input class="form-control" placeholder="Укажите ваш телефон" type="tel" name="telephone" required>

                    <input class="form-control" placeholder="Придумайте пароль" type="password" name="password" required>

                    <input class="form-control" placeholder="Повторите пароль" type="password" name="password_confirmation" required>


                    <button type="submit" class="btn btn-yellow">Зарегистрироваться</button>
                </form>
            </div>


            <div class="col-12 col-md-6 info">
                <div class="qa">
                    <h5 class="h5">Зачем нужна регистрация?</h5>

                    <p>Зарегистрировавшись на сайте, вы сможете получить личный кабинет, что позволит Вам отслеживать
                        историю заказов, быстрее оформлять заказы в нашем Интернет магазине. Вся информация о Вас будет
                        доступна в любое время, и ее не нужно будет вводить повторно.</p>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
    <script src="/js/bootstrap.bundle.min.js"></script>
@endpush
