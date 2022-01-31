<!DOCTYPE html>
<html class="overflow-x-hidden" lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">

    @if($production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJ5YQ51QFJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VJ5YQ51QFJ');
    </script>
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4e9b4d">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="text-gray-900 font-sans antialiased overflow-x-hidden">
    @yield('body')

    <footer class="py-10 text-center bg-brown-dark text-white">
        <div class="container">
            <section class="mb-3">
                <h2 class="mt-0">Contact Us</h2>
                <div class="text-lg font-bold">
                    <div>Email:
                        <a href="mailto:info@etcnow.org">info@etcnow.org</a>
                    </div>
                    <div>Phone: <a href="tel:434-484-0964">(434) 484-0964</a></div>
                </div>
            </section>
            <section class="section">
                <p>
                    Education Transformation does not and shall not discriminate
                    on the basis of race, color, religion (creed), gender,
                    gender expression, age, national origin (ancestry),
                    disability, marital status, sexual orientation, or military
                    status, in any of its activities or operations.
                </p>
            </section>
        </div>
    </footer>
</body>

</html>