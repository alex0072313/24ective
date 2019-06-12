<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>{{ $title }}</title>
</head>
<body>

    <header class="d-flex align-items-start flex-column">
        <div class="top w-100">
            <div class="container py-3">

                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="#"><img src="/images/theme/logo.png" alt=""></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Комплексы <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Схема работы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                        </ul>
                        <div class="d-lg-block d-none">
                            <div class="mb-2"><a href="tel:89887703002" class="h4 text-white font-weight-light">8(988) 770-30-02</a></div>
                            <div><a href="javascript:;" class="btn btn-primary btn-block" data-toggle="modal" data-target="#callback_modal" >Заказать звонок</a></div>

                            @push('modals')
                                <div id="callback_modal" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header border-0 pb-0">
                                                <h5 class="modal-title font-weight-bolder text-center">Заказать обратный звонок</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="text-center text-secondary mb-3">
                                                    Отправьте заявку и наш менеджер свяжется с Вами в ближайшее время
                                                </div>

                                                <form action="">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Ваше Имя">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control phone-mask" id="phone-mask" placeholder="Ваш телефон">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-block btn-primary">Отправить</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endpush

                        </div>
                    </div>
                </nav>

                <div class="d-lg-none d-block text-center my-3">
                    <div class="mb-2"><a href="tel:89887703002" class="h4 text-white">8(988) 770-30-02</a></div>
                    <div><a href="javascript:;" class="btn btn-primary btn-block" data-toggle="modal" data-target="#callback_modal" >Заказать звонок</a></div>
                </div>

                {{--<div class="logo">--}}
                    {{--<a href="#" class="navbar-brand">--}}
                        {{--<img src="/images/theme/logo.png" alt="">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="address">--}}

                {{--</div>--}}
                {{--<div class="phone">--}}

                {{--</div>--}}

            </div>
        </div>

        <div class="title w-100 my-auto">
            <div class="container">
                <div>
                    <div class="display-4 text-white font-weight-bolder border-bottom pb-2 mb-2 d-inline-block">Квартиры в Новороссийске</div>
                </div>
                <div class="h5 text-white">Официальный партнер надежных застройщиков Новороссийска</div>
            </div>
        </div>

        <div class="desk">

        </div>

    </header>

    <section id="zk_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2 border-bottom">Жилищные комплексы</span></div>

                <div class="desc">
                    Мы представляем только надежных застройщиков Новороссийска
                </div>
            </div>

            <div class="zk_list">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100">
                            <div class="img" style="background-image: url(/images/theme/comlex_thumb.jpg)"></div>
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">ЖК Кутузовский</h5>
                                <div class="price mb-2 font-weight-bold">от 3 408 000 ₽</div>
                                <ul class="p-0 list-unstyled">
                                    <li>подземная парковка</li>
                                    <li>металлопластиковые окна</li>
                                    <li>разводка электропроводки</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary btn-block">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="work_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Как мы работаем</span></div>
            </div>
        </div>
    </section>

    <footer>

    </footer>

    @stack('modals')

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>
</html>
