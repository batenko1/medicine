@extends('layout')

@section('content')
    <main>
        <section class="catalog">
            <div class="catalog__body container">
                <div class="catalog__title title">
                    <h1>{{ __('Каталог') }}</h1>
                </div>
                <div class="catalog__content">
                    <div class="sidebar-button" id="sidebar-button">
                        <span></span><span></span><span></span>
                    </div>
                    @include('blocks.sidebar')
                    <div class="catalog__main main-catalog">
                        <div class="main-catalog catalog-header">
                            <div class="main-catalog__body">
                                <div class="catalog-header__cards">
                                    @foreach($composerCategories as $composerCategory)
                                        <div  class="catalog-header__card">
                                            <a href="{{ route('category', $composerCategory->slug) }}" class="catalog-header__name"
                                            >{{ $composerCategory->getTranslatedAttribute('name') }}</a>
                                            <div class="catalog-header__add-links">
                                                @foreach($composerCategory->child as $child)
                                                    <a href="{{ route('subcategory', ['category' => $composerCategory->slug, 'subcategory' => $child->slug]) }}">
                                                        <span>➔</span> {{ $child->getTranslatedAttribute('name') }}</a>
                                                @endforeach
                                            </div>
                                            <div class="catalog-header__img">
                                                <picture>
                                                    <source srcset="{{ asset('storage/'. $composerCategory->image) }}" type="image/webp">
                                                    <img src="{{ asset('storage/'. $composerCategory->image) }}" alt="card">
                                                </picture>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="main-catalog__attention">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('blocks.catalog-footer')
    </main>
@endsection
