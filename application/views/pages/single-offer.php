<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
  <div class="banner-offers">
<div class="page-title">
        <h1> Offers</h1>
</div>
      </div>
 <div class="container fill">
 <section id="works" class="section">
      
     <div class="search-result">
        <div class="row">
            <div class="col-lg-12">
            <div class="offer-contaner">
               <div class="wrapper-box">
              <div class="col-lg-8  col-md-8 col-sm-12 col-xs-12 ">
               
<div class="offer-name"><h2><?php echo $result[0]->name;  ?> </h2></div>

  <div class="offer-valid"></div>
<div class="offer-start"> Valid From <?php echo $result[0]->offer_start_date;  ?>  to <?php echo $result[0]->offer_end_date;  ?>
</div>

  <div class=""><h4>Contact Information</h4></div>
<div class="offer-address">Contact Information <?php echo $result[0]->address;  ?> </div>
<div class="offer-phone"><?php echo $result[0]->phone;  ?> </div>
 <div class=""><h4>Offer Description</h4></div>
<div class="offer-descr"><?php echo $result[0]->description;  ?> </div>


            </div>

              <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                <img class="img-responsive" src="<?php echo  base_url().'uploads/'.$result[0]->image ?> ">

              </div>

</div>

                </div>
                 <div class="notfounddiv"><p>No offer found Please try again.</div>
                <div class="pagination_link"></div>
            </div>
        </div>
     </div>
    
  </section>
  </div>