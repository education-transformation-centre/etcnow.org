<!DOCTYPE html>
<html class="overflow-x-hidden" lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="text-gray-900 font-sans antialiased">
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