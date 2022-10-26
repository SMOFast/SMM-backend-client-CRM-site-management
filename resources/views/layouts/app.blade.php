<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Libgram - Automated promotion system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="keywords" content="libgram, cheat, promotion, promotion, smm, service, site, system, online, social networks, services, views, subscribers, likes, viewers, comments, advertising, top, trends" />
    <meta name="description" content="Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices." />
    <!-- Favicon -->
    <link rel="icon" href="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" type="image/x-icon">
{{--    <link rel="apple-touch-icon" href="/apple-touch-icon-192x192.png">--}}
    <!-- OG Tags -->
    <meta property="og:title" content="SMM promotion in social networks - Libgram promotion system">
    <meta property="og:description" content="Online service for the promotion and promotion of social networks. Subscribers, views, comments and likes on social networks at low prices.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sitename/" />
{{--    <meta property="og:image" content="https://sitename/assets/img/ogimgwebsite.jpeg" >--}}
    <meta property="og:site_name" content="Libgram">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <!--
    <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css?v=<?=time()?>">
    <noscript class="loadLater">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/assets/libs/slick/slick-theme.css?v=<?=time()?>">
        <link rel="stylesheet" href="/assets/libs/slick/slick.css?v=<?=time()?>">
    </noscript>
    <script type="application/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            var loadLater = document.querySelector('.loadLater');
            var head = document.querySelector('head');
            if(loadLater && head){
                head.insertAdjacentHTML('beforeend', loadLater.innerHTML);
            }
        });
    </script>

    -->
<body>
<!-- Start of Header section
   ============================================= -->

