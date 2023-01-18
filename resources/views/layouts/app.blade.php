<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ======== Page title ============ -->
    <title>{{config('app.name')}} - {{$title?? "Report Fraudulent E-commerce Vendors"}}</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('theme/assets/img/favicon.png')}}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/icons.css')}}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/animate.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.css')}}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/metismenu.css')}}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/owl.theme.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('theme/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/progress_timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    @vite(['resources/css/toastr.css', 'resources/js/toastr.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    
</head>

<body class="body-wrapper">    
    
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <div class="txt-loading">
                   @foreach(str_split(strtoupper(config('app.name'))) as $char)
                        <span data-text-preloader="{{$char}}" class="letters-loading">
                            {{$char}}
                        </span>
                   @endforeach                    
                </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- welcome content start from here -->

    <header class="header-wrap header-2">
        <div class="top-header d-none d-md-block">
            <div class="container-flud">
                <div class="row">
                    <div class="col-md-7 pr-md-0 col-12">
                        <div class="header-cta">
                            <ul>
                                <li>
                                  <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i> support@gmail.com</a>
                                </li>
                                <li>
                                  <a href="tel:+8801700080702"><i class="fal fa-phone"></i> +012 (345) 67 89</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-right-cta d-flex justify-content-end">
                            <div class="social-profile mr-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            |
                            <div class="lan-select ml-30">
                                <form>
                                    <select id="lan">
                                        <option>English</option>
                                        <option>China</option>
                                        <option>Bangla</option>
                                        <option>Hindi</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-navigation-menu/>
    </header> 
    <section class="page-banner-wrap bg-cover" style="background-image: url('assets/img/page-banner.jpg')">
        <div class="banner-text">{{config('app.name')}}</div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <div class="page-heading text-white">
                        <div class="page-title">
                            <h1>{{$page_title?? ""}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          {{ $breadcrumb_items?? ""}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>   
    <main>
        @if ($errors->any())
            <div class="bg-red-300 text-red-700 p-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  
        @if (session('error'))
            <div class="bg-red-200 text-red-700 p-2 font-bold mb-2 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-200 text-green-700 p-2 font-bold mb-2 rounded">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}    
    </main>
    <x-footer-menu/>

    @stack('modals')

    @livewireScripts

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/imageload.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/easypiechart.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/counterup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/metismenu.js')}}"></script>
    <script src="{{asset('theme/assets/js/timeline.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/ajax-mail.js')}}"></script>
    <script src="{{asset('theme/assets/js/active.js')}}"></script>
      <!-- https://github.com/CodeSeven/toastr -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
           $(document).ready(function(){
                $('#table_cid').DataTable({

                    buttons: [
                        'copy', 'excel', 'pdf'
                    ]
                });
               
               toastr.options = {
                   "closeButton": true,
                   "debug": false,
                   "newestOnTop": true,
                   "progressBar": true,
                   "positionClass": "toast-top-right",
                   "preventDuplicates": true,
                   "onclick": null,
                   "showDuration": "50000",
                   "hideDuration": "1000",
                   "timeOut": "5000",
                   "extendedTimeOut": "1000",
                   "showMethod": "slideDown",
                   "hideMethod": "slideUp",
                   "closeMethod": "slideUp"
               }

               window.addEventListener('success', event => {
                   toastr.success(event.detail.message?event.detail.message:"success");
               });

               window.addEventListener('error', event => {
                   toastr.error(event.detail.message?event.detail.message:"error");
               });

               window.addEventListener('info', event => {
                   toastr.info(event.detail.message?event.detail.message:"info");
               });

               window.addEventListener('warning', event => {
                   toastr.warning(event.detail.message?event.detail.message:"warning");
               });                   

            //    $('#summernote').summernote();
           }); 
           
       </script>
</body>

</html>