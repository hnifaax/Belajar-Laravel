// (function() {
//     const jumlah = document.querySelectorAll('.jumlah')

// Array.from(jumlah).forEach(function(element){
//     element.addEventListener('change', function(){
//         const id = element.getAttribute('data-item');
//         axios.patch(`/cart/${id}`, {
//             jumlah: this.value,
//             id: id
//         })
//         .then (function (response) {
//             window.location.href = '/cart'
//         })
//         .catch(function (error) {
//             console.log(error);
//         });
//     })
// })
// })();



$(document).ready(function () {
    cartload();

    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 20);
        value = isNaN(value) ? 0 : value;
        if(value<20){
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }

    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

});

$(document).ready(function () {

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var quantity = $(this).closest(".cart").find('.qty-input').val();
        var product_id = $(this).closest(".cart").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity':quantity,
            'product_id':product_id,
        };

        $.ajax({
            url: '/cart-update',
            type: 'POST',
            data: data,
            success: function (response) {
                window.location.reload();
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

});

