</section>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Eneylton Barros</a>.</strong>
    eneylton@hotmail.com.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão </b> 2021
    </div>
  </footer>

  

</div>
<script>

var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
confirm_password.setCustomValidity("Senhas diferentes!");
} else {
confirm_password.setCustomValidity('');
}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script>
$('.carousel-indicators .active').removeClass('active');
</script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
 
const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach((wrap) => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });

  // setting bubble on DOM load
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;

  const min = range.min || 0;
  const max =  range.max || 100;

  const offset = Number(((val - min) * 100) / (max - min));

  bubble.textContent = val;

  // yes, 14px is a magic number
  bubble.style.left = `calc(${offset}% - 14px)`;
}

</script>

<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/plugins/sparklines/sparkline.js"></script>
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="assets/dist/js/adminlte.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script src="assets/dist/js/pages/dashboard.js"></script>
<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="assets/plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
</body>
</html>
