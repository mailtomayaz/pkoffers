/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(window).load(function(){


    // call function

 });
$(document).ready(function () {
//ajax call

  function ajaxCall(){
 page_no  = $('.page_no').val();
 base_url = $('#base_url').val();
        var request = $.ajax({
            url: base_url+"index.php/offers/getOffers_onload",
              data: {page_no:page_no},
            type: "POST",
            dataType: "json",
        });

        request.done(function (data) {
                  output='';
 if($.isEmptyObject(data.offers)){
  $(".offer-contaner").html('');
$(".notfounddiv").css('display','block');

 }else{
//alert(data.offers.length);
$(".notfounddiv").css('display','none')
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
    $(".offer-contaner").html(output);
      $('.pagination_link').html(data.pagination_link);

   }
        });
  }

ajaxCall();
  
    //datepicker
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

     $('#datetimepicker1,#datetimepicker2').datetimepicker({
       /* language:  'fr',*/
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
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
     //onload populate data



     /*datepicker*/
          $('.searchdeal').click(function(){
       base_url     = $('#base_url').val();
       province_id  = $('#provice').val();    
       city_id      = $('#cities').val();
       category_id  = $('#category').val();
       page_no  = $('.page_no').val();
              dateFrom  = $('#start_date').val();
               dateTo  = $('#end_date').val();
           //    console.log('from date'+ dateFromText +'lll end date' + dateToText);
       //dateFrom =formatDate($("#datetimepicker1").data("datetimepicker").getDate());
      // dateTo =formatDate($('#datetimepicker2').data("datetimepicker").getDate());
page_no  = $('.page_no').val();

//$('#datetimepicker1').datetimepicker({format: "YYYY-MM-DD"});
//dateFrom2 = $('#datetimepicker1').datetimepicker().date();
//dateForm4=$.format.date(dateFrom3, "dd-MM-yy");
//alert(dateFrom3 );
        var request = $.ajax({
            url: base_url+"offers/getOffersByDate",
            type: "POST",
            data: {province_id: province_id,city_id:city_id,category_id:category_id,page_no:page_no,dateFrom:dateFrom,dateTo:dateTo},
            dataType: "json"
        });

        request.done(function (data) {
          $(".notfounddiv").css('display','none');
            output= '';
           // console.log(data.offers);
$.each(data.offers, function( key, value ) {

  //alert( key + ": " + value );

});
 output='';
 if($.isEmptyObject(data.offers)){
  $(".offer-contaner").html('');
$(".notfounddiv").css('display','block');

 }else{
//alert(data.offers.length);
$(".notfounddiv").css('display','none')
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
    $(".offer-contaner").html(output);
            $('.pagination_link').html(data.pagination_link);

   }
           /* else {
 $(".notfounddiv").css('display','block');
            }*/

            
            //console.log(data);
        });

        request.fail(function (jqXHR, textStatus) {
           $(".notfounddiv").css('display','block');
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
if($('.page_no').length >  0){

  ajaxCall();

}else{
  $('.searchdeal').trigger('click');}
  //page.parent().addClass('active');

  var delayInMilliseconds = 1000; //1 second

setTimeout(function() {
  //your code to be executed after 1 second
  $('.pagination li').removeClass('active');
   $(this).addClass('active');
}, delayInMilliseconds);
 

 });

     
});