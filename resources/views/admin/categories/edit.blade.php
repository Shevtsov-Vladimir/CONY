@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/editCategory.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Панель администратора</a></li>
                <li class="breadcrumb-item active" aria-current="page">Страница создания товара</li>
            </ol>
        </nav>

        <h3 class="h3">Изменение категории {{ $category->title }}</h3>

        <form action="{{ route('categories.update', ['category' => $category]) }}" method="POST">
            @csrf
            @method('PUT')

            <input class="form-control my-5" placeholder="Введите новое название категории" type="text" name="title"
                value="{{ $category->title }}" required>

            <button type="submit" class="btn btn-dark">Изменить</button>
        </form>
    </div>
@endsection
