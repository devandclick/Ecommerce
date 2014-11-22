$("document").ready(function() { 
    $(".cp").keyup(function() {
        if ($(this).val().length === 5) {
            $.ajax({
               type: 'get',
               url: Routing.generate('villes', {cp:  $(this).val()}),
               beforeSend: function() {
                   if ($(".loading").length == 0) {
                       $("form .ville").parent().append('<div class="loading"></div>');
                   }
                   $(".ville option").remove();
               },
               success: function(data) {
                   $.each(data.ville, function(index,value) {
                       $(".ville").append($('<option>',{ value : value , text: value }));
                   });
                   $(".loading").remove();
               }
            });
        } else {
            $(".ville").val('');
        }
    });
});