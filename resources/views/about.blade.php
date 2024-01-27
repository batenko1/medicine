@extends('layout')

@section('content')
    <main>
        <section class="missions">
            <div class="missions__body">
                <div class="missions__title title">
                    <h2>{{ __('Наша миссия') }}</h2>
                </div>
                <div class="missions__content">
                    <div class="swiper missions__swiper">
                        <div class="swiper-wrapper missions__swaper-wrapper">
                            @foreach($sliders as $slider)
                                <div class="swiper-slide missions__slide">
                                    <picture>
                                        <source media="(max-width: 600px)"
                                                srcset="{{ asset('storage/'. $slider->image) }}">
                                        <img src="{{ asset('storage/'. $slider->image) }}" alt="">
                                    </picture>
                                    <div class="missions__text">
                                        <p style="color: #333" data-swiper-parallax="-200" data-swiper-parallax-duration="600">
                                            {{ $slider->getTranslatedAttribute('name') }}</p>
                                        <div class="missions__icons">
                                            <div class="missions__icon" data-swiper-parallax="-200"
                                                 data-swiper-parallax-duration="800">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-calculator" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                                    <path
                                                        d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z" />
                                                </svg>
                                            </div>
                                            <div class="missions__icon" data-swiper-parallax="-200"
                                                 data-swiper-parallax-duration="1000">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                          d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                                    <path
                                                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                                    <path
                                                        d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                                </svg>
                                            </div>
                                            <div class="missions__icon" data-swiper-parallax="-200"
                                                 data-swiper-parallax-duration="1200">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                                </svg>
                                            </div>
                                            <span data-swiper-parallax="-200" data-swiper-parallax-duration="1200">➔</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="welcome">
            <div class="welcome__body container">
                <div class="welcome__text">
                    <p class="element-animation"> <span>ООО «SITORA PHARM PLUS»</span>
                        {{ __('предлагает медицинское и лабораторное оборудование в Узбекистане.') }}
                        {{ __('Наша организация начала продажу медицинского оборудования в городе Самарканде в 2017 г. и в настоящее время поставляет медицинскую технику, реагенты, расходные медицинские и лабораторные изделия по всей территории Узбекистана.') }}
                        {{ __('ООО «SITORA PHARM PLUS» является дистрибьютером многих мировых брендов медицинского оборудования.') }}
                        {{ __('Мы предлагаем низкие цены на медицинское оборудование из Китая, медицинские аппараты из Индии, Европы, США, Японии и других стран.') }}</p>
                    <p class="element-animation">{{ __('Основной профиль нашей компании – проектирование и оснащение больниц и частных клиник медицинским оборудованием «под ключ» по ценам производителей') }}</p>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="services__body container">
                <div class="services__title title">
                    <h2>{{ __('Наша деятельность') }}</h2>
                </div>
                <div class="services__content">
                    <div class="services__text">
                        {{ __('Мы проводим все виды услуг по оснащению больниц, клиник, медицинских центров необходимым оборудованием') }}
                    </div>
                    <div class="services__cards">
                        <div class="services__card card-services element-animation">
                            <div class="card-services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                    <path
                                        d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                    <path
                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path
                                        d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                </svg>
                            </div>
                            <div class="card-services__title">
                                {{ __('Разработка стратегии закупки') }}
                            </div>
                            <div class="card-services__text">
                                {{ __('Проработка плана закупок эффективного и рентабельного медицинского оборудования') }}
                            </div>
                        </div>
                        <div class="services__card card-services element-animation">
                            <div class="card-services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-boombox" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm-7-1a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm5.5 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                    <path
                                        d="M11.5 13a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm0-1a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                    <path
                                        d="M7 10.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-1 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                    <path
                                        d="M14 0a.5.5 0 0 1 .5.5V2h.5a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12.5V.5A.5.5 0 0 1 14 0ZM1 3v3h14V3H1Zm14 4H1v7h14V7Z" />
                                </svg>
                            </div>
                            <div class="card-services__title">
                                {{ __('Широкий выбор оборудования') }}
                            </div>
                            <div class="card-services__text">
                                {{ __('Оптовая торговля местным и зарубежным медицинским оборудованием широкого профиля') }}
                            </div>
                        </div>
                        <div class="services__card card-services element-animation">
                            <div class="card-services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-check2-square" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                                    <path
                                        d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                </svg>
                            </div>
                            <div class="card-services__title">
                                {{ __('Наличие расходных материалов') }}
                            </div>
                            <div class="card-services__text">
                                {{ __('Продажа необходимых реагентов, расходных материалов и медицинских изделий для непрерывной работы нашего медицинского оборудования') }}
                            </div>
                        </div>
                        <div class="services__card card-services element-animation">
                            <div class="card-services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                                </svg>
                            </div>
                            <div class="card-services__title">
                                {{ __('Обучение') }}
                            </div>
                            <div class="card-services__text">
                                {{ __('Организация бесплатных обучающих курсов персонала, а также технической поддержки для оптимальной работы медицинского оборудования') }}
                            </div>
                        </div>
                        <div class="services__card card-services element-animation">
                            <div class="card-services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-tools" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                                </svg>
                            </div>
                            <div class="card-services__title">
                                {{ __('Обслуживание') }}
                            </div>
                            <div class="card-services__text">
                                {{ __('Организация бесплатного гарантийного обслуживания и постгарантийного сервиса медицинского оборудования') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="milestone">
            <div class="milestone__body container">
                <div class="milestone__title title">
                    <h3>{{ __('Наши достижения') }}</h3>
                </div>
                <div class="milestone__content">
                    <div class="milestone__item element-animation">
                        <div class="milestone__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-box2" viewBox="0 0 16 16">
                                <path
                                    d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3L2.95.4ZM7.5 1H3.75L1.5 4h6V1Zm1 0v3h6l-2.25-3H8.5ZM15 5H1v10h14V5Z" />
                            </svg>
                        </div>
                        <div class="milestone__circle">2009</div>
                        <div class="milestone__text">
                            <div class="milestone__name">{{ __('Основание компании') }}</div>
                            <div class="milestone__descr">{{ __('Открытие первых аптек в городе Самарканде') }}</div>
                        </div>
                    </div>
                    <div class="milestone__item element-animation">
                        <div class="milestone__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                        </div>
                        <div class="milestone__circle">2014</div>
                        <div class="milestone__text">
                            <div class="milestone__name">{{ __('Расширение до оптовой фармацевтической компании') }}</div>
                            <div class="milestone__descr">{{ __('Первые прямые поставки медикаментов из Европы, России и Индии') }}
                            </div>
                        </div>
                    </div>
                    <div class="milestone__item element-animation">
                        <div class="milestone__icon">
                            <svg width="30" height="30" viewBox="0 0 30 30">
                                <g transform="scale(0.03125 0.03125)">
                                    <path
                                        d="M0 1024h512v-1024h-512v1024zM320 128h128v128h-128v-128zM320 384h128v128h-128v-128zM320 640h128v128h-128v-128zM64 128h128v128h-128v-128zM64 384h128v128h-128v-128zM64 640h128v128h-128v-128zM576 320h448v64h-448zM576 1024h128v-256h192v256h128v-576h-448z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="milestone__circle">2017</div>
                        <div class="milestone__text">
                            <div class="milestone__name">{{ __('Увеличение товарооборота компании') }}</div>
                            <div class="milestone__descr">{{ __('Развитие оптовой торговли по всему Узбекистану. Первые поставки медицинского оборудования') }}</div>
                        </div>
                    </div>
                    <div class="milestone__item element-animation">
                        <div class="milestone__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path
                                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg>
                        </div>
                        <div class="milestone__circle">2022</div>
                        <div class="milestone__text">
                            <div class="milestone__name">{{ __('Расширение каталога') }}</div>
                            <div class="milestone__descr">{{ __('Расширение каталога медицинского оборудования благодаря прямым контактам с Германией, Южной Кореей, Китаем и другими странами.') }}
                                {{ __('Внедрение концепции оснащения медицинского учреждения «под ключ»') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="segments">
            <div class="segments__body container">
                <div class="segments__title title">
                    <h2>{{ __('Основные сегменты бизнеса') }}</h2>
                </div>
                <div class="segments__content">
                    <div class="segments__chart">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="segments__detail">
                        <div class="segments__item">
                            <div class="segments__circle">27%</div>
                            <div class="segments__text">
                                <div class="segments__name">
                                    <p>{{ __('Оптовая торговля медикаментами') }} </p>
                                </div>
                                <p>{{ __('Работа напрямую с узбекскими и зарубежными фармацевтическими заводами') }}</p>
                            </div>
                        </div>

                        <div class="segments__item">
                            <div class="segments__circle">23%</div>
                            <div class="segments__text">
                                <div class="segments__name">
                                    <p>{{ __('Оптовая торговля изделиями медицинского назначения и дезинфицирующими средствами') }}</p>
                                </div>
                                <p>{{ __('Официальный региональный дистрибьютор нескольких заводов-производителей') }}</p>
                            </div>
                        </div>
                        <div class="segments__item">
                            <div class="segments__circle">5%</div>
                            <div class="segments__text">
                                <div class="segments__name">
                                    <p>{{ __('Реализация реагентов, расходных материалов для лаборатории') }}</p>
                                </div>
                                <p>{{ __('Большой ассортимент реагентов Human, Mindray, Эколаб, расходных материалов МиниМед и других.') }}</p>
                            </div>
                        </div>
                        <div class="segments__item">
                            <div class="segments__circle">45%</div>
                            <div class="segments__text">
                                <div class="segments__name">
                                    <p>{{ __('Реализация медицинского оборудования') }}</p>
                                </div>
                                <p>{{ __('Наличие на складе диагностического, реанимационного, хирургического оборудований, с возможностью поставки в течение одного рабочего дня') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="expanding">
            <div class="expanding__body container">
                <div class="expanding__title title">
                    <h2>{{ __('Расширение бизнеса за пределы границ') }}</h2>
                </div>
                <div class="expanding__content">
                    <div class="expanding__item">
                        <p>{{ __('Глобальная экспансия 2025') }}</p>
                        <p>{{ __('Разработка стратегии ведения бизнеса за пределами Узбекистана, экспорт товаров в страны СНГ') }}</p>
                    </div>
                    <div class="expanding__item">
                        <p>{{ __('Решения для здравоохранения') }}</p>
                        <p>{{ __('Представление передовых разработок в сфере медицины на глобальном рынке для увеличения вклада в развитие здравоохранения') }}</p>
                    </div>
                    <div class="expanding__item">
                        <p>{{ __('Международное партнерство') }}</p>
                        <p>{{ __('Налаживание партнерства с международными дистрибьюторами и заводами-изготовителями для лучшего доступа к оборудованию премиум-класса') }}</p>
                    </div>
                    <div class="expanding__item"><img src="{{ asset('img/about/map.png') }}" alt="map">
                    </div>
                    <div class="expanding__item">
                        <p>{{ __('Трансграничный доступ') }}</p>
                        <p>{{ __('Ломая географические барьеры обеспечение обслуживания медицинского оборудования на экспертном уровне, для лучшего ухода за пациентами по всему миру.') }}</p>
                    </div>
                    <div class="expanding__item">
                        <p>{{ __('Мировые стандарты') }}</p>
                        <p>{{ __('Вклад своего опыта в развитие новых стандартов качества здравоохранения на глобальном уровне') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners">
            <div class="partners__body container">
                <div class="partners__slider swiper">
                    <div class="swiper-wrapper">
                        @foreach($partners as $partner)
                            <div class="partners__item swiper-slide">
                                <picture>
                                    <source srcset="{{ asset('storage/'. $partner->image) }}" type="image/webp">
                                    <img src="{{ asset('storage/'. $partner->image) }}" alt="partner">
                                </picture>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
