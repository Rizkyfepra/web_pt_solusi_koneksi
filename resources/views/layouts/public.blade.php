<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - PT Solusi Koneksi Anda</title>
  @include('partials.tailwind-cdn')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="font-sans text-slate-800 antialiased @yield('bodyClass', 'flex flex-col min-h-screen bg-white')">

  @include('partials.navbar')

  @yield('content')

  @hasSection('customFooter')
    @yield('customFooter')
  @else
    @include('partials.footer')
  @endif

  @stack('scripts')

</body>
</html>
