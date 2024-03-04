<!-- <div class="col-md-5 breadcrumbs">
  <a href="{{ url('frontend/home-page'); }}">Home / </a> -->
  

<?php
  $first_val = ucfirst(\Request::segment(1));
  $sec_val = \Request::segment(2);
  $third_val = \Request::segment(3);
  $fourth_val = \Request::segment(4);
  $fifth_val = \Request::segment(5);
  $sixth_val = \Request::segment(6);

  $sec_text_white = '';
  $sec_url = '#';
  $third_text_white = '';
  $fourth_text_white = '';
  $fifth_text_white = '';
  $sixth_text_white = '';


if($sec_val!='' && $third_val=='') {
    $sec_text_white = 'class="text-white"';
} else if($third_val!='' && $fourth_val=='') {
    if(isset($range_pro_data) && !empty($range_pro_data)){
      $sec_url = $first_val.'/'.$range_pro_data[0]->range_url;
    } else{
      $sec_url = URL('product/'.$prod_data['prod_name']);
      $third_text_white = 'class="text-white"';
    }
} else if($fourth_val!='' && $fifth_val=='') {
    $fourth_text_white = 'class="text-white"';
} else if($fifth_val!='' && $sixth_val=='') {
    $fifth_text_white = 'class="text-white"';
} else if($sixth_val!='') {
    $sixth_text_white = 'class="text-white"';
}

$bac_col = '';

if(!empty($sec_val) && isset($sec_val) ) {
  if($sec_val!='') {
    $sec_val = ucwords(str_replace("_"," ",$sec_val));

      if($sec_val == 'Rapid Test') {
        $bac_col = 'rapid_test_bac_color';
      } else if($sec_val == 'Filtration') {
        $bac_col = 'filtration_test_bac_color';
      } else if($sec_val == 'Pool & Spa') {
        $bac_col = 'ps_test_bac_color';
      } else if($sec_val == 'Aquarium') {
        $bac_col = 'aquarium_test_bac_color';
      } else if($sec_val == 'Visual Test') {
        $bac_col = 'vtk_test_bac_color';
      } else if($sec_val == 'Industries') {
        $bac_col = 'ind_test_bac_color';
      } else if($sec_val == 'Industry') {
        $bac_col = 'ind_test_bac_color';
      }

if($first_val=='support' || $first_val=='Support'){
  $bac_col = 'rapid_test_bac_color';
}

      echo '<div class="col-md-5 breadcrumbs '.$bac_col.'">
        <a href="/">Home / </a>';
        echo $first_val.' / '.'<a href="'.$sec_url.'" '.$sec_text_white.' > '.$sec_val.' </a>';
        }
}

      if(!empty($third_val) && isset($third_val) ) {
        if(isset($range_data) && $range_data->isNotEmpty()) {
            echo '/ <a href="#" '.$third_text_white.'> ' .$range_data[0]->prod_name.'</a>';
        }
      }
      if(!empty($fourth_val) && isset($fourth_val) ) {
        if(isset($range_data) && $range_data->isNotEmpty()) {
            echo '/ <a href="#" '.$fourth_text_white.'> ' .$range_data[0]->prod_name.'</a>';
        }
      }

      if(!empty($fifth_val) && isset($fifth_val) ) {
        if(!empty($cat_data)) {
            echo ' / <a href="#" '.$fifth_text_white.'> ' .$cat_data[0]->cat_name.'</a>';
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



/*  

  $sec_val = \Request::segment(2);
  $third_val = \Request::segment(3);
  $fourth_val = \Request::segment(4);
  $fifth_val = \Request::segment(5);
  $sixth_val = \Request::segment(6);

  $third_text_white = '';
  $four_text_white = '';
  $fifth_text_white = '';
  $sixth_text_white = '';

  if($third_val!='' && $fourth_val=='') {
      $third_text_white = 'class="text-white"';
  } else if($fourth_val!='' && $fifth_val=='') {
      $four_text_white = 'class="text-white"';
  } else if($fifth_val!='' && $sixth_val=='') {
      $fifth_text_white = 'class="text-white"';
  } else if($sixth_val!='') {
      $sixth_text_white = 'class="text-white"';
  }
  
  $bac_col = '';

  if(!empty($third_val) && isset($third_val) ) {
    if($third_val!='') {
      $third_val = ucwords(str_replace("_"," ",$third_val));
      if($third_val == 'Rapid Test') {
        $bac_col = 'rapid_test_bac_color';
      } else if($third_val == 'Filtration') {
        $bac_col = 'filtration_test_bac_color';
      } else if($third_val == 'Pool & Spa') {
        $bac_col = 'ps_test_bac_color';
      } else if($third_val == 'Aquarium') {
        $bac_col = 'aquarium_test_bac_color';
      } else if($third_val == 'Visual Test') {
        $bac_col = 'vtk_test_bac_color';
      } else if($third_val == 'Industries') {
        $bac_col = 'ind_test_bac_color';
      } else if($third_val == 'Industry') {
        $bac_col = 'ind_test_bac_color';
      }


      echo '<div class="col-md-5 breadcrumbs '.$bac_col.'">
        <a href="{{ url("frontend/home-page"); }}">Home / </a>';
      echo ' Product / '.'<a href="#" '.$third_text_white.' > '.$third_val.' </a>';

          }
  }

        if(!empty($fourth_val) && isset($fourth_val) ) {
          if($range_data->isNotEmpty()) {
              echo '/ <a href="#" '.$four_text_white.'> ' .$range_data[0]->prod_name.'</a>';
          }
        }
        if(!empty($fifth_val) && isset($fifth_val) ) {
          if(!empty($cat_data)) {
              echo ' / <a href="#" '.$fifth_text_white.'> ' .$cat_data[0]->cat_name.'</a>';
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

*/

?>



</div>