@section('meta_title', 'contact-us')
@section('meta_keywords', 'contact-us')
@section('meta_description', 'contact-us')

<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">
        <section class="section">
            <div class="card shadow-m mx-auto" style="max-width: 480px; width: 100%;">
                <h1 class="h4 mb-1">Get in Touch</h1>
                <p class="text-second mb-4">If you have any questions about our Instagram growth services, please send us a message below.</p>

                @livewire('pages.contact-us')

            </div>
        </section>
    </main>
</x-app-layout>
