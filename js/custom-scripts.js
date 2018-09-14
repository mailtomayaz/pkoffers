/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    //home page slider
    $('#slippry-slider').slippry(
            defaults = {
                transition: 'fade',
                useCSS: true,
                speed: 5000,
                pause: 3000,
                initSingle: false,
                auto: true,
                preload: 'visible',
                pager: false,
            }

    );
//      new AnimOnScroll(document.getElementById('grid'), {
//      minDuration: 0.4,
//      maxDuration: 0.7,
//      viewportFactor: 0.2
//    });
    //change city drop down
    $("#provice").change(function () {
        base_url = $('#base_url').val();
        province_id = $(this).val();       
        var menuId = $("ul.nav").first().attr("id");
        var request = $.ajax({
            url: base_url+"index.php/offers/getCitiesByProvince",
            type: "POST",
            data: {id: province_id},
            dataType: "html"
        });

        request.done(function (msg) {
            $("#cities").html(msg);
            console.log(msg);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
       
    });
    //search result
     function sendData(page){

     }
     $('.searchdeal').click(function(){
       base_url     = $('#base_url').val();
       province_id  = $('#provice').val();    
       city_id      = $('#cities').val();
       category_id  = $('#category').val();
        page_no  = $('.page_no').val();

        var request = $.ajax({
            url: base_url+"offers/getOffers",
            type: "POST",
            data: {province_id: province_id,city_id:city_id,category_id:category_id,page_no:page_no},
            dataType: "json"
        });

        request.done(function (data) {
            output= '';
            console.log(data.offers);
$.each(data.offers, function( key, value ) {
  
  //alert( key + ": " + value );

});
 output='';
 if(data.offers){
     output+= '<div class="row">';
   $.each(data.offers, function (key, data) {

 output+= '<div class="col-lg-4 box-series">';

output+='<div class="product-image"><img class="img-responsive" src="'+base_url+'uploads/'+data['image']+'" /></div>';
               output+=' <h2>'+data['name']+'</h2>';
               output+= '<div class="offer_province_name">'+data['province_id']+'</div>';
               output+= '<div class="offer_category_name">'+data['city_id']+'</div>';
               output+= '<div class="offer_desc">'+data['description']+'</div>';
                 // $html.= '<div class="offer_address">'.$option->address.'</div>';
                 //  $html.= '<div class="offer_phone">'.$option->phone.'</div>';
                 //$html.= '<div class="offer_img">'.$option->phone.'</div>';
                 // $html.= '<div class="offer_date_created">'.$option->date_created.'</div>';
                 //$html.= '<div class="offer_date_expire">'.$option->date_created.'</div>';
                output+= '<a href="'+base_url+'offers/showoffer/'+data['id']+'" class="offer_link">View Details</a>';
                output+= '</div>';
   
    //console.log(data['name']);
   
});
    output+= '</div">';
            }

            $(".offer-contaner").html(output);
            $('.pagination_link').html(data.pagination_link);
            console.log(data);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
       
     });

     $(document).on("click", ".pagination li a", function(event){
  event.preventDefault();
  //alert('test');
  var page = $(this).data("ci-pagination-page");
  if(typeof page == 'undefined'){
    page = 1;
  }

  $('.page_no').val(page);
$('.pagination li').removeClass('active');
  $('.searchdeal').trigger('click');
  //page.parent().addClass('active');

  var delayInMilliseconds = 1000; //1 second

setTimeout(function() {
  //your code to be executed after 1 second
  $('.pagination li').removeClass('active');
   $(this).addClass('active');
}, delayInMilliseconds);
 

 });

     
});