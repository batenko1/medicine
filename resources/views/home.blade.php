@extends('layout')

@section('content')
    <main>
        <section class="home">
            <div class="home__body container">
                <div class="home__text">
                    <div class="home__title">
                        <p class="element-animation">{{ __('ДОСТУПНОСТЬ И ЭКОНОМИЧНОСТЬ В МЕНЯЮЩЕМСЯ МИРЕ.') }}

                        </p>
                        <p class="element-animation">{{ __('ИГРАЮТ ЛИ РОЛЬ НИЗКИЕ ЦЕНЫ НА МЕДИЦИНСКОЕ ОБОРУДОВАНИЕ?') }}</p>

                        <p class="element-animation">{{ __('МЫ ГОТОВЫ СДЕЛАТЬ ДОСТУПНОЙ ДЛЯ ВСЕХ МЕДИЦИНСКУЮ ТЕХНИКУ ПРЕМИУМ-КЛАССА ОТ ВЕДУЩИХ МИРОВЫХ БРЕНДОВ') }}</p>
                    </div>
                    <div class="home__subtitle">
                        <h1 class="element-animation">Sitora Pharm Plus</h1>
                    </div>
                    <div class="home__button">
                        <a href="">{{ __('Подробнее') }}</a>
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
        <section class="mission">
            <div class="mission__page container">
                <div class="mission__title title">
                    <h2>{{ __('Наша миссия') }}</h2>
                </div>
                <div class="mission__content">
                    <div class="mission__text">
                        <div class="mission__item">
                            <picture>
                                <source srcset="{{ asset('img/home/icons/icon-img-1.webp') }}" type="image/webp"><img
                                    src="{{ asset('img/home/icons/icon-img-1.png') }}" alt="icon">
                            </picture>
                            <p>{{ __('Связать лучшие мировые бренды медицинской сферы и здравоохранение Узбекистана') }}</p>
                        </div>
                        <div class="mission__item">
                            <picture>
                                <source srcset="{{ asset('img/home/icons/icon-img-2.webp') }}" type="image/webp"><img
                                    src="{{ asset('img/home/icons/icon-img-2.webp') }}" alt="icon">
                            </picture>
                            <p>{{ __('Внедрить экологичную медицинскую практику для увеличения вклада в зеленое будущее') }}</p>
                        </div>

                        <div class="mission__item">
                            <picture>
                                <source srcset="{{ asset('img/home/icons/icon-img-3.webp') }}" type="image/webp"><img
                                    src="{{ asset('img/home/icons/icon-img-3.webp') }}" alt="icon">
                            </picture>
                            <p>{{ __('Обеспечить прозрачность в работе с клиентами и соответствовать высоким стандартам качества здравоохранения') }}</p>
                        </div>

                        <div class="mission__item">
                            <picture>
                                <source srcset="{{ __('img/home/icons/icon-img-4.webp') }}" type="image/webp"><img
                                    src="{{ asset('img/home/icons/icon-img-4.webp') }}" alt="icon">
                            </picture>
                            <p>{{ __('Активно поддерживать обратную связь с клиентами с целью актуального и эффективного внедрения медицинских инноваций') }}</p>
                        </div>

                        <div class="mission__item">
                            <picture>
                                <source srcset="{{ asset('img/home/icons/icon-img-5.webp') }}" type="image/webp"><img
                                    src="{{ asset('img/home/icons/icon-img-5.webp') }}" alt="icon">
                            </picture>
                            <p>{{ __('Быть приверженным к деятельности по развитию превентивной медицины и повышению квалификации специалистов') }}</p>
                        </div>
                    </div>
                    <div class="misson__img">
                        <picture>
                            <source srcset="{{ asset('img/home/bg2.webp') }}" type="image/webp"><img src="{{ asset('img/home/bg2.png') }}" alt="bg">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="products">
            <div class="products__body container">
                <div class="products__title title">
                    <h2>{{ __('Наши товары') }}</h2>

                    <div class="products__link">
                        <a href="{{ route('catalog') }}">{{ __('перейти в каталог ➔') }}</a>
                    </div>
                </div>
                <div class="products__slider">
                    <div class="products__swiper swiper">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <a href="{{ route('product', ['id' => $product->id, 'slug' => $product->slug]) }}"
                                   class="products__item item-products swiper-slide @if($product->type_product == 'popular') popular-product @endif
                                   @if($product->type_product == 'new') new-product @endif
                                   ">
                                    <div class="item-products__image">
{{--                                        <img src="{{ asset('storage/'. $product->image) }}" alt="product">--}}
                                        <img src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="product">
                                    </div>
                                    <div class="item-products__info">
                                        <div class="item-products__name">
                                            <h4>{{ $product->getTranslatedAttribute('title') }}</h4>
                                        </div>
                                        <div class="item-products__description">
                                            <p>{{ $product->getTranslatedAttribute('short_text') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>

                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <div class="home-catalog">
            <div class="home-catalog__body container">
                <div class="catalog-home__body">
                    <div class="catalog-header__cards">
                        @foreach($composerCategories as $composerCategory)
                            <div  class="catalog-header__card">
                                <a href="{{ route('category', $composerCategory->slug) }}"
                                   class="catalog-header__name">{{ $composerCategory->getTranslatedAttribute('name') }}</a>
                                <div class="catalog-header__add-links">
                                    @foreach($composerCategory->child as $child)
                                        <a href="{{ route('subcategory', ['category' => $composerCategory->slug, 'subcategory' => $child->slug]) }}">
                                            <span>➔</span> {{ $child->getTranslatedAttribute('name') }}</a>
                                    @endforeach

                                    <a href="{{ route('category', $composerCategory->slug) }}"><span></span> {{ __('Все категории ➔') }}</a>
                                </div>
                                <div class="catalog-header__img">
                                    <picture>
                                        <source srcset="{{ asset('storage/'. $composerCategory->image) }}" type="image/webp"><img
                                            src="{{ asset('storage/'. $composerCategory->image) }}" alt="card">
                                    </picture>
                                </div>
                            </div>
                        @endforeach


                        <div class="catalog-header__card catalog-header__card-empty">
                            <a href="" class="catalog-header__name">{{ __('Перейти в каталог ➔') }}</a>
                        </div>
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
        <div class="map-and-form">
            <div class="map-and-form__body container">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.630015267647!2d66.95876127510583!3d39.635533702816346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1fb65b9ad9ff%3A0x30d201e1b5537662!2sSITORA%20FARM%20PLUS%20LLC!5e0!3m2!1sru!2s!4v1705919164049!5m2!1sru!2s"
                        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="form-callback">
                    <h4>{{ __('У вас есть вопросы?') }}</h4>
                    <p>{{ __('Оставьте заявку и мы свяжемся с вами в ближайшее время') }}</p>
                    <form action="{{ route('save-application') }}" method="post">
                        @csrf
                        <input type="text" id="fullName" name="name" placeholder="{{ __('Имя...') }}" required>

                        <input type="tel" id="phoneNumber" name="phone" placeholder="{{ __('Номер телефона...') }}" required>

                        <input type="email" id="email" name="email" placeholder="{{ __('Email...') }}" required>

                        <textarea id="message" name="message" rows="4" placeholder="{{ __('Сообщение...') }}" required></textarea>

                        <button type="submit">{{ __('Отправить') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news__body container">
                <div class="news__title title">
                    <h2>{{ __('Новости') }}</h2>
                </div>
                <div class="news__items">
                    @foreach($articles as $article)
                        <div class="news__item item-news">
                            <div class="item-news__image">
                                <picture>
                                    <source srcset="{{ asset('storage/'. $article->image) }}" type="image/webp"><img
                                        src="{{ asset('storage/'. $article->image) }}" alt="">
                                </picture>
                            </div>
                            <div class="item-news__info">
                                <div class="item-news__title">
                                    <a href="{{ route('one-news', ['id' => $article->id, 'slug' => $article->slug]) }}" target="_blank"
                                    >{{ $article->getTranslatedAttribute('name') }}
                                    </a>
                                </div>
                                <div class="item-news__text">
                                    <p>{{ \Str::limit(strip_tags($article->text), 255, '...') }}</p>
                                </div>
                            </div>
                            <div class="item-news__btn">
                                <div class="item-news__date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path
                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path
                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <span>{{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y') }}</span>
                                </div>
                                <div class="item-news__link">
                                    <a href="{{ route('one-news', ['id' => $article->id, 'slug' => $article->slug]) }}">Читать</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="news__link">
                    <a href="{{ route('news') }}">{{ __('Все новости ➔') }}</a>
                </div>
            </div>
        </div>
    </main>
@endsection
