<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tiny content</title>
    
	<!-- Stylesheets -->

	<link href="{{asset('site/css/bootstrap.css')}} " rel="stylesheet">

	<link href="{{asset('site/css/all.min.css')}} " rel="stylesheet">
     
	<link href="{{asset('site/css/styles.css')}} " rel="stylesheet">

    <link href="{{asset('site/css/responsive.css')}} " rel="stylesheet">

    @stack('css')
    
</head>
<body>
    
  @include('site.layout.header')
      
    <div class="content-area-section ">
        <div class="row main_row ml-2 mr-2 mt-3 ">

        
           @yield('content')     
     


        </div>
    </div>

    @include('site.layout.footer')

	<!-- SCIPTS -->

    <script src="{{asset('site/js/jquery-3.1.1.min.js')}} "></script>
    
    <script src="{{asset('site/js/all.min.js')}} "></script>


    <script src="{{asset('site/js/bootstrap.js')}} "></script>
    
    @stack('js')

</body>
</html>