@extends('admin.layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/adminPanel.css') }}">
    @routes
@endsection

@section('content')
    <div class="container" id="adminPanel">
        <tabs>
            <tab title="Товары">

                <div class="grid grid-products">
                    <div class="grid-head-item">Номер</div>
                    <div class="grid-head-item">Название</div>

                    @foreach ($products as $product)
                        <div class="grid-item">{{ $product->id }}</div>
                        <div class="grid-item">{{ $product->title }}</div>
                        <div class="grid-item">
                            <img src="{{ asset($product->photo) }}" alt="{{ $product->title }}" class="img-fluid" />
                        </div>
                        <div class="grid-item">
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-dark">Изменить</a>
                        </div>
                        <div class="grid-item">
                            <form method="POST" action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-dark">Удалить</button>
                            </form>
                        </div>
                    @endforeach

                </div>

                <a href="{{ route('products.create') }}" class="btn btn-dark addCategory">Добавить новый</a>
            </tab>

            <tab title="Категориии товаров">

                <div class="grid grid-categories">
                    <div class="grid-head-item">Номер</div>
                    <div class="grid-head-item">Название</div>
                    @foreach ($categories as $category)
                        <div class="grid-item">{{ $category->id }}</div>
                        <div class="grid-item">{{ $category->title }}</div>
                        <div class="grid-item">
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-dark">Изменить</a>
                        </div>
                        <div class="grid-item">
                            <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-dark">Удалить</button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('categories.create') }}" class="btn btn-dark addCategory">Добавить новую</a>
            </tab>

            <tab title="Заказы">
                <div class="grid grid-orders">
                    <div class="grid-head-item">Номер</div>
                    <div class="grid-head-item">Адрес доставки</div>
                    <div class="grid-head-item">Статус</div>

                    @foreach ($orders as $order)
                        <div class="grid-item">{{ $order->id }}</div>
                        <div class="grid-item">{{ $order->delivery_address }}</div>
                        <div class="grid-item">
                            <form action="{{ route('orders.update', ['order' => $order]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <select class="form-select" name="status" onchange="this.form.submit()">
                                    @foreach ($order_statuses as $order_status)
                                        <option @if ($order->status === $order_status) selected="selected" @endif
                                            value="{{ $order_status }}">{{ $order_status }}</option>
                                    @endforeach
                                </select>
                            </form>

                        </div>
                    @endforeach

                </div>

            </tab>
        </tabs>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/adminPanel.js') }}"></script>
@endpush
