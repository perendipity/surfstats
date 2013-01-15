
<script src="ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="./js/jquery.backstretch.min.js"></script>
<script>
  // To attach Backstrech as the body's backgroun
  //$.backstretch("./img/background/data-section.jpg");

  // You may also attach Backstretch to a block-level element
  //$(".foo").backstretch("signup-section.jpg");

  // Or, to start a slideshow, just pass in an array of images
  $.backstretch([
    "./img/background/data-section.jpg",
    "./img/background/signup-section.jpg",
    "./img/background/news-section.jpg",
  ], {duration: 4000, fade: 750});
</script>