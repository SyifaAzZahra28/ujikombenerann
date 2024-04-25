<!DOCTYPE html>
<html lang="en">
<head>
  .
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset ('assetss/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset ('assetss/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset ('assetss/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{asset ('assetss/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{asset ('assetss/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{asset ('assetss/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset ('assetss/css/style.css') }}">
  <link rel="stylesheet" href="{{asset ('assetss/css/components.css') }}"> 

  <link rel="stylesheet" href="{{asset ('assets/css/templatemo-style.css') }}">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    @include('admin.bagian.navbar')
    @include('admin.bagian.sidebar')
    <div class="main-content">
      <section class="section">
    @yield('content')
      </section>
    </div>
    {{-- @include('admin.bagian.footer')  --}}


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script> 
<script src="{{asset ('assets/js/plugins.js') }}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
<!-- General JS Scripts -->
  <script src="{{asset ('assetss/modules/jquery.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/popper.js') }}"></script>
  <script src="{{asset ('assetss/modules/tooltip.js') }}"></script>
  <script src="{{asset ('assetss/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/moment.min.js') }}"></script>
  <script src="{{asset ('assetss/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset ('assetss/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/chart.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{asset ('assetss/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{asset ('assetss/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset ('assetss/js/page/index.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset ('assetss/js/scripts.js') }}"></script>
  <script src="{{asset ('assetss/js/custom.js') }}"></script>
</body>
</html>