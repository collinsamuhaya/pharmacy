<!DOCTYPE html>
<html lang="en">

<head>
@include('user.header')
</head>

<body>
  <div class="site-wrap">
      <div class="site-navbar py-2">
         @include('user.navigation')
      </div>
      <div class="site-blocks-cover" style="background-image: url('../assets/images/hero_1.jpg');">
         @include('user.frontpage')
      </div>
      <div class="site-section">
         @include('user.mission')
      </div>

      <div class="site-section">
        @include('user.product')
      </div>
      <div class="site-section bg-light">
        @include('user.newproduct')
      </div>
      <div class="site-section">
        @include('user.personnel')
      </div>
      <div class="site-section bg-secondary bg-image" style="background-image: url('/assets/images/bg_2.jpg');">
        @include('user.banner')
      </div>
      <footer class="site-footer">
        @include('user.footer')
      </footer>
  </div>
        @include('user.css')

</body>

</html>