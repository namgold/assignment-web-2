var calculate = function (){
    var sum = 0;
    $(".total").each(function(index, value){

        var total_per_item = parseInt($(this).closest(".text-center").find(".price").text()) * parseInt($(this).closest(".text-center").find(".input-number").val());
        
        $(this).html(total_per_item);
        sum += total_per_item;
    });

    $("#subtotal-price").text(sum);
    $("#total-price").text(sum + parseInt($("#ship-fee").text()) - parseInt($("#discount").text()));
}
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                var row = $("input[name='"+fieldName+"']").closest("tr").remove();

                // $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }

});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent > minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    }
        // } else {
    //     alert('Sorry, the minimum value was reached');
    //     $(this).val($(this).data('oldValue'));
    // }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    // calculate();
    calculate();

    
});