<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-logo me-5" href="/">Libgram</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Instagram
                            <i class="fa-solid fa-angle-down ms-2 small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="d-block d-lg-flex">
                                <div class="col-12 col-lg-4 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="IGTV"><i class="fa-regular fa-play me-2"></i>IGTV</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Followers"><i class="fa-regular fa-user-plus me-2"></i>Followers</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Likes"><i class="fa-regular fa-heart me-2"></i>Likes</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Views"><i class="fa-regular fa-eye me-2"></i>Views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Broadcast"><i class="fa-regular fa-podcast me-2"></i>Broadcasts</a></li>
                                </div>
                                <div class="col-12 col-lg-4 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Storie"><i class="fa-regular fa-rectangle-vertical-history me-2"></i>Stories</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Complaints"><i class="fa-regular fa-flag me-2"></i>Complaints</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Comments"><i class="fa-regular fa-messages me-2"></i>Comments</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Save"><i class="fa-regular fa-bookmark me-2"></i>Save</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Reach and impressions"><i class="fa-regular fa-chart-network me-2"></i>Reach and impressions</a></li>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Advertising"><i class="fa-regular fa-rectangle-ad me-2"></i>Advertising</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Verification"><i class="fa-regular fa-badge-check me-2"></i>Verification</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="VIP Promotion"><i class="fa-regular fa-key me-2"></i>VIP Promotion</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Sets"><i class="fa-regular fa-boxes-packing me-2"></i>Sets</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Youtube
                            <i class="fa-solid fa-angle-down ms-2 small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="d-block d-lg-flex">
                                <div class="col-12 col-lg-4 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Subscribers"><i class="fa-regular fa-users me-2"></i> Subscribers</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Site views"><i class="fa-regular fa-eye me-2"></i> Site views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Hold Views"><i class="fa-regular fa-signal-alt me-2"></i> Hold Views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Views by country"><i class="fa-regular fa-globe-europe me-2"></i> Views by country</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Views from ads"><i class="fa-regular fa-ad me-2"></i> Views from ads</a></li>
                                </div>
                                <div class="col-12 col-lg-4 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Likes"><i class="fa-regular fa-thumbs-up me-2"></i> Likes</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Dislikes"><i class="fa-regular fa-thumbs-down me-2"></i> Dislikes</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Complaints"><i class="fa-regular fa-flag me-2"></i> Complaints</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Comments"><i class="fa-regular fa-comments-alt me-2"></i> Comments</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Reposts"><i class="fa-regular fa-share-alt me-2"></i> Reposts</a></li>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Translation"><i class="fa-regular fa-podcast me-2"></i> Translation</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Sets"><i class="fa-regular fa-box-full me-2"></i> Sets</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Conclusion in trends"><i class="fa-regular fa-star me-2"></i> Conclusion in trends</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Watch views"><i class="fa-regular fa-business-time me-2"></i> Watch views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="VIP promotion"><i class="fa-regular fa-key me-2"></i> VIP promotion</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TikTok
                            <i class="fa-solid fa-angle-down ms-2 small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/category.php" class="dropdown-item text-truncate" title="Views"><i class="fa-regular fa-eye me-2"></i> Views</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title="Subscribers"><i class="fa-regular fa-users me-2"></i> Subscribers</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title="Likes"><i class="fa-regular fa-heart me-2"></i> Likes</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title="Complaints"><i class="fa-regular fa-flag me-2"></i> Complaints</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Telegram
                            <i class="fa-solid fa-angle-down ms-2 small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="d-block d-lg-flex">
                                <div class="col-12 col-lg-6 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Subscribers to the channel"><i class="fa-regular fa-users me-2"></i> Subscribers to the channel</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Members in the chat"><i class="fa-regular fa-user-plus me-2"></i> Members in the chat</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Post Views"><i class="fa-regular fa-eye me-2"></i> Post Views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Polls"><i class="fa-regular fa-bars-progress me-2"></i> Polls</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Reactions"><i class="fa-regular fa-face-smile me-2"></i> Reactions</a></li>
                                </div>
                                <div class="col-12 col-lg-6 border-end">
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="VIP promotion"><i class="fa-regular fa-key me-2"></i> VIP promotion</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Verification"><i class="fa-regular fa-badge-check me-2"></i> Verification</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Complaints"><i class="fa-regular fa-flag me-2"></i> Complaints</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Sets"><i class="fa-regular fa-boxes-packing me-2"></i> Sets</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Twitter
                            <i class="fa-solid fa-angle-down ms-2 small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/category.php" class="dropdown-item text-truncate" title=""><i class="fa-regular fa-play me-2"></i> Video</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title=""><i class="fa-regular fa-thumbs-up me-2"></i>  Likes</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title=""><i class="fa-regular fa-key me-2"></i>  Full construction</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title=""><i class="fa-regular fa-share-alt me-2"></i>  Reposts</a></li>
                            <li><a href="/category.php" class="dropdown-item text-truncate" title=""><i class="fa-regular fa-users me-2"></i>  Subscribers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown has-mega-menu">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fs-20 line-height-1"></i>
                        </a>
                        <ul class="dropdown-menu mega-menu container mx-auto">
                            <div class="row d-block d-lg-flex">
                                <div class="col-12 col-lg-3 border-end">
                                    <div class="fw-medium fs-16 mb-2 ps-3">Facebook</div>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="IGTV"><i class="fa-regular fa-play me-2"></i>IGTV</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Followers"><i class="fa-regular fa-user-plus me-2"></i>Followers</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Likes"><i class="fa-regular fa-heart me-2"></i>Likes</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Views"><i class="fa-regular fa-eye me-2"></i>Views</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Broadcast"><i class="fa-regular fa-podcast me-2"></i>Broadcasts</a></li>
                                </div>
                                <div class="col-12 col-lg-3 border-end">
                                    <div class="fw-medium fs-16 mb-2 ps-3">Twitch</div>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Storie"><i class="fa-regular fa-rectangle-vertical-history me-2"></i>Stories</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Complaints"><i class="fa-regular fa-flag me-2"></i>Complaints</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Comments"><i class="fa-regular fa-messages me-2"></i>Comments</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Save"><i class="fa-regular fa-bookmark me-2"></i>Save</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Reach and impressions"><i class="fa-regular fa-chart-network me-2"></i>Reach and impressions</a></li>
                                </div>
                                <div class="col-12 col-lg-3 border-end">
                                    <div class="fw-medium fs-16 mb-2 ps-3">Spotify</div>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Advertising"><i class="fa-regular fa-rectangle-ad me-2"></i>Advertising</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Verification"><i class="fa-regular fa-badge-check me-2"></i>Verification</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="VIP Promotion"><i class="fa-regular fa-key me-2"></i>VIP Promotion</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Sets"><i class="fa-regular fa-boxes-packing me-2"></i>Sets</a></li>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="fw-medium fs-16 mb-2 ps-3">Pinterest</div>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Advertising"><i class="fa-regular fa-rectangle-ad me-2"></i>Advertising</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Verification"><i class="fa-regular fa-badge-check me-2"></i>Verification</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="VIP Promotion"><i class="fa-regular fa-key me-2"></i>VIP Promotion</a></li>
                                    <li><a href="/category.php" class="dropdown-item text-truncate" title="Sets"><i class="fa-regular fa-boxes-packing me-2"></i>Sets</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

                @if (Auth::user())
                    <div class="nav-item_user">
                        <a href="/my-orders.php" class="btn btn-outline d-block d-lg-inline text-start text-lg-center"><i class="fa-regular fa-check-to-slot me-2"></i> My Orders</a>
                    </div>
                @else
                    <div class="nav-item_user">
                        <a href="{{ route('login') }}" class="btn btn-outline d-block d-lg-inline text-start text-lg-center">Log in <i class="fa-regular fa-right-to-bracket ms-2"></i></a>
                    </div>
                @endif


            </div>
        </div>
    </nav>
