<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>Drodo - Emergency Medical Supply HTML Template</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

</head>
<body>

  @include('layout.header')
  @include('layout.navbar')

	@yield('content')    

  <footer>
       <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <p>Copyright <i class='bx bx-copyright'></i> 2020 <a> Shop store.</a></p>
                    </div> 
                </div>
            </div>
        </div>
    </footer>  
        

 
        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>