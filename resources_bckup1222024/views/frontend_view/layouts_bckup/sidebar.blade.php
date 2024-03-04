<?php 
$range_data = DB::table('range as r')
              ->get();
$prod_data = DB::table('product as r')
            ->get();
?>


        <div class="site-mobile-menu site-navbar-target">
            
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            
            <div class="site-mobile-menu-body"></div>
        </div>
        
        
        <header>
          <div class="megamenu_d">

              <div class="site-logo">
                <a href="{{ url('/') }} ">
                  <img class="mx-auto d-block image-90" alt="logo" src="https://www.johnsontestpapers.com/images/logo.png" />
                </a>
              </div>

              <a href="#" data-flexmenu="flexmenu1"></a>
              
              <!--HTML for Flex Drop Down Menu 1-->
                <ul id="flexmenu1" class="flexdropdownmenu">
                  <li><a href="#" class="has-submenu">Product & Services</a>
                    <ul class="second_layer_menu">
                      @php 
                        $custom_url = '';
                      @endphp
                      @foreach($range_data as $range_data)
                          @if($range_data->id=='1')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='2')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='3')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='4')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='5')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='6')
                            @php $custom_url = url($range_data->range_url); @endphp
                          @elseif($range_data->id=='7')
                            @php $custom_url = url($range_data->range_url); @endphp
                        @endif
                        <li>
                          <a href="{{ $custom_url }}" >{{$range_data->range_name}}</a>
                              <?php 
                              $color_range = '';
                              $url = '';
                              if($prod_data->isNotEmpty()) {
                                      echo '<ul class="submenu_third_layer '.$color_range.'">';
                                        foreach($prod_data as $prod) {
                                          if($range_data->id == $prod->range_id) {
                                            if($range_data->id=='1') {
                                              $color_range = 'rapid_test_bac_color';
                                              $url = URL($prod->prod_url);
                                            }else if($range_data->id=='2') {
                                              $color_range = 'filtration_test_bac_color';
                                              $url = URL($prod->prod_url);
                                            }else if($range_data->id=='6') {
                                              $color_range = 'ind_test_bac_color';
                                              $prod_name = strtolower($prod->prod_name);
                                              $url = URL($prod_name);
                                            }
                                            echo '<li class='.$color_range.'><a href="'.$url.'">'.$prod->prod_name.'</a></li>';
                                          }
                                        }
                                      echo '</ul>';
                                  } ?>
                          </li>
                      @endforeach
                    </ul>
                  </li>

                  <li><a href="#">Company</a>
                    <ul class="second_layer_menu">
                      <li><a href="{{ url('company/about-us') }}">Our Story</a></li>
                      <li><a href="{{ url('company/imprint') }}">Imprint</a></li>
                      <li><a href="{{ url('company/terms') }}">Terms and Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="#">Support</a>
                    <ul class="second_layer_menu">
                      <li><a href="{{ url('support/contact-us') }}">Contact Us</a></li>
                      <li><a href="{{ url('support/document') }}">Document & Certificates</a></li>
                      <li><a href="{{ url('support/catalouge') }}">Catalouges</a></li>
                      <li><a href="{{ url('support/knowledge_hub') }}">Knowledge Hub</a></li>
                      <li><a href="{{ url('support/faq') }}">FAQ's</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('company/news-development') }}">News & Development</a></li>
                </ul>

              <div class="sidebar-bottom">
                <div class="sidebar_rel">

                    <p><a href="{{ URL('/frontend/terms') }}" target="_blank" >Terms & Conditions</a></p>
                    <p><a href="{{ URL('') }}">Privacy Policy</a></p>

                    <div class="row">
                      <div class="col-md-6">
                        <a href="https://www.johnsontestpapers.com/documents/certificates/ISO9001" target="_blank">
                          <img src="https://www.johnsontestpapers.com/images/iso/iso9001.jpg" alt="Snow" style="width:100%">
                        </a>
                      </div>

                      <div class="col-md-6">
                        <a href="https://www.johnsontestpapers.com/documents/certificates/ISO13485" target="_blank">
                          <img src="https://www.johnsontestpapers.com/images/iso/iso13485.jpg" alt="Snow" style="width:100%">
                        </a>
                      </div>
                    </div>

                  <div class="social_icons">
                    <a href="#" class="social-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                      </svg>
                    </a>
                    <a href="#" class="social-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                      </svg>
                    </a>
                    <a href="#" class="social-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                      </svg>
                    </a>
                    <a href="#" class="social-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                      </svg>
                    </a>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">@johnsontestpapers</p>
                    </div>
                  </div>

                </div>
              </div>

              
          </div>



            <div class="mobilemenu">

              <div class="header_mobile">
                <img src="https://www.johnsontestpapers.com/images/logo.png" class="mobile_logo" alt="Binary Logo" />
                <div onclick="openNav()" class="burger-btn"></div>
              </div>
  
              <div id="mySidenav" class="sidenav">
                <div class="zeynep opened">
                  <div class="site-logo">
                    <a href="{{ url('/frontend/home-page') }} ">
                      <img class="mx-auto d-block image-90" alt="logo" src="https://www.johnsontestpapers.com/images/logo.png" />
                    </a>
                  </div>
                  
                  <ul>
                    <li class="has-submenu">
                      <a href="#" data-submenu="productcategories">Product & Categories</a>
          
                      <div id="productcategories" class="submenu">

                        <div class="submenu-header">
                          <a href="#" data-submenu-close="productcategories">Product & Categories</a>
                        </div>

                        <ul>
                          <li> <a href="#">Rapid Tests</a> </li>

                          <li class="has-submenu">
                            <a href="#" data-submenu="filtration">Filtration</a>
                            <div id="filtration" class="submenu">
                              <div class="submenu-header">
                                <a href="#" data-submenu-close="filtration">Filtration</a>
                              </div>
                              <ul>
                                <li> <a href="#">Filter Paper</a> </li>
                                <li> <a href="#">Extraction Thimbles</a> </li>
                                <li> <a href="#">Microfiltration Membranes</a> </li>
                                <li> <a href="#">Syringe Filters</a> </li>
                                <li> <a href="#">Filter Finder</a> </li>
                              </ul>
                            </div>
                          </li>

                          <li> <a href="#">Pool & Spa</a> </li>
                          <li> <a href="#">Aquarium</a> </li>
                          <li> <a href="#">Visual Test Kits</a> </li>
                          <li> <a href="#">Industries</a> </li>
                          <li> <a href="#">OEM Private Label</a> </li>
                        </ul>
                      </div>
                    </li>

                    <li class="has-submenu">
                      <a href="#" data-submenu="stores">Stores</a>

                      <div id="stores" class="submenu">
                        <div class="submenu-header">
                          <a href="#" data-submenu-close="stores">Main Menu</a>
                        </div>
                        <label>Stores</label>
                        <ul>
                          <li> <a href="#">Istanbul</a> </li>
                          <li> <a href="#">Mardin</a> </li>
                          <li> <a href="#">Amed</a> </li>
                        </ul>
                      </div>
                    </li>

                    <li> <a href="#">Contact</a> </li>
                    <li> <a href="#">About</a> </li>
                  </ul>
                </div>

                <div class="sidebar-bottom">
                  <div class="sidebar_rel">
                    <div class="privacy_sec">
                      <a href="#">Terms & Condition</a>
                      <a href="#">Privacy Policy</a>
                    </div>
                    <div class="sidebar-bottom-img">
                      <!-- <div><img src="{{ URL('assets/menu/sidebar-image-1.jpg') }}"></div>
                      <div><img src="{{ URL('assets/menu/sidebar-image-1.jpg') }}"></div> -->
                    </div>
                    <div class="social_icons">
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="20" viewBox="0 0 512 512">
                          <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                      </a>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="18" viewBox="0 0 448 512">
                          <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                        </svg></a>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="20" viewBox="0 0 512 512">
                          <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                        </svg></a>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="20" width="18" viewBox="0 0 448 512">
                          <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg></a>

                    </div>

                    <ul class="social js-clone-nav">
                      <li><a href="#"><span class="icon-facebook"></span></a></li>
                      <li><a href="#"><span class="icon-twitter"></span></a></li>
                      <li><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>


                  </div>
                </div>

              </div>


            </div>


</header>

<div id="overlaySidenav" onclick="closeNav()" class=""></div>