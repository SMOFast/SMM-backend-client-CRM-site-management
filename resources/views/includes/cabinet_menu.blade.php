@php
    $currentRoute = Route::currentRouteName();
@endphp

<nav class="mb-5 py-4 border-bottom d-flex align-items-center text-center">
    <a href="{{route('orders')}}" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5 @if ($currentRoute === 'orders') active @endif"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
    <a href="{{route('tickets')}}" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5 @if ($currentRoute === 'tickets') active @endif"><i class="fa-regular fa-messages-question me-2"></i>Tickets</a>
    <a href="{{route('faq')}}" class="nav-link flex-fill flex-md-grow-0 fw-medium @if ($currentRoute === 'faq') active @endif"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
</nav>
