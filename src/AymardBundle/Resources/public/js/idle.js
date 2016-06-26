$(document).ready(function(){
    var interval = [];
    var i = 2;
    var rotateImages = function (data){
        
        interval[i] = setInterval(function(){
            
            var imageUrl = $('.slideshow').attr('src');
            var to = imageUrl.lastIndexOf('/') + 1;
            var str =  imageUrl.substring(0,to);
            
            imageUrl = str + data[i].file;
            
            $('.slideshow').attr('src', imageUrl);
            i++;
            
        }, 1 * 5000);
    }
    
    
    
    $.get('/web/app_dev.php/images', {}, function(data){
        var timeout;
        document.onmousemove = function(){
          clearTimeout(timeout);
          clearInterval(interval[i]);
          timeout = setTimeout(function(){
              rotateImages(data);
          }, 1 * 100);
          
          
        }

    }, 'json');
});