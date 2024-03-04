@extends('frontend_view.layouts.layout')
    @section('content')


    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../assets/images/vtk_banner.png&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;" id="home-border"> 
                <div class="row justify-content-center align-items-center" style="height:60vh;min-height:300px;">
                    <div class="col-md-7">
                        @if($range_data[0]->range_id=='3')
                            <h1 class="heading text-white" data-aos="fade-right"><b>{{ $range_data[0]->range_name }} </b></h1>
                            <h1 class="text-white" data-aos="fade-up"><b>Test Strips</b></h1>
                        @else
                          <h1 class="heading" data-aos="fade-right ">Visual Test Kits </h1>
                          <h2 class="heading text-white" data-aos="fade-up">VTKolor</h2>
                        @endif
                          
                    </div>
                </div>
    </section>


    <section class="site-section text-center site-section lighter-bg" id="oem_gradient_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate text-uppercase">
                            @if($range_data[0]->range_id=='3')
                                <h3 class="text-uppercase bold-text">Multiple Testing Parameters</h3>
                            @else
                                <h3 class="text-uppercase bold-text">Simple Colorimteric and Titrimetric test kits</h3>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../assets/images/visual_test_kit.png&quot;); height: 50vh; background-position: 50% 20.164px; min-height:250px;" id="test-strip-filteration1"> 
        <div class="container" style="max-width:1440px;">
            <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 50vh;">
                <div class="col-md-8 text-center">
                    <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                        <h2>Available at Check2o.com</h2>
                        <h3 class="text-white">pH Testing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section lighter-bg" id="contact_us">
        <div class="container">


            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center">
                    <p class="nsr25 mb-2">Our Range of</p>
                    <h3 class="general-text-color mb-5">{!! $range_data[0]->prod_name !!}</h3>
                </div>


            <div class="col-md-12 text-center">

                <div class="container">
                    <div class="row justify-content-center">

                <!-- <figure class="mb-12"> -->
                    <?php if(!empty($cat_data) && !empty($cat_data)) {
                        foreach($cat_data as $value) {
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="teaser hover_icon text-center">
                        <div> 
                            <a class="general-text-color" href="{{ URL($value->cat_url) }}">
                                <img class="image-70" src="{{ url('assets/images/ammonia.png') }} " style="width:60%"> </div>
                                <label style="margin:20px 20px 0px 20px;"><b> {{ $value->cat_name }}</b></label>
                                <p>{{ $value->cat_ranges }}</p> 
                            </a>
                        </div>
                    </div>

                    <?php } } ?>
                <!--</figure> -->
                    </div>
                </div>

            </div>            

        </div>
    </section>


    <!-- <section class="site-section-hero bg-image" style="background-image: url(&quot;../../assets/images/img_9.jpg&quot;); height: 30vh; background-position: 50% 20.164px; min-height:250px;" data-stellar-background-ratio="0.5" id="test-strip-filteration2">  -->
    <section class="site-section-hero bg-image" style="background-color: rgb(28 119 198); height: 30vh; min-height:250px;" data-stellar-background-ratio="0.5" id="blue-banner">
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                
                <div class="col-md-12">
                
                    <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                        <div class="col-md-8">
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate text-white">
                                <h3 class="bold-text">Explore the Water Analysis Range</h3>
                                <h4 class="mt-0">For All Your Testing Needs at <a class="text-white" href="https://draft.check2o.com/">www.check2o.com/ </a></h4>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img src="https://draft.check2o.com/wp-content/uploads/elementor/thumbs/Check2O_logo_small-qd9vmyzff0ftbzfher11m9c3ert3dhib9ktottpt6c.png" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection