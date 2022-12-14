@section('meta_title', 'cart')
@section('meta_keywords', 'cart')
@section('meta_description', 'cart')

<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">

        <section class="section">
            <div class="container section-blur vh-100">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                        @livewire('cart.order')
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