</header>
    <!-- End of Customers section
         ============================================= -->

{{ $slot }}


<!-- Start of Footer section
   ============================================= -->

<footer class="footer">
    <div class="container text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <img src="{{ Vite::asset('resources/assets/img/footer-logo.svg')}}" alt="Libgram" width="174" height="40">
            </div>
            <div class="col-lg-8 mt-4 mt-lg-0 ms-0 ma-lg-auto">
                <nav class="footer__nav">
                    <ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
                        <li class="mt-3 mt-sm-0 me-4"><a href="/terms-of-service.php" class="footer__nav_link">Terms of Service</a></li>
                        <li class="mt-3 mt-sm-0 me-4"><a href="#" class="footer__nav_link">Tickets</a></li>
                        <li class="mt-3 mt-sm-0 me-4"><a href="/contact-us.php" class="footer__nav_link">Contact Us</a></li>
                        <li class="mt-3 mt-sm-0 dropdown">
                            <a href="#" class="footer__nav_link" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Vite::asset('resources/assets/img/flags/us.svg')}}" alt="English" width="23" height="16">
                                <span class="ms-2">English</span>
                            </a>
                            <ul class="dropdown-menu my-3">
                                <li>
                                    <a class="dropdown-item active" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/us.svg')}}" alt="en" width="23" height="16">
                                        <span class="ms-2">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/fr.svg')}}" alt="French" width="23" height="16">
                                        <span class="ms-2">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ Vite::asset('resources/assets/img/flags/de.svg')}}" alt="Deutsch" width="23" height="16">
                                        <span class="ms-2">Deutsch</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <hr class="mt-5 mb-32px">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <span class="small">2022 All Rights Reserved</span>
            </div>
            <div class="col-lg-8 mt-4 mt-lg-0 ms-0 ms-lg-auto d-flex flex-wrap justify-content-center justify-content-lg-end">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/symantec.svg')}}" alt="Symantec" width="98" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/applepay.svg')}}" alt="Apple Pay" width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/visa.svg')}}" alt="Visa" width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/master-card.svg')}}" alt="Master Card" width="60" height="34">
                <img class="m-1" src="{{ Vite::asset('resources/assets/img/payment/footer/amex.svg')}}" alt="Amex" width="65" height="34">
                <img class="m-1 me-lg-0" src="{{ Vite::asset('resources/assets/img/payment/footer/ff.svg')}}" alt="FF" width="60" height="34">
            </div>
        </div>
    </div>
</footer>

    <!--div class="popup-coikies">
  <div class="row justify-content-center text-center">
  <div class="col col-lg-4 fs-20 fw-medium">
    <p>
      We use cookies to analyze site performance and deliver personalized content.
      By clicking “Agree”, you consent <br> to our <a href="#!" class="link-active">Cookie Policy</a>. You may change your settings <br> at any time.
    </p>
    <div class="d-flex mx-5">
      <button class="btn btn-grey m-1 close">Decline</button>
      <button class="btn btn-primary m-1 submit ms-auto">Agree</button>
    </div>
  </div>
  </div>
</div-->


<!-- End of Customers section
   ============================================= -->

@livewireScripts

</body>
</html>
