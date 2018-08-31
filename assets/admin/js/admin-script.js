/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    //change city drop down
    $("#province_id").change(function () {
        base_url = $('#base_url').val();
        province_id = $(this).val();       
           var request = $.ajax({
            url: base_url+"index.php/offers/getCitiesByProvince",
            type: "POST",
            data: {id: province_id},
            dataType: "html"
        });

        request.done(function (msg) {
            $("#city_id").html(msg);
            console.log(msg);
        });

        request.fail(function (jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        });
       
    });
});