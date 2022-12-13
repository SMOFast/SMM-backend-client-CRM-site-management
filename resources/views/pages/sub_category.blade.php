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
                            {!! $currentCategory['attributes']['category_title_description']['value'] ?? null !!}
                        </h2>
                        <p class="text-second fs-18 mb-56px">
                            {!! $currentCategory['attributes']['category_description']['value'] ?? null !!}
                        </p>
                    </div>
                    <div class="col-lg-5 d-none d-md-flex">
                        <div class="hero-image mx-auto"></div>
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
                <div class="tab-content" id="nav-tabContent">

                    @foreach($products as $product)
                        {{--                        {!! dd($product) !!}--}}
                        <div class="tab-pane m-0 fade @if ($loop->first) active @endif show" id="nav-{{$product['slug']}}" role="tabpanel"
                             aria-labelledby="nav-{{$product['slug']}}-tab">
                            <!--Slider-->
                            <div class="category-slider">
                                @foreach($product['discounts'] as $discount)
                                    @php
                                        $default_price = ($product['prices']['price'] * $discount['count'])-($product['prices']['price'] * $discount['count']*$discount['discount']/100);
                                        $discount_price = $product['prices']['price'] * $discount['count'];
                                    @endphp
                                    <div class="card product-card shadow-m py-4 text-center" data-id="{{$product['id']}}" data-price="{{$default_price}}" data-discount_price="{{$discount_price}}" data-count="{{$discount['count']}}">
                                        <input class="product-card-input" type="radio" name="productRadios" id="discount-{{$discount['id']}}"
                                               @if ($loop->first) checked @endif>
                                        <label class="product-card__label" for="discount-{{$discount['id']}}"></label>
                                        <div class="product-card__discount">Save {{$discount['discount']}}%</div>
                                        <div class="product-card__amount">{{$discount['count'] * $product['multiplicity']}}</div>
                                        <div class="product-card__name">{{$product['attributes']['multiplicity_description']['value']}}</div>
                                        <hr>
                                        <div class="product-card__price d-flex align-items-center">
                                            <span class="me-auto"><s>${{$discount_price}}</s></span>
                                            <span class="fs-24 fw-bold color-orange">${{$default_price}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @php
                                $default_price = ($product['prices']['price'] * $product['discounts'][0]['count'])-($product['prices']['price'] * $product['discounts'][0]['count']*$product['discounts'][0]['discount']/100);
                                $discount_price = $product['prices']['price'] * $product['discounts'][0]['count'];
                            @endphp
                                <!-- End Slider -->
                            <div class="mt-5 text-center mb-56px product_basket">
                                <form method="post" action="{{route('addToBasket')}}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product['id']}}" class="product_id">
                                    <input type="hidden" name="count" value="{{$product['discounts'][0]['count']}}" class="product_count">
                                    <button class="btn btn-lg btn-primary" type="submit">Buy Now $<span class="basket_price">{{$default_price}}</span></button>
                                    <div class="d-flex align-items-center mt-4 justify-content-center">
                                        <div class="icon-colour icon-32 bg-soft-green me-3">
                                            <i class="fa-solid fa-percent"></i>
                                        </div>
                                        <div class="ms-2 fw-medium">
                                            You Saved <span class="color-green ">$<span class="basket_discount_price">{{$discount_price-$default_price}}</span></span>
                                        </div>
                                    </div>
                                </form>
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
                </div>
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
