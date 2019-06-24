@extends('site.layout', ['body_class'=>'default'])

@section('content')
    <section id="contacts" class="content pt-5">

        <div class="container">
            <div class="heading text-center mb-5">
                <div class="title h1 mb-3 font-weight-bolder"><span class="pb-2">Наши контакты</span></div>
                <div class="desc">Мы оперативно поможем Вам в выборе недвижимости!</div>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-start flex-column">
                    <div class="w-100 my-auto">
                        <ul class="list-unstyled w_icons ml-lg-5">
                            <li class="mb-2"><i class="fas fa-phone text-success fa-sm"></i> 8 800 201-56-03</li>
                            <li class="mb-2"><i class="fas fa-at text-success fa-sm"></i> biysk@perspektiva24.com</li>
                            <li class="mb-2"><i class="fas fa-map-marker-alt text-success fa-sm"></i> г.Новороссийск, ул. Лейтенанта Шмидта, д.39</li>
                            <li><i class="fas fa-clock text-success fa-sm"></i> Пн-Пт с 8:00 до 20:00, Сб-Вс с 10:00 до 17:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form form-zk-header px-4 py-3">
                        <div class="form-group mb-3">
                            <div class="h4 font-weight-bolder text-center">Узнать больше</div>
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Ваше Имя">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" id="phone-mask-f-1" class="form-control form-control-lg phone-mask" placeholder="Ваш Телефон">
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

        </div>
        <div class="map mt-5">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeba33fb0255e82bfbd6d5225e0de4f418fa174b345936cfdf6849706ce0a2bb5&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </section>

@endsection
