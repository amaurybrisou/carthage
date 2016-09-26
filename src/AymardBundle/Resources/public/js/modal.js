$(document).ready(function(){
    
    var fullSizeBaseUrl = "/media/cache/resolve/fullSize/img/";
    var img = $('#photo-modal-img');
    var img_desc = $('#image-description');
    var modal_spinner = $('#photo-modal-spinner');
    var photo_modal_content = $('#photo-modal-content');

    $(".photo-modal-event").on('click', function(event){
        
        var splittedUrl = $(this).attr('src').split('/');

        var imageUrl = fullSizeBaseUrl + splittedUrl[splittedUrl.length-1];
        var imageDesc = $(this).attr('alt');
       
        img.attr('src', imageUrl);
        
        img.imagesLoaded()
            .always(function(){
                modal_spinner.fadeOut(1000);
                img_desc.html(imageDesc);
                
                img_desc.fadeIn(2000);
                img.fadeIn(1500);
            });
    });
 
    $('#photo-modal').on('hide.bs.modal', function (e) {
        
        
        img.css('display', 'none');
        
        img_desc.html('');
        img_desc.css('display', 'none');
        
        modal_spinner.show();
    });
    
    $('#photo-modal').on('show.bs.modal', function (e) {
        var $invoker = $(e.relatedTarget);
        var originalWidth = $invoker.children().width();
        var originalHeight = $invoker.children().height();
        var originalRatio = originalWidth/originalHeight;//get dimensions ratio of original image
        
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