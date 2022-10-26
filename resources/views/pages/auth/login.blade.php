<x-app-layout>
    <main class="d-flex flex-column bg-grey-100">
        <section class="section">
            <div class="card shadow-m mx-auto" style="max-width: 480px; width: 100%;">
                <h1 class="h4 mb-1">Welcome back 👋 </h1>
                <p class="text-second mb-4">Please enter your details.</p>

                @livewire('auth.login')

                <div class="mt-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <span>Don’t have in account?</span>
                        <a href="#!" class="ms-2">Sing up for free</a>
                    </div>
                    <svg style="position:relative; left: 34%" width="62" height="25" viewBox="0 0 62 25" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.8558 11.1184C21.3476 12.1404 45.9788 8.68132 58.573 1.5635C60.0968 0.702347 62.2381 0.808429 60.0968 2.01849C58.1334 3.12795 60.5499 1.86177 58.573 2.97175C51.2624 7.07643 42.6849 10.0032 34.6082 13.1839C26.7396 16.2826 6.35462 21.5292 1 24"
                            stroke="url(#paint0_linear_116_847)" stroke-width="2" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="paint0_linear_116_847" x1="62" y1="1" x2="1" y2="24"
                                            gradientUnits="userSpaceOnUse">
                                <stop offset="0.3971" stop-color="#0D0C22"/>
                                <stop offset="1" stop-color="#0D0C22" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
