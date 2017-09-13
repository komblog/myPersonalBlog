<!DOCTYPE html>
<html lang="en">
  @include('layouts.header')
  <body>
    @include('layouts.nav')
    @yield('header-home')
    <div class="container">
   		<div class="row">
     		<div class="col-lg-9 col-md-10">   			
    			@yield('content')
    		</div>
        <div class="col-lg-2 col-md-1 mx-auto">          
          @include('layouts.sidebar')
        </div>
    	</div>
    </div>
    <hr>
    @include('layouts.footer')
  </body>
</html>
