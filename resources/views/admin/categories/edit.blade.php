@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/editCategory.css') }}">
@endsection

@section('content')
    <div class="container">
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
