angular.module('aymardApp', []).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

$(document).ready(function(){

    $mosaic = $('#mosaic').imagesLoaded( function() {
  // init Isotope after all images have loaded
      $mosaic.isotope({
          itemSelector: '.photo-thumbnail',
          masonry: {
            columnWidth: 10
          }
        });
    });
    
    $('#c-menu__close').click(function(){
        
        var closeButton = $("#c-menu__close");
        var slider = $("#c-menu--slide-left");
        if($(slider).hasClass("is-active") && closeButton.hasClass('is-active'))
        {
            $(slider).removeClass("is-active");
            $(closeButton).removeClass("is-active");
            $(closeButton).removeClass('glyphicon-backward');
            $(closeButton).addClass('glyphicon-forward');
        }
        else
        {
            $(slider).addClass("is-active");
            $(closeButton).addClass("is-active");
            $(closeButton).removeClass('glyphicon-forward');
            $(closeButton).addClass('glyphicon-backward');
        }

    })
    
    $(".photo-thumbnail").on('click', function(event){
       var imageUrl = $(this).attr('full-size-link');
       var imageDesc = $(this).attr('image-description');
       
       $('#photo-modal img').attr('src', imageUrl);     
       $('#image-description').html(imageDesc);
    })
 
    $('#photo-modal').on('show.bs.modal', function (e) {
        var $invoker = $(e.relatedTarget);
        var originalWidth = $invoker.children().width();
        var originalHeight = $invoker.children().height();
        var originalRatio = originalWidth/originalHeight;//get dimensions ratio of original image
        
        var photo_modal_content = $(this).find('.photo-modal-content');
        var img = $('#photo-modal-img');
      
        photo_modal_content.css({
            "width": function () {
                return 80*originalRatio + "vh";
	           // return (($("#photo-modal").width()*originalRatio));
	        },
	        "height": function () {
	            return "80vh";
	           // return (($("#photo-modal").height()*1));
	        },
	        "margin": "auto"
        });
       
            console.log(photo_modal_content.css("height"));
        img.css({
            "height": function () {
	            return ("70vh");
	        },
	        "margin": "auto"
        })
    });
})