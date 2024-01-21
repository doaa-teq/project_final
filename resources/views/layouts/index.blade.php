<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
   <div class="site-wrap" id="home-section">  
     @include('includes.header')
     
      @yield('content')
      
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        
    </div>
    @include('includes.footer')
</body>

</html>