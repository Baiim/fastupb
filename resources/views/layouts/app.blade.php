<!DOCTYPE html>
<html class="wide" lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('includes.style')
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div id="home" class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Section Header Default-->
        @include('includes.navbar')
      <!-- Section Swiper Slider-->
      <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
        <!-- Waves-->
        <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
        <!-- Swiper Content-->
    @yield('content')
            {{-- Section Lomba --}}
            @include('includes.lomba')
            <!-- Section Who Is Speaking-->
            @include('includes.guest')
            <!-- Section Conference Schedule-->
            @include('includes.jadwal')
            <!-- Section Official Sponsors-->
            @include('includes.sponsor')
        <!-- Swiper Slider Absolute-->
      <!-- Footer Classic-->
      @include('includes.footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="block-with-svg-gradients">
      <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
          <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
            <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
          </lineargradient>
        </defs>
      </svg>
    </div>
    @include('includes.script')
  </body>
</html>
