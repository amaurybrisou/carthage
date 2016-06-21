$(document).ready(function(){
 $mosaic = $('#mosaic').imagesLoaded( function() {
  // init Isotope after all images have loaded
  $mosaic.isotope({
      itemSelector: '.photo-thumbnail',
      masonry: {
        columnWidth: 10,
      }
    });
  });
});