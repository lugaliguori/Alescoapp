<!DOCTYPE html>
 
<html lang="en">
 
 <head>
 
   @include('layouts.partials.head')
 	
 </head>
 
 <body>
 	<div class="row">
	 	<div id="sidebar" class="col-3">
			@section('sidebar')
	  			@include('layouts.partials.nav')
	  		@show
	  	</div>	
	</div>  
	   <div id="main" class="col-6">
	  		@yield('content')
	  </div>


 </body>
 
</html>