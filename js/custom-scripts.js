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
     $('.searchdeal').click(function(){
       base_url     = $('#base_url').val();
       province_id  = $('#provice').val();    
       city_id      = $('#cities').val();
       category_id  = $('#category').val();

        var request = $.ajax({
            url: base_url+"index.php/offers/getOffers",
            type: "POST",
            data: {province_id: province_id,city_id:city_id,category_id:category_id},
            dataType: "html"
        });

        request.done(function (msg) {
            $(".offer-contaner").html(msg);
            console.log(msg);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
       
     });
     
});