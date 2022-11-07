@section('meta_title', 'Libgram - Automated promotion system')
@section('meta_keywords', 'libgram, cheat, promotion, promotion, smm, service, site, system, online, social networks, services, views, subscribers, likes, viewers, comments, advertising, top, trends')
@section('meta_description', 'Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices.')

<x-app-layout>
    <main class="d-flex flex-column">

        <!-- Start of Hero section
           ============================================= -->
        <section class="section hero py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h1 mb-4">Automated <span class="d-block">promotion system</span></h1>
                        <p class="text-second fs-18 mb-32px">
                            Our service provides social media promotion marketing services <span
                                class="d-inline d-md-block">for bloggers, musicians and entrepreneurs. The service uses</span>
                            several large sources for advertising.
                        </p>
                        <a href="#!" class="btn btn-lg btn-primary">Get Started</a>
                    </div>
                    <div class="col-lg-6 ms-auto hero__blur d-none d-lg-block">
                        <img src="{{ Vite::asset('resources/assets/img/hero-image-1.png') }}" alt="Libgram - Automated promotion system"
                             class="img-fluid" width="636" height="600">
                    </div>
                </div>
                <div class="hero__dots d-none d-lg-flex">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span class="hero__cube hero__cube--right"></span>
                <span class="hero__cube hero__cube--left"></span>
            </div>
        </section>
        <!-- End of Hero section
           ============================================= -->

        <!-- Start of HowItWorks section
           ============================================= -->
        <section class="section howitworks">
            <div class="container">
                <div class="row mb-56px justify-content-center">
                    <div class="col-md-4 col-lg-5 me-auto">
                        <div class="comments__box">
                            <div class="comment__card comment__card--purple comment__card--animation">
                                <div class="comment__photo">
                                    <img class="comment__image" src="{{ Vite::asset('resources/assets/img/comment-image-1.jpg') }}" alt="Chack">
                                </div>
                                <p class="comment__text">
                                    Really love the simplicity of the interface and amazing customer support.
                                </p>
                                <div class="comment__rate">5</div>
                            </div>
                            <div
                                class="comment__card comment__card--orange comment__card--animation comment__card--animation_reverse">
                                <div class="comment__photo">
                                    <img class="comment__image" src="{{ Vite::asset('resources/assets/img/comment-image-2.jpg') }}" alt="Inna">
                                </div>
                                <p class="comment__text">
                                    Great service and like that you're given a trial before paying!
                                </p>
                                <div class="comment__rate">4.8</div>
                            </div>
                            <svg class="howitworks__line d-none d-lg-block" width="321" height="341"
                                 viewBox="0 0 321 341" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M320.07 8.98526C320.445 8.24646 320.15 7.34372 319.411 6.96892L307.372 0.861253C306.633 0.48646 305.73 0.781541 305.355 1.52033C304.98 2.25913 305.275 3.16188 306.014 3.53667L316.716 8.9657L311.287 19.6674C310.912 20.4062 311.207 21.3089 311.946 21.6837C312.685 22.0585 313.588 21.7634 313.962 21.0246L320.07 8.98526ZM163.697 58.9828L164.163 60.4086L163.697 58.9828ZM28.0755 219.238L29.5587 219.462L28.0755 219.238ZM8.7933 339.89C9.28512 340.557 10.2242 340.699 10.8909 340.207L21.7545 332.193C22.4212 331.701 22.5629 330.762 22.0711 330.095C21.5793 329.428 20.6402 329.287 19.9735 329.778L10.317 336.902L3.19299 327.246C2.70119 326.579 1.76207 326.437 1.09542 326.929C0.428795 327.421 0.287039 328.36 0.778859 329.027L8.7933 339.89ZM318.266 6.88086L163.231 57.5571L164.163 60.4086L319.198 9.73239L318.266 6.88086ZM26.5923 219.014L8.51718 338.776L11.4836 339.224L29.5587 219.462L26.5923 219.014ZM163.231 57.5571C90.8285 81.2233 37.9598 143.695 26.5923 219.014L29.5587 219.462C40.757 145.264 92.8385 83.7225 164.163 60.4086L163.231 57.5571Z"
                                    fill="url(#paint0_linear_93_1303)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_93_1303" x1="351.098" y1="211.882" x2="207.886"
                                                    y2="358.487" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8B84"/>
                                        <stop offset="1" stop-color="#8E68F8"/>
                                    </linearGradient>
                                </defs>
                            </svg>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="h2 mb-4">
                            Just a Few Steps <span class="d-block">to Popularity!</span>
                        </h2>
                        <p class="text-second fs-18 mb-32px">
                            People want to follow social media accounts with quality content.
                            <span class="d-block">But they often don't have the time or patience </span>
                            to judge an profile or page.
                        </p>
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-between bg-light-grey rounding p-4">
                            <img src="{{ Vite::asset('resources/assets/img/partners/trust.svg')}}" alt="trust" class="img-fluid" width="180"
                                 height="94">
                            <img src="{{ Vite::asset('resources/assets/img/partners/mens.svg')}}" alt="mens" width="124px" height="27px">
                            <img src="{{ Vite::asset('resources/assets/img/partners/weekly.svg')}}" alt="weekly" width="124px" height="27px">
                            <img src="{{ Vite::asset('resources/assets/img/partners/trends.svg')}}" alt="trends" width="124px" height="27px">
                        </div>
                    </div>
                </div>
                <div class="row" id="mobile-slider">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-purple-100 p-4 p-xl-5 h-100">
                            <div class="card__icon bg-purple-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/finger-icon.svg')}}" class="card__icon-img"
                                     alt="Pick a package" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Pick a package</div>
                            <p class="text-second mb-0">
                                Choose the Instagram likes, followers, <br> or views package that you're interested in.
                                Feel free to get in touch if you have <br> an inquiry about a bulk order.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-sky-100 p-4 p-xl-5 h-100">
                            <div class="card__icon bg-sky-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/text-icon.svg')}}" class="card__icon-img" alt="Fill the info"
                                     width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Fill the info</div>
                            <p class="text-second mb-0">
                                We will never ask you for sensitive details such as your password. All you have to do is
                                provide us with your username and leave the rest to us!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-powder-100 p-4 p-xl-5 h-100">
                            <div class="card__icon bg-powder-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/heart-icon.svg')}}" class="card__icon-img"
                                     alt="See the growth" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">See the growth</div>
                            <p class="text-second mb-0">
                                All orders start within a few minutes, <br> so you'll see growth in your account very
                                quickly. We've made the process super easy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of HowItWorks section
           ============================================= -->

        <!-- Start of Best Serive section
           ============================================= -->
        <section class="section best-service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="position-sticky mb-5" style="top: 100px;">
                            <h2 class="h2 mb-4">
                                The Best <span class="d-block">Service for Users</span>
                            </h2>
                            <p class="text-second fs-18 mb-32px">
                                Social media accounts without followers, likes, and views seem like very lonely places –
                                and they're unlikely to attract visitors who will come back again and again, and they
                                may not attract visitors at all.
                            </p>
                            <a href="#!" class="btn btn-lg btn-primary">Get Started</a>
                            <svg class="service__arrow d-none d-xl-block" width="289" height="90" viewBox="0 0 289 90"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M287.948 51.0743C288.738 51.3216 289.179 52.163 288.932 52.9537L284.902 65.8382C284.655 66.6289 283.813 67.0694 283.023 66.8221C282.232 66.5748 281.791 65.7334 282.039 64.9428L285.621 53.4898L274.168 49.9079C273.377 49.6606 272.936 48.8192 273.184 48.0286C273.431 47.2379 274.272 46.7974 275.063 47.0447L287.948 51.0743ZM262.555 65.5649L261.86 64.236L262.555 65.5649ZM24.427 25.74L23.3367 26.7703L24.427 25.74ZM0.500414 1.96348C0.523844 1.13538 1.21417 0.483082 2.04227 0.506527L15.5369 0.888586C16.365 0.912031 17.0172 1.60234 16.9938 2.43044C16.9703 3.25853 16.2801 3.91083 15.452 3.88738L3.45676 3.54778L3.11714 15.543C3.09371 16.3711 2.40339 17.0234 1.57529 16.9999C0.747198 16.9765 0.0949141 16.2862 0.118345 15.4581L0.500414 1.96348ZM288.196 53.8348L263.251 66.8938L261.86 64.236L286.804 51.177L288.196 53.8348ZM23.3367 26.7703L0.909547 3.03615L3.09008 0.975707L25.5173 24.7098L23.3367 26.7703ZM263.251 66.8938C183.316 108.742 85.3056 92.3502 23.3367 26.7703L25.5173 24.7098C86.5635 89.3134 183.115 105.461 261.86 64.236L263.251 66.8938Z"
                                    fill="url(#paint0_linear_102_2045)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_102_2045" x1="196.347" y1="-38.7536" x2="99.4317"
                                                    y2="-42.0632" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8B84"/>
                                        <stop offset="1" stop-color="#8E68F8"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-auto">
                        <div id="mobile-slider">
                            <div
                                class="card card__border p-4 p-xl-auto card__border-mint d-flex flex-column flex-md-row align-items-center mb-4">
                                <div class="card__body order-2 order-md-1" style="max-width: 376px;">
                                    <div class="card__title fs-20 mb-2">Quick Results</div>
                                    <p class="text-second mb-0">
                                        You won't have to wait for your likes, views,
                                        or follows. Twicsy begins work on your order immediately, and we promise
                                        delivery
                                        in 24 hours or less.
                                    </p>
                                </div>
                                <img src="{{ Vite::asset('resources/assets/img/qr.svg')}}" alt="Quick Results"
                                     class="img-fluid order-1 order-md-2 me-auto me-md-0 ms-auto" width="164"
                                     height="164">
                            </div>
                            <div
                                class="card card__border p-4 p-xl-auto card__border-purple d-flex flex-column flex-md-row align-items-center mb-4">
                                <div class="card__body order-2 order-md-1" style="max-width: 376px;">
                                    <div class="card__title fs-20 mb-2">Satisfaction Guarantee</div>
                                    <p class="text-second mb-0">
                                        Libergram wants you to feel comfortable and confident through the entire
                                        process. We offer
                                        <br>a complete refund on any order that didn't complete correctly.
                                    </p>
                                </div>
                                <img src="{{ Vite::asset('resources/assets/img/sg.svg')}}" alt="Satisfaction Guarantee"
                                     class="img-fluid order-1 order-md-2 me-auto me-md-0 ms-auto" width="164"
                                     height="164">
                            </div>
                            <div
                                class="card card__border p-4 p-xl-auto card__border-powder d-flex flex-column flex-md-row align-items-center mb-4">
                                <div class="card__body order-2 order-md-1" style="max-width: 376px;">
                                    <div class="card__title fs-20 mb-2">Experienced Support Staff</div>
                                    <p class="text-second mb-0">
                                        You won't have to wait for your likes, views,
                                        <br>or follows. Twicsy begins work on your order immediately, and we promise
                                        delivery
                                        in 24 hours or less.
                                    </p>
                                </div>
                                <img src="{{ Vite::asset('resources/assets/img/es.svg')}}" alt="Experienced Support Staff"
                                     class="img-fluid order-1 order-md-2 me-auto me-md-0 ms-auto" width="164"
                                     height="164">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Best Serive section
           ============================================= -->

        <!-- Start of Choose section
           ============================================= -->
        <section class="section section-choose section-blur">
            <div class="container">
                <div class="text-center">
                    <h2 class="h2 mb-3">
                        Choose the Way You Want to Grow: <span class="d-block">Real Views, Followers, Likes!</span>
                    </h2>
                    <p class="text-second fs-18 mb-6">
                        All social media marketing campaigns are different,
                        <span class="d-block">and that's why we give you a wide variety</span>
                        of options to choose from.
                    </p>
                </div>
                <div class="choose-slider">
                    <div class="card shadow-m">
                        <div class="h4 fs-32 text-gradient text-center mb-0">Instagram</div>
                        <ul class="list-unstyled py-3 my-4">
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-play ms-1"></i>
                                    </div>
                                    <span class="me-auto">IGTV</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <span class="me-auto">Followers</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <span class="me-auto">Likes</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <span class="me-auto">Views</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-rectangle-vertical-history"></i>
                                    </div>
                                    <span class="me-auto">Stories</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="btn btn-primary w-100">See more</a>
                        </div>
                    </div>
                    <div class="card shadow-m">
                        <div class="h4 fs-32 text-center mb-0">TikTok</div>
                        <ul class="list-unstyled py-3 my-4">
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-play ms-1"></i>
                                    </div>
                                    <span class="me-auto">IGTV</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <span class="me-auto">Followers</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <span class="me-auto">Likes</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <span class="me-auto">Views</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-rectangle-vertical-history"></i>
                                    </div>
                                    <span class="me-auto">Stories</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="btn btn-dark w-100">See more</a>
                        </div>
                    </div>
                    <div class="card shadow-m">
                        <div class="h4 fs-32 text-center mb-0" style="color: #A056FF">Twitch</div>
                        <ul class="list-unstyled py-3 my-4">
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-play ms-1"></i>
                                    </div>
                                    <span class="me-auto">IGTV</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <span class="me-auto">Followers</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <span class="me-auto">Likes</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <span class="me-auto">Views</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-rectangle-vertical-history"></i>
                                    </div>
                                    <span class="me-auto">Stories</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="btn btn-purple w-100">See more</a>
                        </div>
                    </div>
                    <div class="card shadow-m">
                        <div class="h4 fs-32 text-center mb-0" style="color: #1BBA18;">Spotify</div>
                        <ul class="list-unstyled py-3 my-4">
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-play ms-1"></i>
                                    </div>
                                    <span class="me-auto">IGTV</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <span class="me-auto">Followers</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <span class="me-auto">Likes</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <span class="me-auto">Views</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-rectangle-vertical-history"></i>
                                    </div>
                                    <span class="me-auto">Stories</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="btn btn-success w-100">See more</a>
                        </div>
                    </div>
                    <div class="card shadow-m">
                        <div class="h4 fs-32 text-center mb-0" style="color: #1BBA18;">Spotify</div>
                        <ul class="list-unstyled py-3 my-4">
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-play ms-1"></i>
                                    </div>
                                    <span class="me-auto">IGTV</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <span class="me-auto">Followers</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                    <span class="me-auto">Likes</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                    <span class="me-auto">Views</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="mb-3 pb-1">
                                <a href="#!" class="d-flex align-items-center">
                                    <div class="list__icon me-3">
                                        <i class="fa-regular fa-rectangle-vertical-history"></i>
                                    </div>
                                    <span class="me-auto">Stories</span>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#!" class="btn btn-success w-100">See more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Choose section
           ============================================= -->

        @include('includes.faq')

        @include('includes.customers')

    </main>

</x-app-layout>
