@section('meta_title', $page['name'])
@section('meta_keywords', $page['name'])
@section('meta_description', $page['name'])

<x-app-layout>
    <main class="d-flex flex-column">
        <section class="section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                        <div class="mb-6">
                            <h1>{{ $page['name'] }}</h1>
                            <p class="fs-24">{{ $page['short_description'] }}</p>
                        </div>

                        {!! $page['description'] !!}

                    </div>
                </div>
            </div>
        </section>

    </main>
</x-app-layout>
