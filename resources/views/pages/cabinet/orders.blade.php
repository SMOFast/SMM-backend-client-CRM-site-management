@section('meta_title', 'orders')
@section('meta_keywords', 'orders')
@section('meta_description', 'orders')

<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">
        <section class="section">

            @livewire('cabinet.orders')

        </section>
    </main>
</x-app-layout>
