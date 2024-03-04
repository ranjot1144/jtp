@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- <main class="main-content">
       <div class="container-fluid"> -->
                
       @include('frontend_view.layouts.breadcrumb_nav')

               <section class="site-section-hero bg-image bg-header-image" data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading filterpapercolor bold-text" data-aos="fade-right"> <?php echo $sub_cat_data[0]->sub_cat_name; ?></h1>
                      </div>
                  </div>
                </section>


                <section class="site-section lighter-bg">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-10">
                          <h2 class="heading text-center">Grades</h2>
                          <p>Our Ashless Filter Papers are made under the strictest conditions using high quality raw materials. The ashless filter paper grades are made
                          with 100% cotton linter fibres. Cellulose fibres in their natural state contain small quantities of organic and inorganic impurities. <a href="">Read More</a></p>
                        </div>




                      </div>
                    </div>
                </section>

                <section class="site-section lighter-bg">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-12 table-responsive text-center">
                            <table class="table-striped">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col">Grade</th>
                                  <th scope="col">Whatman <br/> Equivalent</th>
                                  <th scope="col">Filtering <br/> Speed</th>
                                  <th scope="col">Thickness <br/> (mm)</th>
                                  <th scope="col">Pore Size <br/> (M)</th>
                                  <th scope="col">Weight <br/> (g/m2)</th>
                                  <th scope="col">Filteration Speed <br/> (sec*)</th>
                                  <th scope="col">Burst Strength <br/> (kg/cm2)</th>

                                </tr>
                              </thead>
                              <tbody>

                                <?php if(!empty($grade_data)) {
                                        foreach($grade_data as $data) {
                                        
                                          $grade_desc = '';
                                          if(isset($data->grade_desc) && !empty($data->grade_desc)){
                                            $grade_desc = $data->grade_desc;
                                          }

                                          $cnt = 0;
                                          if(isset($grade_code) && !empty($grade_code)) {
                                              $cnt = count($grade_code);
                                          }
                                          echo '<tr class="parent" id="row'.$data->id.'" title="Click to expand/collapse" style="cursor: pointer;">
                                                  <td>'.$data->grade_range.' <span style="float:right;">+</span></td>
                                                  <td>= No.'.$data->whatman_equivalent.'</td>
                                                  <td>'.$data->filtering_speed.'</td>
                                                  <td>'.$data->thickness.'</td>
                                                  <td>'.$data->pore_size.'</td>
                                                  <td>'.$data->weight.'</td>
                                                  <td>'.$data->filtration_speed.'</td>
                                                  <td>'.$data->burst_strength.'</td>
                                                </tr>';

                                            if(isset($grade_desc) && !empty($grade_desc)) {
                                              echo '<tr class="child-row'.$data->id.'" style="display:none;">
                                                  <th> </td>  
                                                  <th colspan="4">Grade 351 <span style="padding:15px; background: #A0BF1A; color:#fff;">Very Slow filtering</span></td>  
                                                  <th> </td>  
                                                  <th> Sizes <br/>(Diameter/mm) </td> 
                                                  <th> Product Code</td>  
                                                </tr>

                                                <tr class="child-row'.$data->id.'" style="display:none;">
                                                  <td> </td>  
                                                  <td colspan="4" rowspan='.$cnt.' style="text-align:left; vertical-align: top; width:50%;">'.$grade_desc.'
                                                  <td> &nbsp;</td>  
                                                  <td> </td>
                                                  <td> </td>
                                                </tr>';
                                                
                                                  if($data->id==$grade_code[0]->grade_desc_id) {
                                                    foreach($grade_code as $index => $gc) { 
                                                      echo '<tr class="child-row'.$data->id.'" style="display:none;">
                                                            <td> </td>
                                                            <td> </td>
                                                            <td>'.$gc->gc_size.'</td>
                                                            <td>'.$gc->gc_prod_code.'</td>
                                                            </tr>';   
                                                    } 
                                                  }
                                              }
                                            
                                        }
                                      }?>
      <!-- <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>90</td>
        <td>351090</td> 
      </tr>
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>110</td>
        <td>351110</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>125</td>
        <td>351125</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>150</td>
        <td>351150</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>185</td>
        <td>351185</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>240</td>
        <td>351240</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>300</td>
        <td>351300</td> 
      </tr>  	   
      <tr class="child-row'.$data->id.'" style="display:none;">
        <td> </td>  
        <td> </td>  
        <td>320</td>
        <td>351320</td> 
      </tr>  -->


                                <!-- <tr class="parent" id="row123" title="Click to expand/collapse" style="cursor: pointer;">
                                  <td>351 <span style="float:right;">+</span></td>
                                  <td>= No.42</td>
                                  <td>Very Slow</td>
                                  <td>0.14</td>
                                  <td>2-3</td>
                                  <td>84</td>
                                  <td>180</td>
                                  <td>> 0.20</td>
                                </tr>
                                        <tr class="child-row123">
                                            <th> </td>  
                                            <th colspan="4">Grade 351 <span style="padding:15px; background: #A0BF1A; color:#fff;">Very Slow filtering</span></td>  
                                            <th> </td>  
                                            <th> Sizes <br/>(Diameter/mm) </td> 
                                            <th> Product Code</td>  
                                          </tr>  
                                          <tr class="child-row123">
                                              <td> </td>  
                                              <td colspan="4" rowspan="10" style="text-align:left; vertical-align: top; width:50%;">This is an extremely fine retention filter for critical
                                                  gravimetric analysis of very fine particles, such as
                                                  barium and lead sulphates, stannic and nickel
                                                  sulfide for use in glazes, coatings and pigments.
                                                  It also filters calcium oxolate, calcium fluoride and
                                                  cuprous oxide. It eliminates large particles that
                                                  might otherwise interfere with sensitive
                                                  instrumentations. Likewise it is highly recommended
                                                  for the analysis of insoluble particles in oils and
                                                  animal or vegetable fats. A common example is
                                                  use of Grade 351 as a calcium carbonate filter for
                                                  analysis in the cement industry. Grade 351 has the
                                                  smallest pore size of all our filter paper grades.
                                                  The ash content is 0.007%. The high purity of Grade
                                                  351 filters also makes them suitable for processes
                                                  that require ashing</td>
                                              <td> &nbsp;</td>  
                                              <td>55 </td>  
                                              <td>351055</td>
                                            </tr>  
                                            <tr class="child-row123">
                                              <td> </td>
                                              <td> </td>
                                              <td>70</td>
                                              <td>351070</td>
                                            </tr>  
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>90</td>
                                              <td>351090</td> 
                                            </tr>
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>110</td>
                                              <td>351110</td> 
                                            </tr>  	   
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>125</td>
                                              <td>351125</td> 
                                            </tr>  	   
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>150</td>
                                              <td>351150</td> 
                                            </tr>  	   
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>185</td>
                                              <td>351185</td> 
                                            </tr>  	   
                                            <tr class="child-row123">  
                                              <td> </td>  
                                              <td> </td>  
                                              <td>240</td>
                                              <td>351240</td> 
                                            </tr>  	   
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>300</td>
                                              <td>351300</td> 
                                            </tr>  	   
                                            <tr class="child-row123">
                                              <td> </td>  
                                              <td> </td>  
                                              <td>320</td>
                                              <td>351320</td> 
                                            </tr>  	   
                                <tr>
                                  <td>352</td>
                                  <td>= No.43</td>
                                  <td>Medium</td>
                                  <td>0.15</td>
                                  <td>3-5</td>
                                  <td>84</td>
                                  <td>100</td>
                                  <td>> 0.20</td>
                                </tr>
                                <tr>
                                  <td>353</td>
                                  <td>= No.43</td>
                                  <td>Medium Fast</td>
                                  <td>0.16</td>
                                  <td>5-8</td>
                                  <td>84</td>
                                  <td>50</td>
                                  <td>> 0.20</td>
                                </tr> -->
                                
                              </tbody>
                            </table>
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
                
            <!-- </div>
        </main> -->
    @endsection