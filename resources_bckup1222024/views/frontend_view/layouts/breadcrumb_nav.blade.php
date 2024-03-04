<!-- <div class="col-md-5 breadcrumbs">
  <a href="{{ url('frontend/home-page'); }}">Home / </a> -->
<?php
  $first_val = ucfirst(\Request::segment(1));
  $sec_val = \Request::segment(2);
  $third_val = \Request::segment(3);
  $fourth_val = \Request::segment(4);
  $fifth_val = \Request::segment(5);
  $sixth_val = \Request::segment(6);


  $first_text_white = '';
  $sec_text_white = '';
  $sec_url = '#';
  $third_text_white = '';
  $fourth_text_white = '';
  $fifth_text_white = '';
  $sixth_text_white = '';

  $ac_inac = '';

  if($first_val!='' && $sec_val!='') {
    $first_text_white = "text-white";
  }
  if($sec_val!='' && $third_val=='') {
      $sec_text_white = "text-white";
  } else if($third_val!='' && $fourth_val=='') {
      if(isset($range_pro_data) && !empty($range_pro_data)){
        $sec_url = $first_val.'/'.$range_pro_data[0]->range_url;
      } else{
        $sec_url = URL('product/'.$prod_data['prod_name']);
        $third_text_white = "text-white";
      }
  } else if($fourth_val!='' && $fifth_val=='') {
      $fourth_text_white = "text-white";
  } else if($fifth_val!='' && $sixth_val=='') {
      $fifth_text_white = 'class="text-white"';
  } else if($sixth_val!='') {
      $sixth_text_white = 'class="text-white"';
  }

    $bac_col = '';
    $dis_col = '';

      if(!empty($sec_val) && isset($sec_val) ) {
        if($sec_val!='') {
          $sec_val = ucwords(str_replace("_"," ",$sec_val));

            if($sec_val == 'Rapid Test' || $first_val == 'Support' || $first_val == 'Company') {
              $bac_col = 'rapid_test_bac_color';
            } else if($sec_val == 'Filtration') {
              $bac_col = 'filtration_test_bac_color';
            } else if($sec_val == 'Pool And Spa') {
              $dis_col = 'disable_color';
              $bac_col = 'ps_test_bac_color';
            } else if($sec_val == 'Aquarium') {
              $bac_col = 'aquarium_test_bac_color';
                } else if($sec_val == 'Visual Test Kits') {
                    $dis_col = 'disable_color';
                    $bac_col = 'vtk_test_bac_color';
                } else if($sec_val == 'Industries') {
              $bac_col = 'ind_test_bac_color';
            } else if($sec_val == 'Industry') {
              $bac_col = 'ind_test_bac_color';
            } else if($sec_val == 'Oem Label') {
              $bac_col = 'rapid_test_bac_color';
            }

            echo '<div class="col-md-5 breadcrumbs '.$bac_col.'">
              <a href="/" class="'.$dis_col.'">Home / '.$first_val.' / </a>';
                echo '<a class="'.$dis_col.' '.$sec_text_white.'" href="'.$sec_url.'" > '.$sec_val.' </a>';
              }
      }

            if(!empty($third_val) && isset($third_val) ) {
              if(isset($range_data) && $range_data->isNotEmpty()) {
                $range_data[0]->prod_name = str_replace("<br/>", " ", $range_data[0]->prod_name);
                echo ' <a class="'.$dis_col.' '. $third_text_white.'" href="#" >/ ' .$range_data[0]->prod_name.'</a>';
                  if(str_contains($third_val, 'article')== true) {
                    echo 'Article';
                  }
              }
            }
            if(!empty($fourth_val) && isset($fourth_val) ) {
              if(isset($range_data) && $range_data->isNotEmpty()) {
                  $cat_name = str_replace("<br/>", " ", $cat_data[0]->cat_name);
                ?>
                 <a href="#" class="{{$fourth_text_white}}" >/ {{ $cat_name }}</a>
              <?php }
            }

            if(!empty($fifth_val) && isset($fifth_val) ) {
              if(!empty($cat_data)) {
                echo ' / <a href="#" '.$fifth_text_white.'> '.$sub_cat_data[0]->sub_cat_name.'</a>';
              }
            }
            if(!empty($sixth_val) && isset($sixth_val) ) {
              if(!empty($sub_cat_data)) {
                echo ' / <a href="#" '.$sixth_text_white.'> ' .$sub_cat_data[0]->sub_cat_name.'</a>';
              }
            }



      if(isset($prod_data[0]->prod_name) && $prod_data[0]->prod_name!='') {
        $text_active = '';
        $range_name = $prod_data[0]->prod_name;
        $prod_breadcrumb= '<a href="#" >/ Product </a><a href="#" class="text-white">/ '.ucfirst($range_name).' </a>';
      }

?>



</div>