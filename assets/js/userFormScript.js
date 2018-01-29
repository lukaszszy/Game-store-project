$(document).ready(function(){

$('input.changeRequest').click(function(){
  a = $(this).parent().prevAll(".dataFrame:first").html();
  $(this).parent().prevAll(".dataFrame:first").html('<form><input type="text" placeholder="' + a + '...">');
  $(this).css('display', 'none');
  $(this).parent().find('.changeConfirmation').show();
  $(this).parent().find('.cancelChangeRequest').show();
});

$('input.cancelChangeRequest').click(function(){
  $(this).parent().prevAll(".dataFrame:first").html(a);
  $(this).css('display','none');
  $(this).parent().find('.changeConfirmation').css('display','none');
  $(this).parent().find('.changeRequest').show();
});


});
