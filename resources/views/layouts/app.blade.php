<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Halal Lifestyle Information')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="mx-auto">
        <!-- Header -->
        @include('components.header')

        <!-- Konten Utama -->
        <div class="container mx-auto">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('components.footer')
    </div>
</body>
</html>
