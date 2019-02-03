<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layouts.partials.head')
 	
 </head>
 
 <body>
 	
 	<div class="wrapper">
			@section('sidebar')
	  			@include('layouts.partials.nav')
	  		@show
	 <div class="row">
	  		@yield('content')
	  </div>		
	</div>
	</body>

 </body>
 
</html>