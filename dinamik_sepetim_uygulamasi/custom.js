/**
 * Created by gkandemir-pc on 30.10.2016.
 */

$(document).ready(function(){

    $("#urun").change(function(){

        var $id = $(this).find("option:selected").val();

        var $url = "http://localhost/php/actions.php";

        $.post($url,{id : $id},function(callback){

            var data = JSON.parse(callback);

            $("#fiyat").val(data.fiyat);

        })


    })


})
