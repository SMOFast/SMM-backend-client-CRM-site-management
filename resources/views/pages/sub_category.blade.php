@section('meta_title', $currentCategory['attributes']['meta_title']['value'] ?? null)
@section('meta_keywords', $currentCategory['attributes']['meta_keywords']['value'] ?? null)
@section('meta_description', $currentCategory['attributes']['meta_description']['value'] ?? null)

<x-app-layout>
    <main class="d-flex flex-column">
        <section class="section hero pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-5 me-auto">
                        <h2 class="mb-4">
                            {{ $currentCategory['name'] }}
                            <div>with <span class="color-orange">Instant Delivery</span></div>
                        </h2>
                        <p class="text-second fs-18 mb-56px">
                            At Libergram, you can buy Instagram promotion <br>
                            quickly, safely, and easily with just a few clicks. <br>
                            See our deals below!
                        </p>
                    </div>
                    <div class="col-lg-5 text-center text-lg-end d-none d-md-block">
                        <div class="hero-image"></div>
                    </div>
                </div>
                <nav class="nav nav-pills nav-pills-category flex-column flex-sm-row align-items-center bg-grey-200">
                    @foreach($products as $product)
                        <a class="flex-sm-fill text-sm-center nav-link @if ($loop->first) active @endif" href="#!"
                           id="nav-{{$product['slug']}}-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-{{$product['slug']}}" role="tab"
                           aria-controls="nav-{{$product['slug']}}" aria-selected="true">{{$product['name']}}</a>
                    @endforeach
                    <a href="#!" id="DropQuestion" class="position-absolute ms-3" data-bs-toggle="dropdown"
                       aria-expanded="false" style="right: -48px">
                        <div class="icon-colour icon-32 bg-soft-red">
                            <i class="fa-solid fa-circle-question"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu p-3" aria-labelledby="DropQuestion" style="max-width: 250px;">
                        @foreach($products as $product)
                            <div class="mb-3">
                                <span class="d-block text-dark fw-medium mb-2">{{$product['name']}}</span>
                                <p class="fs-14 mb-0">{{$product['short_description']}}</p>
                            </div>
                        @endforeach
                    </div>
                </nav>
            </div>
        </section>
        <!-- Start of Category Slider section
           ============================================= -->
        <section class="section bg-grey-200 section-blur section-blur--sizing pt-5">
            <div class="container">
                <form action="/order-get-started.php" class="tab-content" id="nav-tabContent">

                    @foreach($products as $product)
                    <div class="tab-pane m-0 fade @if ($loop->first) active @endif show" id="nav-{{$product['slug']}}" role="tabpanel"
                         aria-labelledby="nav-{{$product['slug']}}-tab">
                        <!--Slider-->
                        <div class="category-slider">
                            <div class="card product-card shadow-m py-4 text-center">
                                <input class="product-card-input" type="radio" name="productRadios" id="amount-100"
                                       checked>
                                <label class="product-card__label" for="amount-100"></label>
                                <div class="product-card__discount">Save {{$product['id']}}%</div>
                                <div class="product-card__amount">100</div>
                                <div class="product-card__name">Likes</div>
                                <hr>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="me-auto"><s>$3.63</s></span>
                                    <span class="fs-24 fw-bold color-orange">$2.97</span>
                                </div>
                            </div>
                            <div class="card product-card shadow-m py-4 text-center">
                                <input class="product-card-input" type="radio" name="productRadios" id="amount-250">
                                <label class="product-card__label" for="amount-250"></label>
                                <div class="product-card__discount">Save 40%</div>
                                <div class="product-card__amount">250</div>
                                <div class="product-card__name">Likes</div>
                                <hr>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="me-auto"><s>$9.07</s></span>
                                    <span class="fs-24 fw-bold color-orange">$5.49</span>
                                </div>
                            </div>
                            <div class="card product-card shadow-m py-4 text-center">
                                <input class="product-card-input" type="radio" name="productRadios" id="amount-500">
                                <label class="product-card__label" for="amount-500"></label>
                                <div class="product-card__discount">Save 56%</div>
                                <div class="product-card__amount">500</div>
                                <div class="product-card__name">Likes</div>
                                <hr>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="me-auto"><s>$18.15</s></span>
                                    <span class="fs-24 fw-bold color-orange">$7.99</span>
                                </div>
                            </div>
                            <div class="card product-card shadow-m py-4 text-center">
                                <input class="product-card-input" type="radio" name="productRadios" id="amount-1000">
                                <label class="product-card__label" for="amount-1000"></label>
                                <div class="product-card__discount">Save 64%</div>
                                <div class="product-card__amount">1000</div>
                                <div class="product-card__name">Likes</div>
                                <hr>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="me-auto"><s>$36.30</s></span>
                                    <span class="fs-24 fw-bold color-orange">$13.09</span>
                                </div>
                            </div>
                            <div class="card product-card shadow-m py-4 text-center">
                                <input class="product-card-input" type="radio" name="productRadios" id="amount-1500">
                                <label class="product-card__label" for="amount-1500"></label>
                                <div class="product-card__discount">Save 68%</div>
                                <div class="product-card__amount">1500</div>
                                <div class="product-card__name">Likes</div>
                                <hr>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="me-auto"><s>$40.13</s></span>
                                    <span class="fs-24 fw-bold color-orange">$14.92</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider -->
                        <div class="mt-5 text-center mb-56px">
                            <button class="btn btn-lg btn-primary">Buy Now $5.49</button>
                            <div class="d-flex align-items-center mt-4 justify-content-center">
                                <div class="icon-colour icon-32 bg-soft-green me-3">
                                    <i class="fa-solid fa-percent"></i>
                                </div>
                                <div class="ms-2 fw-medium">
                                    You Saved <span class="color-green">$3.58</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-soft-white shadow-m p-4 rounding">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-colour icon-32 bg-soft-orange me-3">
                                            <i class="fa-solid fa-solid fa-badge-check"></i>
                                        </div>
                                        <sapn class="fs-14">Guaranteed Instant Delivery</sapn>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-colour icon-32 bg-soft-purple me-3">
                                            <i class="fa-solid fa-users"></i>
                                        </div>
                                        <sapn class="fs-14">Real follows from real people</sapn>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-colour icon-32 bg-soft-red me-3">
                                            <i class="fa-solid fa-bolt"></i>
                                        </div>
                                        <sapn class="fs-14">Fast delivery (gradual or instant)</sapn>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xxl-3 mb-3 mb-xxl-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-colour icon-32 bg-soft-sky me-3">
                                            <i class="fa-regular fa-fingerprint"></i>
                                        </div>
                                        <sapn class="fs-14">No password required</sapn>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </section>
        <!-- End of Category Slider section
           ============================================= -->
        <section class="section">
            <div class="container">
                <h2 class="text-center mb-56px">
                    Just a Few Steps <span class="d-block">to Popularity!</span>
                </h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-purple-100 p-5">
                            <div class="card__icon bg-purple-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/finger-icon.svg') }}"
                                     class="card__icon-img" alt="Pick a package" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Pick a package</div>
                            <p class="mb-0">
                                Choose the Instagram likes, Likes, <br> or views package that you're interested in. Feel
                                free to get in touch if you have <br> an inquiry about a bulk order.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-sky-100 p-5">
                            <div class="card__icon bg-sky-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/text-icon.svg') }}"
                                     class="card__icon-img" alt="Fill the info" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">Fill the info</div>
                            <p class="mb-0">
                                We will never ask you for sensitive details such as your password. All you have to do is
                                provide us with your username and leave the rest to us!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card bg-powder-100 p-5">
                            <div class="card__icon bg-powder-500 mb-32px">
                                <img src="{{ Vite::asset('resources/assets/img/icon-3d/heart-icon.svg') }}"
                                     class="card__icon-img" alt="See the growth" width="80" height="80">
                            </div>
                            <div class="card__title fs-20 mb-2">See the growth</div>
                            <p class="mb-0">
                                All orders start within a few minutes, <br> so you'll see growth in your account very
                                quickly. We've made the process super easy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('includes.faq')

        @include('includes.customers')

    </main>
</x-app-layout>
