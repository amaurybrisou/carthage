$(document).ready(function(){
    var closeButton = $("#c-menu__close");
    var slider = $("#c-menu--slide-left");
    
    $('#c-menu__close').click(function(){
    
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
    
    });
});


