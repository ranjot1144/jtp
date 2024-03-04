        
        <div class="site-mobile-menu site-navbar-target">
            
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            
            <div class="site-mobile-menu-body"></div>
        </div>
        
        <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
        @php
          $last_parameter = Request::segment(2);
        @endphp
          <div class="site-logo">
              <a href="{{ url('/frontend/home-page') }} ">
                <img class="mx-auto d-block image-90" alt="logo" src="https://www.s.com/images/logo.png">
              </a>
          </div>
          
          <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>

          <div class="main-menu">
            
            <ul class="js-clone-nav">
              <!-- <li><a href="{{ url('/frontend/home-page') }}" class="nav-link {{ $last_parameter == 'home-page' ? 'active' : '' }}">Home</a></li>
              <li><a href="{{ url('/frontend/about-us') }}" class="nav-link {{ $last_parameter == 'about-us' ? 'active' : '' }}">About Us</a></li>
              
              <li><a href="{{ url('/frontend/product_page') }}" class="nav-link {{ $last_parameter == 'product_page' ? 'active' : '' }}">Products</a></li>
              <li><a href="{{ url('/frontend/filteration') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">Filtration Ranger</a></li> -->
              
              <li>
                <!-- <a href="{{ url('/frontend/product_page') }}" class="nav-link {{ $last_parameter == 'product_page' ? 'active' : '' }}">Products</a> -->
                <!-- <ul class="dropdown">
                  <li>Test 1</li>
                  <li>Test 2</li>
                  <li>Test 3</li>
                  <li>Test 4</li>
                </ul> -->
              </li>
              <li><a href="{{ url('/frontend/about-us') }}" class="nav-link {{ $last_parameter == 'about-us' ? 'active' : '' }}">About Us</a></li>
              <!-- <li><a href="{{ url('/frontend/filteration') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">Company</a></li> -->
              <!-- <li><a href="{{ url('/frontend/filteration') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">Support</a></li> -->
              <li><a href="{{ url('/frontend/filteration') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">News & Development</a></li>
              
              <li><a href="{{ url('/frontend/contact-us') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">Contact Us</a></li>
              <li><a href="{{ url('/frontend/terms') }}" class="nav-link {{ $last_parameter == 'filteration' ? 'active' : '' }}">Terms & Conditions</a></li>

              <li><a href="{{ url('/frontend/product/oem_label') }}" class="nav-link {{ $last_parameter == 'oem_label' ? 'active' : '' }}">OEM Page</a></li>
              <li><a href="{{ url('/frontend/product/visual_test') }}" class="nav-link {{ $last_parameter == 'visual_test' ? 'active' : '' }}">Visual Test Kits</a></li>

              <li><a href="{{ url('/frontend/product/industry') }}" class="nav-link {{ $last_parameter == 'industry' ? 'active' : '' }}">Industry</a></li>
              <li><a href="{{ url('/frontend/document') }}" class="nav-link {{ $last_parameter == 'industry' ? 'active' : '' }}">Document & Certificate</a></li>

            </ul>



            <ul id="flexmenu1" class="flexdropdownmenu">
              <li><a href="#" class="has-submenu">Product & Categories-1 </a>
                <ul class="second_layer_menu">
                  <li><a href="#">Rapid Tests</a></li>
                  <li><a href="#" class="has-submenu">Filtration</a>
                    <ul class="submenu_third_layer">
                      <li><a href="#">Filter Paper</a></li>
                      <li><a href="#">Extraction Thimbles</a></li>
                      <li><a href="#">Microfiltration Membranes</a></li>
                      <li><a href="#">Syringe Filters</a></li>
                      <li><a href="#">Filter Finder</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pool & Spa</a></li>
                  <li><a href="#">Aquarium</a></li>
                  <li><a href="#">Visual Test Kits</a></li>
                  <li><a href="#">Industries</a></li>
                  <li><a href="#">OEM Private Label</a></li>
                </ul>
              </li>

              <li><a href="#">Stores</a>
                <ul class="second_layer_menu">
                  <li><a href="#">Sub Item 3.1a</a></li>
                  <li><a href="#">Sub Item 3.2a</a></li>
                  <li><a href="#">Sub Item 3.3a</a></li>
                  <li><a href="#">Sub Item 3.4a</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About</a></li>
            </ul>

            <ul class="social js-clone-nav">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>



          </div>
        </header>
