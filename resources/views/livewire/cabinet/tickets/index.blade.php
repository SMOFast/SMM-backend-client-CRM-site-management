<div class="container">

    @include('includes.cabinet_menu')

    <div class="d-block d-sm-flex align-items-center mb-6">
        <h1 class="h3 mb-3 mb-sm-0 me-0 me-sm-auto">Tickets</h1>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary d-block d-md-inline">Create ticket</a>
    </div>
    <div class="card shadow-m p-0 overflow-hidden">
        <div class="card-header border-0 d-block d-md-flex align-items-center">
            <nav class="me-auto d-flex text-center">
                <a href="javascript:void(0);" class="me-3 me-sm-4 link-active">Recent</a>
                <a href="javascript:void(0);" class="flex-align-center fw-medium me-3 me-sm-4"><i class="fa-solid fa-circle color-u-orange fs-10 me-2"></i>Open</a>
                <a href="javascript:void(0);" class="flex-align-center fw-medium"><i class="fa-solid fa-circle color-green fs-10 me-2"></i>Closed</a>
            </nav>
            <div class="d-flex align-items-center mt-4 mt-md-0 ms-0 ms-md-auto">
                <form action="" class="flex-fill">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <button class="btn btn-collapse p-0 ms-4" data-bs-toggle="collapse" data-bs-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                    <i class="fa-regular fa-filter-list fs-24"></i>
                </button>
            </div>
        </div>
        <div class="p-2 p-md-4 border-top collapse" id="collapseFilters">
            <form action="" class="d-block d-sm-flex">
                <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                    <span class="input-group-text"><i class="fa-regular fa-photo-film-music"></i></span>
                    <select class="form-select form-control">
                        <option selected="">All Social Media</option>
                        <option value="">Instagram</option>
                        <option value="">TikTok</option>
                        <option value="">Youtube</option>
                        <option value="">Twitch</option>
                    </select>
                </div>
                <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                    <span class="input-group-text"><i class="fa-regular fa-check-to-slot"></i></span>
                    <select class="form-select form-control">
                        <option selected="">Status</option>
                        <option value="">Performed</option>
                        <option value="">Processing</option>
                        <option value="">Error</option>
                    </select>
                </div>
                <button class="btn btn-primary">Apply</button>
            </form>
        </div>
        <div class="card-body border-top text-center">
            <svg width="150" height="151" viewBox="0 0 150 151" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_348_2760)">
                    <path d="M66.2112 44.7384C63.7843 44.7384 61.8167 46.706 61.8167 49.1329C61.8167 51.5599 63.7843 53.5274 66.2112 53.5274C68.6381 53.5274 70.6057 51.5599 70.6057 49.1329C70.6057 46.706 68.6384 44.7384 66.2112 44.7384ZM31.0551 44.7384C28.6282 44.7384 26.6606 46.706 26.6606 49.1329C26.6606 51.5599 28.6282 53.5274 31.0551 53.5274C33.482 53.5274 35.4496 51.5599 35.4496 49.1329C35.4496 46.706 33.4823 44.7384 31.0551 44.7384ZM48.6332 44.7384C46.2062 44.7384 44.2386 46.706 44.2386 49.1329C44.2386 51.5599 46.2062 53.5274 48.6332 53.5274C51.0601 53.5274 53.0277 51.5599 53.0277 49.1329C53.0277 46.706 51.0604 44.7384 48.6332 44.7384ZM147.837 142.319L147.62 142.191C141.978 138.867 139.941 131.403 143.173 125.892C147.639 118.275 150 109.967 150 101.867C150 88.9847 144.91 76.8459 135.666 67.6868C126.451 58.5559 114.27 53.5274 101.368 53.5274C99.8246 53.5274 98.2835 53.6054 96.7513 53.7515C96.896 52.231 96.9731 50.6909 96.9731 49.1329C96.9731 22.4749 75.3342 0.50029 48.6334 0.50029C21.9473 0.50029 0.000822608 22.4535 0.000822608 49.1329C0.000822608 57.2745 2.26312 65.2983 6.72531 72.9816C9.97549 78.5782 7.92999 85.8948 2.16556 89.2914C2.13275 89.3108 2.09876 89.3313 2.06624 89.3518C0.403946 90.3909 -0.369195 92.4054 0.171037 94.2898C0.711269 96.1741 2.43509 97.4729 4.39534 97.4729H48.6334C50.1914 97.4729 51.7313 97.3958 53.2521 97.2511C53.1059 98.7833 53.028 100.324 53.028 101.867C53.028 128.525 74.6668 150.5 101.368 150.5H145.606C147.587 150.5 149.324 149.174 149.845 147.262C150.366 145.35 149.544 143.326 147.837 142.319ZM48.6332 88.6835H14.52C17.8399 82.5388 18.0207 74.9302 14.3255 68.5678C10.6522 62.2426 8.78985 55.7039 8.78985 49.1329C8.78985 27.163 26.6635 9.28932 48.6334 9.28932C70.4417 9.28932 88.1841 27.163 88.1841 49.1329C88.1838 70.9411 70.4417 88.6835 48.6332 88.6835ZM135.591 121.446C132.825 126.164 132.115 131.745 133.593 137.162C134.031 138.765 134.641 140.288 135.409 141.711H101.367C79.5591 141.711 61.8167 123.837 61.8167 101.867C61.8167 99.727 61.9925 97.5924 62.3338 95.4921C77.9906 90.8571 90.357 78.4906 94.992 62.8338C97.0923 62.4925 99.2269 62.3167 101.367 62.3167C123.337 62.3167 141.211 80.0592 141.211 101.867C141.211 108.5 139.32 115.087 135.591 121.446ZM118.945 97.4726C116.518 97.4726 114.551 99.4401 114.551 101.867C114.551 104.294 116.518 106.262 118.945 106.262C121.372 106.262 123.34 104.294 123.34 101.867C123.34 99.4401 121.373 97.4726 118.945 97.4726ZM83.7893 97.4726C81.3623 97.4726 79.3948 99.4401 79.3948 101.867C79.3948 104.294 81.3623 106.262 83.7893 106.262C86.2162 106.262 88.1838 104.294 88.1838 101.867C88.1838 99.4401 86.2165 97.4726 83.7893 97.4726ZM101.367 97.4726C98.9404 97.4726 96.9728 99.4401 96.9728 101.867C96.9728 104.294 98.9404 106.262 101.367 106.262C103.794 106.262 105.762 104.294 105.762 101.867C105.762 99.4401 103.795 97.4726 101.367 97.4726Z" fill="url(#paint0_linear_348_2760)"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear_348_2760" x1="75.0002" y1="150.5" x2="75.0002" y2="0.50029" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#CEF6FF"/>
                        <stop offset="1" stop-color="#ACAEF1"/>
                    </linearGradient>
                    <clipPath id="clip0_348_2760">
                        <rect width="150" height="150" fill="white" transform="translate(0 0.5)"/>
                    </clipPath>
                </defs>
            </svg>
            <h2 class="fs-24 mt-5">Empty ticket list</h2>
            <p class="text-muted">Nothing found on this tab.</p>
        </div>
    </div>
</div>
