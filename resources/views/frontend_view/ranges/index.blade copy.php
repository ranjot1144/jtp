@extends('frontend_view.layouts.layout')
    @section('content')

    
    @include('frontend_view.layouts.breadcrumb_nav')
    <!-- <main class="main-content"> -->
<div class="container-fluid">
                
<section class="intro_section" id="about_slider">

  <div id="carousel-thumb" class="carousel carousel-thumbnails slide" data-ride="carousel" data-interval="15000">
        
        <div class="carousel-inner" role="listbox" style="height: 710px; width: 100%; overflow: hidden;">
              <!-- <div class="carousel-item active carousel-banner"> -->
            <div class="carousel-item active">
              <img class="carousel-img-fit" src="{{URL('assets/images/slider_1.png')}}" alt="First slide" style="max-height:730px !important;">
              <div class="row carousel-ban-text-adj">
                <div class="row col-12">
                  <h1 class="col-12 carousel-header-adj heading"><?php 
                    if(!empty($range_pro_data) && isset($range_pro_data)) {
                      echo $range_pro_data[0]->range_name;
                    } ?>
                  </h1>
                  <h1 class="col-12 carousel-header-adj heading themeTextColor">Quick Accurate & Easy </h1>
                  <h1 class="col-12 carousel-header-adj heading">Industry leading results</h1>
                  <h1 class="text-white heading aos-init aos-animate" data-aos="fade-right">Your Specialist</h1>
                </div>
              </div>
            </div>
            
            <div class="carousel-item ">
              <img class="carousel-img-fit" src="{{URL('assets/images/slider_2.png')}}" alt="Second slide" style="max-height:730px !important;">
                    <div class="row carousel-ban-text-adj">
                <div class="row col-12">
                  <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                  <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elite. </p>
                  <a href="/internet" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <img class="carousel-img-fit" src="{{URL('assets/images/slider_3.png')}}" alt="Third slide" style="max-height:730px !important;">
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



                <section class="site-section lighter-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12 text-center general-text-color">
                            <h2 class="heading">Our Range</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor<br/>invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                          </div>
                        
                        <div class="col-md-12">
                          <div class="card">
                              
                              <div class="card-header">
                                <ul class="nav nav-tabs navmenu">
                                  <?php 
                                  if(!empty($range_pro_data) && isset($range_pro_data)) {
                                        //print_r($range_pro_data[0]->range_name);
                                    ?>
                                    <!-- <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers active" data-myAttri="tab-1">
                                      <a  href="#tab-1" class="nav-link">{{ $range_pro_data[0]->range_name }}</a>
                                    </li> -->

                                    <!-- <li class="col-md-4 text-center" data-myAttri="tab-1">
                                      <a  href="#tab-1" class="nav-link">{{ $range_pro_data[0]->range_name }}</a>
                                    </li> -->
                                  <?php } ?>


                                  <!--<li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Filtration</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Water Analysis</a>
                                  </li>-->
                                </ul>

                              </div>

                              <div class="card-body" id='tab-1-active'>
                                        <div class="row text-center">

  <?php
  $col_val=  '';
  if(!empty($range_pro_data) && isset($range_pro_data) ) {
    $col_val = count($range_pro_data);
    if($col_val==1) {
      $col_val = '12';
    }else if($col_val==2) {
      $col_val = '6';
    } else if($col_val==3){ 
      $col_val = '4';
    } else{
      $col_val = '3';
    }

    foreach($range_pro_data as $range) {
        if(!empty($range->prod_name)) {
          $url_ranges_page = str_replace(' ', '_', $range->range_name);
          if($range->prod_name=='jQuant') {
            $range->prod_name = 'jQuant Semi&#174; <br/>Quantitative Test';
          } ?>
          <div class="col-md-{{$col_val}} padding-top-bot-40 ranges_prod">
            <a href="{{ url('frontend/product_page/'.$url_ranges_page.'/'.$range->id) }}">
              <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid tab_hover">
              <label class="margin-top-10 font-weight-500 general-text-color">{{$range->prod_name}}</label>
            </a>
          </div>
       <?php }
    }
  }
  ?>



                                      </div>
                              </div>

                              <div class="card-body" id='tab-2-active' style="display:none;">
                                    <div class="row text-center">

