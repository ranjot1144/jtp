@extends('frontend_view.layouts.layout')
    @section('content')
        
    <main class="main-content">
       <div class="container-fluid">
                
              <div class="col-md-5 breadcrumbs">
                  <a href="{{ url('frontend/home-page'); }}">Home / </a>
                  <a href="{{ url('frontend/products'); }}">Products / </a>
                  <a href="{{ url('frontend/filteration'); }}">Filteration / </a>
                  <a href="{{ url('frontend/filteration/filter-paper'); }}">Filter-Paper / </a>
                  <a href="{{ url('frontend/filteration/filter-paper/quantitative'); }}">Quantitative </a>
                </div>


               <section class="site-section-hero bg-image bg-header-image" data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading filterpapercolor bold-text" data-aos="fade-right"> Quantitative</h1>
                              
                              <!-- <p class='button-margin-15' data-aos="fade-up" data-aos-delay="300">
                                <a href="#section-contact" class="btn btn-primary btn-md smoothscroll">Read More</a>
                              </p> -->
                      </div>
                  </div>
                </section>


                <section class="site-section lighter-bg">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-10 general-text-color">
                          <h2 class="filterpapercolor">Quantitative</h2>
                          <p>Quantitative Filter Papers are used in applications where you want to find out how much of a certain substance is included in the specimen to be tested. Johnson Test Papers offers a series of extremely high purity, acid washed filter papers designed for a wide range of critical analytical procedures such agravimetric analysis. <a href=""> Read more </a></p>
                        </div>

                        <div class="col-md-12 text-center general-text-color">
                          <h2 class="heading">Categories</h2>
                        </div>

                        <div class="col-md-6 text-center">

                          <div class="row">
                            
                            <div class="col">
                              <a href="{{ url('frontend/filteration/filter-paper/quantitative/categories?ashless') }}">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Ashless Filter Paper</label>
                              </a>
                            </div>
                            <div class="col">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Hardened Ashless Filter Paper</label>
                              </a>
                            </div>

                          </div>

                        </div>

                      </div>
                    </div>
                </section>

                <section class="site-section lighter-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12">
                          <div class="card">



                              
                              <div class="card-header">

                                <ul class="nav nav-tabs navmenu">
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers active" data-myAttri="tab-1">
                                    <a  href="#tab-1" class="nav-link">Key Features</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Applications</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Industries</a>
                                  </li>
                                </ul>

                              </div>

                              <div class="card-body" id='tab-1-active'>
                                  <ul class="ul-check list-unstyled success">
                                    <li>Qualitative analysis.</li>
                                    <li>Low ash content 0.07% (Acid wash treated).</li>
                                    <li>High wet strength.</li>
                                    <li>Consistent performance Hardened grades available.</li>
                                    <li>Custom cut.</li>
                                    <li>Bulk packaging.</li>
                                    <li>Made of 100% cotton linters.</li>
                                    <li>Supplied in rolls, sheers, discs and folded filters.</li>
                                  </ul>
                              </div>

                              <div class="card-body" id='tab-2-active' style="display:none;">
                                  <ul class="ul-check list-unstyled success">
                                    <li>Qualitative analysis 2.</li>
                                    <li>Low ash content 0.07% (Acid wash treated).</li>
                                    <li>High wet strength.</li>
                                    <li>Consistent performance Hardened grades available.</li>
                                    <li>Custom cut.</li>
                                    <li>Bulk packaging.</li>
                                    <li>Made of 100% cotton linters.</li>
                                    <li>Supplied in rolls, sheers, discs and folded filters.</li>
                                  </ul>
                              </div>

                              <div class="card-body" id='tab-3-active' style="display:none;">
                                  <ul class="ul-check list-unstyled success">
                                    <li>Qualitative analysis 3.</li>
                                    <li>Low ash content 0.07% (Acid wash treated).</li>
                                    <li>High wet strength.</li>
                                    <li>Consistent performance Hardened grades available.</li>
                                    <li>Custom cut.</li>
                                    <li>Bulk packaging.</li>
                                    <li>Made of 100% cotton linters.</li>
                                    <li>Supplied in rolls, sheers, discs and folded filters.</li>
                                  </ul>
                              </div>

                          </div>
                        </div>

                        
                      </div>
                    </div>
                </section>



                <section class="site-section grey_background">
                  <div class="container">
                    <div class="row justify-content-center">
                      
                      <div class="col-md-12 text-center general-text-color">
                        <h2 class="mb-5 heading themeTextColor">Have an Enquiry ?</h2>
                        <h2>Our expert customer support team are on hand to answer <br/>any of your queries </h2>
                      </div>
                      
                      <div class="col-md-12 text-center contactUs_enquiry_button">
                        <a href="" class="btn btn-primary btn-md">Contact Us</a>
                      </div>

                    </div>
                  </div>
                  </section>

               @include('frontend_view.layouts.footer')
                
            </div>
        </main>
    @endsection