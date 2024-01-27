@extends('layout')

@section('seo')
    <title>{{ $article->getTranslatedAttribute('meta_title')  }}</title>
    <meta name="description"
          content="{{ $article->getTranslatedAttribute('meta_description') }}">

@endsection

@section('content')
    <main>
        <div class="news">
            <div class="news__body container">
                <div class="news__title title">
                    <h2>{{ $article->getTranslatedAttribute('name') }}</h2>
                </div>
                <div class="news__items">
                    <div class="news__item item-news" style="max-width: 700px;margin-inline: auto;">
                        <div class="item-news__image">
                            <img src="{{ asset('storage/'. $article->image) }}" alt="">
                        </div>
                        <div class="item-news__info">
                            <div class="item-news__title">
                                <a href="" target="_blank">{{ $article->getTranslatedAttribute('name') }}
                                </a>
                            </div>
                            <div class="item-news__text">
                                {!! $article->getTranslatedAttribute('text') !!}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
