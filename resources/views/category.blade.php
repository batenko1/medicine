@extends('layout')

@section('seo')
    <title>{{ $category->getTranslatedAttribute('title')  }}</title>
    <meta name="description"
          content="{{ $category->getTranslatedAttribute('meta_description') }}">

@endsection

@section('content')
    <main>
        <section class="category">
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
                    <h1>{{ $category->getTranslatedAttribute('name') }} {{ __('оборудование') }}</h1>
                </div>
                <div class="catalog__content">
                    <div class="sidebar-button" id="sidebar-button">
                        <span></span><span></span><span></span>
                    </div>
                    @include('blocks.sidebar')
                    <div class="category__main main-category">
                        <div class="main-catalog catalog-header">
                            <div class="main-catalog__body">
                                <div class="catalog-header__cards">
                                    @foreach($category->child as $child)
                                        <div class="catalog-header__card">
                                            <a href="{{ route('subcategory', ['category' => $category->slug, 'subcategory' => $child->slug]) }}"
                                               class="catalog-header__name">{{ $child->getTranslatedAttribute('name') }}</a>
                                            <div class="catalog-header__img">
                                                <picture>
                                                    <source srcset="{{ asset('storage/'. $child->image) }}" type="image/webp">
                                                    <img src="{{ asset('storage/'. $child->image) }}" alt="card">
                                                </picture>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('blocks.catalog-footer')
    </main>
@endsection
