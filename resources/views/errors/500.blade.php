@section('meta_title', 'Page not found')

<x-app-layout>
    <main class="d-flex flex-column">

        <!-- Start of Hero section
           ============================================= -->
        <section class="section hero py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h1 mb-4">500, SERVER ERROR</h1>
                        <p class="text-second fs-18 mb-32px">
                            We are sorry, the page you requested cannot be found.
                        </p>
                        <a href="{{ route('index') }}" class="btn btn-lg btn-primary">Home</a>
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

    </main>
</x-app-layout>
