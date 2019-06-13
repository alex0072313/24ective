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
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="scroll_to_el('#zk_block', 1000);">Комплексы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="scroll_to_el('#work_block', 1000);">Схема работы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="scroll_to_el('#apparts_block', 1000);">Преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="scroll_to_el('#zk_block', 500);">Контакты</a>
                            </li>
                        </ul>
                        <div class="d-lg-block d-none">
                            <div class="mb-2"><a href="tel:+79186674224" class="h4 text-white font-weight-light">+7 (918) 667-42-24</a></div>
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
                    <div class="display-4 text-white font-weight-bolder pb-2 mb-2 d-inline-block"><span>Квартиры в Новороссийске</span></div>
                </div>
                <div class="h5 text-white">Официальный партнер надежных застройщиков Новороссийска</div>
            </div>
        </div>

        <div class="to_zk">
            <div class="container text-center">
                <a href="#" onclick="scroll_to_el('#zk_block', 500);" class="btn btn-lg"><i class="fas fa-angle-double-down mr-2 fa-sm"></i> Выбрать ЖК</a>
            </div>
        </div>

    </header>

    <section id="zk_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Жилищные комплексы</span></div>

                <div class="desc font-weight-bold">
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
                </div>

                <div class="more text-center mt-4">
                    <button class="btn btn-success btn-lg">Показать еще..</button>
                </div>
            </div>

        </div>

    </section>

    <section id="work_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Как мы работаем</span></div>
                <div class="desc">
                    Полная прозрачность и юридическая безопасность сделки
                </div>
            </div>

            <div class="items row">

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                send
                            </i>
                        </span>
                    </div>
                    <div class="desc">1. Вы оставляете заявку на консультацию</div>
                </div>

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                face
                            </i>
                        </span>
                    </div>
                    <div class="desc">2. Наш эксперт связывается с Вами по телефону и консультирует</div>
                </div>

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                directions_car
                            </i>
                        </span>
                    </div>
                    <div class="desc">3. Вместе с нашим специалистом едете смотреть подходящие варианты</div>
                </div>

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                assignment_turned_in
                            </i>
                        </span>
                    </div>
                    <div class="desc">4. Оформляем необходимые документы для покупки</div>
                </div>

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                format_paint
                            </i>
                        </span>
                    </div>
                    <div class="desc">5. Мы помогаем произвести ремонт, от дизайна до мебели</div>
                </div>

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="h mb-2">
                        <span>
                            <i class="material-icons">
                                vpn_key
                            </i>
                        </span>
                    </div>
                    <div class="desc">6. Квартира полнотстью готова для проживания</div>
                </div>

            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-success btn-lg work_block_btn" data-toggle="modal" data-target="#work_modal"><i class="material-icons">send</i> Заявка на консультацию</a>
            </div>
            @push('modals')
                <div id="work_modal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header border-0 pb-0">
                                <h5 class="modal-title font-weight-bolder text-center">Оставить заявку на консультацию</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <div class="text-center text-secondary mb-3">
                                    Отправьте заявку на консультацию и наш менеджер свяжется с Вами в ближайшее время
                                </div>

                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Ваше Имя">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control phone-mask" id="phone-mask-2" placeholder="Ваш телефон">
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
    </section>

    <section id="apparts_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Наши преимущества</span></div>
                <div class="desc">
                    12 лет на рынке
                </div>
            </div>

            <div class="items row mb-5">

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart1.jpg);"></div>
                    <h5 class="card-title font-weight-bold">12 лет опыта на рынке недвижимости</h5>
                    <div class="desc">
                        Сотрудники агентства недвижимости Перспектива 23 имеют огромный опыт и ценные навыки на рынке недвижимости
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart2.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Обширный каталог недвижимости</h5>
                    <div class="desc">
                        Самая большая база недвижимости и эксклюзивные ценовые условия от застройщиков
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart3.jpg);background-position: right;"></div>
                    <h5 class="card-title font-weight-bold">Наши партнеры - ведущие банки России</h5>
                    <div class="desc">
                        Вы можете получить скидку до 1% в месяц от фиксированной банковской ставки по ипотеке
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart4.jpg);background-position: right;"></div>
                    <h5 class="card-title font-weight-bold">Сеть<br> офисов продаж</h5>
                    <div class="desc">
                        Мы помогаем приобрести жилье во многих городах России
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="form_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-light"><span class="pb-2">Выберите идеальную квартиру вместе с экспертом по новостройкам Новороссийска</span></div>
                <div class="desc">Оставьте свой телефон, и мы позвоним, чтобы проконсультировать вас по подобранным вариантам</div>
            </div>

            <div class="form">
                <div class="form-row">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <input type="text" class="form-control form-control-lg phone-mask" id="phone-mask-3" placeholder="Ваш Телефон">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-block btn-primary btn-lg">Отправить заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-light"><span class="pb-2">Недвижимость Новороссийска</span></div>
            </div>

            <div class="text-justify">


            <p>Новороссийском зовется город на юге России, входящий в границы Краснодарского края. В населенном пункте работает стратегически важный морской порт, а также крупная военно-морская база. Располагается город на побережье Цемесской бухты, являющейся своеобразными воротами в Черное море. Климатические условия типичны для южных поселений. Даже зимой столбик термометра не столь часто опускается ниже нулевой отметки, а летом здесь очень жарко, правда, спасает от палящего солнца охлаждающая гладь воды. Также для местных погодных условий характерны периодические ураганные ветра. Экологическая обстановка в локации довольно напряженная, поскольку функционирующие здесь заводы по производству цемента существенно загрязняют местную атмосферу.<br>
                <br>
                Число местных жителей с каждым годом увеличивается, причем летом показатель роста населения стремительно идет вверх за счет притока внушительного количества туристов. Также на постоянной основе местность пополняется из-за приехавших сюда мигрантов. Населенный пункт состоит из четырех районов. Самым молодым является Южный район, который начал активно развиваться совсем недавно. Сегодня эта местность просто усеяна новостройками, как вчерашними, так еще не сданными в эксплуатацию. Ценовой диапазон отличается широтой, но в своем большинстве здесь реализуется дорогостоящая недвижимость (Новороссийск вообще обладает завидным сегментом элитного жилья). Кстати, к Южному району относится ряд пляжей города, неподалеку от которого реализуются одни из самых дорогостоящих коттеджей.<br>
                <br>
                <b>Восточный район</b> – сосредоточие промышленных предприятий. Практически на береговой линии работают судоремонтные объекты и другие промышленные предприятия. Естественно, экология здесь самая незавидная, поэтому за дешевой недвижимостью в Новороссийске отправляются сюда. <br>
                <br>
                <b>Центральный район</b> считается самым облагороженным. Здесь построены все основные культурно-развлекательные объекты и офисные помещения. Жилплощадь в своем большинстве дорогая, но довольно вариативная. Встречаются частные домовладения, ветхие советские мало- и среднеэтажки, а также современные корпуса. <br>
                <br>
                Средним по стоимости жильем располагает Приморский район, где можно приобрести частный дом или квартиру в строящемся ЖК. Жить в этой локации комфортно – здесь спокойнее и чище, чем в центре и на юге.</p>

            <p>Как и сайты объявлений недвижимости Циан, Авито и Домофонд. Новороссийск на Рестейте
                можно купить и снять квартиру и офис, дом и участок, продать и сдать в аренду. Подайте объявление бесплатно как частное лицо (собственник), или как риэлтор на порталы в Городском округе Новороссийск  AVITO и Яндекс.Недвижимость</p>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mb-md-0">
                    <div class="row">
                        <div class="col-md-6 mb-md-0 mb-3">
                            <ul class="list-unstyled text-md-left text-center">
                                <li><a href="#">Жилые комплексы</a></li>
                                <li><a href="#">Как мы работаем</a></li>
                                <li><a href="#">Наши преимущества</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-md-0 text-lg-left text-center mb-3 mb-md-0">
                            <div class="mb-2"><a href="tel:+79186674224" class="h4 text-white text-primary">+7 (918) 667-42-24</a></div>
                            <div><a href="javascript:;" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#callback_modal" >Заказать звонок</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    Вся информация, опубликованная на сайте, носит только информационный характер и не является публичной офертой. Все права защищены. При копировании материалов с сайта гиперссылка обязательна.
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

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>
</html>
