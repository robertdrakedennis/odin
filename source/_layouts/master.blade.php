<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="title" content="Odin - Hosting Revolutionized">
    <meta name="description" content="Bring your hosting company to the next level. We'll take you to the top.">
    <meta name="keywords" content="Game Hosting, Company Game Hosting, Hosting, Game Panel, Game Community, Community, Odin, Pterodactyl Panel, Quub, Quub LTD">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Quub LTD">

    <meta property="og:site_name" content="Quub LTD - Odin">
    <meta property="og:title" content="Hosting Revolutionized">
    <meta property="og:description" content="Experience the next level in hosting software.">
    <meta property="og:url" content="https://odin.quub.io">
    <meta property="og:type" content="product">

    <meta content="summary_large_image" name="twitter:card">
    <meta content="@quub_io" name="twitter:site">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#A61B1B">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#A61B1B">
    <meta name="msapplication-config" content="assets/images/browserconfig.xml">
    <meta name="theme-color" content="#A61B1B">

    <title>Odin - Hosting Revolutionized</title>

    <!-- Scripts -->
    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="font-sans relative w-full h-full m-0 p-0 font-normal antialiased text-gray-900">
<div id="app__odin">
    <header class="container mx-auto p-4 flex items-center justify-between mb-16 mt-10">
        <a href="#" class="mr-auto flex items-center">
            <img src="assets/images/quub_box_odin.svg" class="h-10 w-10 mr-0 md:mr-3" alt="logo">
            <img src="assets/images/odin_logo_text.svg" class="hidden md:block align-middle h-12 w-auto max-w-full" alt="logo">
        </a>

        <div class="flex items-center">
            <a href="https://dashboard.quub.io/register" class="hidden md:inline-flex items-center text-primary-100 ml-5">Register</a>
            <a href="https://dashboard.quub.io/login" class="inline-flex items-center text-white text-lg font-medium bg-primary-900 font-medium px-5 py-2 rounded-lg mr-5 md:ml-8 md:mr-0">Login</a>
        </div>
    </header>
    @yield('body')

    <footer class="text-center text-primary-100">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,165.3C384,181,480,171,576,181.3C672,192,768,224,864,229.3C960,235,1056,213,1152,192C1248,171,1344,149,1392,138.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>

        <div class="flex items-center justify-between text-sm text-left px-4 py-6 max-w-5xl mx-auto">
            <ul>
                <li>
                    Quub LTD
                </li>
                <li>
                    International House, 24 Holborn Viaduct, London,
                </li>
                <li>
                    United Kingdom, EC1A 2BN
                </li>
                <li>
                    <a href="https://beta.companieshouse.gov.uk/company/12182740">
                        Company Number - 12182740
                    </a>
                </li>
            </ul>

            <div>
                <img src="assets/images/quub_box_white.svg" class="h-10 w-10" alt="logo">
            </div>
        </div>
    </footer>
</div>
</body>
</html>
