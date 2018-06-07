$(document).ready(function(){
//   $('.popup-btn').click(function(){  

//         var popupBlock = $('#'+$(this).data('popup'));

//         // popupBlock.addClass('active')
//         // .find('.fade-out').click(function(){
//         //     popupBlock.css('opacity','0').find('.popup-content').css('margin-top','350px');        
//         //     setTimeout(function(){
//         //     $('.popup').removeClass('active');
//         //     popupBlock.css('opacity','').find('.popup-content').css('margin-top','');
//         //     }, 600);
//         // });



//     });

//Calculate new total when the quantity changes.
function CalcPrice (qty){
  var price = $(".product-price p").text();
  price=price.replace(",","");
  price=price.replace(" đ","");
  var total = parseFloat((price * qty)).toFixed(0).replace(/./g, function(c, i, a) {
    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
}); 
total += ' đ'; 
  //  alert(total);
    //  $.ajax({
    //     type:"POST",
    //     url:"sanpham.php",
    //     data:{id:'dad'},
    //     success:function(result){
    //      // $("#content").html(result);
    //     //  alert(result);
    //     }
    // });

  $(".product-checkout-total-amount").text(total);
}

    //Reduce quantity by 1 if clicked
    $(document).on("click", ".product-quantity-subtract", function(e){
    var value = $("#product-quantity-input").val();
    //console.log(value);
    var newValue = parseInt(value) - 1;
    if(newValue < 0) newValue=0;
    $("#product-quantity-input").val(newValue);
    CalcPrice(newValue);
    });

    //Increase quantity by 1 if clicked
    $(document).on("click", ".product-quantity-add", function(e){


    var value = $("#product-quantity-input").val();
    //console.log(value);
    var newValue = parseInt(value) + 1;
    $("#product-quantity-input").val(newValue);
    CalcPrice(newValue);
    });

    $(document).on("blur", "#product-quantity-input", function(e){
    var value = $("#product-quantity-input").val();
    //console.log(value);
    CalcPrice(value);
    });
    
});