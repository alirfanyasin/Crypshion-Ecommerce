<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Crypshion">
  <meta name="description"
    content="Crypshon merupakan sebuah toko online penjualan fashion modern dengan menawarkan kualitas yang premium.">
  <meta name="keywords" content="e-commerce, technology, toko online, cryptocurrency, shipping,">
  <meta name="author" content="Irfan Yasin, Mario Achmad Taufik, Raihan Firdaus, Amore Purba">
  <meta name="robots" content="index, follow">
  <!-- Metadata untuk SEO (opsional) -->
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="noarchive">
  <meta name="robots" content="nosnippet">
  <meta name="robots" content="noindex, nofollow">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">

  <title>Crypshion - {{ $title ?? env('APP_NAME') }}</title>

  <!-- Favicon -->
  <link rel="icon" href="/img/logo/logo.ico" type="image/x-icon">

  {{-- Font Google Poppins --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  {{-- JQuery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  {{-- Midtrans --}}
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

  {{-- <link rel="stylesheet" href="/build/assets/app-Daw_HOnR.css"> --}}


  {{-- Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAFAFA]">



  @livewire('components.sub-navbar')
  @livewire('components.navbar')

  <main class="md:container-md">
    {{ $slot }}

  </main>

  @livewire('components.footer')



  {{-- Livewire Alert --}}
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  {{-- Iconify --}}
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>

  {{-- <script src="/build/assets/app-CvQSPBlQ.js"></script>
  <script src="/js/preline.js"></script> --}}


  {{-- Script JS --}}
  @stack('js')
</body>

</html>
