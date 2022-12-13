@section('meta_title', 'cart')
@section('meta_keywords', 'cart')
@section('meta_description', 'cart')

<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">
    <section class="section">
        <div class="container section-blur vh-100">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                    <div class="card shadow-m">
                        <h1 class="h4 mb-1">Get Started</h1>
                        <p class="text-second mb-32px">Please enter your detailse.</p>
                        <form action="/order-select-posts.php">
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                    <input type="text" class="form-control" placeholder="Instagram username">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                                    <input type="text" class="form-control" placeholder="Email adress">
                                </div>
                            </div>
                            <div class="dropdown mb-4">
                                <div class="form-control cursor-pointer d-flex align-items-center w-100" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>1000 likes</span>
                                    <span class="ms-auto me-3">$12.99</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                                <ul class="dropdown-menu w-100">
                                    <li>
                                        <a class="dropdown-item active d-flex align-items-center border-bottom" href="#">
                                            <span class="me-auto">100 followers</span>
                                            <span>$2.97</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center border-bottom" href="#">
                                            <span class="me-auto">250 followers</span>
                                            <span>$5.49</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center border-bottom" href="#">
                                            <span class="me-auto">500 followers</span>
                                            <span>$7.99</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center border-bottom py-3" href="#">
                                            <span class="me-auto">1000 followers</span>
                                            <span>$12.99</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center border-bottom" href="#">
                                            <span class="me-auto">2500 followers</span>
                                            <span>$28.99</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <span class="me-auto">5000 followers</span>
                                            <span>$49.99</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label small" for="defaultCheck1">
                                    Send me special promotions and discounts
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary w-100 mt-5">Continue</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 ms-0 ms-lg-auto d-none d-lg-block">
                    <div class="comments__box">
                        <div class="comment__card comment__card--purple mx-auto">
                            <div class="comment__photo">
                                <img class="comment__image" src="{{ Vite::asset('resources/assets/img/comment-image-1.jpg') }}" alt="Chack">
                            </div>
                            <p class="comment__text">
                                Really love the simplicity of the interface and amazing customer support.
                            </p>
                            <div class="comment__rate">5</div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <img src="{{ Vite::asset('resources/assets/img/trust.svg') }}" alt="trust" width="180" height="94">
                            <div class="comment__card comment__card--orange ms-auto me-4 mb-0">
                                <div class="comment__photo">
                                    <img class="comment__image" src="{{ Vite::asset('resources/assets/img/comment-image-2.jpg') }}" alt="Inna">
                                </div>
                                <p class="comment__text">
                                    Great service and like that you're given a trial before paying!
                                </p>
                                <div class="comment__rate">4.8</div>
                            </div>
                        </div>
                        <div class="comment__card comment__card--green mx-auto">
                            <div class="comment__photo">
                                <img class="comment__image" src="{{ Vite::asset('resources/assets/img/comment-image-3.jpg') }}" alt="Chack">
                            </div>
                            <p class="comment__text">
                                I love Instagram, great platform to share photos, videos, etc., can't live a day without it 🙂
                            </p>
                            <div class="comment__rate">5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</x-app-layout>
