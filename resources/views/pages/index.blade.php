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

        <!-- Start of FAQ section
           ============================================= -->
        <section class="section section-faq">
            <div class="container">
                <div class="d-block d-lg-flex flex-wrap align-items-center mb-56px">
                    <h2 class="h2 mb-3 me-auto">
                        Frequently <span class="d-block">Asked Questions  👋</span>
                    </h2>
                    <a href="#!" class="btn btn-lg btn-grey mt-4 mt-lg-0">Knowledge base</a>
                </div>
                <div class="row accordion" id="accordionFaq">
                    <div class="col-lg-6">
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                                I did not receive my order, what do I do now?
                            </button>
                            <div id="collapse01" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                Why are my followers dropping?
                            </button>
                            <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                I no longer want the followers I purchased, can they be removed?
                            </button>
                            <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                How do I stop follower replenishment?
                            </button>
                            <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                How often does replenishment occur?
                            </button>
                            <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                I did not receive my order, what do I do now?
                            </button>
                            <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                How many followers can I buy?
                            </button>
                            <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-top">
                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                How many likes can I buy?
                            </button>
                            <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-panel d-flex flex-wrap align-items-center">
                    <div class="support-panel__body">
                        <h5 class="text-white mb-2">Didn't find answers to your questions?</h5>
                        <p class="fs-18 text-white opacity-75 m-0">Contact our support team</p>
                    </div>
                    <a href="#!" class="btn btn-lg bg-white text-dark ms-0 ms-lg-auto mt-4 mt-lg-0">Contact us</a>
                </div>
            </div>
        </section>
        <!-- End of FAQ section
           ============================================= -->

        <!-- Start of Customers section
           ============================================= -->
        <section class="section section-customers bg-grey-200">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center mb-56px">
                    <h2 class="h2 mb-3">
                        Here’s what <span class="d-block">our customers say:</span>
                    </h2>
                    <a href="#!" class="ms-0 ms-lg-auto mt-4 mt-lg-0">
                        <img src="{{ Vite::asset('resources/assets/img/trust.svg')}}" alt="trust" width="180" height="94">
                    </a>
                </div>
                <div class="customers-slider">
                    <!--Review Item-->
                    <div class="card shadow-m">
                        <svg class="mb-32px" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 12.3438C0 5.89844 5.17578 0.625 11.7188 0.625H12.5C14.1602 0.625 15.625 2.08984 15.625 3.75C15.625 5.50781 14.1602 6.875 12.5 6.875H11.7188C8.69141 6.875 6.25 9.41406 6.25 12.3438V13.125H12.5C15.918 13.125 18.75 15.957 18.75 19.375V25.625C18.75 29.1406 15.918 31.875 12.5 31.875H6.25C2.73438 31.875 0 29.1406 0 25.625V22.5V19.375V12.3438ZM25 12.3438C25 5.89844 30.1758 0.625 36.7188 0.625H37.5C39.1602 0.625 40.625 2.08984 40.625 3.75C40.625 5.50781 39.1602 6.875 37.5 6.875H36.7188C33.6914 6.875 31.25 9.41406 31.25 12.3438V13.125H37.5C40.918 13.125 43.75 15.957 43.75 19.375V25.625C43.75 29.1406 40.918 31.875 37.5 31.875H31.25C27.7344 31.875 25 29.1406 25 25.625V22.5V19.375V12.3438Z"
                                fill="#FF645B"/>
                        </svg>
                        <p class="text-second mb-32px">
                            I love Instagram, great platform to share photos, videos, etc., can't live a day without it
                            🙂 I guess I'm not the only one crazy about this
                            social network. It wasn't easy to attract followers, so I decided to try this service. Thank
                            you very much, libergram, for the stunning
                            result, number of my subscribers has increased significantly.
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fw-medium">Aspen Korsgaard</span>
                            <svg class="ms-auto" width="122" height="17" viewBox="0 0 122 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.875 0.5625C9.71875 0.21875 9.375 0 9 0C8.59375 0 8.25 0.21875 8.09375 0.5625L6.09375 4.71875L1.59375 5.375C1.21875 5.4375 0.90625 5.6875 0.78125 6.0625C0.6875 6.40625 0.78125 6.8125 1.03125 7.0625L4.28125 10.2812L3.53125 14.8438C3.46875 15.2188 3.625 15.5938 3.9375 15.8125C4.25 16.0625 4.65625 16.0625 4.96875 15.9062L9 13.75L13 15.9062C13.3438 16.0625 13.75 16.0625 14.0625 15.8125C14.375 15.5938 14.5312 15.2188 14.4688 14.8438L13.6875 10.2812L16.9375 7.0625C17.2188 6.8125 17.3125 6.40625 17.1875 6.0625C17.0625 5.6875 16.75 5.4375 16.375 5.375L11.9062 4.71875L9.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M35.875 0.5625C35.7188 0.21875 35.375 0 35 0C34.5938 0 34.25 0.21875 34.0938 0.5625L32.0938 4.71875L27.5938 5.375C27.2188 5.4375 26.9062 5.6875 26.7812 6.0625C26.6875 6.40625 26.7812 6.8125 27.0312 7.0625L30.2812 10.2812L29.5312 14.8438C29.4688 15.2188 29.625 15.5938 29.9375 15.8125C30.25 16.0625 30.6562 16.0625 30.9688 15.9062L35 13.75L39 15.9062C39.3438 16.0625 39.75 16.0625 40.0625 15.8125C40.375 15.5938 40.5312 15.2188 40.4688 14.8438L39.6875 10.2812L42.9375 7.0625C43.2188 6.8125 43.3125 6.40625 43.1875 6.0625C43.0625 5.6875 42.75 5.4375 42.375 5.375L37.9062 4.71875L35.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M61.875 0.5625C61.7188 0.21875 61.375 0 61 0C60.5938 0 60.25 0.21875 60.0938 0.5625L58.0938 4.71875L53.5938 5.375C53.2188 5.4375 52.9062 5.6875 52.7812 6.0625C52.6875 6.40625 52.7812 6.8125 53.0312 7.0625L56.2812 10.2812L55.5312 14.8438C55.4688 15.2188 55.625 15.5938 55.9375 15.8125C56.25 16.0625 56.6562 16.0625 56.9688 15.9062L61 13.75L65 15.9062C65.3438 16.0625 65.75 16.0625 66.0625 15.8125C66.375 15.5938 66.5312 15.2188 66.4688 14.8438L65.6875 10.2812L68.9375 7.0625C69.2188 6.8125 69.3125 6.40625 69.1875 6.0625C69.0625 5.6875 68.75 5.4375 68.375 5.375L63.9062 4.71875L61.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M87.875 0.5625C87.7188 0.21875 87.375 0 87 0C86.5938 0 86.25 0.21875 86.0938 0.5625L84.0938 4.71875L79.5938 5.375C79.2188 5.4375 78.9062 5.6875 78.7812 6.0625C78.6875 6.40625 78.7812 6.8125 79.0312 7.0625L82.2812 10.2812L81.5312 14.8438C81.4688 15.2188 81.625 15.5938 81.9375 15.8125C82.25 16.0625 82.6562 16.0625 82.9688 15.9062L87 13.75L91 15.9062C91.3438 16.0625 91.75 16.0625 92.0625 15.8125C92.375 15.5938 92.5312 15.2188 92.4688 14.8438L91.6875 10.2812L94.9375 7.0625C95.2188 6.8125 95.3125 6.40625 95.1875 6.0625C95.0625 5.6875 94.75 5.4375 94.375 5.375L89.9062 4.71875L87.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M113.875 0.5625C113.719 0.21875 113.375 0 113 0C112.594 0 112.25 0.21875 112.094 0.5625L110.094 4.71875L105.594 5.375C105.219 5.4375 104.906 5.6875 104.781 6.0625C104.688 6.40625 104.781 6.8125 105.031 7.0625L108.281 10.2812L107.531 14.8438C107.469 15.2188 107.625 15.5938 107.938 15.8125C108.25 16.0625 108.656 16.0625 108.969 15.9062L113 13.75L117 15.9062C117.344 16.0625 117.75 16.0625 118.062 15.8125C118.375 15.5938 118.531 15.2188 118.469 14.8438L117.688 10.2812L120.938 7.0625C121.219 6.8125 121.312 6.40625 121.188 6.0625C121.062 5.6875 120.75 5.4375 120.375 5.375L115.906 4.71875L113.875 0.5625Z"
                                    fill="#FFBD5B"/>
                            </svg>
                        </div>
                    </div>
                    <!--End Review Item-->
                    <!--Review Item-->
                    <div class="card shadow-m">
                        <svg class="mb-32px" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 12.3438C0 5.89844 5.17578 0.625 11.7188 0.625H12.5C14.1602 0.625 15.625 2.08984 15.625 3.75C15.625 5.50781 14.1602 6.875 12.5 6.875H11.7188C8.69141 6.875 6.25 9.41406 6.25 12.3438V13.125H12.5C15.918 13.125 18.75 15.957 18.75 19.375V25.625C18.75 29.1406 15.918 31.875 12.5 31.875H6.25C2.73438 31.875 0 29.1406 0 25.625V22.5V19.375V12.3438ZM25 12.3438C25 5.89844 30.1758 0.625 36.7188 0.625H37.5C39.1602 0.625 40.625 2.08984 40.625 3.75C40.625 5.50781 39.1602 6.875 37.5 6.875H36.7188C33.6914 6.875 31.25 9.41406 31.25 12.3438V13.125H37.5C40.918 13.125 43.75 15.957 43.75 19.375V25.625C43.75 29.1406 40.918 31.875 37.5 31.875H31.25C27.7344 31.875 25 29.1406 25 25.625V22.5V19.375V12.3438Z"
                                fill="#FF645B"/>
                        </svg>
                        <p class="text-second mb-32px">
                            This service is the best when you want to make your Instagram account more popular! The
                            price is nice. You get followers and likes almost instantly.
                            If something is wrong, the support will explain everything. They will fix it so you won't
                            lose your money. I managed to increase the number
                            of subscribers from 5000 to 11000 in a day! A great result. And no need to waste time doing
                            it yourself 🙂
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fw-medium">Lydia Botosh</span>
                            <svg class="ms-auto" width="122" height="17" viewBox="0 0 122 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.875 0.5625C9.71875 0.21875 9.375 0 9 0C8.59375 0 8.25 0.21875 8.09375 0.5625L6.09375 4.71875L1.59375 5.375C1.21875 5.4375 0.90625 5.6875 0.78125 6.0625C0.6875 6.40625 0.78125 6.8125 1.03125 7.0625L4.28125 10.2812L3.53125 14.8438C3.46875 15.2188 3.625 15.5938 3.9375 15.8125C4.25 16.0625 4.65625 16.0625 4.96875 15.9062L9 13.75L13 15.9062C13.3438 16.0625 13.75 16.0625 14.0625 15.8125C14.375 15.5938 14.5312 15.2188 14.4688 14.8438L13.6875 10.2812L16.9375 7.0625C17.2188 6.8125 17.3125 6.40625 17.1875 6.0625C17.0625 5.6875 16.75 5.4375 16.375 5.375L11.9062 4.71875L9.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M35.875 0.5625C35.7188 0.21875 35.375 0 35 0C34.5938 0 34.25 0.21875 34.0938 0.5625L32.0938 4.71875L27.5938 5.375C27.2188 5.4375 26.9062 5.6875 26.7812 6.0625C26.6875 6.40625 26.7812 6.8125 27.0312 7.0625L30.2812 10.2812L29.5312 14.8438C29.4688 15.2188 29.625 15.5938 29.9375 15.8125C30.25 16.0625 30.6562 16.0625 30.9688 15.9062L35 13.75L39 15.9062C39.3438 16.0625 39.75 16.0625 40.0625 15.8125C40.375 15.5938 40.5312 15.2188 40.4688 14.8438L39.6875 10.2812L42.9375 7.0625C43.2188 6.8125 43.3125 6.40625 43.1875 6.0625C43.0625 5.6875 42.75 5.4375 42.375 5.375L37.9062 4.71875L35.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M61.875 0.5625C61.7188 0.21875 61.375 0 61 0C60.5938 0 60.25 0.21875 60.0938 0.5625L58.0938 4.71875L53.5938 5.375C53.2188 5.4375 52.9062 5.6875 52.7812 6.0625C52.6875 6.40625 52.7812 6.8125 53.0312 7.0625L56.2812 10.2812L55.5312 14.8438C55.4688 15.2188 55.625 15.5938 55.9375 15.8125C56.25 16.0625 56.6562 16.0625 56.9688 15.9062L61 13.75L65 15.9062C65.3438 16.0625 65.75 16.0625 66.0625 15.8125C66.375 15.5938 66.5312 15.2188 66.4688 14.8438L65.6875 10.2812L68.9375 7.0625C69.2188 6.8125 69.3125 6.40625 69.1875 6.0625C69.0625 5.6875 68.75 5.4375 68.375 5.375L63.9062 4.71875L61.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M87.875 0.5625C87.7188 0.21875 87.375 0 87 0C86.5938 0 86.25 0.21875 86.0938 0.5625L84.0938 4.71875L79.5938 5.375C79.2188 5.4375 78.9062 5.6875 78.7812 6.0625C78.6875 6.40625 78.7812 6.8125 79.0312 7.0625L82.2812 10.2812L81.5312 14.8438C81.4688 15.2188 81.625 15.5938 81.9375 15.8125C82.25 16.0625 82.6562 16.0625 82.9688 15.9062L87 13.75L91 15.9062C91.3438 16.0625 91.75 16.0625 92.0625 15.8125C92.375 15.5938 92.5312 15.2188 92.4688 14.8438L91.6875 10.2812L94.9375 7.0625C95.2188 6.8125 95.3125 6.40625 95.1875 6.0625C95.0625 5.6875 94.75 5.4375 94.375 5.375L89.9062 4.71875L87.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M113.875 0.5625C113.719 0.21875 113.375 0 113 0C112.594 0 112.25 0.21875 112.094 0.5625L110.094 4.71875L105.594 5.375C105.219 5.4375 104.906 5.6875 104.781 6.0625C104.688 6.40625 104.781 6.8125 105.031 7.0625L108.281 10.2812L107.531 14.8438C107.469 15.2188 107.625 15.5938 107.938 15.8125C108.25 16.0625 108.656 16.0625 108.969 15.9062L113 13.75L117 15.9062C117.344 16.0625 117.75 16.0625 118.062 15.8125C118.375 15.5938 118.531 15.2188 118.469 14.8438L117.688 10.2812L120.938 7.0625C121.219 6.8125 121.312 6.40625 121.188 6.0625C121.062 5.6875 120.75 5.4375 120.375 5.375L115.906 4.71875L113.875 0.5625Z"
                                    fill="#FFBD5B"/>
                            </svg>
                        </div>
                    </div>
                    <!--End Review Item-->
                    <!--Review Item-->
                    <div class="card shadow-m">
                        <svg class="mb-32px" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 12.3438C0 5.89844 5.17578 0.625 11.7188 0.625H12.5C14.1602 0.625 15.625 2.08984 15.625 3.75C15.625 5.50781 14.1602 6.875 12.5 6.875H11.7188C8.69141 6.875 6.25 9.41406 6.25 12.3438V13.125H12.5C15.918 13.125 18.75 15.957 18.75 19.375V25.625C18.75 29.1406 15.918 31.875 12.5 31.875H6.25C2.73438 31.875 0 29.1406 0 25.625V22.5V19.375V12.3438ZM25 12.3438C25 5.89844 30.1758 0.625 36.7188 0.625H37.5C39.1602 0.625 40.625 2.08984 40.625 3.75C40.625 5.50781 39.1602 6.875 37.5 6.875H36.7188C33.6914 6.875 31.25 9.41406 31.25 12.3438V13.125H37.5C40.918 13.125 43.75 15.957 43.75 19.375V25.625C43.75 29.1406 40.918 31.875 37.5 31.875H31.25C27.7344 31.875 25 29.1406 25 25.625V22.5V19.375V12.3438Z"
                                fill="#FF645B"/>
                        </svg>
                        <p class="text-second mb-32px">
                            Great service and like that you're given a trial before paying!
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fw-medium">Lindsey Franci</span>
                            <svg class="ms-auto" width="122" height="17" viewBox="0 0 122 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.875 0.5625C9.71875 0.21875 9.375 0 9 0C8.59375 0 8.25 0.21875 8.09375 0.5625L6.09375 4.71875L1.59375 5.375C1.21875 5.4375 0.90625 5.6875 0.78125 6.0625C0.6875 6.40625 0.78125 6.8125 1.03125 7.0625L4.28125 10.2812L3.53125 14.8438C3.46875 15.2188 3.625 15.5938 3.9375 15.8125C4.25 16.0625 4.65625 16.0625 4.96875 15.9062L9 13.75L13 15.9062C13.3438 16.0625 13.75 16.0625 14.0625 15.8125C14.375 15.5938 14.5312 15.2188 14.4688 14.8438L13.6875 10.2812L16.9375 7.0625C17.2188 6.8125 17.3125 6.40625 17.1875 6.0625C17.0625 5.6875 16.75 5.4375 16.375 5.375L11.9062 4.71875L9.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M35.875 0.5625C35.7188 0.21875 35.375 0 35 0C34.5938 0 34.25 0.21875 34.0938 0.5625L32.0938 4.71875L27.5938 5.375C27.2188 5.4375 26.9062 5.6875 26.7812 6.0625C26.6875 6.40625 26.7812 6.8125 27.0312 7.0625L30.2812 10.2812L29.5312 14.8438C29.4688 15.2188 29.625 15.5938 29.9375 15.8125C30.25 16.0625 30.6562 16.0625 30.9688 15.9062L35 13.75L39 15.9062C39.3438 16.0625 39.75 16.0625 40.0625 15.8125C40.375 15.5938 40.5312 15.2188 40.4688 14.8438L39.6875 10.2812L42.9375 7.0625C43.2188 6.8125 43.3125 6.40625 43.1875 6.0625C43.0625 5.6875 42.75 5.4375 42.375 5.375L37.9062 4.71875L35.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M61.875 0.5625C61.7188 0.21875 61.375 0 61 0C60.5938 0 60.25 0.21875 60.0938 0.5625L58.0938 4.71875L53.5938 5.375C53.2188 5.4375 52.9062 5.6875 52.7812 6.0625C52.6875 6.40625 52.7812 6.8125 53.0312 7.0625L56.2812 10.2812L55.5312 14.8438C55.4688 15.2188 55.625 15.5938 55.9375 15.8125C56.25 16.0625 56.6562 16.0625 56.9688 15.9062L61 13.75L65 15.9062C65.3438 16.0625 65.75 16.0625 66.0625 15.8125C66.375 15.5938 66.5312 15.2188 66.4688 14.8438L65.6875 10.2812L68.9375 7.0625C69.2188 6.8125 69.3125 6.40625 69.1875 6.0625C69.0625 5.6875 68.75 5.4375 68.375 5.375L63.9062 4.71875L61.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M87.875 0.5625C87.7188 0.21875 87.375 0 87 0C86.5938 0 86.25 0.21875 86.0938 0.5625L84.0938 4.71875L79.5938 5.375C79.2188 5.4375 78.9062 5.6875 78.7812 6.0625C78.6875 6.40625 78.7812 6.8125 79.0312 7.0625L82.2812 10.2812L81.5312 14.8438C81.4688 15.2188 81.625 15.5938 81.9375 15.8125C82.25 16.0625 82.6562 16.0625 82.9688 15.9062L87 13.75L91 15.9062C91.3438 16.0625 91.75 16.0625 92.0625 15.8125C92.375 15.5938 92.5312 15.2188 92.4688 14.8438L91.6875 10.2812L94.9375 7.0625C95.2188 6.8125 95.3125 6.40625 95.1875 6.0625C95.0625 5.6875 94.75 5.4375 94.375 5.375L89.9062 4.71875L87.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M113.875 0.5625C113.719 0.21875 113.375 0 113 0C112.594 0 112.25 0.21875 112.094 0.5625L110.094 4.71875L105.594 5.375C105.219 5.4375 104.906 5.6875 104.781 6.0625C104.688 6.40625 104.781 6.8125 105.031 7.0625L108.281 10.2812L107.531 14.8438C107.469 15.2188 107.625 15.5938 107.938 15.8125C108.25 16.0625 108.656 16.0625 108.969 15.9062L113 13.75L117 15.9062C117.344 16.0625 117.75 16.0625 118.062 15.8125C118.375 15.5938 118.531 15.2188 118.469 14.8438L117.688 10.2812L120.938 7.0625C121.219 6.8125 121.312 6.40625 121.188 6.0625C121.062 5.6875 120.75 5.4375 120.375 5.375L115.906 4.71875L113.875 0.5625Z"
                                    fill="#FFBD5B"/>
                            </svg>
                        </div>
                    </div>
                    <!--End Review Item-->
                    <!--Review Item-->
                    <div class="card shadow-m">
                        <svg class="mb-32px" width="44" height="32" viewBox="0 0 44 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 12.3438C0 5.89844 5.17578 0.625 11.7188 0.625H12.5C14.1602 0.625 15.625 2.08984 15.625 3.75C15.625 5.50781 14.1602 6.875 12.5 6.875H11.7188C8.69141 6.875 6.25 9.41406 6.25 12.3438V13.125H12.5C15.918 13.125 18.75 15.957 18.75 19.375V25.625C18.75 29.1406 15.918 31.875 12.5 31.875H6.25C2.73438 31.875 0 29.1406 0 25.625V22.5V19.375V12.3438ZM25 12.3438C25 5.89844 30.1758 0.625 36.7188 0.625H37.5C39.1602 0.625 40.625 2.08984 40.625 3.75C40.625 5.50781 39.1602 6.875 37.5 6.875H36.7188C33.6914 6.875 31.25 9.41406 31.25 12.3438V13.125H37.5C40.918 13.125 43.75 15.957 43.75 19.375V25.625C43.75 29.1406 40.918 31.875 37.5 31.875H31.25C27.7344 31.875 25 29.1406 25 25.625V22.5V19.375V12.3438Z"
                                fill="#FF645B"/>
                        </svg>
                        <p class="text-second mb-32px">
                            This service is the best when you want to make your Instagram account more popular! The
                            price is nice. You get followers and likes almost instantly.
                            If something is wrong, the support will explain everything. They will fix it so you won't
                            lose your money. I managed to increase the number
                            of subscribers from 5000 to 11000 in a day! A great result. And no need to waste time doing
                            it yourself 🙂
                        </p>
                        <div class="d-flex align-items-center">
                            <span class="fw-medium">Lindsey Franci</span>
                            <svg class="ms-auto" width="122" height="17" viewBox="0 0 122 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.875 0.5625C9.71875 0.21875 9.375 0 9 0C8.59375 0 8.25 0.21875 8.09375 0.5625L6.09375 4.71875L1.59375 5.375C1.21875 5.4375 0.90625 5.6875 0.78125 6.0625C0.6875 6.40625 0.78125 6.8125 1.03125 7.0625L4.28125 10.2812L3.53125 14.8438C3.46875 15.2188 3.625 15.5938 3.9375 15.8125C4.25 16.0625 4.65625 16.0625 4.96875 15.9062L9 13.75L13 15.9062C13.3438 16.0625 13.75 16.0625 14.0625 15.8125C14.375 15.5938 14.5312 15.2188 14.4688 14.8438L13.6875 10.2812L16.9375 7.0625C17.2188 6.8125 17.3125 6.40625 17.1875 6.0625C17.0625 5.6875 16.75 5.4375 16.375 5.375L11.9062 4.71875L9.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M35.875 0.5625C35.7188 0.21875 35.375 0 35 0C34.5938 0 34.25 0.21875 34.0938 0.5625L32.0938 4.71875L27.5938 5.375C27.2188 5.4375 26.9062 5.6875 26.7812 6.0625C26.6875 6.40625 26.7812 6.8125 27.0312 7.0625L30.2812 10.2812L29.5312 14.8438C29.4688 15.2188 29.625 15.5938 29.9375 15.8125C30.25 16.0625 30.6562 16.0625 30.9688 15.9062L35 13.75L39 15.9062C39.3438 16.0625 39.75 16.0625 40.0625 15.8125C40.375 15.5938 40.5312 15.2188 40.4688 14.8438L39.6875 10.2812L42.9375 7.0625C43.2188 6.8125 43.3125 6.40625 43.1875 6.0625C43.0625 5.6875 42.75 5.4375 42.375 5.375L37.9062 4.71875L35.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M61.875 0.5625C61.7188 0.21875 61.375 0 61 0C60.5938 0 60.25 0.21875 60.0938 0.5625L58.0938 4.71875L53.5938 5.375C53.2188 5.4375 52.9062 5.6875 52.7812 6.0625C52.6875 6.40625 52.7812 6.8125 53.0312 7.0625L56.2812 10.2812L55.5312 14.8438C55.4688 15.2188 55.625 15.5938 55.9375 15.8125C56.25 16.0625 56.6562 16.0625 56.9688 15.9062L61 13.75L65 15.9062C65.3438 16.0625 65.75 16.0625 66.0625 15.8125C66.375 15.5938 66.5312 15.2188 66.4688 14.8438L65.6875 10.2812L68.9375 7.0625C69.2188 6.8125 69.3125 6.40625 69.1875 6.0625C69.0625 5.6875 68.75 5.4375 68.375 5.375L63.9062 4.71875L61.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M87.875 0.5625C87.7188 0.21875 87.375 0 87 0C86.5938 0 86.25 0.21875 86.0938 0.5625L84.0938 4.71875L79.5938 5.375C79.2188 5.4375 78.9062 5.6875 78.7812 6.0625C78.6875 6.40625 78.7812 6.8125 79.0312 7.0625L82.2812 10.2812L81.5312 14.8438C81.4688 15.2188 81.625 15.5938 81.9375 15.8125C82.25 16.0625 82.6562 16.0625 82.9688 15.9062L87 13.75L91 15.9062C91.3438 16.0625 91.75 16.0625 92.0625 15.8125C92.375 15.5938 92.5312 15.2188 92.4688 14.8438L91.6875 10.2812L94.9375 7.0625C95.2188 6.8125 95.3125 6.40625 95.1875 6.0625C95.0625 5.6875 94.75 5.4375 94.375 5.375L89.9062 4.71875L87.875 0.5625Z"
                                    fill="#FFBD5B"/>
                                <path
                                    d="M113.875 0.5625C113.719 0.21875 113.375 0 113 0C112.594 0 112.25 0.21875 112.094 0.5625L110.094 4.71875L105.594 5.375C105.219 5.4375 104.906 5.6875 104.781 6.0625C104.688 6.40625 104.781 6.8125 105.031 7.0625L108.281 10.2812L107.531 14.8438C107.469 15.2188 107.625 15.5938 107.938 15.8125C108.25 16.0625 108.656 16.0625 108.969 15.9062L113 13.75L117 15.9062C117.344 16.0625 117.75 16.0625 118.062 15.8125C118.375 15.5938 118.531 15.2188 118.469 14.8438L117.688 10.2812L120.938 7.0625C121.219 6.8125 121.312 6.40625 121.188 6.0625C121.062 5.6875 120.75 5.4375 120.375 5.375L115.906 4.71875L113.875 0.5625Z"
                                    fill="#FFBD5B"/>
                            </svg>
                        </div>
                    </div>
                    <!--End Review Item-->
                </div>
            </div>
        </section>
        <!-- End of Customers section
           ============================================= -->

    </main>

</x-app-layout>
