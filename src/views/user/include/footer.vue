<template>
<!--   Core JS Files   -->
<script src="<%= BASE_URL %>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<%= BASE_URL %>assets/js/core/popper.min.js"></script>
<script src="<%= BASE_URL %>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<%= BASE_URL %>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<%= BASE_URL %>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<%= BASE_URL %>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="<%= BASE_URL %>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<%= BASE_URL %>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<!-- <script src="assets/js/plugin/chart-circle/circles.min.js"></script> -->

<!-- Datatables -->
<script src="<%= BASE_URL %>assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<%= BASE_URL %>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<%= BASE_URL %>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<%= BASE_URL %>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="<%= BASE_URL %>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<%= BASE_URL %>assets/js/atlantis.min.js"></script>

<script type="text/javascript" src="<%= BASE_URL %>assets/webcamjs/webcam.min.js"></script>

<script src="<%= BASE_URL %>assets/js/customFunction.js"></script>
<script src="<%= BASE_URL %>assets/js/helpers.js"></script>

<script>
    var $window = $(window);
    $window.on("load", function() {
        // Preloader
        $(".preloader").fadeOut(500);
    });
</script>
</template>