<?php                                  
  foreach($range_pro_data as $range) {
      if($range->range_id=='2') {

        $url = url("frontend/product_page/".$range->range_name."/".$range->id);
        echo '<div class="col padding-top-bot-40 ranges_prod">
          <a href="'.$url.'">
          <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
          <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">'.$range->prod_name.'</label>
        </a>
      </div>';
      }
    }
?>
                                        <!-- <div class="col padding-top-bot-40">
                                          <a href="{{ URL('frontend/filteration/filter-paper');}}">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Filter Papers</label>
                                          </a>
                                        </div>
                                        <div class="col padding-top-bot-40">
                                          <a href="">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Extraction Thimbles</label>
                                          </a>
                                        </div>
                                        <div class="col padding-top-bot-40">
                                          <a href="">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Membranes</label>
                                          </a>
                                        </div>
                                        <div class="col padding-top-bot-40">
                                          <a href="">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Syring Filters</label>
                                          </a>
                                        </div> -->


                                    </div>
                              </div>

                              <div class="card-body" id='tab-3-active' style="display:none;">
                                    <div class="row text-center">
                                        <div class="col padding-top-bot-40">
                                          <a href="{{ URL('frontend/filteration/filter-paper');}}">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Vtkolor&#174; <br/>Visual Test Kits</label>
                                          </a>
                                        </div>

                                        <div class="col padding-top-bot-40">
                                          <a href="">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Check2o&#174; <br/>Pool & Spa Test Strips</label>
                                          </a>
                                        </div>
                                        <div class="col padding-top-bot-40">
                                          <a href="">
                                            <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                            <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Chec2o&#174; <br/>Aquarium Test Strips</label>
                                          </a>
                                        </div>
                                    </div>
                              </div>

                          </div>
                        </div>

                        
                      </div>
                    </div>
                </section>



                <section class="site-section-hero bg-image" style="background-image: url('../assets/images/img_9.jpg'); height:60vh;" data-stellar-background-ratio="0.5" id="section-home">
                  
                  <div class="row justify-content-center align-items-center" style="height:30vh;">
                      <div class="col-md-7 text-white text-center">
                            <h1 class="heading bold-text" data-aos="fade-right"> Products By Industry Sectors</h1>
                              <p class='button-margin-15' data-aos="fade-up" data-aos-delay="300">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor<br/>invidunt ut labore et dolore magna aliquyam erat, sed diam.
                              </p>
                      </div>

                      <div class="col-md-12">


                        <div class="owl-carousel slide-one-item home-slider">
                            <!-- <div class="testimony text-center px-md-4">
                              <figure class="mx-auto d-inline-block"> -->
                                <div class="item">
                                  <img src="{{ asset('../assets/images/person_1.jpg') }}" alt="Image" class="mx-auto img-fluid w-50">
                                </div>
                                <div class="item">
                                  <img src="{{ asset('../assets/images/person_2.jpg') }}" alt="Image" class="mx-auto img-fluid w-50">
                                </div>
                                <div class="item">
                                  <img src="{{ asset('../assets/images/person_3.jpg') }}" alt="Image" class="mx-auto img-fluid w-50">
                                </div>
                                <div class="item">
                                  <img src="{{ asset('../assets/images/person_4.jpg') }}" alt="Image" class="mx-auto img-fluid w-50">
                                </div>
                                <div class="item">
                                  <img src="{{ asset('../assets/images/person_5.jpg') }}" alt="Image" class="mx-auto img-fluid w-50">
                                </div>
                              <!-- </figure>
                            </div> -->
                          
                          <!-- <div class="testimony text-center px-md-4">
                            <figure class="mx-auto d-inline-block">
                              <img src="{{ asset('../assets/images/person_3.jpg') }}" alt="Image" class="mx-auto img-fluid w-25 rounded-circle">
                            </figure>
                          </div> -->
                        </div>
                      </div>

                    </div>
                </section>

               @include('frontend_view.layouts.contact_section')
                
            </div>
        <!-- </main> -->
    @endsection