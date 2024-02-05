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
            <h1><strong>Listing</strong></h1>
            <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>listing</strong></div>
          </div>

        </div>
      </div>
    </div>
  </div>     
       <div class="site-section bg-light">
            <div class="container">
                

                <div class="row">
                    @foreach($car as $cars)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                            <img src="{{ asset('assetss/images/' . $cars->image) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $cars->title }}</h3>
                                <div class="rent-price">
                                    <strong>{{ $cars->price }}</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Luggage:</span>
                                        <span class="number">{{ $cars->Luggage }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Doors:</span>
                                        <span class="number">{{ $cars->Doors }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Passenger:</span>
                                        <span class="number">{{ $cars->Passengers }}</span>
                                    </div>
                                </div>
                                <div>
                                    <p>{{ $cars->description }}</p>
                                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                