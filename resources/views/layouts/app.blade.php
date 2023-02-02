<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('meta_title', 'Libgram - Automated promotion system')</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="keywords"
          content="@yield('meta_keywords',  'libgram, cheat, promotion, promotion, smm, service, site, system, online, social networks, services, views, subscribers, likes, viewers, comments, advertising, top, trends')"/>
    <meta name="description"
          content="@yield('meta_description', 'Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices.')"/>
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" type="image/x-icon">
    <!-- OG Tags -->
    <meta property="og:title" content="@yield('meta_title', 'Libgram - Automated promotion system')">
    <meta property="og:description"
          content="@yield('meta_description', 'Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}"/>
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
@livewireStyles

<body>
<!-- Start of Header section
   ============================================= -->

<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-logo me-5" href="/">Libgram</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center me-auto mb-2 mb-lg-0">
                    @foreach($categories as $category)
                        @if ($category['parent'] !== null)
                            @continue
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $category['name'] }}
                                <i class="fa-solid fa-angle-down ms-2 small"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="d-block d-lg-flex">
                                    @php
                                        $subCategories = $categories->filter(function ($collection) use ($category) {
                                            return $collection['parent'] === $category['id'];
                                        })->values();
                                        $rows = (int) ceil($subCategories->count()/5);

                                        $columns = 12;
                                        if ($rows === 2) $columns = 6;
                                        if ($rows === 3) $columns = 4;
                                        $subCategoryIndex = 0;
                                    @endphp

                                    @for ($i=0;$i<$rows;$i++)
                                        <div class="col-12 col-lg-{{$columns}} @if ($i !== $rows-1) border-end @endif">
                                            @for($subCategoryIndex=$i*5; $subCategoryIndex<$i*5+5;$subCategoryIndex++)
                                                @if ($subCategories->get($subCategoryIndex)['name'] ?? null)
                                                    <li>
                                                        <a href="{{ route('subcategory', ['category'=>$category['slug'], 'subcategory'=>$subCategories->get($subCategoryIndex)['slug']]) }}"
                                                           class="dropdown-item text-truncate"
                                                           title="{{$subCategories->get($subCategoryIndex)['name']}}">
                                                            <i class="fa-regular {{$subCategories->get($subCategoryIndex)['attributes']['category_icon']['value'] ?? null}} me-2"></i>{{$subCategories->get($subCategoryIndex)['name']}}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endfor
                                        </div>
                                    @endfor
                                </div>
                            </ul>
                        </li>
                    @endforeach
                    <li class="nav-item dropdown has-mega-menu">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fs-20 line-height-1"></i>
                        </a>
                        <ul class="dropdown-menu mega-menu container mx-auto">
                            <div class="row d-block d-lg-flex">
                                @foreach($categories as $category)
                                    @if ($category['parent'] !== null)
                                        @continue
                                    @endif
                                    <div class="col-12 col-lg-3 border-end">
                                        <div class="fw-medium fs-16 mb-2 ps-3">{{ $category['name'] }}</div>
                                        @php
                                            $subCategories = $categories->filter(function ($collection) use ($category) {
                                                return $collection['parent'] === $category['id'];
                                            })->values();
                                        @endphp
                                        @for($i=0;$i<5;$i++)
                                            @if ($subCategories->get($i)['name'] ?? null)
                                                <li>
                                                    <a href="{{ route('subcategory', ['category'=>$category['slug'], 'subcategory'=>$subCategories->get($i)['slug']]) }}"
                                                       class="dropdown-item text-truncate"
                                                       title="{{$subCategories->get($i)['name']}}">
                                                        <i class="fa-regular {{$subCategories->get($i)['attributes']['category_icon']['value'] ?? null}} me-2"></i>{{$subCategories->get($i)['name']}}
                                                    </a>
                                                </li>
                                            @endif
                                        @endfor

                                    </div>
                                @endforeach
                            </div>
                        </ul>
                    </li>
                </ul>

                @if (Auth::user())
                    <div class="nav-item_user">
                        <a href="{{ route('orders') }}"
                           class="btn btn-outline d-block d-lg-inline text-start text-lg-center"><i
                                class="fa-regular fa-check-to-slot me-2"></i> My Orders</a>
                    </div>
                @else
                    <div class="nav-item_user">
                        <a href="{{ route('login') }}"
                           class="btn btn-outline d-block d-lg-inline text-start text-lg-center">Log in <i
                                class="fa-regular fa-right-to-bracket ms-2"></i></a>
                    </div>
                @endif


            </div>
        </div>
    </nav>
</header>
<!-- End of Customers section
     ============================================= -->

{{ $slot }}


<!-- Start of Footer section
   ============================================= -->

<footer class="footer">
    <div class="container text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <img src="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" alt="Libgram" width="174"
                     height="40">
            </div>
            <div class="col-lg-8 mt-4 mt-lg-0 ms-0 ma-lg-auto">
                <nav class="footer__nav">
                    <ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
                        <li class="mt-3 mt-sm-0 me-4"><a href="{{ route('pages', ['page'=>'terms']) }}" class="footer__nav_link">Terms of
                                Service</a></li>
                        <li class="mt-3 mt-sm-0 me-4"><a href="#" class="footer__nav_link">Tickets</a></li>
                        <li class="mt-3 mt-sm-0 me-4"><a href="{{ route('contact-us') }}" class="footer__nav_link">Contact Us</a>
                        </li>
                        <li class="mt-3 mt-sm-0 dropdown">
                            <a href="#" class="footer__nav_link" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Vite::asset('resources/assets/img/flags/us.svg')}}" alt="English"
                                     width="23" height="16">
                                <span class="ms-2">English</span>
                            </a>
                            <ul class="dropdown-menu my-3">
                                <li>
                                    <a class="dropdown-item active" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/us.svg')}}" alt="en"
                                             width="23" height="16">
                                        <span class="ms-2">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/fr.svg')}}" alt="French"
                                             width="23" height="16">
                                        <span class="ms-2">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/de.svg')}}" alt="Deutsch"
                                             width="23" height="16">
                                        <span class="ms-2">Deutsch</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <hr class="mt-5 mb-32px">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <span class="small">2022 All Rights Reserved</span>
            </div>
            <div
                class="col-lg-8 mt-4 mt-lg-0 ms-0 ms-lg-auto d-flex flex-wrap justify-content-center justify-content-lg-end">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/symantec.svg')}}"
                     alt="Symantec" width="98" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/applepay.svg')}}"
                     alt="Apple Pay" width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/visa.svg')}}" alt="Visa"
                     width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/master-card.svg')}}"
                     alt="Master Card" width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/amex.svg')}}" alt="Amex"
                     width="65" height="34">
                <img class="m-1 me-lg-0" src="{{ Vite::asset('resources/assets/img/payment/footer/ff.svg')}}" alt="FF"
                     width="60" height="34">
            </div>
        </div>
    </div>
</footer>

<!--div class="popup-coikies">
<div class="row justify-content-center text-center">
<div class="col col-lg-4 fs-20 fw-medium">
<p>
  We use cookies to analyze site performance and deliver personalized content.
  By clicking “Agree”, you consent <br> to our <a href="#!" class="link-active">Cookie Policy</a>. You may change your settings <br> at any time.
</p>
<div class="d-flex mx-5">
  <button class="btn btn-grey m-1 close">Decline</button>
  <button class="btn btn-primary m-1 submit ms-auto">Agree</button>
</div>
</div>
</div>
</div-->


<!-- End of Customers section
   ============================================= -->

@livewireScripts

</body>
</html>
