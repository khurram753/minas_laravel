<div class="woocommerce-notices-wrapper"></div>
<form class="woocommerce-cart-form" method="post">
    @foreach($cart as $key => $product)
        <span class="shop_table shop_table_responsive cart woocommerce-cart-form__contents display--block" cellspacing="0">
            <span>
                <span class="woocommerce-cart-form__cart-item  display--block relative  cart_item">
                    <span class="product-thumbnail display--inline-top block-25 mobile-hor-100">
                        <span class=" display--block mr-40 mobile-hor-nomargin">
                            <a href="{{route('productDetail',['id'=>$product['product_id']])}}" class="display--block">
                                <span class="display--block relative">
                                    <img class="resp-image display--block"
                                         src="{{asset($product['image'])}}"
                                         alt="Minas Jewelry-LEO">
                                    <span class="fill-dimensions img-overlay trans-slow"></span>
                                </span>
                            </a>
                        </span>
                    </span>
                    <span
                        class="product-name block-35 color--black pb-20 display--inline-top mobile-hor-100 mobile-hor-mt-25"
                        data-title="Product">
                        <a href="{{route('productDetail',['id'=>$product['product_id']])}}">{{ucfirst($product['name'])}}</a>
                        <span class="font-light uppercase ls-30 display--block title-14">
                            {{ucfirst($product['category_name'])}}
                        </span>
                        <div class="variation a-left ls-80 display--block title-14 extra-lh">
                            <div class="display--inline uppercase mr-9">{{ucfirst($product['material_name'])}}</div>
                        </div>
                        <div class="variation a-left ls-80 display--block title-14 extra-lh">
                            <div class="display--inline uppercase mr-9">{{ucfirst($product['cord_name'])}}</div>
                        </div>
                        <span class="a-left ls-80 pl-30 display--block title-14 mb-mm display--inline"></span>
                        <div class="quantity" id="quantity-field">
                            <input type="hidden" class="product_id" name="product_id"
                                   value="{{$product['product_id']}}">

                            <input type="hidden" class="cart_id" value="{{$key}}">

                            <label class="screen-reader-text"
                                   for="quantity_60cfaae6be163">{{ucfirst($product['name'])}}
                            </label>

                            <button type="button" value="quantity"
                                    class="altera decrescimo quantity-left-minus btn quanity-handler br-50 display--inline relative clickable trans minus quant-minus"
                                    data-type="minus" data-field="">
                                <span class="fas fa-minus"></span>
                             </button>


                            <input type="number" class="input-text qty text  ls-80 display--inline product-quantity" readonly
                                   step="1" min="0" max="" name="quantity" value="{{$product['quantity']}}">

                            <button type="button" value="quantity"
                                    class="altera acrescimo quantity-right-plus btn quanity-handler br-50 display--inline relative clickable trans plus quant-plus"
                                    data-type="plus" data-field="">
                                <span class="fas fa-plus"></span>
                            </button>
                        </div>
                    </span>
                    <span
                        class="product-subtotal block-13  a-right pb-20 color--black display--inline-top mobile-hor-100 mobile-hor-left"
                        data-title="Total">
                        <span class="woocommerce-Price-amount amount">
                            Item Price:
                            <span class="woocommerce-Price-currencySymbol">
                                ${{$product['productSalePrice'] ? $product['productSalePrice']:$product['productOriginalAmount']}}
                            </span>
                        </span>

                         <span class="woocommerce-Price-amount amount cartPriceSection">
                            Sub Total:
                            <span class="woocommerce-Price-currencySymbol cart_price_8000">
                                ${{$product['productSalePrice'] ? $product['productSalePrice']*$product['quantity']:$product['productOriginalAmount']*$product['quantity']}}
                            </span>
                        </span>



                    </span>
                    <span class="product-remove block-25 a-right pb-20 display--inline">
                        <a href="javascript:void(0)"
                           class="removeFromCart remove cart-remove br-50 display--inline color--grey a-center"
                           aria-label="Remove this item"
                           data-id="{{$key}}" data-product_sku="LEO-S">
                            ×
                        </a>
                    </span>
                </span>
            </span>
            <span class="line bg-dot display--block"></span>
        </span>
    @endforeach

</form>
