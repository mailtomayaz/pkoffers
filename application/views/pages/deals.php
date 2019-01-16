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
   
      <div class="row">
        <div class="col-md-12">
          <form action="#" id="formseachdeal"> 
            <input class="page_no" type="hidden" name="page_no" value="1">
              <input type="hidden" value="<?php echo base_url(); ?>" name="base_url" id="base_url">
            <table class="table">
    <tbody>
      <tr>
            <td>
            <div class="form-group">
    <label for="email">Category:</label>
    <?php //print_r($all_offers) ?>
    <select class="form-control" id="category" name="category">
        <option value="">Select Category</option>
       <?php foreach($category_list as $data){ ?>

        <option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
        <?php } ?>
    </select>

  </div></td>
            <td>
            <div class="form-group">
    <label for="email">Province:</label>
    <select class="form-control" id="provice" name="provice">
        <option value="">Select Province</option>
        <?php foreach($provinces_list as $prov){ ?>
        <option value="<?php echo $prov->id ?>"><?php echo $prov->name ?></option>
        <?php } ?>
      
    </select>

  </div></td>
        <td>
            <div class="form-group">
    <label for="email">City:</label>
    <select class="form-control" id="cities" name="city">
        <option value="">Select City</option>
         <?php foreach($cities_list as $data){ ?>
        <option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
        <?php } ?>
    </select>

  </div></td>
   
      
        <td>

        <div class="form-group">
          <label for="from">From</label>
                <div class='input-group date' id='datetimepicker1'  data-date="" data-date-format="dd-mm-yyyy">
                    <input type='text' class="form-control" name="start_date"  id="start_date"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
          </td>
            <td>

        <div class="form-group">
          <label for="from">To</label>
                <div class='input-group date' id='datetimepicker2' data-date-format="dd-mm-yyyy">
                    <input data-format="yyyy-MM-dd" type='text' class="form-control"  name="end_date"  id="end_date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
          </td>
  <td> 
         <div class="form-group">
      <label for="">&nbsp;</label>
      <div class="">
      <button type="button" class="btn btn-default searchdeal" >Go</button>
         </div>
         </div>
  </td>
      </tr>
      
    </tbody>
  </table>
  
  
  </form>
        </div>
      </div>
     <div class="search-result">
        <div class="row">
            <div class="col-lg-12">
                <div class="offer-contaner">


                </div>
                 <div class="notfounddiv"><p>No offer found Please try again.</div>
                <div class="pagination_link"></div>
            </div>
        </div>
     </div>
    
  </section>
  </div>