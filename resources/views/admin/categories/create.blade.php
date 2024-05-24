@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/createCategory.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Панель администратора</a></li>
                <li class="breadcrumb-item active" aria-current="page">Страница создания товара</li>
            </ol>
        </nav>

        <h3 class="h3">Добавить новую категорию</h3>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <input class="form-control my-5" placeholder="Введите название новой категории" type="text" name="title"
                required>

            <button type="submit" class="btn btn-dark">Добавить</button>
        </form>
    </div>
@endsection
