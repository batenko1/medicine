@extends('layout')

@section('seo')
    <title>{{ $subcategory->getTranslatedAttribute('title')  }}</title>
    <meta name="description"
          content="{{ $subcategory->getTranslatedAttribute('meta_description') }}">

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
                    <h1>{{ $subcategory->getTranslatedAttribute('name') }}</h1>
                </div>
                <div class="catalog__content">
                    <div class="sidebar-button" id="sidebar-button">
                        <span></span><span></span><span></span>
                    </div>
                    @include('blocks.sidebar')
                    <div class="category__main main-category subcategory">
                        <div class="category-products">
                            @foreach($products as $product)
                                <a href="{{ route('product', ['id' => $product->id, 'slug' => $product->slug]) }}" class="products__item item-products">
                                    <div class="item-products__image">
                                        <img src="{{ asset('storage/'. $product->image) }}" alt="product">
                                    </div>
                                    <div class="item-products__info">
                                        <div class="item-products__name">
                                            <h4>{{ $product->getTranslatedAttribute('title') }}</h4>
                                        </div>
                                        <div class="item-products__description">
                                            <p>{{ $product->getTranslatedAttribute('short_description') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach




                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
        @include('blocks.catalog-footer')
    </main>
@endsection
