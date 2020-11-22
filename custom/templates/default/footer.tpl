<footer class="footer footer-simple">
            <div class="container">
              <div class="copyright">
                &copy; 2020-
                <script>
                  document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="https://www.creative-tim.com/" target="_blank" class="copyright-link">Creative Tim</a>. Coded by <a href="https://nntworks.fun">NNT Works</a>.
              </div>
            </div>
          </footer>
</div>
<!--<endora></endora>-->
<!--   Core JS Files   -->
<script src="../../custom/templates/default/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../../custom/templates/default/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../custom/templates/default/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../../custom/templates/default/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../custom/templates/default/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../../custom/templates/default/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
<script src="../../custom/templates/default/assets/js/plugins/slick.js" type="text/javascript"></script>
<!--  Plugin for the blob animation -->
<script src="../../custom/templates/default/assets/js/plugins/anime.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="../../custom/templates/default/assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../../custom/templates/default/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../../custom/templates/default/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../custom/templates/default/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../../custom/templates/default/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../custom/templates/default/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="../../custom/templates/default/assets/demo/demo.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../buttons.github.io/buttons.js"></script>
<script src="../../custom/templates/default/assets/js/blk-design-system-pro.mine209.js?v=1.0.0" type="text/javascript"></script>
<!-- Sharrre libray -->
<script src="../../custom/templates/default/assets/demo/jquery.sharrre.js"></script>
<script>
$(document).ready(function() {

  // Facebook Pixel Code Don't Delete
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window,
    document, 'script', '../../connect.facebook.net/en_US/fbevents.js');

  try {
    fbq('init', '111649226022273');
    fbq('track', "PageView");

  } catch (err) {
    console.log('Facebook Track Error:', err);
  }


  //
  //

});
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<script>
$(document).ready(function() {
  blackKit.initDatePicker();
  blackKit.initSliders();
});

function scrollToDownload() {

  if ($('.section-download').length != 0) {
    $("html, body").animate({
      scrollTop: $('.section-download').offset().top
    }, 1000);
  }
}
$('#twitter').sharrre({
  share: {
    twitter: true
  },
  enableHover: false,
  enableTracking: false,
  buttons: {
    twitter: {}
  },
  click: function(api, options) {
    api.simulateClick();
    api.openPopup('twitter');
  },
  template: '<i class="fab fa-twitter"></i>',
  url: 'http://demos.creative-tim.com/blk-design-system/index.html'
});

$('#facebook').sharrre({
  share: {
    facebook: true
  },
  buttons: {
    facebook: {}
  },

  enableHover: false,
  enableTracking: false,
  click: function(api, options) {
    api.simulateClick();
    api.openPopup('facebook');
  },
  template: '<i class="fab fa-facebook-square"></i>',
  url: ' http://demos.creative-tim.com/blk-design-system/index.html'
});
</script>
<script src="../../cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
window.TrackJS &&
  TrackJS.install({
    token: "ee6fab19c5a04ac1a32a645abde4613a",
    application: "black-dashboard-pro"
  });
</script>
</body>

</html>
