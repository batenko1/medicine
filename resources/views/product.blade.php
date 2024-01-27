@extends('layout')

@section('seo')
    <title>{{ $product->getTranslatedAttribute('meta_title')  }}</title>
    <meta name="description"
          content="{{ $product->getTranslatedAttribute('meta_description') }}">

@endsection

@section('content')
    <main>
        <section class="category product-page">
            <div class="category__body container">

                <ul class="breadcrumbs">
                    <li><a href="{{ route('catalog') }}">{{ __('Каталог') }}</a></li>
                    <svg width="8px" height="8px" viewBox="0 0 5 9" fill="blue">
                        <path
                            d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z">
                        </path>
                    </svg>
                    @foreach($breadcrumbs as $key => $breadcrumb)

                        @if($key)
                            <li><a href="{{ $key }}">{{ $breadcrumb }}</a></li>
                            <svg width="8px" height="8px" viewBox="0 0 5 9" fill="blue">
                                <path
                                    d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z">
                                </path>
                            </svg>
                        @else
                            <li>{{ $breadcrumb }}</li>
                        @endif

                    @endforeach
                </ul>


                <div class="category__title title">
                    <h1>{{ $product->getTranslatedAttribute('title') }}</h1>
                </div>
                <div class="catalog__content">
                    <div class="sidebar-button" id="sidebar-button">
                        <span></span><span></span><span></span>
                    </div>
                    @include('blocks.sidebar')
                    <div class="product">
                        <div class="product__gallery gallery">
                            <div id="lightgallery" class="lightgallery-product">
                                <a href="{{ asset('storage/'.$product->image) }}"
                                   class="gallery-item popular-product">
                                    <img alt="" src="{{ asset('storage/'.$product->image) }}"/>
                                </a>
                                @foreach(json_decode($product->images) as $image)
                                <a href="{{ asset('storage/'.$image) }}"
                                   class="gallery-item">
                                    <img alt="" src="{{ asset('storage/'.$image) }}"/>
                                </a>
                                @endforeach

                            </div>
                        </div>
                        <div class="product__name">
                            <h2>{{ $product->getTranslatedAttribute('title') }}</h2>
                            <div class="download-kp">
                                <button id="kp-button" class="download-kp-button">{{ __('Получить КП') }}</button>
                                <div class="kp-modal" id="modal">
                                    <div class="form-callback">
                                        <p class="form-callback__title">{{ __('Получить КП') }}</p>
                                        <form action="{{ route('save-application') }}" method="post" id="popupForm">
                                            @csrf

                                            <input type="hidden" name="product" value="{{ $product->getTranslatedAttribute('title') }}">
                                            <input type="text"  value="{{ $product->getTranslatedAttribute('title') }}" disabled>
                                            <input type="text" id="fullName" name="name" placeholder="{{ __('Имя...') }}"
                                                   required>

                                            <input type="tel" id="phoneNumber" name="phone"
                                                   placeholder="{{ __('Номер телефона...') }}" required>

                                            <input type="email" id="email" name="email" placeholder="{{ __('Email...') }}" required>

                                            <textarea id="message" name="message" rows="4" placeholder="{{ __('Сообщение...') }}"
                                                      required></textarea>

                                            <button type="submit">{{ __('Отправить') }}</button>
                                        </form>
                                        <div class="close-modal" id="closeModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor"
                                                 class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                <path fill-rule="evenodd"
                                                      d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__manufacturer">
                            <div class="product__company">{{ __('Производитель') }}:
                                <span>{{ $product->getTranslatedAttribute('manufacturer') }}</span></div>
                            <div class="product__country">{{ __('Страна') }}:
                                <span>{{ $product->getTranslatedAttribute('country') }}</span></div>
                        </div>
                        <div class="product__description">
                            {!! $product->getTranslatedAttribute('text') !!}
                        </div>
                        <div class="product__characteristics">
                            @if($product->attributes->count())
                                @foreach($product->attributes->whereNull('parent_id') as $attribute)
                                    <div class="characteristic characteristic-1">

                                            <div
                                                class="characteristic-title">{{ $attribute->getTranslatedAttribute('caption') }}</div>
                                            @foreach($attribute->child as $child)
                                                <div class="characteristic__item">
                                                    <div
                                                        class="characteristic__name">{{ $child->getTranslatedAttribute('title') }}</div>
                                                    <div
                                                        class="characteristic__value">{{ $child->getTranslatedAttribute('value') }}</div>
                                                </div>
                                            @endforeach

                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="characteristic__show-more-btn">
                            <button id="showMoreButton">
                                <span>{{ __('Развернуть характеристики') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('blocks.catalog-footer')
    </main>
@endsection
