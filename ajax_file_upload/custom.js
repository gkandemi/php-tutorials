$(document).ready(function(){


    $("#uploadForm").on("submit", function(e){

        e.preventDefault();

        $.ajax({
            url: "upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data){

                alert(data);

            }
        })




    })



})