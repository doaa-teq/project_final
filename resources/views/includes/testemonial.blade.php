<body>

    
<div class="site-wrap" id="home-section">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  

  
  <div class="hero inner-page" style="background-image: url('{{asset('assets/images/hero_1_a.jpg')}}');">
    
    <div class="container">
      <div class="row align-items-end ">
        <div class="col-lg-5">

          <div class="intro">
            <h1><strong>Testimonial</strong></h1>
            <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>testimonial</strong></div>
          </div>

        </div>
      </div>
    </div>
  </div>

<div class="site-wrap" id="home-section">

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>
<div class="hero inner-page" style="background-image: url('{{asset('assets/images/hero_1_a.jpg')}}')">
      <div class="site-section bg-light">
      <div class="container">
        
        <div class="row">
        @foreach($testimonial as $tes)
          <div class="col-lg-4 mb-4">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>{{$tes->content}}</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="{{asset('assetss/images/' . $tes->image)}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">{{$tes->title}}</span>
                  <span>{{$tes->position}}</span>
                </div>
              </div>
            </div>
          </div>
        @endforeach 
 
