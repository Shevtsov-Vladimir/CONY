@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/createCategory.css') }}">
@endsection

@section('content')
    <div class="container">
        <h3 class="h3 mb-5">Изменение товара {{ $product->title }}</h3>

        <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-5"><input class="form-control" placeholder="Артикул товара" type="text" name="vendor_code"
                    value="{{ $product->vendor_code }}" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Название товара" type="text" name="title"
                    value="{{ $product->title }}" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Описание товара" type="text" name="description"
                    value="{{ $product->description }}" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Цена товара" type="number" name="price"
                    value="{{ $product->price }}" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Количество товара" type="number" name="quantity"
                    value="{{ $product->quantity }}" required></div>

            <div class="mb-5"><input class="form-control" placeholder="Фото товара" type="file" name="photo"
                    value="{{ $product->photo }}"></div>

            <div class="mb-5">
                <label for="select" class="form-label">Категория товара</label>
                <select class="form-select" name="category_id" id="select">
                    @foreach ($categories as $category)
                        <option @if ($product->category_id === $category->id) selected="selected" @endif value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Изменить</button>
        </form>
    </div>
@endsection
