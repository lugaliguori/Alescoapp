<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layouts.partials.head')
 	
 </head>
 
 <body>
 	

			@section('sidebar')
	  			@include('layouts.partials.nav-admin')
	  		@show

		  	@yield('content')



 </body>
  <footer>
 	@section('footer')
 		@include('layouts.partials.footer')
 	@show
 </footer>	

</html>