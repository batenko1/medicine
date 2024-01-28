<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?_v=20240126220502"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?_v=20240126220502">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#f7f7f7">
    <meta name="theme-color" content="#f7f7f7">

    @section('seo')
        <title>{{ isset($seo) && $seo ? $seo->getTranslatedAttribute('title') : '' }}</title>
        <meta name="description"
              content="{{ isset($seo) && $seo ? $seo->getTranslatedAttribute('meta_description') : '' }}">

    @endsection

    @yield('seo')
</head>

<body>
<div class="wrapper
 @if(in_array(Route::currentRouteName(), ['product', 'subcategory', 'catalog'])) wrapper-catalog @endif
     @if(in_array(Route::currentRouteName(), ['category'])) wrapper-category @endif"
>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-double-torus"></div>
            </div>
            <p>&nbsp;</p>
        </div>
    </div>
    <header class="header">
        <div class="top-header">
            <div class="top-header__body container">
                <div class="logo-text">
                    <a href="{{ route('home') }}">Sitora Pharm Plus</a>
                </div>
                <div class="top-header__info">
                    <div class="top-header__telephones">
                        <a href="tel:{{ setting('.phone') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            {{ setting('.phone') }}</a>
                        <a href="mailto:{{ setting('.email') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                 fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            {{ setting('.email') }}</a>
                    </div>

                    <div class="top-header__languages">
                        <ul class="languages-dropdown-menu">
                            <li>
                                <a href="{{ route('setlocale', 'ru') }}">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 9 6" width="900" height="600">
                                        <rect fill="#fff" width="9" height="3"/>
                                        <rect fill="#d52b1e" y="3" width="9" height="3"/>
                                        <rect fill="#0039a6" y="2" width="9" height="2"/>
                                    </svg>
                                    RU
                                </a>
                                <a href="{{ route('setlocale', 'en') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 30" width="1000"
                                         height="600">
                                        <clipPath id="t">
                                            <path d="M25,15h25v15zv15h-25zh-25v-15zv-15h25z"/>
                                        </clipPath>
                                        <path d="M0,0v30h50v-30z" fill="#012169"/>
                                        <path d="M0,0 50,30M50,0 0,30" stroke="#fff" stroke-width="6"/>
                                        <path d="M0,0 50,30M50,0 0,30" clip-path="url(#t)" stroke="#C8102E"
                                              stroke-width="4"/>
                                        <path d="M-1 11h22v-12h8v12h22v8h-22v12h-8v-12h-22z" fill="#C8102E"
                                              stroke="#FFF"
                                              stroke-width="2"/>
                                    </svg>
                                    EN</a>
                            </li>
                        </ul>
                        <p class="active-language">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewbox="0 0 16 16"
                                 fill="#333">
                                <g clip-path="url(#clip0_5671_444723)">
                                    <path
                                        d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM14.6667 8C14.6675 9.30647 14.282 10.584 13.5587 11.672L12.764 10.8767C12.7017 10.8142 12.6667 10.7296 12.6667 10.6413V10C12.6667 9.46957 12.456 8.96086 12.0809 8.58579C11.7058 8.21071 11.1971 8 10.6667 8H8.66667C8.48986 8 8.32029 7.92976 8.19527 7.80474C8.07024 7.67971 8 7.51014 8 7.33333V7C8 6.91159 8.03512 6.82681 8.09764 6.7643C8.16015 6.70179 8.24493 6.66667 8.33334 6.66667C8.77536 6.66667 9.19929 6.49107 9.51185 6.17851C9.82441 5.86595 10 5.44203 10 5V4.33333C10 4.24493 10.0351 4.16014 10.0976 4.09763C10.1601 4.03512 10.2449 4 10.3333 4H11.2527C11.6943 3.99874 12.1176 3.82339 12.4307 3.512L12.682 3.26067C13.3108 3.87938 13.8101 4.61709 14.1509 5.43078C14.4916 6.24447 14.667 7.11785 14.6667 8ZM1.366 8.642L3.47134 10.7473C3.65661 10.9338 3.87706 11.0816 4.1199 11.1822C4.36275 11.2828 4.62315 11.3342 4.886 11.3333H6.66667C6.84348 11.3333 7.01305 11.4036 7.13807 11.5286C7.2631 11.6536 7.33334 11.8232 7.33334 12V14.6327C5.80013 14.4762 4.36827 13.7941 3.28062 12.7022C2.19298 11.6103 1.51652 10.1758 1.366 8.642ZM8.66667 14.6327V12C8.66667 11.4696 8.45596 10.9609 8.08088 10.5858C7.70581 10.2107 7.1971 10 6.66667 10H4.886C4.79835 10.0001 4.71154 9.98285 4.63055 9.94933C4.54956 9.91582 4.47597 9.86666 4.414 9.80467L1.442 6.83267C1.63279 5.74813 2.08983 4.72793 2.77212 3.86359C3.45441 2.99924 4.34061 2.31781 5.3512 1.88041C6.36179 1.44301 7.46516 1.26334 8.56231 1.35752C9.65946 1.4517 10.7161 1.81678 11.6373 2.42L11.488 2.56933C11.4253 2.63122 11.3408 2.66615 11.2527 2.66667H10.3333C9.89131 2.66667 9.46739 2.84226 9.15483 3.15482C8.84227 3.46738 8.66667 3.89131 8.66667 4.33333V5C8.66667 5.08841 8.63155 5.17319 8.56904 5.2357C8.50653 5.29821 8.42174 5.33333 8.33334 5.33333C7.89131 5.33333 7.46739 5.50893 7.15483 5.82149C6.84227 6.13405 6.66667 6.55797 6.66667 7V7.33333C6.66667 7.86377 6.87738 8.37247 7.25246 8.74755C7.62753 9.12262 8.13624 9.33333 8.66667 9.33333H10.6667C10.8435 9.33333 11.0131 9.40357 11.1381 9.52859C11.2631 9.65362 11.3333 9.82319 11.3333 10V10.6413C11.3346 11.0829 11.5099 11.5062 11.8213 11.8193L12.7127 12.7107C11.627 13.8001 10.1971 14.4794 8.66667 14.6327Z"
                                        fill="#0061b5"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_5671_444723">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>{{ strtoupper(app()->getLocale()) }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewbox="0 0 12 13"
                                 fill="none">
                                <path d="M9.99707 4.60254L6.00443 8.59518L1.99707 4.58782" stroke="#cccccc"
                                      stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="main-header">
            <div class="main-header__body container">
                <div class="main-header__catalog catalog-header">
                    @if(!in_array(Route::currentRouteName(), ['catalog', 'category', 'subcategory', 'product']))
                    <div class="catalog-header__button">
                        <div class="catalog-header__icon"><span></span><span></span><span></span></div>
                        <div id="menuText">{{ __('Каталог') }}</div>
                    </div>
                    @endif
                    <div class="catalog-header__body">
                        <div class="catalog-header__body-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px"
                                 height="30px" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd"
                                      d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </div>
                        <div class="catalog-header__cards">
                            @foreach($composerCategories as $composerCategory)
                                <div class="catalog-header__card">
                                    <a href="{{ route('category', $composerCategory->slug) }}"
                                       class="catalog-header__name">{{ $composerCategory->getTranslatedAttribute('name') }}</a>
                                    <div class="catalog-header__img">
                                        <picture>
                                            <source srcset="{{ asset('storage/'. $composerCategory->image) }}" type="image/webp">
                                            <img
                                                src="{{ asset('storage/'. $composerCategory->image) }}" alt="card">
                                        </picture>
                                    </div>
                                </div>
                            @endforeach


                            <div class="catalog-header__card">
                                <a href="{{ route('catalog') }}" class="catalog-header__name">{{ __('Все категории') }}</a>
                            </div>
                        </div>

                        <p class="catalog-header__title">{{ __('Каталог') }}</p>


                        <div class="catalog-header__logo">
                            <a href="{{ route('home') }}" title="Главная">
                                <picture>
                                    <source srcset="{{ asset('img/header/logo.webp') }}" type="image/webp">
                                    <img src="{{ asset('img/header/logo.png') }}"
                                         alt="logo">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="top-header__menu menu">
                    <div class="menu__icon">
                        <span></span>
                    </div>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li><a href="{{ route('home') }}" class="menu__link active">{{ __('Главная') }}</a></li>
                            <li><a href="{{ route('about') }}" class="menu__link ">{{ __('О нас') }}</a></li>
                            <li><a href="{{ route('contacts') }}" class="menu__link ">{{ __('Контакты') }}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="footer__body container">
            <div class="footer__menu menu-footer">
                <ul class="menu-footer__list">
                    <li><a href="{{ route('home') }}" class="menu-footer__link">{{ __('Главная') }}</a></li>
                    <li><a href="{{ route('catalog') }}" class="menu-footer__link">{{ __('Каталог') }}</a></li>
                    <li><a href="{{ route('about') }}" class="menu-footer__link">{{ __('О нас') }}</a></li>
                    <li><a href="{{ route('contacts') }}" class="menu-footer__link">{{ __('Контакты') }}</a></li>
                    <li><a href="" class="menu-footer__link">{{ __('Политика') }}</a></li>
                </ul>
            </div>
            <div class="footer__links">
                <div class="footer__telephone">
                    <a href="tel:{{ setting('.phone') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        {{ setting('.phone') }}</a>
                </div>
                <div class="footer__mail">
                    <a href="mailto:{{ setting('.email') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        {{ setting('.email') }}</a>
                </div>
                <div class="footer__socials">
                    <a href="{{ setting('.youtube') }}">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"/>
                            <path
                                d="M23.3764 11.3366C22.7988 10.65 21.7325 10.37 19.6961 10.37H12.3038C10.2207 10.37 9.13636 10.6681 8.56098 11.3991C8 12.1117 8 13.1618 8 14.6151V17.3851C8 20.2007 8.6656 21.6302 12.3038 21.6302H19.6961C21.4621 21.6302 22.4407 21.3831 23.0738 20.7772C23.723 20.1559 24 19.1414 24 17.3851V14.6151C24 13.0825 23.9566 12.0262 23.3764 11.3366ZM18.2721 16.3825L14.9153 18.1369C14.8402 18.1761 14.7581 18.1956 14.6762 18.1956C14.5834 18.1956 14.4908 18.1706 14.4088 18.121C14.2543 18.0274 14.1601 17.86 14.1601 17.6795V14.182C14.1601 14.0017 14.2541 13.8345 14.4082 13.7409C14.5624 13.6473 14.7541 13.6409 14.9141 13.724L18.2709 15.467C18.4417 15.5557 18.5489 15.732 18.5492 15.9244C18.5494 16.1169 18.4426 16.2935 18.2721 16.3825Z"
                                fill="white"/>
                        </svg>
                    </a>
                    <a href="{{ setting('.instagram') }}">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"/>
                            <path
                                d="M12.9831 9.771C10.9848 9.771 9.36426 11.3915 9.36426 13.3899V19.1801C9.36426 21.1784 10.9848 22.799 12.9831 22.799H18.7734C20.7717 22.799 22.3922 21.1784 22.3922 19.1801V13.3899C22.3922 11.3915 20.7717 9.771 18.7734 9.771H12.9831ZM20.2209 11.2186C20.6204 11.2186 20.9447 11.5428 20.9447 11.9423C20.9447 12.3419 20.6204 12.6661 20.2209 12.6661C19.8214 12.6661 19.4971 12.3419 19.4971 11.9423C19.4971 11.5428 19.8214 11.2186 20.2209 11.2186ZM15.8783 12.6661C17.8766 12.6661 19.4971 14.2866 19.4971 16.285C19.4971 18.2833 17.8766 19.9039 15.8783 19.9039C13.8799 19.9039 12.2594 18.2833 12.2594 16.285C12.2594 14.2866 13.8799 12.6661 15.8783 12.6661ZM15.8783 14.1137C15.3024 14.1137 14.7501 14.3424 14.3429 14.7496C13.9357 15.1568 13.7069 15.7091 13.7069 16.285C13.7069 16.8609 13.9357 17.4131 14.3429 17.8204C14.7501 18.2276 15.3024 18.4563 15.8783 18.4563C16.4541 18.4563 17.0064 18.2276 17.4136 17.8204C17.8208 17.4131 18.0496 16.8609 18.0496 16.285C18.0496 15.7091 17.8208 15.1568 17.4136 14.7496C17.0064 14.3424 16.4541 14.1137 15.8783 14.1137Z"
                                fill="white"/>
                        </svg>
                    </a>
                    <a href="{{ setting('.facebook') }}">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"/>
                            <path
                                d="M19.135 11.9335L17.9542 11.9341C17.0285 11.9341 16.8493 12.391 16.8493 13.0616V14.5402H19.0571L19.0564 16.8561H16.8493V22.799H14.5464V16.8561H12.6211V14.5402H14.5464V12.8324C14.5464 10.8503 15.7121 9.771 17.4145 9.771L19.1351 9.77384L19.135 11.9335Z"
                                fill="currentColor"/>
                        </svg>
                    </a>
                    <a href="{{ setting('.vk') }}">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M22.2417 17.8756C22.2417 17.8756 23.5353 19.1792 23.8553 19.7824C23.8615 19.7911 23.8664 19.8008 23.8697 19.811C24.0001 20.0338 24.0321 20.2085 23.9681 20.3375C23.8601 20.5506 23.4945 20.6575 23.3705 20.6665H21.0841C20.9249 20.6665 20.5937 20.624 20.1905 20.34C19.8825 20.1204 19.5761 19.7588 19.2793 19.4053C18.8361 18.8804 18.4529 18.425 18.0649 18.425C18.0159 18.4249 17.9672 18.4331 17.9209 18.4495C17.6273 18.5441 17.2545 18.9711 17.2545 20.1081C17.2545 20.464 16.9793 20.6665 16.7865 20.6665H15.7393C15.3825 20.6665 13.5249 20.5391 11.8777 18.767C9.85927 16.5973 8.04647 12.2449 8.02887 12.2065C7.91607 11.9249 8.15287 11.7715 8.40887 11.7715H10.7177C11.0273 11.7715 11.1281 11.9625 11.1985 12.1339C11.2801 12.3306 11.5825 13.1175 12.0785 14.0015C12.8817 15.4398 13.3753 16.0251 13.7697 16.0251C13.8438 16.0253 13.9166 16.0056 13.9809 15.968C14.4961 15.679 14.4001 13.8016 14.3761 13.4146C14.3761 13.3395 14.3753 12.5763 14.1113 12.2074C13.9225 11.9429 13.6009 11.84 13.4065 11.8025C13.4585 11.7258 13.5689 11.6082 13.7105 11.5388C14.0633 11.3593 14.7009 11.3331 15.3337 11.3331H15.6849C16.3713 11.3429 16.5489 11.3878 16.7985 11.4523C17.3009 11.5747 17.3105 11.907 17.2665 13.0383C17.2537 13.3616 17.2401 13.7256 17.2401 14.1542C17.2401 14.2456 17.2361 14.3476 17.2361 14.4513C17.2209 15.0317 17.2009 15.6855 17.6025 15.9541C17.6546 15.9872 17.7147 16.0047 17.7761 16.0047C17.9153 16.0047 18.3321 16.0047 19.4625 14.0252C19.9585 13.151 20.3425 12.12 20.3689 12.0425C20.3913 11.9992 20.4585 11.8776 20.5401 11.8286C20.5981 11.7971 20.6632 11.7814 20.7289 11.7829H23.4449C23.7409 11.7829 23.9417 11.8286 23.9809 11.9429C24.0465 12.1282 23.9681 12.6939 22.7281 14.4048C22.5193 14.6897 22.3361 14.9362 22.1753 15.1517C21.0513 16.6569 21.0513 16.7328 22.2417 17.8756Z"
                                  fill="currentColor"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__body container">
                <p>{{ date('Y') }} © ООО "SITORA PHARM PLUS". {{ __('Все права защищены') }}.</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js?_v=20240126220502"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
