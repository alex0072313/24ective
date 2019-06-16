@extends('site.layout')

@section('content')
    <section id="parth_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Наши банки-партнеры</span></div>

                <div class="items row">
                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" class="parth_img" data-img="/images/theme/sert_parth_1.jpg" title="Официальный партнер - Сбербанк" ><img src="/images/theme/parth1.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" class="parth_img" data-img="/images/theme/sert_parth_2.jpg" title="Официальный партнер - ВТБ" ><img src="/images/theme/parth2.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" ><img src="/images/theme/parth3.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" ><img src="/images/theme/parth4.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" ><img src="/images/theme/parth5.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4">
                        <a href="javascript:;" ><img src="/images/theme/parth6.jpg" alt=""></a>
                    </div>

                    <div class="item col-sm-6 col-lg-4 offset-lg-4 offset-sm-3">
                        <a href="javascript:;" ><img src="/images/theme/parth7.jpg" alt=""></a>
                    </div>
                </div>

                @push('modals')
                    <div class="modal fade" id="parth_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <div class="modal-header border-0 pb-0">
                                    <h5 class="modal-title font-weight-bolder text-center"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img src="" class="parth_image_preview" style="width: 100%;" >
                                </div>
                            </div>
                        </div>
                    </div>
                @endpush

            </div>
        </div>

    </section>

    <section id="apparts_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Наши преимущества</span></div>
                <div class="desc">
                    Более 10 лет на рынке
                </div>
            </div>

            <div class="items row mb-5">

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart1.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Индивидуальный подход</h5>
                    <div class="desc">
                        Наша задача не продать то, что есть, а подобрать наиболее подходящий для вас вариант.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart2.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Экспертность</h5>
                    <div class="desc">
                        Мы знаем плюсы и так же минусы каждой стройки и расскажем вам об этом.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart3.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Надежные застройщики</h5>
                    <div class="desc">
                        {{--                        Мы работаем только с проверенными застройщиками, с застройщиками, которые зарекомендовали себя на рынке, у которых уже десятки и сотни тысяч квадратных метров построеных и введенных в эксплуатацию домов.--}}
                        Мы работаем только с проверенными застройщиками, которые зарекомендовали себя.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart4.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Более 10 лет на рынке {{-- недвижимости --}}</h5>
                    <div class="desc">
                        Сотрудники нашей компании имеют огромный опыт и ценные навыки на рынке недвижимости.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart5.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Обширный каталог недвижимости</h5>
                    <div class="desc">
                        Самая большая база новостроек и эксклюзивные ценовые условия от застройщиков.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart6.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Партнеры – ведущие банки России</h5>
                    <div class="desc">
                        С нашей помощью Вы получите скидку по ипотечному кредитованию от 0.5%.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart7.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Сеть офисов продаж</h5>
                    <div class="desc">
                        Наша компания находится в 60 городах россии. У нас работает центр межрегиональных сделок, мы поможем вам продать или купить недвижимость в любой точке страны.
                    </div>
                </div>

                <div class="item col-sm-6 col-lg-3 mb-4">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/appart8.jpg);"></div>
                    <h5 class="card-title font-weight-bold">Ваша выгода</h5>
                    <div class="desc">
                        С нашей помощью вы сможете сэкономить на покупке квартиры в новостройке, как минимум 700 000 – 800 000 рублей.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="sale_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-light mb-3"><span class="pb-2">Сэкономьте от 700 000 – 800 000 рублей на покупке квартиры</span></div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Мы знаем у кого из застройщиков более доступные цены, а качество строительства не отличается от всех – это экономия от 250 000 рублей.</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Мы занем, у какого застройщика проходят акции в настоящее время, и предоставим вам информацию – это экономия от 300 000 рублей.</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> У нас вы можете оформить ипотеку со скидкой от 0,5% - это экономия от 200 000 рублей.</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Наш официальный партнер страховой дом «ВСК», и нам предоставляются скидки по страхованию заемщиков при ипотечном кредитовании.</li>
                    </ul>
                </div>
            </div>

            <div class="form mt-5">

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

            <div class="items">

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work1.jpg);"></div>
                    <div class="desc">
                        1. Вы оставляете заявку на консультацию
                    </div>
                </div>

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work2.jpg);"></div>
                    <div class="desc">
                        2. Наш эксперт связывается с Вами по телефону и консультирует
                    </div>
                </div>

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work3.jpg);"></div>
                    <div class="desc">
                        {{--3. Если у Вас сделка проходит по ипотеке, то мы самостоятельно подадим заявку - без очередей в банке, поможем в принятии банком положительного решения и предоставим скидку по ипотеке--}}
                        3. Если у Вас ипотека, то мы самостоятельно подадим заявку
                    </div>
                </div>

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work4.jpg);"></div>
                    <div class="desc">
                        4. Вместе с нашим экспертом едете смотреть подходящие варианты
                    </div>
                </div>


                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work5.jpg);"></div>
                    <div class="desc">
                        5. Оформляем необходимые документы для покупки
                    </div>
                </div>

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work6.jpg);"></div>
                    <div class="desc">
                        6. Мы помогаем произвести ремонт, от дизайна до мебели
                    </div>
                </div>

                <div class="item">
                    <div class="img mx-auto mb-3" style="background-image: url(/images/theme/work7.jpg);"></div>
                    <div class="desc">
                        7. Квартира полнотстью готова для проживания
                    </div>
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

    <section id="form_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-light"><span class="pb-2">Выберите квартиру своей мечты вместе с экспертом по новостройкам Новороссийска</span></div>
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
                <p>Новороссийском зовется город на юге России, входящий в границы Краснодарского края. В населенном пункте работает стратегически важный морской порт, а также крупная военно-морская база. Располагается город на побережье Цемесской бухты, являющейся своеобразными воротами в Черное море. Климатические условия типичны для южных поселений. Даже зимой столбик термометра не столь часто опускается ниже нулевой отметки, а летом здесь очень жарко, правда, спасает от палящего солнца охлаждающая гладь воды.</p>
                <p>Число местных жителей с каждым годом увеличивается, причем летом показатель роста населения стремительно идет вверх за счет притока внушительного количества туристов. Населенный пункт состоит из четырех районов. Самым молодым является Южный район, который начал активно развиваться совсем недавно. Сегодня эта местность просто усеяна новостройками, как вчерашними, так и еще не сданными в эксплуатацию.  Кстати, к Южному району относится ряд пляжей города.</p>
                <p>Восточный район – сосредоточие промышленных предприятий. Практически на береговой линии работают судоремонтные объекты и другие промышленные предприятия. В этом районе более низкие цены на недвижимость.</p>
                <p>Центральный район – считается самым облагороженным. Здесь построены все основные культурно-развлекательные объекты и офисные помещения, в шаговой доступности городская набережная и центральный городской пляж.</p>
                <p>Средним по стоимости жильем располагает Приморский район, где можно приобрести частный дом или квартиру в новом жилом комплексе, так же есть хороший выбор вторичного жилья.</p>
            </div>
        </div>
    </section>
@endsection
