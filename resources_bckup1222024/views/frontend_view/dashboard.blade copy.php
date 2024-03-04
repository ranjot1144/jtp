@extends('frontend_view.layouts.layout')
    @section('content')

            
            <section class="site-section-hero bg-image" style="background-image: url('../assets/images/image1.png'); opacity:0.9" data-stellar-background-ratio="0.5" id="section-home">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-7 text-center">
                          <h1 class="text-white heading" data-aos="fade-right">Your Specialist</h1>
                          <h1 class="themeTextColor heading" data-aos="fade-up">Test Strip & Filteration</h1>
                          <h1 class="text-white heading" data-aos="fade-up">Manufacturer</h1>
                            
                            <p class='button-margin-15 text-white' data-aos="fade-up" data-aos-delay="300">We Gurantee, High, Quality Product</p>
                              <!-- <a href="#section-contact" class="btn btn-primary btn-md smoothscroll">Learn More</a> -->

                              <div class="search-container" style="position: relative;width: 400px;margin: auto;">
                                <input type="text" class="search-input" placeholder="Search..." style="width: 100%;padding: 10px 25px;box-sizing: border-box;border: 1px solid #ccc;border-radius: 29px;outline: none; background:transparent; color:#fff;">
                                <div class="search-icon" style="position: absolute;top: 50%;right: 10px;transform: translateY(-50%);cursor: pointer;">&#128269;</div>
                              </div>

                              <div class="arrow_icon floating"> <a href="#about-us"><img src="{{ asset('assets/images/chevron-down.svg') }}"/></a></div>
                    </div>
                </div>
            </section>

            <!-- <div class="container-fluid"> -->
              
                <section class="row align-items-stretch photos gradient-right-to-left" id="about-us">
                    <div class="container">
                      <div class="row columns_margin_bottom_20">

                        <div class="col-md-4 col-sm-6">
                          <div class="teaser hover_icon text-center">
                            <div > 
                              <img class='image-50' src="{{ asset('assets/images/related_image/UK_Manufacturing_c.png') }}"> </div>
                              <h3 class="topmargin_20 hover-color2">Since 1938 </h3>
                              <p>of UK Manufacturer</p> 
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="teaser hover_icon text-center">
                            <div > 
                              <img class='image-50' src="{{ asset('assets/images/related_image/established_brand_c.png') }}"> 
                            </div>
                            <h3 class="topmargin_20 hover-color2">49 Countries </h3>
                              <p>Established Brand</p> 
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                          <div class="teaser hover_icon text-center">
                            <div > 
                              <img class='image-50' src="{{ asset('assets/images/related_image/certified_specialists_c.png') }} " style="width:40%;"> 
                            </div>
                            <h3 class="topmargin_20 hover-color2">High Quality </h3>
                              <p>Ceritified Specialist</p>
                          </div>
                        </div>

                        <div class="col-md-12 text-center sidebar-box">
                          <a href="#section-contact" class="btn btn-primary btn-md white-border-col text-white">Learn More</a>
                        </div>

                      </div>
                    </div>
                </section>
                





<section class="intro_section" id="slider">

  <div id="carousel-thumb" class="carousel carousel-thumbnails slide" data-ride="carousel" data-interval="15000">
        <div class="carousel-inner" role="listbox">
              <!-- <div class="carousel-item active carousel-banner"> -->
              <div class="carousel-item active">
                <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/slider_1.png')}}" alt="First slide">
                      <div class="row carousel-ban-text-adj">
                  <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elito. </p>
                    <a href="/internet" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/slider_2.png')}}" alt="Second slide">
                      <div class="row carousel-ban-text-adj">
                  <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elite. </p>
                    <a href="/internet" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 carousel-img-fit" src="{{URL('assets/images/slider_3.png')}}" alt="Third slide">
                <div class="row carousel-ban-text-adj">
                  <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <a href="/#" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                  </div>
                </div>
              </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
          <li data-target="#carousel-thumb" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-thumb" data-slide-to="1"></li>
          <li data-target="#carousel-thumb" data-slide-to="2"></li>
        </ol>
  </div>
</section>












                
               


                <section class="site-section lighter-bg" id="meet">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-12 text-center general-text-color">
                          <h2 class="heading">How can we meet your needs ?</h2>
                          <p>We are commited to supply all industries testing requirements <br/>through continual research and development.</p>
                        </div>

                        <div class="col-md-12 text-center">
                        
                          <figure class="mb-12">
                              
                              <div class="row columns_margin_bottom_20">
                              <?php if($range_data) {
                                      for($i=0;$i<count($range_data)-1;$i++) { ?>

                                    <div class="col-md-3">
                                      <div class="img_hover_color">
                                        <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow">
                                        <div class="overlay">
                                          <div class="text">
                                              <a href="{{ URL('product/'.$range_data[$i]->range_url) }}" class="btn btn-primary btn-md white-border-col text-white">Explore</a>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="range_name">
                                          <label style="margin:20px;font-weight:700;">{{ $range_data[$i]->range_name }}</label>
                                        </div>
                                    </div>
                                <?php } } ?>

                                <div class="col-md-3">
                                  <div class="img_hover_color">
                                    <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow">
                                    <div class="overlay">
                                      <div class="text">
                                          <a href="{{ URL('frontend/product/catalouge') }}" class="btn btn-primary btn-md white-border-col text-white">Explore</a>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="another-text">
                                      <label style="margin:20px;font-weight:700;">Catalouges</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="img_hover_color">
                                    <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow">
                                    <div class="overlay">
                                      <div class="text">
                                          <a href="{{ URL('frontend/product/news') }}" class="btn btn-primary btn-md white-border-col text-white">Explore</a>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="another-text">
                                      <label style="margin:20px;font-weight:700;">News & Developments</label>
                                    </div>
                                </div>
                                <!--<div class="col-md-3" style="width:25%;">
                                  <div class="img_hover_color">
                                    <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow">
                                    <div class="overlay">
                                      <div class="text">
                                          <a href="#section-contact" class="btn btn-primary btn-md white-border-col text-white">Learn More</a>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="another-text">
                                      <label style="margin:20px;font-weight:700;">Rapid Test</label>
                                    </div>
                                </div> -->

                            <!-- <div class="col padding-top-bot-40">
                              <div class="img_hover_color">
                                <a href="{{  url('frontend/filteration/filter-paper/qualitative') }}">
                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                      <div class="overlay">
                                        <div class="text">
                                            <a href="#section-contact" class="btn btn-primary btn-md white-border-col text-white">Learn More</a>
                                        </div>
                                      </div>
                                </a>
                              </div>  
                                <div class="another-text">
                                  <label style="margin:20px;font-weight:700;">Rapid Test</label>
                                </div>  
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="{{  url('frontend/filteration/filter-paper/quantitative') }}">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500">Quantitative</label>
                              </a>
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500">Environmental Monitoring</label>
                              </a>
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500">Chromatography & Blotting Papers</label>
                              </a>
                            </div> -->




                              </div>
                            
                            </figure>
                        </div>

                      </div>
                    </div>
                </section>


                <section class="site-section-hero bg-image" style="background-image: url(&quot;../assets/images/left_side_bar.png&quot;); height: 10vh; background-position: 50% 0px; min-height:150px;" data-stellar-background-ratio="0.5" id="home-border"> </section>

                <!-- @include('frontend_view.layouts.footer') -->
                
            </div>
    @endsection