@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    @routes
@endsection



@section('content')
    <header id="CTA" class="container-fluid d-flex align-items-center">
        <div class="cta flex-shrink-1">
            <div class="row align-items-center flex-nowrap">
                <div class="col-auto flex-md-shrink-1">
                    <h3 class="h3">Распродажа цепочек и колье</h3>

                    <p>Уважаемые покупатели, обращаем внимание, что скидка может действовать на определенные размеры
                        изделий.</p>

                    <a href="{{ route('catalog') }}" class="btn btn-yellow">Перейти в каталог</a>
                </div>
                <div class="col-auto flex-shrink-1">
                    <img class="img-fluid" src="{{ asset('/img/подвеска4.png') }}" alt="Подвеска">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mx-0 align-items-xl-center justify-content-xl-between flex-xl-nowrap">
            <div class="col-auto">
                <h2 class="h2">О&nbsp;нас</h2>
                <img class="img-fluid" src="{{ asset('/img/pic.png') }}" alt="About">
            </div>
            <div class="col-auto col-xl-5 about">
                <h2 class="h2">О&nbsp;нас</h2>
                <p class="text-justify">Мы - команда энтузиастов, творческих и талантливых людей, влюбленных в мир
                    бижутерии. Нашей
                    целью является предоставление уникальных и стильных украшений, которые помогут вам выразить свою
                    индивидуальность и добавят неповторимости вашему образу. Мы сотрудничаем с талантливыми дизайнерами,
                    чтобы
                    предложить вам самые свежие и модные тренды в мире бижутерии. Каждое изделие, предоставленное в нашем
                    магазине,
                    было тщательно отобрано по отношению к качеству, стилю и цене, чтобы удовлетворить все ваши потребности
                    и
                    предпочтения.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="h2">Рекомендации</h2>
        <h3 class="h3">Рекомендации</h3>


        <div id="card" class="row m-0 justify-content-md-between gy-card">

            @foreach ($products as $product)
                <div class="d-flex justify-content-center d-md-block col-md-auto col-12 p-0">
                    <div class="card" style="width: 339px;">
                        <img src="{{ asset($product->photo) }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ mb_substr($product->description, 0, 57) . '...' }}</p>
                            <p class="card-price">{{ $product->price }}.00&nbsp;руб.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{ route('show', ['product' => $product]) }}"
                                    class="btn btn-outline-dark">Подробнее</a>
                                @auth
                                    <add-to-cart-icon product-id="{{ $product->id }}" />
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('catalog') }}" class="btn btn-yellow">Смотреть все</a>
            </div>
        </div>
    </div>

    <div id="faq" class="container">
        <h2 class="h2">FAQ</h2>

        <div class="row">
            <div class="col p-0">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed yellow-heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Как оформить заказ?
                            </button>
                        </h4>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Чтобы оформить заказ, просто выберите понравившийся товар и добавьте его в корзину. Затем
                                перейдите к оформлению заказа и заполните необходимую информацию.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed yellow-heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Какие сроки доставки?
                            </button>
                        </h4>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Наши сроки доставки составляют от 1 до 7 рабочих дней, однако, следует отметить,
                                что в связи с различными факторами, такими как праздничные дни, погодные условия и т. д.,
                                сроки доставки могут быть продлены.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed yellow-heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Как выбрать нужный размер изделия?
                            </button>
                        </h4>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Размеры универсальные, потому что они выбираются с учетом среднестатистических размеров
                                людей. Это удобно для потребителей, поскольку универсальные размеры часто подходят
                                большинству
                                людей.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed yellow-heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Могу ли я вернуть или обменять товар?
                            </button>
                        </h4>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Если товар был использован, поврежден или изношен после его покупки, увы мы не можем принять
                                его обратно.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/cartIcon.js') }}"></script>
@endpush
