$(document).ready(function(){
  var _mosaic = $('#mosaic').imagesLoaded( function() {
  // init Isotope after all images have loaded
  var $mosaic = _mosaic.isotope({
      itemSelector: '.photo-thumbnail',
      masonry: {
        columnWidth: 10,
        gutter: 10
      }
    });
  });
  
  var sizeMosaicBackground = function(){
    var mosaicHeight = $('#mosaic').prop('scrollHeight');
    var windowHeight = window.innerHeight;
    var finalHeight = windowHeight * 0.85;
    if(mosaicHeight > windowHeight){
       finalHeight = mosaicHeight ;
    }
   
    $("#mosaic-bg").height(finalHeight);
  };
  
  _mosaic.one('arrangeComplete', sizeMosaicBackground);
  _mosaic.on('layoutComplete', sizeMosaicBackground);
});