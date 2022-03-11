$(document).ready(function() {
  
  $('.info').first().show().animate({ width: '917px' });
  
  $('.item').click(function()
  {
      $(this)
      .next().show().animate({ width: '917px' })
      .siblings('.info').animate({ width: 0 }, function() { $(this).hide() });
  });
  
});


$(document).ready(function() {
  
    $('#first').first().show();
    
   $('.heading-trigger').css('display','block');
  $('.heading-trigger').click(function(){
    $(this).next().slideToggle(500);
    $('.accordion-row-content').not( $(this).next() ).slideUp(500);
});
  
});



$(document).ready(function() {
    
$("#top-entry-header-user-name h3").insertAfter(".img-box");
    
});

$(document).ready(function() {
    
$(".UPB-Button-input.right").insertAfter(".profile-about-me");
    
});
