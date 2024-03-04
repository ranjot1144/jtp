<section class="site-section grey_background" id="contact_us_footer">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-md-12 text-center general-text-color">
          <?php 
          if(isset($range_data)) {
            
            if($range_data[0]->prod_id=='8') { ?>
            <h2 class="mb-4 themeTextColor">Did not find the right filter</h2>
            <p  class="mb-2">Let our expert Technical Team<br/>assist you with that </p>
            
          <?php }  else { ?>
            <h2 class="mb-4 themeTextColor">Have an enquiry ?</h2>
            <p class="mb-2">Our expert customer support team are on hand to answer <br/>any of your queries </p>
          <?php }  }else{ ?>

            <h2 class="mb-4 themeTextColor">Have an enquiry ?</h2>
            <p class="mb-2">Our expert customer support team are on hand to answer <br/>any of your queries </p>
          <?php } ?>


      </div>
      
      <div class="col-md-12 text-center contactUs_enquiry_button">
        <a href="{{ URL('support/contact-us') }}" class="btn btn-primary btn-md">Contact Us</a>
      </div>

    </div>
  </div>
</section>