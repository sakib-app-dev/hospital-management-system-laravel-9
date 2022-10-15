 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('/')}}/assets/css/maicons.css">

  <link rel="stylesheet" href="{{asset('/')}}/assets/css/bootstrap.css">

  <link rel="stylesheet" href="{{asset('/')}}/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="{{asset('/')}}/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="{{asset('/')}}/assets/css/theme.css">

  <style>
      .tbl{
          padding: 10px 28px;
          font-size: 20px;
          
      }
      .tbl_color{
        background-color: bisque;
      }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  

    @include('user.menu')




    @yield('content')



    @include('user.banner_android_app')
    @include('user.footer')


<script src="{{asset('/')}}/assets/js/jquery-3.5.1.min.js"></script>

<script src="{{asset('/')}}/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('/')}}/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="{{asset('/')}}/assets/vendor/wow/wow.min.js"></script>

<script src="{{asset('/')}}/assets/js/theme.js"></script>
  
</body>
</html>