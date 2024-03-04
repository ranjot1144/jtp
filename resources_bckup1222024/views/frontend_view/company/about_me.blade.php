@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- Breadcrumb Section Begin -->
    @include('frontend_view.layouts.breadcrumb_nav')
               
        <div class="container-fluid">
                <section class="zero_padding" id="about-us">
                    <div class="container" style="max-width:100%;">
                      <div class="row justify-content-center">
                        <div class="col-md-12 text-center gradient-left-to-right">
                        
                          <figure class="mb-12 aos-init aos-animate zero_margin" data-aos="fade-up">
                              <!-- <img src="http://127.0.0.1:8000/assets/images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded"></figure> -->
                              <div class="row columns_margin_bottom_20">
                                
                                <div class="col-md-4 col-sm-6 gradient-right-to-left">
                                  <div class="img_hover_color">
                                      <!-- <div class="teaser_icon"> -->
                                      <div class="">
                                        <img src="{{ asset('assets/images/related_image/made_in_uk.png') }}">
                                      </div>
                                    <h2 class="hover-color2">Established </h2>
                                    <p class="nsr22">Manufactures</p>
                                  </div>
                                </div>
                                
                                <div class="col-md-8 col-sm-6 zero_padding">
                                  <div class="img_hover_color">
                                    <img src="{{ asset('assets/images/jtp_image.png') }}" alt="company-image">
                                  </div>
                                </div>
                                
                              </div>
                            
                            </figure>
                        </div>
                      </div>
                    </div>
                </section>

              
                <section class="site-section gradient-left-to-right text-center content-padding">
                  <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                <p class="avbook28">We at Johnson Test Papers have been manufacturing easy to use rapid tests since 1938 
                                providing fast and accurate results you can trust.
                                <br/>Our broad range of products covers everything from simple pH testing,
                                <br/>water analysis, production processes and measurements of special food parameters.</p>
                                <br/>
                                <p class="avbook28">The use of rapid tests play a very important role when analysing solutions,
                                <br/>be it, for education, research and development, healthcare or other specialist industries.
                                <br/>Since the company was founded in the United Kingdom over 70 years ago,
                                <br/>Johnson Test Papers has established a brand in well over 45 countries.
                                <br/>This 70 years of experience has resulted in satisfied customers all over the world relating
                                our name with quality, short delivery times and competitive pricing.</p>
                                
                            </div>
                        </div>
                      </div>
                    </div>
                </section>
                

                <section class="site-section lighter-bg content-padding" id="meet">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">
                        
                        <div class="col-md-12 text-center">
                          <h3 class="themeTextColor mt-3 mb-3">Our History</h3>
                        </div>

                        <div class="col-md-12">
                          <div class="d-block d-md-flex mt-5">
                            
                            <div class="col-md-6 col-sm-6" >
                              <div class="mr-md-auto mr-2">
                                <ul class="ul-check list-unstyled success nsm20">
                                  <li>British company operating since the 1940's with wordwide distribution. </li>
                                  <li>Over 70 years of experience. </li>
                                  <li>Distributors in over 45 countries. </li>
                                  <li>Embedded tradition of test paper Manufacturing. </li>
                                  <li>Specialists in paper impregnation. </li>
                                  <li>Development, manufacturing and sales of products for specific industries. </li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <div class="mr-md-auto avbook20">
                                <label> Since the company was founded in the United Kingdom over 70 years ago, Johnson Test Papers has established a brand in well over 45 countries. This experience has resulted in satisfied customers all over the world relating our name with quality, short delivery times and competitive pricing.</label>
                                  <br/><br/>
                                <label> Manufacturing a comprehensive range of products has given us the expertise and know how on being able to solve your individual problems and requirements while providing a quality service and maintaining the standards that Johnson Test Papers has set. </label>
                              </div>
                            </div>

                          </div>
                            
                        </div>

                      </div>
                    </div>
                </section>


                <!-- <section class="site-section" id="section-testimonial">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-8 text-center">
                        
                        <h2 class="heading text-uppercase text-white">Testimonial</h2>
                          
                          <div class="row justify-content-center">
                            <div class="col-md-12">
                              <div class="owl-carousel slide-one-item home-slider">
                                
                                <div class="testimony text-center px-md-4">
                                  <figure class="mx-auto d-inline-block">
                                    <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="mx-auto img-fluid w-25 rounded-circle">
                                  </figure>
                                  
                                  <p class="text-white"><strong>Jean Smith</strong></p>
                                    <blockquote>
                                      <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tenetur quis facilis quam optio voluptate totam placeat, doloremque. Sit repellat ipsum dolor fugit similique itaque maxime saepe ipsam. Velit, harum!&rdquo;</p>
                                    </blockquote>
                                </div>

                                <div class="testimony text-center px-md-4">
                                  <figure class="mx-auto d-inline-block">
                                    <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="mx-auto img-fluid w-25 rounded-circle">
                                  </figure>
                                  <p class="text-white"><strong>Jean Smith</strong></p>
                                      
                                  <blockquote>
                                    <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde tenetur quis facilis quam optio voluptate totam placeat, doloremque. Sit repellat ipsum dolor fugit similique itaque maxime saepe ipsam. Velit, harum!&rdquo;</p>
                                  </blockquote>
                                </div>

                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>
                </section> -->


                <!-- <section class="site-section darken-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-8">
                          <h2 class="heading text-uppercase text-white">Biography</h2>
                            <figure class="mb-5" data-aos="fade-up">
                              <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid w-50 rounded"></figure>
                              
                              <div data-aos="fade-up" data-aos-delay="100">
                              <h2 class="text-white">Hi I'm Jed</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor aperiam a velit. Harum eligendi quod reiciendis quos ullam libero est dolor, 
                                  <a href="#">corporis dolores assumenda</a>, delectus, quidem voluptatibus dolorum temporibus enim!</p>
                                <p>Neque facilis soluta, accusantium quaerat, adipisci porro animi, hic fugiat id vero placeat dolorem accusamus sapiente odio consequatur debitis beatae eius quos alias. In recusandae magnam quis ipsum, asperiores mollitia!</p>
                        
                                <h3 class="text-white mt-5">Photographer for 10 years</h3>
                                <p>Tempore repudiandae 
                                  <a href="#">rerum numquam iste</a>, quibusdam omnis voluptates quaerat veniam neque odit sit vel dolores. Optio eveniet ex laborum similique inventore sapiente tenetur. Ipsam aliquam esse voluptate qui reiciendis. Harum.</p>
                
                                  <div class="d-block d-md-flex mt-5">
      
                                    <div class="mr-md-auto mr-2">
                                      <ul class="ul-check list-unstyled success">
                                        <li>Optio eveniet ex laborum</li>
                                        <li>Inventore sapiente tenetur</li>
                                        <li>Ipsam aliquam esse</li>
                                      </ul>
                                    </div>
    
                                    <div class="mr-md-auto">
                                      <ul class="ul-check list-unstyled success">
                                        <li>Optio eveniet ex laborum</li>
                                        <li>Inventore sapiente tenetur</li>
                                        <li>Ipsam aliquam esse</li>
                                      </ul>
                                    </div>
                                  </div>

                              </div>
                        </div>
                        
                      </div>
                    </div>
                </section> -->

                <!-- <section class="site-section" id="section-blog">
                  <div class="container">
                    <div class="row justify-content-center">
                      
                      <div class="col-md-8">
                        <div class="row">

                          <h2 class="heading text-uppercase text-white" data-aos="fade-up">Blog</h2>
                          
                            <div class="col-md-12 mb-4" data-aos="fade-up">
                              <div class="d-md-flex d-block blog-entry align-items-start">
                                
                                <div class="mr-0 mr-md-5 mb-3 img-wrap">
                                  <a href="single.html">
                                    <img src="{{ asset('assets/images/blog_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                </div>
                                
                                <div>
                                  <h2 class="mt-0 mb-2">
                                      <a href="single.html">My New Photography Has Been Featured in Forbes</a>
                                    </h2>
                                    <div class="meta mb-3">Posted by Ben Jones on 
                                      <a href="#">Jan 18, 2019</a>
                                    </div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                </div>

                              </div>
                            </div>

                          <div class="col-md-12 mb-4" data-aos="fade-up">
                            <div class="d-md-flex d-block blog-entry align-items-start">
                              
                              <div class="mr-0 mr-md-5 mb-3 img-wrap">
                                <a href="single.html">
                                  <img src="{{ asset('assets/images/blog_2.jpg') }}" alt="Image" class="img-fluid"></a>
                              </div>
                          
                              <div>
                                <h2 class="mt-0 mb-2">
                                  <a href="single.html">My New Photography Has Been Featured in Forbes</a>
                                </h2>
                                <div class="meta mb-3">Posted by Ben Jones on 
                                  <a href="#">Jan 18, 2019</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                              </div>

                            </div>
                          </div>
                      
                          <div class="col-md-12 mb-4" data-aos="fade-up">
                              <div class="d-md-flex d-block blog-entry align-items-start">
                                
                                  <div class="mr-0 mr-md-5 mb-3 img-wrap">
                                    <a href="single.html">
                                      <img src="{{ asset('assets/images/blog_3.jpg') }}" alt="Image" class="img-fluid"></a>
                                  </div>
                                  
                                  <div>
                                      <h2 class="mt-0 mb-2">
                                        <a href="single.html">My New Photography Has Been Featured in Forbes</a>
                                      </h2>
                                      <div class="meta mb-3">Posted by Ben Jones on 
                                        <a href="#">Jan 18, 2019</a>
                                      </div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                  </div>

                              </div>
                          </div>

                          <div class="col-md-12 mb-4" data-aos="fade-up">
                            <div class="d-md-flex d-block blog-entry align-items-start">
                              
                              <div class="mr-0 mr-md-5 mb-3 img-wrap">
                                <a href="single.html">
                                  <img src="{{ asset('assets/images/blog_4.jpg') }}" alt="Image" class="img-fluid"></a>
                              </div>
                            
                              <div>
                                <h2 class="mt-0 mb-2">
                                  <a href="single.html">My New Photography Has Been Featured in Forbes</a>
                                </h2>
                              
                                <div class="meta mb-3">Posted by Ben Jones on 
                                  <a href="#">Jan 18, 2019</a>
                                </div>
                              
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                             </div>
                            </div>
                          </div>
                    
            
                          <div class="col-12 text-center">
                              <div class="custom-pagination">
                                <span>1</span>
                                  <a href="#">2</a>
                                  <a href="#">3</a>
                                  <span>...</span>
                                  <a href="#">7</a>
                              </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </section> -->

                <!-- <section class="site-section darken-bg" id="section-contact">
                  <div class="container">
                    <div class="row justify-content-center">
                      
                      <div class="col-md-8">
                        <h2 class="text-white mb-5 heading">Contact</h2>
                          
                          <form action="#">
                            <div class="row form-group">
                              
                              <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-white" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control">
                              </div>

                              <div class="col-md-6">
                                <label class="text-white" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control">
                              </div>
                              
                            </div>
                            
                            <div class="row form-group">
                              <div class="col-md-12">
                                <label class="text-white" for="email">Email</label>
                                  <input type="email" id="email" class="form-control">
                              </div>
                            </div>
                            
                            <div class="row form-group">
                              <div class="col-md-12">
                                <label class="text-white" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control">
                              </div>
                            </div>
  
                            <div class="row form-group mb-5">
                              <div class="col-md-12">
                                <label class="text-white" for="message">Message</label>
                                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                              </div>
                            </div>
   
                            <div class="row form-group">
                              <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                              </div>
                            </div>
                          </form>

                      </div>

                    </div>
                  </div>
                </section> -->

               <!-- @include('frontend_view.layouts.footer') -->
                
            </div>
    @endsection