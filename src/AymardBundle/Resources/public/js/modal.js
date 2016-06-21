$(document).ready(function(){
    $(".photo-modal-event").on('click', function(event){
        var imageUrl = $(this).attr('full-size-link');
        var imageDesc = $(this).attr('image-description');
       
        $img = $('#photo-modal-img');
        $img.attr('src', imageUrl);
        
        $('#photo-modal-img').imagesLoaded()
            .always(function(){
                $('#photo-modal-spinner').fadeOut(1000);
                $('#image-description').html(imageDesc);
                
                $('#image-description').fadeIn(3000);
                $("#photo-modal-img").fadeIn(1500);
            });
    });
 
    $('#photo-modal').on('hide.bs.modal', function (e) {
        var img = $('#photo-modal-img');
        var img_desc = $('#image-description');
        
        img.css('display', 'none');
        
        img_desc.html('');
        img_desc.css('display', 'none');
        
        $('#photo-modal-spinner').show();
    });
    
    $('#photo-modal').on('show.bs.modal', function (e) {
        var $invoker = $(e.relatedTarget);
        var originalWidth = $invoker.children().width();
        var originalHeight = $invoker.children().height();
        var originalRatio = originalWidth/originalHeight;//get dimensions ratio of original image
        
        var photo_modal_content = $('.photo-modal-content');
        var img = $('#photo-modal-img');
        
        photo_modal_content.css({
            "width": function () {
                return 80*originalRatio + "vh";
	        },
	        "height": function () {
	            return "80vh";
	        },
	        "margin": "auto"
        });

        img.css({
            "height": function () {
	            return ("70vh");
	        },
	        "margin": "auto"
        });
    });
});