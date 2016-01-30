$(document).ready(function(){




    $( ".foto" ).click(function() {
        var va = $(this).attr("src");

        $("#inputAvatar").val(va);
        var bla = $("#inputAvatar").val();


        $("#avatarMain").attr("src", va);


    });



});

