@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- <main class="main-content">
       <div class="container-fluid"> -->


<style>
  #table_presentation_data {
    table {
      thead {
        th:first-child{
          border-top-left-radius: 20px;
          padding-left: 40px;
        }
        th:last-child{
          border-top-right-radius: 20px;
        }
      }
      tbody {
        td:first-child{
          background-color: transparent;
          border-radius: 0;
          font-weight: normal;
          padding-left: 40px;
        }
        td:nth-child(2){
          border-left: 0px;
        }
      }
      margin-bottom: 50px;
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: transparent;
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
  }


.accordion-div{
  padding: 20px 0px;
}
.accordion {
  background-color: #df983f;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin-bottom:5px;
}
.accordion:first-of-type{
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
.accordion:last-of-type{
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
.active, .accordion:hover {
  background-color: #eb7f2d;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.arrow {
  border: solid #fff;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  margin-right:10px;
}
.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}


.hiddenRow {
    padding: 0;
}
tbody {
  border: 5px solid #fff;
}
.toggle_me{
  padding: 10px;
}

.hiddenRow:nth-of-type(1) div{
  margin-left: 30px;
}
.padding-10{
  padding: 10px;
}

  </style>
       @include('frontend_view.layouts.breadcrumb_nav')


            @php 
              $cat_name = '';
              $colorclass = ''; 
            @endphp

            @if(isset($cat_data[0]->cat_name) && !empty($cat_data[0]->cat_name) ) 
              @php
                $cat_name = $cat_data[0]->cat_name;
                $cat_range = $cat_data[0]->cat_ranges;
              @endphp
            @endif

            @if($range_data->isNotEmpty() ) 
              @if(!empty($range_data) && $range_data[0]->range_id=='1')
                @php $colorclass = 'rapid_text_color'; @endphp
              @endif
            @else
              @php $colorclass = 'filtration_text_color'; @endphp
            @endif

               <!-- <section class="site-section-hero bg-image bg-header-image" data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading bold-text {{ $colorclass }}" data-aos="fade-right"> {!! $cat_name !!}</h1>
                            <h3 class="text-white">{!! $cat_range !!}</h3>
                      </div>
                  </div>
                </section> -->
                <section class="zero_padding" id="product_banner">
                  <div class="row ">
                      <div class="col-md-12">
                          <img src="{{ url('/assets/images/product/industry/industry_banner.jpg'); }}" alt="Filter Finder Header"/>
                          @if ( ($range_data[0]->range_id==1 && $range_data[0]->prod_id=='2') || ($range_data[0]->range_id==2 && $cat_data[0]->cat_id!='5') )
                          <div class="top-right">
                              <div class="row justify-content-center align-items-center">
                                  <div class="col-md-12">
                                      <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 data-aos="fade-right"> {!! $range_data[0]->prod_name !!}</h2>
                                        <h3 class="{{ $colorclass }}">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="bottom-right">
                              <a href="#" class="btn btn-primary btn-large">Purchase</a>
                          </div>
                          @endif

                      </div>
                  </div>
                </section>


                <section class="site-section lighter-bg content-padding" id="table_presentation_data">
                    <div class="container">
                      <div class="row justify-content-center">
                        @if ($range_data->isNotEmpty() && $range_data[0]->range_id!='5')
                          @if ($cat_data[0]->cat_id=='6' || $cat_data[0]->cat_id=='2')
                            <div class="col-md-12 general-text-color">
                              <h3 class="text-center mb-4">Grades</h3>
                              <div class="mb-5 content_description">{{ $cat_data[0]->cat_main_desc }}</div>
                            </div>
                          @elseif ($range_data[0]->range_id==2 && $cat_data[0]->cat_id=='5')
                          <div class="col-md-12 general-text-color">
                            <h2 class="mb-3">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h2>
                            <div class="mb-5 content_description ">{!! $cat_data[0]->cat_main_desc !!}</div>
                          </div>
                          <div class="col-md-12 text-center general-text-color">
                              <h3 class="mb-5">Categories</h3>
                            </div>
                            @elseif ($range_data[0]->range_id==2 && ($cat_data[0]->cat_id=='8' || $cat_data[0]->cat_id=='9'))
                          <div class="col-md-12 general-text-color">
                            <h2 class="mb-3">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h2>
                            <div class="mb-5 content_description">{!! $cat_data[0]->cat_main_desc !!}</div>
                          </div>

                          @else
                          <div class="col-md-12 general-text-color">
                            <h2 class="text-center mb-5">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h2>
                            <div class="mb-5 content_description">{{ $cat_data[0]->cat_main_desc }}</div>
                          </div>
                            @if($range_data[0]->range_id=='2')
                            <div class="col-md-12 text-center general-text-color">
                              <h3>Categories</h3>
                            </div>
                            @endif
                          @endif
                        @endif

                        <?php  
                        if($range_data->isNotEmpty() && $range_data[0]->range_id=='2') {
                          if($range_data[0]->prod_id=='7') {
                            ?>

                          <table class="table-striped">
                              <thead>
                                <tr>
                                  <th scope="col" style="background:#fff;width:20%;">&nbsp;</th>
                                  <th scope="col" colspan="4" class="gradient-left-to-right text-center" style="border-radius: 15px 15px 0px 0px; width:50%;border-right:2px solid;">PVDF</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                    <th></th>
                                    <td>13mm</th>
                                    <td>13mm</td>
                                    <td>25mm</td>
                                    <td>25mm</th>
                                    <!-- <td>13mm</td>
                                    <td>25mm</td> -->
                                </tr>
                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left; border-top-left-radius:20px;">Pore Size</th>
                                  <th>0.20</th>
                                  <th>0.45</th>
                                  <th>0.20</th>
                                  <th>0.45</th>
                                  <!-- <th>0.20</th>
                                  <th>0.45</th> -->
                                </tr>
                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Membrane Material</td>
                                  <td>PVDF</td>
                                  <td>PVDF</td>
                                  <td>PVDF</td>
                                  <td>PVDF</td>
                                  <!-- <td>PVDF/Glass Fibre</td>
                                  <td>PVDF/Glass Fibre</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Housing Material</th>
                                  <td>PP</td>
                                  <td>PP</td>
                                  <td>PP</td>
                                  <td>PP</td>
                                  <!-- <td>PP</td>
                                  <td>PP</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Maximum Operating Pressure(PSI)</th>
                                  <td>87</td>
                                  <td>87</td>
                                  <td>87</td>
                                  <td>87</td>
                                  <!-- <td>87</td>
                                  <td>87</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Applicable pH Value</th>
                                  <td>1-14</td>
                                  <td>1-14</td>
                                  <td>1-14</td>
                                  <td>1-14</td>
                                  <!-- <td>1-14</td>
                                  <td>1-14</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Filtration Diameter(mm)</th>
                                  <td>13</td>
                                  <td>13</td>
                                  <td>13</td>
                                  <td>13</td>
                                  <!-- <td>13</td>
                                  <td>13</td> -->
                                </tr>
                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Filtration Area</th>
                                  <td>1.09</td>
                                  <td>1.09</td>
                                  <td>4.08</td>
                                  <td>4.08</td>
                                  <!-- <td>4.08</td>
                                  <td>4.08</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Hold-Up Volume(μL)</th>
                                  <td><20</td>
                                  <td><20</td>
                                  <td><100</td>
                                  <td><100</td>
                                  <!-- <td><100</td>
                                  <td><100</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Sample Volume(ML)</th>
                                  <td><10</td>
                                  <td><10</td>
                                  <td><100</td>
                                  <td><100</td>
                                  <!-- <td><100</td>
                                  <td><100</td> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Pack Size</th>
                                  <td>100</td>
                                  <td>100</td>
                                  <td>100</td>
                                  <td>100</td>
                                  <!-- <td>100</td>
                                  <td>100</td> -->
                                </tr>

                                

                                <tr>
                                  <td style="text-align:left; background:#fff;" colspan="7">Product code</th>
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left;">Non-Sterile</th>
                                  <th>SFV13P020N</th>
                                  <th>SFV13P045N</th>
                                  <th>SFV25P020N</th>
                                  <th>SFV25P045N</th>
                                  <!-- <th>SFV13P020G</th>
                                  <th>SFV13P045G</th> -->
                                </tr>

                                <tr>
                                  <th class="themebackgroundColor" style="text-align:left; border-bottom-left-radius:20px;">Sterile</th>
                                  <th>SFV13P020NS</th>
                                  <th>SFV13P045NS</th>
                                  <th>SFV25P020NS</th>
                                  <th>SFV25P045NS</th>
                                  <!-- <th>SFV13P020GS</th>
                                  <th>SFV13P045GS</th> -->
                                </tr>

                              </tbody>
                            </table>

                        <?php
                          }
                        }
                          ?>

                        <?php if($range_data->isNotEmpty() && $range_data[0]->range_id=='1') { ?>
                          <div class="col-md-12 general-text-color">
                            <table id="jQuant">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col">Product</th>
                                  <th scope="col">Graduation</th>
                                  <th scope="col">Presentation</th>
                                  <th scope="col">Product Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php if(!empty($sub_cat_data) && $sub_cat_data!='') { 
                                            foreach ($sub_cat_data as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->sub_cat_name.' '.$value->sc_ranges }}</td>
                                                <td>{{ $value->sp_graduation }}</td>
                                                <td>{{ $value->sp_presentation }}</td>
                                                <td>{{ $value->sp_prod_code }}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                    <?php if(!empty($category_presentation) && $category_presentation!='') { 
                                            foreach ($category_presentation as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->cat_name.' '.$value->cat_ranges }}</td>
                                                <td>{{ '' }}</td>
                                                <td>{{ $value->cp_presentation }}</td>
                                                <td>{{ $value->cp_prod_code }}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                  
                                </tbody>
                              </table>
                            
                            <div class="accordion-div">
                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Description</button>
                                <div class="panel">
                                  <p>{!! $cat_data[0]->cat_desc !!}</p>
                                </div>

                                <!-- <button class="accordion">Specification</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->

                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Industries</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Downloads</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <!-- <button class="accordion">Documents</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->

                                
                            </div>

                          </div>
                        <?php 
                      }else if ($range_data->isNotEmpty() && ($range_data[0]->range_id=='3' || $range_data[0]->range_id=='5') ) { ?>
                        <div class="col-md-12 general-text-color">
                            <div class="accordion-div">
                                <button class="accordion toggle_tr"><span class="arrow down"></span> Description</button>
                                <div class="panel">
                                  <p>{!! $cat_data[0]->cat_desc !!}</p>
                                </div>

                                <!-- <button class="accordion visual-test-kit">Specification</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->

                                <button class="accordion toggle_tr"><span class="arrow down"></span>Industries</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <button class="accordion toggle_tr"><span class="arrow down"></span>Downloads</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <!-- <button class="accordion visual-test-kit">Documents</button>
                                <div class="panel">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div> -->

                                
                            </div>
                        </div>
                      <?php }else{ ?>

                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              
                              <div class="row">

                              <?php if($range_data->isNotEmpty() && $range_data[0]->prod_id=='5' ) {  ?>

                                <div class="col-md-12 general-text-color">

                                          <table class="table-condensed" style="border-collapse:collapse;" id="extraction_table">
                                              <thead>
                                                  <tr class="gradient-left-to-right">
                                                      <th width="50%">Diameter</th>
                                                      <th width="25%">Presentation</th>
                                                      <th width="25%">Product Code</th>
                                                  </tr>
                                              </thead>

                                              <tbody>
                                              <!-- <tr data-toggle="collapse" data-target=".demo1" class="toggle_tr" style="background:orange;">
                                                  <td colspan="3"><span class="arrow down"></span>
                                                    <?php 
                                                      /*  $er_dim = explode('x', $extraction_thimble[0]->er_dimension);
                                                        $er_dim = preg_replace('/[^A-Za-z0-9\-]/', '', $er_dim[0]);

                                                        $extaction_total = count($extraction_thimble)-1;

                                                        $ext_thim = explode('x', $extraction_thimble[$extaction_total]->er_dimension);
                                                        $ext_thim = preg_replace('/[^A-Za-z0-9\-]/', '', $ext_thim[0]);
                                                        
                                                        echo $er_dim.' - '.$ext_thim; */
                                                    ?></td>
                                              </tr> -->

                                              <?php 

                                              //foreach($extraction_thimble as $index => $data) {

                                                // $er_dim = $data->er_dimension;
                                                // $ext_thim = $extraction_thimble[$teste]->er_dimension;

                                                // echo $er_dim;
                                                // print_r($ext_thim);

                                                // if($er_dim-$ext_thim=='3') {
                                                //   $teste = $index+1;
                                                //     echo '-----'.$er_dim.'-'.$ext_thim.'-----'.$index.'=='.$teste.'<br/>';
                                                // }

                                                // $max_index = array();

                                                // if($data->er_dimension == '23') {
                                                //   $mydata = (array) $data;
                                                  
                                                //   $max_index += array($index);
                                                  
                                                // }

                                              ?>
                                              
                                                  <!-- <tr class="toggle_me">
                                                      <td class="hiddenRow">
                                                          <div class="collapse demo1"><?php //echo 'Ø '. $data->er_dimension. ' x '.$data->er_height.' mm'; ?></div>
                                                      </td>
                                                      <td class="hiddenRow">
                                                          <div class="collapse demo1"><?php //echo $data->er_presentation; ?></div>
                                                      </td>
                                                      <td class="hiddenRow">
                                                          <div class="collapse demo1"><?php //echo $data->er_prod_code; ?></div>
                                                      </td>
                                                  </tr> -->
                                              <?php //} 
                                              
                                              foreach($ext_thimb as $index => $val){ 
                                                ?>

                                                <tr data-toggle="collapse" data-target="#demo{{$index}}" class="accordion-toggle " style="border-bottom:5px solid #fff;">
                                                  <td colspan="3" style="background:orange;"><span class="arrow down"></span>{{'Ø '. $val->et_diameter}}</td>
                                                </tr>
                                              
                                                <?php $ranges = DB::table('extraction_thimble_ranges as er')
                                                                ->where('er.et_id', $val->id)->get();

                                                                foreach($ranges as $data){ 
                                                ?>
                                                <tr>
                                                    <td colspan="3" class="hiddenRow">
                                                      <div class="accordian-body collapse" id="demo{{$index}}">
                                                          <table class="table-striped" style="margin-bottom:0px;">
                                                              <tbody>
                                                                <tr data-toggle="collapse" class="accordion-toggle" data-target="#demo{{$index}}">
                                                                  <td width="50%"> {{ 'Ø '. $data->er_diameter.' x '.$data->er_height.' mm'; }}</td>
                                                                  <td width="25%">{{ $data->er_presentation }} </td>
                                                                  <td width="25%">{{ $data->er_prod_code }} </td>
                                                                </tr>
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                    </td>
                                                  </tr>

                                                <?php } } ?>
                                              </tbody>
                                          </table>

                                </div>
                              </div>
                            
                                <div class="row text-center image-list">
                                  <?php } else{
                                            if($cat_data[0]->cat_id=='6'){ ?>

                        <div class="col-md-12 mb-3 themeTextColor">
                          <h3 class="">Chromatography Papers</h3>
                        </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="20%;">Grade</th>
                                                      <th scope="col" width="20%;">Weight<br/>(g/m2)</th>
                                                      <th scope="col" width="20%;">Thickness<br/>(mm)</th>
                                                      <th scope="col" width="20%;">Capillary Rose<br/>(Mm/30 min)</th>
                                                      <th scope="col" width="20%;">Absoption</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>60CF 1</td>
                                                          <td>90</td>
                                                          <td>0.19</td>
                                                          <td>93</td>
                                                          <td>Medium Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 2</td>
                                                          <td>125</td>
                                                          <td>0.24</td>
                                                          <td>93</td>
                                                          <td>Medium Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 3</td>
                                                          <td>150</td>
                                                          <td>0.32</td>
                                                          <td>145</td>
                                                          <td>Fast</td>
                                                        </tr>

                                                        <tr>
                                                          <td>60CF 4</td>
                                                          <td>195</td>
                                                          <td>0.35</td>
                                                          <td>115</td>
                                                          <td>Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 5</td>
                                                          <td>200</td>
                                                          <td>0.41</td>
                                                          <td>145</td>
                                                          <td>Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 6</td>
                                                          <td>320</td>
                                                          <td>0.90</td>
                                                          <td>240</td>
                                                          <td>Very Fast</td>
                                                        </tr>
                                                                                                          
                                                  </tbody>
                                                </table>


                                                <div class="col-md-12 mb-3 themeTextColor">
                                                  <h3 class="">Blotting Papers</h3>
                                                </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="25%;">Grade</th>
                                                      <th scope="col" width="25%;">Weight<br/>(g/m2)</th>
                                                      <th scope="col" width="25%;">Thickness<br/>(mm)</th>
                                                      <th scope="col" width="25%;">Capillary Rose<br/>(Mm/30 min)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>70BF 1</td>
                                                          <td>195</td>
                                                          <td>0.35</td>
                                                          <td>70</td>
                                                        </tr>
                                                        <tr>
                                                          <td>70BF 2</td>
                                                          <td>250</td>
                                                          <td>0.50</td>
                                                          <td>75</td>
                                                        </tr>
                                                        <tr>
                                                          <td>70BF 3</td>
                                                          <td>330</td>
                                                          <td>0.76</td>
                                                          <td>130</td>
                                                        </tr>

                                                        <tr>
                                                          <td>70BF 4</td>
                                                          <td>550</td>
                                                          <td>1.30</td>
                                                          <td>160</td>
                                                        </tr>
                                                                                                          
                                                  </tbody>
                                                </table>

                                                <div class="col-md-12 mb-3 themeTextColor">
                                                  <h3 class="">Blotting Membranes</h3>
                                                </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="25%;">Grade</th>
                                                      <th scope="col" width="25%;">Pore Size<br/>(µM)</th>
                                                      <th scope="col" width="25%;">Size</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>Cellulose Nitrate</td>
                                                          <td>0.22</td>
                                                          <td>300 mm * 3 m</td>
                                                        </tr>
                                                        <tr>
                                                          <td>Cellulose Nitrate</td>
                                                          <td>0.45</td>
                                                          <td>300 mm * 3 m</td>
                                                        </tr>
                                                  </tbody>
                                                </table>

                                            <?php }else{
                                                  if(!empty($sub_cat_data) && $sub_cat_data!='') {
                                                    $col = 'col-md-4';
                                                    if(count($sub_cat_data)>3) {
                                                      $col = 'col-md-3';
                                                    }else if(count($sub_cat_data)==2) {
                                                      $col = 'col-md-6';
                                                    }else if(count($sub_cat_data)==1) {
                                                      $col = 'col-md-12';
                                                    }

                                                    foreach ($sub_cat_data as $key => $value) {
                                                      $url = url($value->subcat_url);

                                                      echo '<div class="'.$col.' ranges_prod">
                                                        <a href="'.$url.'">
                                                          <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                        </a>
                                                        <div class="range_name text-center">
                                                          <label class="text-uppercase" style="margin-top:20px;">'.$value->sub_cat_name.'<br/>'.$value->sc_ranges.'</label>
                                                        </div>
                                                      </div>';
                                                    }
                                                  }
                                                }
                                  ?>

                                  
                              </div>

                              <?php if(count($sub_cat_data)>12) { ?>
                                <p class="text-center showing-result padding-top-bot-40"></p>
                                <a class="load-more"> Load More <span class="loading"><span></span></span></a>
                              <?php }  } ?>

                            </div>
                          </div>
                        </div>

                        <?php } ?>

                      </div>
                    </div>
                </section>

                <?php 
                if(!empty($range_data) && $range_data[0]->range_id=='2') { ?>
                <section class="site-section lighter-bg" id="prod-section-nav">
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
                                <?php if($cat_desc->isNotEmpty()) {
                                        if($cat_desc[0]->cd_features!='') {
                                          echo $cat_desc[0]->cd_features;
                                        }
                                } ?>
                              </div>

                              <div class="card-body" id='tab-2-active' style="display:none;">
                                  <?php if($cat_desc->isNotEmpty()) {
                                            if($cat_desc[0]->cd_application!='') {
                                              echo $cat_desc[0]->cd_application;
                                            }
                                  } ?>
                              </div>

                              <div class="card-body" id='tab-3-active' style="display:none;">
                                  <?php if($cat_desc->isNotEmpty()) {
                                            if($cat_desc[0]->cd_industries!='') {
                                              echo $cat_desc[0]->cd_industries;
                                            }
                                  } ?>
                              </div>

                          </div>
                        </div>
                        
                      </div>
                    </div>
                </section>
        <?php } ?>


                @if($range_data[0]->prod_id!='5' && $cat_data[0]->cat_id!='5')
                <section class="site-section lighter-bg " id="other-product">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12 general-text-color">
                          <h3 class="<?php echo $colorclass; ?>">Other Related Products</h3>
                        </div>

                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <div class="row text-center image-list">
                                  @if($cat_tags->isNotEmpty())
                                    @foreach($cat_tags as $index=> $tags)
                                      <div class="col-md-4 ranges_prod">
                                        <a href="{{ URL($tags->cat_url) }}">
                                          @if($tags->cat_image!='')
                                            <img src="{{ url('assets/images/j-quant.png'); }}" alt="{{$tags->cat_name}}" class="img-fluid tab_hover" style="height:300px;" />
                                          @else
                                            <img src="{{ url('assets/images/j-quant.png'); }}" alt="image{{$index}}" class="img-fluid tab_hover" style="height:300px;" />
                                          @endif
                                        </a>
                                          <div class="prod_name">
                                            <label class="text-uppercase" style="margin:20px 0 0;"><b>{!! $tags->cat_name !!}</b></label></br>
                                            <label><b>{!! $tags->cat_ranges !!}</b></label>
                                          </div>
                                      </div>
                                    @endforeach
                                  @endif
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                </section>
                @endif
            
                


       @include('frontend_view.layouts.contact_section')
   

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


</script>
    @endsection