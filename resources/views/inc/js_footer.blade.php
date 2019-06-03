
<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{asset('lib/pshopme/PHP/assets/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/pshopme/HTML/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/bootstrap-slider.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/echo.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/flatui-controls.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/wow.min.js')}}"></script>
<script src="{{asset('lib/pshopme/PHP/assets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
@if(Session::has('sm'))
<script>
toastr.options.positionClass = "{{$toasterpos}}";
toastr.warning("{{Session::get('sm')}}");
</script>

@endif