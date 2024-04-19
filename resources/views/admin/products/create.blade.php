@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/createCategory.css') }}">
@endsection

@section('content')
    <div class="container">
        <h3 class="h3 mb-5">Добавить новую категорию</h3>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-5"><input class="form-control" placeholder="Введите название нового товара" type="text"
                    name="title" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Введите описание товара" type="text"
                    name="description" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Введите цену товара" type="number" name="price"
                    required></div>

            <div class="mb-5"><input class="form-control" placeholder="Укажите количество товара" type="number"
                    name="quantity" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Загрузите фото товара" type="file"
                    name="photo" required></div>

            <div class="mb-5">
                <select class="form-select" name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Добавить</button>
        </form>
    </div>
@endsection
