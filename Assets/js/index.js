$(document).ready(function() {
    alldeleteBtn = document.querySelectorAll('.delete')
    alldeleteBtn.forEach(onebyone => {
        onebyone.addEventListener('click', deleteINsession)
    })

    function deleteINsession() {
        removable_id = this.id;
        $.ajax({
            url: 'cart.php',
            method: 'POST',
            dataType: 'json',
            data: {
                id_to_remove: removable_id,
                action: 'remove'
            },
            success: function(data) {
                $('#displayCheckout').html(data);
                alldeleteBtn = document.querySelectorAll('.delete')
                alldeleteBtn.forEach(onebyone => {
                    onebyone.addEventListener('click', deleteINsession)
                })
            }
        }).fail(function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
        });

    }




    $('.add').click(function() {
        id = $(this).data('id');
        name = $('#name' + id).val();
        price = $('#price' + id).val();
        quantity = $('#quantity' + id).val();
        $.ajax({
            url: 'cart.php',
            method: 'POST',
            dataType: 'json',
            data: {
                cart_id: id,
                cart_name: name,
                cart_price: price,
                cart_quantity: quantity,
                action: 'add'
            },
            success: function(data) {
                $('#displayCheckout').html(data);
                alldeleteBtn = document.querySelectorAll('.delete')
                alldeleteBtn.forEach(onebyone => {
                    onebyone.addEventListener('click', deleteINsession)
                })
            }
        }).fail(function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
        });

    })
})