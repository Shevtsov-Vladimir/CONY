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
                @foreach ($orders as $order)
                    <div class="order overflow-x-auto">
                        <div class="order-header d-flex justify-content-between">
                            <div class="fw-bold">Заказ №1-{{ $order->id }}</div>

                            <div class="grid-order-header">
                                <div class="fw-bold text-end">Цена</div>
                                <div class="fw-bold text-end">Количество</div>
                                <div class="fw-bold text-end">Сумма заказа</div>
                                <div class="fw-bold text-end">Статус</div>
                            </div>
                        </div>
                        @foreach ($order->products as $product)
                            <div class="purchase">
                                <a href="{{ route('show', ['product' => $product->id]) }}"><img
                                        src="{{ asset($product->photo) }}" alt="{{ $product->title }}"
                                        class="img-fluid"></a>
                                <div class="grid grid-orders">
                                    <div class="fw-bold">{{ $product->title }}</div>
                                    <div class="text-start text-md-end">
                                        {{ $product->price . '.00 руб.' }}
                                    </div>
                                    <div class="text-start text-md-end">
                                        <span class="d-md-none fw-bold">Количество &nbsp;</span>
                                        {{ $product->pivot->quantity }}
                                    </div>
                                    <div class="text-end">
                                        {{-- {{ $product->price * $product->pivot->quantity . '.00 руб.' }} --}}
                                        @if ($loop->first)
                                            {{ $order->totalCost . '.00 руб.' }}
                                        @endif
                                    </div>
                                    <div class="text-end">
                                        @if ($loop->first)
                                            <form action="{{ route('orders.update', ['order' => $order]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')

                                                <select class="form-select order-grid-select ms-auto" name="status"
                                                    onchange="this.form.submit()">
                                                    @foreach ($order_statuses as $order_status)
                                                        <option @if ($order->status === $order_status) selected="selected" @endif
                                                            value="{{ $order_status }}">{{ $order_status }}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="d-md-block d-none">{{ $product->article }}</div>
                                </div>
                            </div>
                        @endforeach

                        <div class="order-bottom">
                            <div class="grid-orders-bottom">
                                <div>
                                    <div class="fw-bold">Имя</div>
                                    <div class="fw-bold text-end">Фамилия</div>
                                    <div class="fw-bold text-end">Отчество</div>
                                    <div class="fw-bold text-end">Почта</div>
                                    <div class="fw-bold text-end">Телефон</div>
                                    <div>{{ $order->user->name }}</div>
                                    <div class="text-end">{{ $order->user->surname }}</div>
                                    <div class="text-end">{{ $order->user->patronymic }}</div>
                                    <div class="text-end">{{ $order->user->email }}</div>
                                    <div class="text-end">{{ $order->user->telephone }}</div>
                                </div>
                                <div>
                                    <div class="fw-bold">Адрес доставки</div>
                                    <div class="fw-bold">Комментарий</div>
                                    <div>{{ $order->delivery_address }}</div>
                                    <div>{{ $order->order_comment }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </tab>
        </tabs>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/adminPanel.js') }}"></script>
@endpush
