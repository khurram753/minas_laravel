<script>

    $(document).ready(function () {
        $(document).on('click', '.add_to_cart_btn', function () {
            var data = $('.add_to_cart_form').serializeArray();

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({

                type: 'POST',
                url: '{{route("addToCart")}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        successMsg(response.message);

                        $('.checkout_modal').show();

//                        var value = $('.cartCounter').text();
//                        var increment = parseInt(value)+1;
//                        $('.cartCounter').text(increment);



                        // setTimeout(function () {
                        //     window.location.reload();
                        // }, 1000);


                    } else if (response.result == 'error') {
                        $.unblockUI();
                        errorMsg(response.message);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        errorMsg(value);
                    });
                }
            });
        });

        $(document).on('click', '.qtypluscart', function () {
            var value = $(this).parents('.add_to_cart_form').find('.qty').val();

            value = parseInt(value) + 1;

            $(this).parents('.add_to_cart_form').find('.qty').val(value);

        });

        $(document).on('click', '.qtyminuscart', function () {
            var value = $(this).parents('.add_to_cart_form').find('.qty').val();


            if (value > 1) {
                value = parseInt(value) - 1;

                $(this).parents('.add_to_cart_form').find('.qty').val(value);
            } else {
                errorMsg('Product Quantity cannot be less than 0');
            }

        });


        $('.trashIcon').click(function () {
            var data = $(this).parents('li').find('input.id').val();

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({

                type: 'GET',
                url: '{{route("removeFromCart")}}',
                data: {id: data},


                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        successMsg(response.message);
                        window.location.reload();

                    } else if (response.result == 'error') {
                        $.unblockUI();
                        // errorMsg(response.message);
                    }


                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        // errorMsg(value);
                    });
                }


            });
        });

        $('.removeFromCart').click(function () {
            var data = $(this).data('id');

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({

                type: 'GET',
                url: '{{route("removeFromCart")}}',
                data: {id: data},


                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        successMsg(response.message);
                        window.location.reload();

                    } else if (response.result == 'error') {
                        $.unblockUI();
                        // errorMsg(response.message);
                    }


                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        // errorMsg(value);
                    });
                }


            });
        });

        $(".altera").click(function () {
            var sameRecord = $(this);
            if ($(this).hasClass('acrescimo')) {

                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                var id = $(this).parents('div#quantity-field').find('.product_id').val();
                var cart_id = $(this).parents('div#quantity-field').find('.cart_id').val();
                var quantity = parseInt($(this).parents('div#quantity-field').find('.qty').val()) + 1;

                $.ajax({
                    type: 'GET',
                    url: '{{route("updateCart")}}',
                    data: {
                        id: id,
                        cart_id: cart_id,
                        quantity: quantity,
                    },

                    success: function (response, status) {

                        if (response.result == 'success') {


                            var product_price = 0;
                            var currency = '$';
                            var singlePrice = 0;

                            if (response.data.productSalePrice) {
                                product_price = '$ ' + response.data.productSalePrice * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.productSalePrice;
                            } else {
                                product_price = '$' + response.data.price * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.price;
                            }


                            sameRecord.parents('div.quantity').find('input.qty').val(response.data.quantity);

                            sameRecord.parents('span.cart_item').find('span.cartPriceSection')
                                .find('span.cart_price_8000').text(product_price);

                            var subtotal = parseInt($('.total').find('span.totalPriceSpan').text()) + parseInt(singlePrice);


                            var totalPrice = $('.total').find('span.totalPriceSpan').text(subtotal);

                            $.unblockUI();
                            successMsg(response.message);
                            sameRecord.parents('div.item-quantity').find('.qty').val(quantity);

                        } else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                        });
                    }
                });


            } else if (parseInt($(this).parents('div.quantity').find('input.qty').val()) >= 1) {


                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                var id = $(this).parents('div#quantity-field').find('.product_id').val();
                var cart_id = $(this).parents('div#quantity-field').find('.cart_id').val();
                var quantity = parseInt($(this).parents('div#quantity-field').find('.qty').val()) - 1;

                $.ajax({
                    type: 'GET',
                    url: '{{route("updateCart")}}',
                    data: {
                        id: id,
                        cart_id: cart_id,
                        quantity: quantity,
                    },

                    success: function (response, status) {

                        if (response.result == 'success') {


                            var product_price = 0;
                            var currency = '$';
                            var singlePrice = 0;

                            if (response.data.productSalePrice) {
                                product_price = '$' + response.data.productSalePrice * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.productSalePrice;
                            } else {
                                product_price = '$' + response.data.price * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.price;
                            }


                            sameRecord.parents('div.quantity').find('input.qty').val(response.data.quantity);

                            sameRecord.parents('span.cart_item').find('span.cartPriceSection')
                                .find('span.cart_price_8000').text(product_price);


                            var subtotal = parseInt($('.total').find('span.totalPriceSpan').text()) - parseInt(singlePrice);


                            var totalPrice = $('.total').find('span.totalPriceSpan').text(subtotal);

                            $.unblockUI();
                            successMsg(response.message);

                        } else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                        });
                    }
                });


                sameRecord.parents('div.item-quantity').find('.qty').val(quantity);


            }
        });


        @auth


            $('.checkout').click(function () {

                var stripe = Stripe('{{env('STRIPE_KEY')}}');


                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                $.ajax({

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    url: '{{route('createStripeSession')}}',
                    // data: data,
                    success: function (response, status) {
                        if (response.result == 'success') {
                            $.unblockUI();
                            return stripe.redirectToCheckout({sessionId: response.data});

                        } else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                        });
                    }

                });


            });
        @endauth

    });

</script>
