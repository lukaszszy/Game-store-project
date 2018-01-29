
$(document).ready(function(){
    $("#cartIcon").click(function(){
        $("#cart").toggle();
    });
    $("#cartIcon").mouseenter(function(){
        $("#cart").show();
        });
    $("#cartIcon").mouseleave(function(){
        $("#cart").hide();
    });
    $("#loginIcon").click(function(){
        $("#loginBox").show();
    });
    $("#loginBox").mouseleave(function(){
        $("#loginBox").hide();
    });

    var sum = 0;
    var amount = 0;
    $('.addToCart').click(function(e) {
      var prodName = $(this).parent().find(".productName").html();
      var prodComp = $(this).parent().find(".productComp").html();
      var prodPrice = $(this).parent().find(".productPrice").html();
      sum += parseInt(prodPrice);
      amount++;
      $('#cartContent').html('Dodano do koszyka:</br>' + prodName);
      $('#SumVal').html(sum);
      $('#AmVal').html(amount);
      $('#cart').show().delay(2000).fadeOut();
    });
});
