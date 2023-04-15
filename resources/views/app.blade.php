<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aastha</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="/storage/assets/img/favicon.png" rel="icon">
        <link href="/storage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        @routes

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/storage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/storage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/storage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/storage/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="/storage/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="/storage/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="/storage/assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/storage/assets/css/style.css" rel="stylesheet">

        @vite([
            'resources/js/app.js',
            "resources/js/assets/vendor/apexcharts/apexcharts.min.js",
            "resources/js/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
            "resources/js/assets/vendor/chart.js/chart.umd.js",
            "resources/js/assets/vendor/echarts/echarts.min.js",
            "resources/js/assets/vendor/quill/quill.min.js",
            "resources/js/assets/vendor/simple-datatables/simple-datatables.js",
            "resources/js/assets/vendor/tinymce/tinymce.min.js",
            "resources/js/assets/vendor/php-email-form/validate.js",
            "resources/js/assets/js/main.js",
            ])
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>
