$(function(){
  
  // Hover text for social buttons
  $('.icons a').hover(
    function() { $('#linkHoverText').text( $(this).clone().children().remove().end().text() ); },
    function() { $('#linkHoverText').text(''); }
  );
  
  // Flip the card!
  $('.flipper').click(function(e){
    e.preventDefault();
    if($(this).attr('href') != '#'){
      $('.back section').hide();
      $($(this).attr('href')).show();
    }
    $("#main").toggleClass('flipped');
  });
  

})