<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <section id="works" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Deals</span></h3>
          </div>
          <div class="sub-heading">
            <p>
             s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form action="/action_page.php"> 
              <input type="hidden" value="<?php echo base_url(); ?>" name="base_url" id="base_url">
            <table class="table">
    <tbody>
      <tr>
            <td>
            <div class="form-group">
    <label for="email">Category:</label>
    <select class="form-control" id="category">
       <?php foreach($category_list as $data){ ?>
        <option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
        <?php } ?>
    </select>

  </div></td>
            <td>
            <div class="form-group">
    <label for="email">Province:</label>
    <select class="form-control" id="provice">
        <?php foreach($provinces_list as $prov){ ?>
        <option value="<?php echo $prov->id ?>"><?php echo $prov->name ?></option>
        <?php } ?>
      
    </select>

  </div></td>
        <td>
            <div class="form-group">
    <label for="email">City:</label>
    <select class="form-control" id="cities">
         <?php foreach($cities_list as $data){ ?>
        <option value="<?php echo $data->id ?>"><?php echo $data->name ?></option>
        <?php } ?>
    </select>

  </div></td>
   
      
        
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
        <div class="row">
            <div class="col-lg-12">
                <div class="offer-contaner"></div>
            </div>
        </div>
    </div>
  </section>