angular.module('aymardApp', []).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

$(document).ready(function(){

    // $("#side-menu")
    //     .mouseover(function(){
    //         window.setTimeout(function(){
    //             $("#page-description").removeClass("hidden");
    //         }, 0)
    //     })
    //     .mouseleave(function(){
    //         $("#page-description").addClass("hidden");
    //     })
        
    $('.menu-trigger').click(function(){
        if($(this).hasClass("active"))
        {
            $(this).removeClass("active");
            $("#side-menu").stop().animate({width:'0vw'}, {queue: false, duration:300})
            $(this).stop().animate({left:'0vw'}, {queue: false, duration: 300})
        }
        else
        {
            $(this).addClass("active");
            $("#side-menu").stop().animate({width:'40vw'}, {queue: false, duration:300})
            $(this).stop().animate({left:'32vw'}, {queue: false, duration: 300})

        }

    })
    
 
})