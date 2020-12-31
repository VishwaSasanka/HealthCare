<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      @include('blade-scafolding.partials.head')
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="<?php echo url('/'); ?>/images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         @include('blade-scafolding.partials.header')
      </header>

      <div class="form" style="margin-top: 150px;">
      @yield('content')
      </div>

      <footer id="footer" class="footer-area wow fadeIn">
         @include('blade-scafolding.partials.footer')
      </footer>

      <div class="copyright-area wow fadeIn"  style="background:#C71585;">
         @include('blade-scafolding.partials.copyright')
      </div>
      <!-- end copyrights -->

      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      @include('blade-scafolding.partials.script')
   </body>
</html>
