@section('meta_title', 'tickets')
@section('meta_keywords', 'tickets')
@section('meta_description', 'tickets')

<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">
        <section class="section">

            @livewire('cabinet.tickets.tickets')

        </section>
    </main>
</x-app-layout>
