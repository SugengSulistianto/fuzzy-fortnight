
$(function () {
    /*=======================
                UI Slider Range JS
    =========================*/
    $('.delivery-address').change(function(){
        $('.courier-code').removeAttr('checked');
        $('.available-services').hide();
    });

    $('.courier-code').click(function(){
        let courier = $(this).val();
        let addressID = $('.delivery-address:checked').val();

        $.ajax({
            url: "/orders/shipping-fee",
            method: "POST",
            data: {
                address_id: addressID,
                courier: courier,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                $('.available-services').show();
                $('.available-services').html(result);
            },
            error: function(e) {
                console.log(e);
            }
        })
    });
});