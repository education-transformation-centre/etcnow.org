<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased overflow-hidden">
    @yield('hero')
    <div class="container">
        @yield('body')
    </div>

    <script src="static/scripts/testimonials.js"></script>

    <footer class="footer center-text">
        <section class="section contact">
            <h2>Contact Us</h2>
            <span>Email:
                <a href="mailto:info@etcnow.org">info@etcnow.org</a></span>
            <span>Phone: <a href="tel:434-484-0964">(434) 484-0964</a></span>
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
    </footer>
</body>

</html>