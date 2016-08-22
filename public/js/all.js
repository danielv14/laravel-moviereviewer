$(document).ready(function() {

  // timed function to fade out the flash messages
  setTimeout(function() {
    // target div and fade it out 
    $('#flash-wrapper').fadeOut("slow", function() {
      $(this).remove();
    })
  }, 3000);
});

//# sourceMappingURL=all.js.map
