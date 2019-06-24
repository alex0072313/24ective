@extends('site.layout', ['body_class'=>'zk', 'zk_header_bg'=>'/images/theme/zk_header_bg.jpg'])

@section('content')
    <section id="plain_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Доступные планировки</span></div>
                <div class="desc">
                    Ознакомьтесь с доступными планировками и ценами в ЖК Мелодия Мысхако
                </div>
            </div>

            <div class="items row">

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="inner">
                        <a href="javascript:;" data-toggle="modal" data-target="#zk_plain_1">
                            <div class="img mb-3" style="background-image: url(/images/theme/plain_1.png);"></div>
                            <div class="title h5 font-weight-bold">
                                1-ком. квартира (72.0 м<sup>2</sup>)
                            </div>
                            <div class="price font-weight-bold">
                                от 2 100 000 ₽
                            </div>
                            <div class="more">
                                <div class="d-flex align-items-start flex-column h-100">
                                    <div class="label w-100 my-auto text-center">
                                        <i class="fas fa-eye"></i><br><span class="h5">Открыть планировку</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @push('modals')
                    <div id="zk_plain_1" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img text-center mb-3">
                                        <img src="/images/theme/plain_1.png" alt="">
                                    </div>
                                    <div class="h2 font-weight-bolder">1-комнатная квартира (72.0 м<sup>2</sup>)</div>
                                    <div class="text-secondary text-primary">
                                        от 3 408 000 ₽
                                    </div>
                                    <form action="" class="form mt-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg phone-mask" placeholder="Ваш телефон">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-block btn-primary btn-lg">Уточнить цену</button>
                                        </div>
                                        <div class="text-center text-secondary mt-2">
                                            <small>Отправьте заявку и наш менеджер свяжется с Вами в ближайшее время</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endpush

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="inner">
                        <a href="javascript:;" data-toggle="modal" data-target="#zk_plain_2">
                            <div class="img mb-3" style="background-image: url(/images/theme/plain_2.png);"></div>
                            <div class="title h5 font-weight-bold">
                                2-ком. квартира (91.0 м<sup>2</sup>)
                            </div>
                            <div class="price font-weight-bold">
                                от 3 000 000 ₽
                            </div>
                            <div class="more">
                                <div class="d-flex align-items-start flex-column h-100">
                                    <div class="label w-100 my-auto text-center">
                                        <i class="fas fa-eye"></i><br><span class="h5">Открыть планировку</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @push('modals')
                    <div id="zk_plain_2" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img text-center mb-3">
                                        <img src="/images/theme/plain_2.png" alt="">
                                    </div>
                                    <div class="h2 font-weight-bolder">2-комнатная квартира (91.0 м<sup>2</sup>)</div>
                                    <div class="text-secondary text-primary">
                                        от 3 000 000 ₽
                                    </div>
                                    <form action="" class="form mt-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg phone-mask" placeholder="Ваш телефон">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-block btn-primary btn-lg">Уточнить цену</button>
                                        </div>
                                        <div class="text-center text-secondary mt-2">
                                            <small>Отправьте заявку и наш менеджер свяжется с Вами в ближайшее время</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endpush

                <div class="item col-sm-6 col-lg-4 mb-4">
                    <div class="inner">
                        <a href="javascript:;" data-toggle="modal" data-target="#zk_plain_3">
                            <div class="img mb-3" style="background-image: url(/images/theme/plain_3.png);"></div>
                            <div class="title h5 font-weight-bold">
                                3-ком. квартира (122.0 м<sup>2</sup>)
                            </div>
                            <div class="price font-weight-bold">
                                от 4 000 000 ₽
                            </div>
                            <div class="more">
                                <div class="d-flex align-items-start flex-column h-100">
                                    <div class="label w-100 my-auto text-center">
                                        <i class="fas fa-eye"></i><br><span class="h5">Открыть планировку</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @push('modals')
                    <div id="zk_plain_3" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img text-center mb-3">
                                        <img src="/images/theme/plain_3.png" alt="">
                                    </div>
                                    <div class="h2 font-weight-bolder">3-комнатная квартира (122.0 м<sup>2</sup>)</div>
                                    <div class="text-secondary text-primary">
                                        от 4 000 000 ₽
                                    </div>
                                    <form action="" class="form mt-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg phone-mask" placeholder="Ваш телефон">
                                        </div>
                                        <div class="form-group mb-0">
                                            <button class="btn btn-block btn-primary btn-lg">Уточнить цену</button>
                                        </div>
                                        <div class="text-center text-secondary mt-2">
                                            <small>Отправьте заявку и наш менеджер свяжется с Вами в ближайшее время</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endpush

            </div>

        </div>

    </section>
    <section id="form_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-light"><span class="pb-2">Уточнить цены на все доступные квартиры</span></div>
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

    <section id="zk_apparts_block" class="content py-5">
        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-light"><span class="pb-2">Преимущества ЖК Мелодия Мысхако</span></div>
                <div class="desc">Новый жилой комплекс в элитном месте города Новороссийска в 400 метрах от моря.</div>
            </div>

            <div class="items">

                <div class="item row mb-3">
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_1.jpg);"></div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Закрытая территория</div>
                            <p class="mb-0">Домофон для каждой квартиры и автоматические ворота с индивидуальным пультом управления.</p>
                        </div>
                    </div>
                </div>

                <div class="item row mb-3">
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto text-right d-md-block d-none">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Парковка</div>
                            <p class="mb-0">На территории — парковка для жильцов ЖК.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_2.jpg);"></div>

                        <div class="w-100 my-auto d-md-none d-block">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Парковка</div>
                            <p class="mb-0">На территории — парковка для жильцов ЖК.</p>
                        </div>

                    </div>
                </div>

                <div class="item row mb-3">
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_3.jpg);"></div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Современная архитектура</div>
                            <p class="mb-0">Проект выполнен в рамках современных архитектурных тенденций Европы.</p>
                        </div>
                    </div>
                </div>

                <div class="item row mb-3">
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto text-right d-md-block d-none">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Инфраструктура</div>
                            <p class="mb-0">В шаговой доступности школа, супермаркет, аптека и банк.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_4.jpg);"></div>

                        <div class="w-100 my-auto d-md-none d-block">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Инфраструктура</div>
                            <p class="mb-0">В шаговой доступности школа, супермаркет, аптека и банк.</p>
                        </div>
                    </div>
                </div>

                <div class="item row mb-3">
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_5.jpg);"></div>
                    </div>
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> В 7 минутах от моря</div>
                            <p class="mb-0">400м до обустроенного пляжа.</p>
                        </div>
                    </div>
                </div>

                <div class="item row mb-3">
                    <div class="col-md-6 d-flex align-items-start flex-column">
                        <div class="w-100 my-auto text-right d-md-block d-none">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Внимание к детям</div>
                            <p class="mb-0">Детская площадка «Элефант» — европейский стандарт безопасности в вашем дворе.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img" style="background-image: url(/images/theme/zk_appart_6.jpg);"></div>

                        <div class="w-100 my-auto d-md-none d-block">
                            <div class="h3 font-weight-bolder mt-md-0 mt-3"><i class="fas fa-check text-primary"></i> Внимание к детям</div>
                            <p class="mb-0">Детская площадка «Элефант» — европейский стандарт безопасности в вашем дворе.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <a href="javascript:;" class="btn btn-success btn-lg" data-toggle="modal" data-target="#consult_modal">Получить полную консультацию по ЖК</a>
                @push('modals')
                    <div id="consult_modal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <h5 class="modal-title font-weight-bolder text-center">Получить полную консультацию по ЖК</h5>
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
                                            <button class="btn btn-block btn-primary">Отправить заявку</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endpush
            </div>

        </div>
    </section>

    <section id="gallery_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 font-weight-bolder mb-3"><span class="pb-2">Галерея ЖК Мелодия Мысхако</span></div>
            </div>

            <div class="items">
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_2.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_2_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
                <div class="item">
                    <a href="/images/theme/gal_1.jpg" data-lightbox="gal" data-title="Строительство комплекса">
                        <div class="img mx-auto" style="background-image: url(/images/theme/gal_1_th.jpg);"></div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="worker_block" class="content py-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-bolder"><span class="pb-2">Застройщик</span></div>
                <div class="desc">ООО «Кристалл»</div>
            </div>

            <p class="mb-0">Застройщиком ЖК «Жуковский» является инвестиционно-строительная компания ООО «Кристалл», учрежденная в 2014 году.
                Данный застройщик возвел и ввел в эксплуатацию несколько жилых комплексов в Геленджике: Панорама, Комфорт хаус, Кристалл, Одиссея.
                Все дома построены по современным технологиям с использованием высококачественных материалов и сданы точно в срок и даже раньше.</p>

            <div class="text-center mt-5">
                <a href="/images/theme/worker.pdf" class="btn btn-success btn-lg"><i class="far fa-file mr-2"></i> Разрешение на строительство</a>
            </div>

        </div>
    </section>

    <section id="map" class="content pt-5">
        <div class="container">

            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-bolder"><span class="pb-2">Расположение ЖК Мелодия Мысхако</span></div>
                <div class="desc">Расположен по адресу г.Новороссийск, с.Мысхако, ул.Молодежная 23-б</div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Элитный поселок, который называют Новороссийская Рублевка</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Яхт-клуб и набережная в двух шагах</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Никакой новой стройки за окном! Это последняя застройка в районе</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Чистая вода и бухта, которая защищает от ветра и штормов</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled w_icons">
                        <li><i class="fas fa-check text-primary"></i> Закрытый пляж только для вас — отдыхающие не будут беспокоить ваш покой</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="map mt-5">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeba33fb0255e82bfbd6d5225e0de4f418fa174b345936cfdf6849706ce0a2bb5&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

    </section>


@endsection
