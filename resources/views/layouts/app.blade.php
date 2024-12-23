  <!DOCTYPE html>
  <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template-free">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>@yield('title')</title>
      <meta name="description" content="" />

      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

      <!-- Core CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

      <!-- Helpers -->
      <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!-- Config -->
      <script src="{{ asset('assets/js/config.js') }}"></script>
     
    </head>
    <body>
      <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Menu -->
          @include('partials.sidebar')
          <!-- / Menu -->

          <!-- Content -->
          <div class="layout-page">
            @include('partials.header')  {{-- Include header --}}
            @yield('content')
            @include('partials.footer')  {{-- Include footer --}}
          </div>
          <!-- / Content -->

        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>

      <!-- JavaScript files -->
      <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
      <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
  </html>
