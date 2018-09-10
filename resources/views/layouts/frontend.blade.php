<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400%7CRubik:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>
    
    @include('includes.header')

    @yield('content')

    @include('includes.footer')



<script src="{{ asset('app/js/jquery.min.js') }}"></script>
<script src="{{ asset('app/js/modernizr-custom.min.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
	<script>
		jQuery(".owl-carousel.owl-thumbs-2").owlCarousel({
			items   : 2,
			margin  : 30,
			nav     : true,
			navText : ['', ''],
			dots    : false,
			loop    : false,
			responsive : {
				0:{
					items: 1
				},
				768:{
					items: 2
				},
			}
		});
	</script>



<script src="{{ asset('js/toastr.min.js') }}"></script>

 <script>
    @if(Session::has('subscribed'))
        toastr.success("{{ Session::get('subscribed') }}");
    @endif
</script>
<!-- ...end JS Script -->

</body>
</html>
