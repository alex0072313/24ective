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
<body class="{{ $body_class }}">
    <header class="d-flex align-items-start flex-column"{!! isset($zk_header_bg) ? ' style="background-image: url('.$zk_header_bg.');"' : '' !!}>
        <div class="top w-100">
            <div class="container py-3">

                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand py-0" href="#"><img src="/images/theme/logo4.png" alt="" width="83" height="75"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mr-auto ml-3">

                            <div class="mb-2 address font-weight-light d-lg-block d-none">
                                <i class="fas fa-map-marker-alt mr-1"></i> г.Новороссийск, ул. Лейтенанта Шмидта, д.39
                            </div>

                            <ul class="navbar-nav mt-md-0 mt-3">
                                <li class="nav-item pl-0">
                                    <a class="btn btn-outline-light" href="#" onclick="scroll_to_el('#zk_block', 1000);">Комплексы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-light" href="#" onclick="scroll_to_el('#work_block', 1000);">Схема работы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-light" href="#" onclick="scroll_to_el('#apparts_block', 1000);">Преимущества</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-outline-light" href="#" onclick="scroll_to_el('#zk_block', 500);">Контакты</a>
                                </li>
                            </ul>

                        </div>


                        <div class="d-lg-block d-none">

                            <div class="mb-2"><a href="tel:88002015603" class="h4 text-white font-weight-light">8 800 201-56-03</a></div>
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
                    <div class="mb-2 address font-weight-light">
                        <i class="fas fa-map-marker-alt mr-1"></i> г.Новороссийск, ул. Лейтенанта Шмидта, д.39
                    </div>

                    <div class="mb-2"><a href="tel:88002015603" class="h4 text-white">8 800 201-56-03</a></div>
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

        <div class="w-100 my-auto">
            <div class="container">
                @if($body_class == 'zk')
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-start flex-column mb-md-0 mb-4">

                            <div class="w-100 my-auto">
                                <div class="title">
                                    <div class="display-4 text-white font-weight-bolder pb-2 mb-2 d-inline-block"><span>ЖК Мелодия Мысхако</span></div>
                                </div>
                                <div class="h5 text-white">
                                    В 7 минутах от моря, 400м до обустроенного пляжа</div>
                                {{--<div class="h5 text-white">528 квартир от 80 м<sup>2</sup> до 534 м<sup>2</sup> по цене от 7 900 000 руб.</div>--}}
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form form-zk-header px-4 py-3">
                                <div class="form-group mb-3">
                                    <div class="h4 font-weight-bolder text-center">Получить консультацию</div>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" id="phone-mask-zk" class="form-control form-control-lg phone-mask" placeholder="Ваш Телефон">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Отправить заявку</button>
                                    <div class="text-center text-secondary mt-2">
                                        <small>Отправьте заявку и наш менеджер свяжется с Вами в ближайшее время</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="title">
                        <div class="display-4 text-white font-weight-bolder pb-2 mb-2 d-inline-block"><span>Квартиры в Новороссийске</span></div>
                    </div>
                    <div class="h5 text-white">Официальный партнер надежных застройщиков Новороссийска</div>
                @endif
            </div>
        </div>

        {{--<div class="to_zk">--}}
            {{--<div class="container text-center">--}}
                {{--<a href="#" onclick="scroll_to_el('#zk_block', 500);" class="btn btn-lg"><i class="fas fa-angle-double-down mr-2 fa-sm"></i> Выбрать ЖК</a>--}}
            {{--</div>--}}
        {{--</div>--}}

    </header>
    @yield('content')
    <footer class="py-5">
        <div class="container">

            <div class="row">

                <div class="col-md-5 col-lg-4 mb-md-0 text-center text-md-left">
                    <div><a class="navbar-brand py-0 m-0" href="#"><img src="/images/theme/logo4.png" alt="" width="83" height="75"></a></div>
                    
                    <div class="socials mt-3">
                        <a href="#" class="vk"><i class="fab fa-vk"></i></a>
                        <a href="#" class="ml-2 fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="ml-2 in"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-md-7 col-lg-5 mb-md-0 text-center text-md-left">

                    <div class="mb-2 address font-weight-light">

                        <div class="mb-4 mt-md-0 mt-4">
                            <a href="tel:88002015603" class="h4 text-white text-primary">8 800 201-56-03</a><br>
                            <a href="javascript:;" class="" data-toggle="modal" data-target="#callback_modal">Заказать звонок</a>
                        </div>

                        <ul class="list-unstyled w_icons pt-2">
                            <li class="d-inline-block d-md-block"><i class="fas fa-map-marker-alt mr-1 fa-sm"></i> г.Новороссийск, ул. Лейтенанта Шмидта, д.39</li>
                            <li class="d-inline-block d-md-block"><i class="fas fa-clock mr-1 fa-sm"></i> Пн-Пт с 8:00 до 20:00, Сб-Вс с 10:00 до 17:00</li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-12 col-lg-3 mb-md-0 text-center text-md-left">
                    <ul class="list-unstyled text-md-left text-center nav-footer font-weight-light footer-nav">
                        <li><a href="#">Жилые комплексы</a></li>
                        <li><a href="#">Как мы работаем</a></li>
                        <li><a href="#">Наши преимущества</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>

            </div>
            
        </div>
    </footer>
    <section class="powered py-2">
        <div class="container text-center text-secondary">
            <small>© ОН "Перспектива24" - Агентство недвижимости в г. Новороссийск</small>
        </div>
    </section>
    @stack('modals')
    @include('site.includes.whatsapp')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>
</html>
