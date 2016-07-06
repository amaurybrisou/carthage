$("#mosaic").on('arrangeComplete', function(){
  var mosaicHeight = $('#mosaic').height();
  var windowHeight = window.innerHeight;
  var finalHeight = windowHeight * 0.85;
  if(mosaicHeight > windowHeight){
      finalHeight = mosaicHeight * 1.10 ;
  }
  
  $("#mosaic-bg").height(finalHeight);
});