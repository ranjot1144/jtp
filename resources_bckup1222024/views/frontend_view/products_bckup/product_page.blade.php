@extends('frontend_view.layouts.layout')
    @section('content')
        
   
                
               <section class="site-section-hero bg-image bg-header-image"  data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading bold-text"> Total Chlorine 200</h1>
                            <h3 class="themeTextColor"> Testing Range 0-200 ppm - mg L</h3>
                            <p> Disinfection, Santisation & Cleaning</p>
                      </div>
                  </div>
                </section>



                <section class="site-section lighter-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12 text-center general-text-color">
                            <h2 class="heading">Our Products</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor<br/>invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                          </div>

                        <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                <ul class="nav nav-tabs navmenu">
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers active" data-myAttri="tab-1">
                                    <a  href="#tab-1" class="nav-link">Rapid Test</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Filtration</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Water Analysis</a>
                                  </li>
                                </ul>

                              </div>

                              <div class="card-body" id='tab-1-active'>
                                        <div class="row text-center">
                                              <div class="col padding-top-bot-40">
                                                <a href="http://127.0.0.1:8000/frontend/filteration/filter-paper">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">pH Tests</label>
                                                </a>
                                              </div>
                                              <div class="col padding-top-bot-40">
                                                <a href="">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">jQuant Semi&#174; <br/>Quantitative Test</label>
                                                </a>
                                              </div>
                                              <div class="col padding-top-bot-40">
                                                <a href="">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Qualitative Tests</label>
                                                </a>
                                              </div>
                                      </div>
                              </div>

                              <div class="card-body" id='tab-2-active' style="display:none;">
                                    <div class="row text-center">
                                        <div class="col padding-top-bot-40">
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
                                        </div>
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

                <!-- <section class="site-section lighter-bg" id="filter-paper">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-12 text-center general-text-color">
                          <h2 class="heading">Our Ranges</h2>
                          <p>Ranges are categorised into four list</p>
                        </div>

                        <div class="col-md-12">

                          <div class="row">
                                <div class="accordion" id="Range_accordion">

                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link rapidtest_back_col text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Rapid Test
                                        </button>
                                      </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#Range_accordion">
                                      <div class="card-body">

                                        

                                      <div class="row text-center">
                                              <div class="col padding-top-bot-40">
                                                <a href="http://127.0.0.1:8000/frontend/filteration/filter-paper">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">pH Tests</label>
                                                </a>
                                              </div>
                                              <div class="col padding-top-bot-40">
                                                <a href="">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">jQuant Semi&#174; <br/>Quantitative Test</label>
                                                </a>
                                              </div>
                                              <div class="col padding-top-bot-40">
                                                <a href="">
                                                  <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                  <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Qualitative Tests</label>
                                                </a>
                                              </div>
                                      </div>





                                      </div>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed filtration_back_col text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Filteration
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#Range_accordion">
                                      <div class="card-body">

                                          <div class="row text-center">
                            
                                                  <div class="col padding-top-bot-40">
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
                                                  </div>

                                          </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed wateranalysis_back_col text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Water Analysis
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Range_accordion">
                                      <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header" id="headingFour">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed industry_back_col text-white" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Industry
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#Range_accordion">
                                      <div class="card-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 4 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                      </div>
                                    </div>
                                  </div>

                                </div>
                          </div>

                        </div>

                      </div>
                    </div>
                </section> -->


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
                            <div class="testimony text-center px-md-4">
                              <figure class="mx-auto d-inline-block">
                                <img src="{{ asset('../assets/images/person_2.jpg') }}" alt="Image" class="mx-auto img-fluid w-25 rounded-circle">
                              </figure>
                            </div>
                          
                          <div class="testimony text-center px-md-4">
                            <figure class="mx-auto d-inline-block">
                              <img src="{{ asset('../assets/images/person_3.jpg') }}" alt="Image" class="mx-auto img-fluid w-25 rounded-circle">
                            </figure>
                          </div>
                        </div>
                      </div>

                    </div>
                </section>




                <!--<section class="site-section grey_background">
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
                </section>-->

               <!-- @include('frontend_view.layouts.footer') -->
                
    @endsection