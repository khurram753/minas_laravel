<script>

    $(document).ready(function () {
        $(document).on('click','.add_to_cart_btn',function () {
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

//                        var value = $('.cartCounter').text();
//                        var increment = parseInt(value)+1;
//                        $('.cartCounter').text(increment);

                        setTimeout(function(){
                            window.location.reload();
                        },1000);


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

        $(document).on('click','.qtypluscart',function () {
            var value = $(this).parents('.add_to_cart_form').find('.qty').val();

            value = parseInt(value) + 1;

            $(this).parents('.add_to_cart_form').find('.qty').val(value);

        });

        $(document).on('click','.qtyminuscart',function () {
            var value = $(this).parents('.add_to_cart_form').find('.qty').val();


            if(value > 1) {
                value = parseInt(value) - 1;

                $(this).parents('.add_to_cart_form').find('.qty').val(value);
            }
            else{
                errorMsg('Product Quantity cannot be less than 0');
            }

        });


        $('.trashIcon').click(function(){
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
                data: {id:data},


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
                data: {id:data},


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
//            var parent = $(this).parents('div.cart_counter');
            if ($(this).hasClass('acrescimo')) {
                // if (parent.find('#txtAcrescimo').val() == 5) {
                //     // parent.find('.acrescimo').attr('disabled', 'disabled');
                // }
                // else {
                //     parent.find('.decrescimo').removeAttr('disabled');


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

                var id = $(this).parents('div.item-quantity').find('.product_id').val();
                var quantity = parseInt($(this).parents('div.item-quantity').find('.qty').val()) + 1;

                $.ajax({
                    type: 'GET',
                    url: '{{route("updateCart")}}',
                    data: {
                        id: id,
                        quantity: quantity,
                    },

                    success: function (response, status) {

                        if (response.result == 'success') {
//                            var discountAmount = parseFloat($('.discount-value').text());
//                                console.log(discountAmount);
//                            var discount = 0;
//                            var type = 0;
                            {{--@if(Session::has('couponDiscount') && count(Session::get('couponDiscount')))--}}
                            {{--discount = "{{Session::get('couponDiscount')['discount']}}";--}}
                            {{--discount = parseFloat(discount);--}}
                            {{--@if(Session::get('couponDiscount')['type']=='percentage')--}}
                            {{--type = 1;--}}
                            {{--@else--}}
                            {{--type = 0;--}}
                            {{--@endif--}}

                            {{--@endif--}}

                            var product_price = 0;
                            var currency = '$';
                            var singlePrice = 0;

                            if(response.data.productSalePrice)
                            {
                                product_price = '$ ' + response.data.productSalePrice * response.data.quantity ;
                                currency = '$';
                                singlePrice = response.data.productSalePrice;
                            }
                            else
                            {
                                product_price = '$' + response.data.price * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.price;
                            }



                            sameRecord.parents('td.Qty').siblings('td.cartPriceSection').find('span.cart_price_8000')
                                .text(product_price);

                            var subtotal = parseInt($('.total').find('span').text())  + parseInt(singlePrice);
                            // $('.subTotal').find('span').text( subtotal);

                            // console.log($('td.subTotal').find('span.subTotalValue').text());


                            var totalPrice = $('.total').find('span').text(subtotal);

//                            var sumTotalPrice = parseInt(totalPrice) + parseInt(response.data.price);
//
//                            $('.totalPriceSection').text(sumTotalPrice);

//                            if (discount && type) {
//                                $('.overallPriceSection').text((sumTotalPrice.toFixed(2) - (discount * sumTotalPrice).toFixed(2)).toFixed(2));
//                                $('.totalDiscountSection').text((discount * sumTotalPrice).toFixed(2));
//
//                            } else if (discount) {
//                                $('.overallPriceSection').text((sumTotalPrice.toFixed(2) - (discount).toFixed(2)).toFixed(2));
//                                $('.totalDiscountSection').text((discount).toFixed(2));
//                            } else {
//
//                                $('.overallPriceSection').text(sumTotalPrice.toFixed(2));
//                                $('.totalDiscountSection').text(0);
//                            }


                            $.unblockUI();
                            successMsg(response.message);
                            sameRecord.parents('div.item-quantity').find('.qty').val(quantity);
//                            parent.find('#txtAcrescimo').val(parseInt(parent.find('#txtAcrescimo').val()) + 1);

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


            }
            else if (parseInt($(this).parents('div.item-quantity').find('.qty').val()) >= 1) {
                // if (parent.find('#txtAcrescimo').val() == 1) {
                //     parent.find('.decrescimo').attr('disabled', 'disabled');
                // }
                // else {
//                parent.find('.acrescimo').removeAttr('disabled');

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

                var id = $(this).parents('div.item-quantity').find('.product_id').val();
                var quantity = parseInt($(this).parents('div.item-quantity').find('.qty').val()) - 1;

                $.ajax({
                    type: 'GET',
                    url: '{{route("updateCart")}}',
                    data: {
                        id: id,
                        quantity: quantity,
                    },

                    success: function (response, status) {

                        if (response.result == 'success') {

                            {{--var discountAmount = parseFloat($('.discount-value').text());--}}
                            {{--var discount = 0;--}}
                            {{--var type = 0;--}}

                            {{--@if(Session::has('couponDiscount') && count(Session::get('couponDiscount')))--}}
                            {{--discount = "{{Session::get('couponDiscount')['discount']}}";--}}
                            {{--discount = parseFloat(discount);--}}
                            {{--@if(Session::get('couponDiscount')['type']=='percentage')--}}
                            {{--type = 1;--}}
                            {{--@else--}}
                            {{--type = 0;--}}
                            {{--@endif--}}

                            {{--@endif--}}

                            //                            sameRecord.parents('li#' + id).find('.cart_price_column')
                            //                                .text('$' + response.data.price * response.data.quantity);


                            var product_price = 0;
                            var currency = '$';
                            var singlePrice = 0;

                            if(response.data.productSalePrice)
                            {
                                product_price = '$' + response.data.productSalePrice * response.data.quantity ;
                                currency = '$';
                                singlePrice = response.data.productSalePrice;
                            }
                            else
                            {
                                product_price = '$' + response.data.price * response.data.quantity;
                                currency = '$';
                                singlePrice = response.data.price;
                            }


                            sameRecord.parents('td.Qty').siblings('td.cartPriceSection').find('span.cart_price_8000')
                                .text(product_price);

                            var subtotal = parseInt($('.total').find('span').text())  - parseInt(singlePrice);
                            // $('.subTotal').find('span').text(subtotal);


                            var totalPrice = $('.total').find('span').text(subtotal);


//                            var totalPrice = $('.totalPriceSection').text();
//                            var sumTotalPrice = parseInt(totalPrice) - parseInt(response.data.price);
//                            $('.totalPriceSection').text(sumTotalPrice);
//
//
//                            if (discount && type) {
//                                $('.overallPriceSection').text((sumTotalPrice.toFixed(2) - (discount * sumTotalPrice).toFixed(2)).toFixed(2));
//                                $('.totalDiscountSection').text((discount * sumTotalPrice).toFixed(2));
//
//                            } else if (discount) {
//                                $('.overallPriceSection').text((sumTotalPrice.toFixed(2) - (discount).toFixed(2)).toFixed(2));
//                                $('.totalDiscountSection').text((discount).toFixed(2));
//                            } else {
//
//                                $('.overallPriceSection').text(sumTotalPrice.toFixed(2));
//                                $('.totalDiscountSection').text(0);
//                            }

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

//                parent.find('#txtAcrescimo').val(parseInt(parent.find('#txtAcrescimo').val()) - 1);


            }
        });


    });

</script>
