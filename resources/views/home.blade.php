@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection



@section('content')
    <div id="CTA" class="container-fluid d-flex align-items-center">
        <div class="cta flex-shrink-1">
            <div class="row align-items-center flex-nowrap">
                <div class="col-auto flex-md-shrink-1">
                    <h3 class="h3">Распродажа цепочек и колье</h3>

                    <p>Уважаемые покупатели, обращаем внимание, что скидка может действовать на определенные размеры
                        изделий.</p>

                    <a href="{{ route('catalog_open') }}" class="btn btn-yellow">Перейти в каталог</a>
                </div>
                <div class="col-auto flex-shrink-1">
                    <img class="img-fluid" src="{{ asset('/img/подвеска4.png') }}" alt="Подвеска">
                </div>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="row align-items-xl-center justify-content-xl-between flex-xl-nowrap">
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


        <div class="row gy-card">

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/колье-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье</h5>
                        <p class="card-text">Представляем вам колье женское на шею..</p>
                        <p class="card-price">800.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/подвеска-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Подвеска бижутерная на&nbsp;шею</h5>
                        <p class="card-text">Подвеска с пиромидкой имеет универсальный дизайн, который..</p>
                        <p class="card-price">500.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Серьги-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Серьги висячие гвоздики</h5>
                        <p class="card-text">Серьги в форме лепестка из бижутерного сплава – оригинальный..</p>
                        <p class="card-price">600.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('catalog') }}" class="btn btn-yellow">Смотреть все</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="h2">FAQ</h2>

        <div class="row">
            <div class="col">

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
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
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
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this would
                                look in a real-world application.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed yellow-heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Могу ли я вернуть или обменять товар?
                            </button>
                        </h4>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this would
                                look in a real-world application.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
