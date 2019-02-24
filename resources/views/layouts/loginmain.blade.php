<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layouts.partials.login-head')
 	
 </head>
 
 <body class="gray-bg">

	  <div id="main"">
	  		@yield('content')
	  </div>


 </body>
 
<footer>
 	@section('footer')
 		@include('layouts.partials.footer')
 	@show
 </footer>	
 
</html>