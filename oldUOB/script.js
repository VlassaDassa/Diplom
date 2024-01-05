$(document).ready(function(){
  $('#celebs ul > li ul')
    .click(function(event){
      event.stopPropagation();
    })
 
    .hide();
    
  $('#celebs ul > li').click(function(){
    var selfClick = $(this).find('ul:first').is(':visible');
    if(!selfClick) {
      $(this)
        .parent()
        .find('> li ul:visible')
        .slideToggle();
    }
    
    $(this)
      .find('ul:first')
      .stop(true, true)
      .slideToggle();
  });
});