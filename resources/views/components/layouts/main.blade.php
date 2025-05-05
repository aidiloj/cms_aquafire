<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" />
    <meta name="theme-name" content="Pinwheel" />
    <meta name="msapplication-TileColor" content="#000000" />
    <title>BobFire</title>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#fff" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#000" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="" />
    <meta name="description" content="meta description" />
    <meta name="author" content="{config.metadata.meta_author}" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <!-- twitter-title -->
    <meta name="twitter:title" content="" />

    <!-- twitter-description -->
    <meta name="twitter:description" content="" />

    <!-- og-image -->
    <meta property="og:image" content="" />

    <!-- twitter-image -->
    <meta name="twitter:image" content="" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- google font css -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap" rel="stylesheet" />

    <!-- styles -->

    <!-- Swiper slider -->
    <link rel="stylesheet" href="plugins/swiper/swiper-bundle.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="plugins/font-awesome/v6/brands.css" />
    <link rel="stylesheet" href="plugins/font-awesome/v6/solid.css" />
    <link rel="stylesheet" href="plugins/font-awesome/v6/fontawesome.css" />


    @vite(['resources/css/app.scss'])
</head>

<body>

    <x-partials.header/>

    {{$slot}}

    <x-partials.footer/>

    <!-- jQuery -->
    <!-- <script src="plugins/jquery/jquery.min.js"></script> -->
    <!-- Swiper JS -->
    <script src="plugins/swiper/swiper-bundle.js"></script>
    <script src="plugins/shufflejs/shuffle.js"></script>

    @vite(['resources/js/app.js'])
</body>

</html>