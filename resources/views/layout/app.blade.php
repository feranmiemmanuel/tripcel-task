<!DOCTYPE html><!-- Last Published: Fri May 31 2024 14:07:52 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.raily.app" data-wf-page="64e30c9fd1d1b88ce6ef39a8" data-wf-site="64aceaf9cb10fc1c8e4efdbc"
    lang="en">

<head>
    <meta charset="utf-8" />
    <title>Raily - Meets on the Move</title>
    <meta
        content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
        name="description" />
    <meta content="Raily - Meets on the Move" property="og:title" />
    <meta
        content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
        property="og:description" />
    <meta content="https://azure.raily.app/files/og.jpg" property="og:image" />
    <meta content="Raily - Meets on the Move" property="twitter:title" />
    <meta
        content="Raily® - Meets on the move. The ultimate AI-driven social travel hub. Unleash the traveler in you with an AI-guided concierge designed to provide personalized bookings, while augmented reality and gamification turn your journey into a magical one. It&#x27;s not just an app - it&#x27;s a companion! Raily®. Connect, Travel, Friends."
        property="twitter:description" />
    <meta content="https://azure.raily.app/files/og.jpg" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/css/railybeta.webflow.5fc711443.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css" />
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad5758771455690c6cd002_favicon-32x32.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad57b8cfe4b6d03ca2342c_111.png"
        rel="apple-touch-icon" />
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-K0DRW11MFK"></script>
    <script
        type="text/javascript">window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('set', 'developer_id.dZGVlNj', true); gtag('config', 'G-K0DRW11MFK');</script>
    <!-- Стили чата -->
    <link rel="preload" href="https://embed.mottle.com/embed.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <!-- Стили видео-проигрывателя -->
    <link rel="preload" href="https://azure.raily.app/files/video-js.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <script src="{{asset('js/index.js')}}"></script>

    <!-- свайпер -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="body">

    @yield('content')

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64aceaf9cb10fc1c8e4efdbc"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/js/webflow.bc871d3a5.js"
        type="text/javascript"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"
        integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <script async id="ask-raily-script" data-src="https://embed.mottle.com/embed.js"></script>

    <!--swiper-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        $(".slider-main_component").each(function (index) {
            const swiper = new Swiper($(this).find(".swiper")[0], {
                speed: 700,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
                spaceBetween: "2%",
                pagination: {
                    el: $(this).find(".swiper-bullet-wrapper")[0],
                    bulletActiveClass: "is-active",
                    bulletClass: "swiper-bullet",
                    bulletElement: "button",
                    clickable: true
                },
                navigation: {
                    nextEl: $(this).find(".btn-next")[0],
                    prevEl: $(this).find(".btn-prev")[0],
                    disabledClass: "is-disabled"
                },
            });
        });
    </script>
</body>

</html>