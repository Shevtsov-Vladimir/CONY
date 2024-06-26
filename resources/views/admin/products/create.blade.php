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

        <h3 class="h3 my-5">Добавить новую категорию</h3>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-5"><input class="form-control" placeholder="Артикул товара" type="text" name="article">
            </div>

            <div class="mb-5"><input class="form-control" placeholder="Наименование товара" type="text" name="title"
                    required></div>

            <div class="mb-5"><input class="form-control" placeholder="Описание товара" type="text" name="description"
                    required></div>

            <div class="mb-5"><input class="form-control" placeholder="Цена товара" type="number" name="price"
                    required></div>

            <div class="mb-5"><input class="form-control" placeholder="Количество товара" type="number" name="quantity"
                    required></div>

            <div class="mb-5"><input class="form-control" placeholder="Фото товара" type="file" name="photo"
                    required></div>

            <div class="mb-5">
                <label for="select" class="form-label">Категория товара</label>
                <select class="form-select" name="category_id" id="select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Добавить</button>
        </form>
    </div>
@endsection
