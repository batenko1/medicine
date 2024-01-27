@extends('layout')

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
                    <li><a href="">Прочее</a></li>
                    <svg width="8px" height="8px" viewBox="0 0 5 9" fill="blue">
                        <path
                            d="M0.419,9.000 L0.003,8.606 L4.164,4.500 L0.003,0.394 L0.419,0.000 L4.997,4.500 L0.419,9.000 Z">
                        </path>
                    </svg>
                    <li>{{ __('Прочее') }}</li>
                </ul>


                <div class="category__title title">
                    <h1>{{ __('Прайс листы') }}</h1>
                </div>
                <div class="catalog__content">
                    <div class="sidebar-button" id="sidebar-button">
                        <span></span><span></span><span></span>
                    </div>
                    @include('blocks.sidebar')
                    <div class="prices">
                        <div class="prices__items">
                            @foreach($listPrices as $listPrice)
                                <div class="prices__item">
                                    <div class="prices__name">
                                        <h2>{{ $listPrice->getTranslatedAttribute('name') }}</h2>
                                    </div>
                                    <div class="prices__link">
                                        <a download="{{ json_decode($listPrice->file)[0]->download_link }}"
                                           href="{{ json_decode($listPrice->file)[0]->download_link }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                                                <path
                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                            </svg>{{ __('Скачать прайс') }}</a>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('blocks.catalog-footer')
    </main>
@endsection
