angular.module('aymardApp', []).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

$(document).ready(function(){
    $('body').click(function(){
        var p = $( "p:first" );
        var position = p.offset();
        console.log(position)
        $( "p:last" ).text( "left: " + position.left + ", top: " + position.top );
    })

    $('#menu-trigger').click(function(){
        $("#side-menu").toggleClass("menu-active");
    })
})