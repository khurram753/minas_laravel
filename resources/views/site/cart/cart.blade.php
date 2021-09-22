@extends('layout.shop-layout.app')

@section('title')
    MINAS - Cart
@endsection

@section('style')

@endsection

@section('content')
    <main id="content" class="site-content relative">
        <div class="woocommerce"></div>
        <div class="fill-dimensions bg--white"></div>
        <div class="cart-line-holder block-100 bg--grey-med abs-tl fixed z-30 mobile-hor-hidden"></div>
        <div class="cart-line-holder block-100 bg--grey-med abs-bl fixed z-30 mobile-hor-hidden"></div>

        <a href="index.html" class="cart-close display--inline abs-tr fixed title-12 font-bold color--black hover-red ls-180 uppercase cursor z-30 mobile-hor-rel">
            <svg class="icon icon--x no-icon-trans block-100">
                <use xlink:href="#x-close"></use>
            </svg>
        </a>
        <div class="mh-100vh pr-502 relative z-20 pb-section laptop-nopad--right tablet-hor-nopad--right">
            <div class="grid max-8cols-g tablet-hor-maxw-100 mobile-hor-100">
                <div class="gutter mobile-hor-gutter">
                    <header class="header relative pt-89">
                        <a href="index.html" class="logo display--block relative top-0 mb-y">
                            <svg class="block-100" xmlns="http://www.w3.org/2000/svg" width="525.349"
                                 preserveAspectRatio="xMinYMin meet" viewBox="0 0 525.349 133.56">
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path class="path"
                                          d="M508.414 73.081c-11.361-9.835-23.782-11.475-38.45-8.827-11.592 2.093-32.917 5.267-43.792 1.423-7.555-2.671-13.654-1.101-20.923 1.028-7.107 2.081-13.328 3.545-20.925 3.956-11.29.61-12.624-5.133-19.424-5.261-7.3-.137-13.841 3.171-20.692 4.337-5.984 1.018-14.82 4.281-19.55-1.468-2.49-3.026-2.981-4.753-7.354-5.165-3.007-.283-7.311 1.285-9.857 2.471-3.524 1.64-15.355 8.101-18.038 3.378-.941-1.657.061-9.072-5.287-6.612-2.402 1.105-4.94 5.305-4.94 7.706v2.669c0 3.631 3.603 7.525 7.055 8.261 4.113.875 8.878-.399 12.671-2.023 5.085-2.178 17.902-10.489 21.829-5.216 2.559 3.436 2.704 6.183 7.712 7.603 4.087 1.159 8.811-.393 12.821-1.195 6.944-1.39 17.859-6.164 24.607-6.164h2.39c5.035 0 6.21 8.664 18.103 7.296 6.489-.746 15.047-3.12 21.121-5.026 7.828-2.459 14.814-2.389 22.858-.559 7.467 1.698 15.562 2.056 23.132.882 14.971-2.322 29.609-7.735 44.356-.784 5.651 2.664 10.48 6.367 14.674 11.321 2.014 2.379 4.062 5.563 4.636 8.441.715 3.585-1.631 7.232-5.417 7.232h-3.513c-12.189 0-5.362 10.427-.041 11.293 3.315.539 7.404-.818 10.074-2.244 3.337-1.783 4.447-3.226 6.029-6.476 4.929-10.124-8.346-25.77-15.865-32.277zM283.396 31.409v-3.091c0-4.626-4.144-8.736-8.476-9.354-8.201-1.172-9.327 6.211-3.687 6.511 7.602.403 3.841 6.401-.008 8.802-4.905 3.06-1.298-1.948-1.337-3.129-.072-2.217-2.771-4.014-4.8-4.181-8.942-.738-14.166 15.533-1.786 18.915 8.662 2.364 20.094-5.878 20.094-14.473zM213.454 70.856c-8.988-3.834 10.806-15.624-.881-21.459-7.4-3.694-17.684 3.102-24.618 6.427-7.729 3.706-14.925 7.067-22.958 10.624-4.171 1.847-12.742 5.174-19.358 6.881-2.547.657-4.805 1.074-6.41 1.074h-3.231c-4.166 0-9.132-1.866-10.437-6.284-1.033-3.496-.577-3.782 1.802-5.862 1.572-1.373 2.855-2.648 4.426-4.004 4.534-3.913 9.174-7.859 13.849-11.897a877.283 877.283 0 0 0 4.194-3.642c7.004-6.12 31.136-27.639 31.979-35.197.575-5.156-3.99-8.104-8.677-7.419-6.402.936-7.043 1.522-12.281 4.6-6.031 3.542-10.343 7.015-15.214 11.371a381.178 381.178 0 0 0-3.667 3.331c-8.816 8.087-23.861 29.345-26.743 40.419-1.167 4.487-4.202 5.912-7.877 8.843-3.173 2.53-6.543 4.692-9.751 7.109-6.352 4.787-13.104 9.435-19.7 13.881-6.414 4.324-13.475 9.179-20.412 13.171-6.82 3.924-14.419 8.625-21.389 12.192-6.192 3.169-16.667 8.487-23.245 10.337-1.954.55-11.249 3.498-12.229 4.506-2.118 2.181 1.661 3.751 3.696 3.701 2.592-.062 4.974-.452 7.392-1.059 17.488-4.391 31.205-11.328 46.982-20.182 6.943-3.897 13.698-9.559 20.34-13.242 6.573-3.645 13.082-9.892 19.582-14 3.074-1.943 6.901-4.966 9.576-7.145 1.554-1.266 3.009-2.604 4.627-3.805 3.329-2.469 2.139-.555 4.008 1.881 5.74 7.48 17.222 7.083 25.674 6.021a44.567 44.567 0 0 0 3.138-.517c13.929-2.775 33.866-12.519 45.802-17.708 2.709-1.178 11.943-4.866 10.49 1.34-1.192 5.094-3.137 8.213 1.001 12.72 5.113 5.571 20.885 1.966 27.07-.511 4.057-1.625 8.336-2.95 12.457-4.264 3.354-1.07 12.054-4.352 10.484 2.051-2.661 10.859 16.96-2.514 11.451-11.946-7.414-12.686-38.429 13.001-50.942 7.663zm-67.815-43.938c7.108-7.377 14.256-13.123 16.299-11.187 2.262 2.145-13.077 16.42-14.929 18.118-.249.228-.728.682-1.371 1.295-4.108 3.915-14.992 14.35-16.526 14.389.397-3.705 8.436-14.217 16.527-22.615z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="index.html"
                           class="display--inline title-12 font-bold color--black hover-red ls-180 uppercase pl-70 relative cursor mb-y woo-back-link">
                            <svg class="icon icon--arrow-long-left abs-tl top-4 no-icon-trans">
                                <use xlink:href="#arrow-long-left"></use>
                            </svg>
                            continue shopping
                        </a>
                        <div class="mb-24">
                            <span class="title-18 color--grey display--inline">{</span>
                            <span class="font-bold title-13 uppercase color--black ls-180 display--inline gutter-20">01. cart</span>
                            <span class="title-13 display--inline">/</span>
                            <span class="font-bold title-13 uppercase ls-180 display--inline gutter-20">02. checkout</span>
                            <span class="title-13 display--inline">/</span>
                            <span class="font-bold title-13 uppercase ls-180 display--inline gutter-20">03. confirmation</span>
                            <span class="title-18 color--grey display--inline">}</span>
                        </div>
                        <h1 class="uppercase title-70 ls-30 font-thin color--black mb-title">Cart</h1>
                    </header>
                    <div class="relative z-20">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" method="post">
                                <span class="shop_table shop_table_responsive cart woocommerce-cart-form__contents display--block" cellspacing="0">
                                    <span>
                                        <span class="woocommerce-cart-form__cart-item  display--block relative  cart_item">
                                            <span class="product-thumbnail display--inline-top block-26 mobile-hor-100">
                                                <span class=" display--block mr-40 mobile-hor-nomargin">
                                                    <a href="eshop-product-category.html" class="display--block">
                                                        <span class="display--block relative">
                                                            <img class="resp-image display--block" src="images/product-pedant-leo.jpg" alt="Minas Jewelry-LEO">
                                                            <span class="fill-dimensions img-overlay trans-slow"></span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                            <span class="product-name block-35 color--black pb-20 display--inline-top mobile-hor-100 mobile-hor-mt-25" data-title="Product">
                                                <a href="eshop-product-category.html">LEO – Silver</a>
                                                <span class="font-light uppercase ls-30 display--block title-14">
                                                    ZODIAC
                                                </span>
                                                <div class="variation a-left ls-80 display--block title-14 extra-lh">
                                                    <div class="display--inline uppercase mr-9">Silver</div></div>
                                                <span class="a-left ls-80 pl-30 display--block title-14 mb-mm display--inline"></span>
                                                <div class="quantity" id="quantity-field">
                                                    <label class="screen-reader-text" for="quantity_60cfaae6be163">LEO - Silver quantity</label>
                                                    <span class="quanity-handler br-50 display--inline relative clickable trans minus quant-minus"
                                                          data-id="#product-quantity-quantity_60cfaae6be163"></span>
                                                    <input type="number" id="product-quantity-quantity_60cfaae6be163"
                                                           class="input-text qty text  ls-80 display--inline product-quantity" step="1" min="0" max=""
                                                           name="cart[4b031166994b6cd1195ecc04502ab0bf][qty]" value="1" title="Qty" size="4" inputmode="numeric">
                                                    <span class="quanity-handler br-50 display--inline relative clickable trans plus quant-plus"
                                                          data-id="#product-quantity-quantity_60cfaae6be163"></span>
                                                </div>
                                            </span>
                                            <span class="product-subtotal block-13  a-right pb-20 color--black display--inline-top mobile-hor-100 mobile-hor-left" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">€</span>270.00</span>
                                            </span>
                                            <span class="product-remove block-26 a-right pb-20 display--inline">
                                                <a href="cart.html" class="remove cart-remove br-50 display--inline color--grey a-center"
                                                   aria-label="Remove this item" data-product_id="1093" data-product_sku="LEO-S">×</a>
                                            </span>
                                        </span>
                                        <span class="maxw-540 display--block m-auto pb-32 cart-contents mobile-hor-maxw-100 ">
                                            <span class="gutter mobile-hor-nomargin">
                                                <span class="display--block mb-65 pt-sm">
                                                    <span class="update_cart-holder relative">
                                                         <button type="submit" class="button update_cart" name="update_cart" value="Update cart">Update cart                                 <span
                                                                 class="line abs-bl update_cart--line trans"></span>
                                                             <svg class="icon icon--update abs-rc update_cart--icon trans"><use
                                                                     xlink:href="#update"></use></svg>
                                                         </button>
                                                    </span>
                                                </span>

                                                <span class="coupon">
                                                    <input type="text" name="coupon_code" class="input-text coupon_code color--black title-17 ls-80 display--inline a-center" id="coupon_code" value="" placeholder="COUPON CODE">
                                                    <button type="submit" class="button relative color--black hover-red ls-180 uppercase title-13 font-bold display--inline coupon_code__button"
                                                            name="apply_coupon"
                                                            value="APPLY">Apply
                                                        <span class="line abs-bl bg--black trans coupon_code__line trans"></span>
                                                    </button>
                                                </span>
                                                <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="1d84e9fe80">
                                                <input type="hidden" name="_wp_http_referer" value="/cart/">                </span>
                                        </span>
                                        <span class="line bg-dot display--block"></span>
                                    </span>
                                </span>
                            </form>

                            <span class="cart-collaterals">
                                <div class="fixed abs-tr cross-sells-inner laptop-hidden">
                                        <div class="fill-dimensions bg--grey-light"></div>
                                        <div class="cross-sells z-20 relative">
                                            <div class="pt-129 pb-ft">
                                                <div class="gutter ">
                                                    <h2 class="uppercase font-bold title-13 color--black ls-180 mb-70  ml-40">yοu might also like</h2>
                                                </div>
                                                <article class="block-100 display--inline-top product type-product post-1189 status-publish first instock product_cat-pendants-of-the-year has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
                                                    <div class="gutter mobile-hor-gutter">
                                                        <div class="ml-40">
                                                            <div class=" maxw-230 color--black relative">
                                                                <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
                                                                    <a role="button" aria-label="Add to Wishlist" class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
                                                                       data-tinv-wl-list="[]" data-tinv-wl-product="1189" data-tinv-wl-productvariation="1190"
                                                                       data-tinv-wl-productvariations="[0]" data-tinv-wl-producttype="variable" data-tinv-wl-action="add">
                                                                        <img src="images/wishlist.png" alt="Add to Wishlist">
                                                                    </a>
                                                                    <div class="tinv-wishlist-clear"></div>
                                                                    <div class="tinvwl-tooltip">Add to Wishlist</div>
                                                                </div>
                                                                <a itemprop="url" href="eshop-product-category.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                    <div class="relative">
                                                                        <img class="images/product-pedant-2008-497x730.jpg" alt="">
                                                                        <span class="fill-dimensions img-overlay trans-slow"></span>
                                                                    </div>

                                                                    <span class="prod-content display--block a-left">
                                                                        <span class="prod-content__year display--block font-bold title-13 color--black ls-180 mb-mm">2007</span><h2
                                                                            itemprop="name" class="trans woocommerce-loop-product__title">INFINITY 2008</h2>
                                                                        <span class="display--block font-light title-15 mb-m">PENDANTS OF THE YEAR</span>
                                                                        <span class="price">
                                                                            <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                <span class="hidden" itemprop="price" content="140.00"></span>
                                                                                <span class="hidden" itemprop="priceCurrency" content="EURO"></span>
                                                                                <link itemprop="availability" href="http://schema.org/InStock">
                                                                                <span class="hidden" itemprop="url"></span>
                                                                                <span class="from price">from</span>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">€</span>140.00</span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="block-100 display--inline-top product type-product post-1183 status-publish last instock product_cat-pendants-of-the-year has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
    <div class="gutter mobile-hor-gutter">
        <div class="ml-40">
            <div class=" maxw-230 color--black relative">
                <div
                    class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
	<a role="button" aria-label="Add to Wishlist"
       class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
       data-tinv-wl-list="[]" data-tinv-wl-product="1183" data-tinv-wl-productvariation="1187"
       data-tinv-wl-productvariations="[0]" data-tinv-wl-producttype="variable" data-tinv-wl-action="add"><img
            src="imagess/wishlist.png" alt="Add to Wishlist"> </a><div class="tinv-wishlist-clear"></div>		<div
                        class="tinvwl-tooltip">Add to Wishlist</div>
</div>
<a itemprop="url" href="eshop-product-category.html"
   class="woocommerce-LoopProduct-link woocommerce-loop-product__link">                <div class="relative">
                    <img class="resp-image display--block" src="images/product-pedant-2009-497x730.jpg" alt="">
                    <span class="fill-dimensions img-overlay trans-slow"></span>
                </div>

                <span class="prod-content display--block a-left">
                <span class="prod-content__year display--block font-bold title-13 color--black ls-180 mb-mm">2008</span><h2
                        itemprop="name" class="trans woocommerce-loop-product__title">RECHARGE 2009</h2><span
                        class="display--block font-light title-15 mb-m">PENDANTS OF THE YEAR</span><span
                        class="price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                <span class="hidden" itemprop="price" content="140.00"></span>
                <span class="hidden" itemprop="priceCurrency" content="EURO"></span>
                <link itemprop="availability" href="http://schema.org/InStock">
                <span class="hidden" itemprop="url"></span>
                <span class="from price">from</span> <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">€</span>140.00</span></span></span></span></a>
            </div>
        </div>
    </div>
</article>
                                                <article
                                                class="block-100 display--inline-top product type-product post-1142 status-publish first instock product_cat-pendants-of-the-year has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
    <div class="gutter mobile-hor-gutter">
        <div class="ml-40">
            <div class=" maxw-230 color--black relative">
                <div
                    class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
	<a role="button" aria-label="Add to Wishlist"
       class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
       data-tinv-wl-list="[]" data-tinv-wl-product="1142" data-tinv-wl-productvariation="1144"
       data-tinv-wl-productvariations="[0]" data-tinv-wl-producttype="variable" data-tinv-wl-action="add"><img
            src="imagess/wishlist.png" alt="Add to Wishlist"> </a><div class="tinv-wishlist-clear"></div>		<div
                        class="tinvwl-tooltip">Add to Wishlist</div>
</div>
<a itemprop="url" href="eshop-product-category.html"
   class="woocommerce-LoopProduct-link woocommerce-loop-product__link">                <div class="relative">
                    <img class="resp-image display--block" src="images/product-pedant-2016-497x730.jpg" alt="">
                    <span class="fill-dimensions img-overlay trans-slow"></span>
                </div>

                <span class="prod-content display--block a-left">
                <span class="prod-content__year display--block font-bold title-13 color--black ls-180 mb-mm">2016</span><h2
                        itemprop="name" class="trans woocommerce-loop-product__title">SPREAD YOUR WINGS 2016</h2><span
                        class="display--block font-light title-15 mb-m">PENDANTS OF THE YEAR</span><span
                        class="price"><span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                <span class="hidden" itemprop="price" content="140.00"></span>
                <span class="hidden" itemprop="priceCurrency" content="EURO"></span>
                <link itemprop="availability" href="http://schema.org/InStock">
                <span class="hidden" itemprop="url"></span>
                <span class="from price">from</span> <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">€</span>140.00</span></span></span></span></a>
            </div>
        </div>
    </div>
</article>

                                            </div>
                                        </div>
                                </div>


                                <div class="cart_totals ">


                                           <!-- <h2 class="title-20 uppercase ls-80"></h2>-->

                                            <div class="shop_table shop_table_responsive">
                                                <div class="maxw-540 m-auto color--black uppercase title-20 ls-80 mobile-hor-maxw-100">
                                                    <div class="gutter mobile-hor-nomargin">
                                                    <div class="cart-subtotal mb-med">
                                                        <div class="title-20 uppercase ls-80 display--inline">Subtotal</div>
                                                        <div class="float-right" data-title="Subtotal"><span
                                                                class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">€</span>270.00</span></div>
                                                        <div class="clear"></div>
                                                    </div>




                                                    Shipping

                                                                    <ul id="shipping_method"
                                                                        class="woocommerce-shipping-methods">
                                                                                    <li>
                                                                        <input type="radio" name="shipping_method[0]"
                                                                               data-index="0"
                                                                               id="shipping_method_0_flat_rate1"
                                                                               value="flat_rate:1"
                                                                               class="shipping_method"
                                                                               checked="checked"><label
                                                                                            for="shipping_method_0_flat_rate1">Geniki Taxydromiki (FREE SHIPPING)</label>					</li>
                                                                                    <li>
                                                                        <input type="radio" name="shipping_method[0]"
                                                                               data-index="0"
                                                                               id="shipping_method_0_local_pickup3"
                                                                               value="local_pickup:3"
                                                                               class="shipping_method"><label
                                                                                            for="shipping_method_0_local_pickup3">Local pickup (Click Away) • MINAS STORE, EM. BENAKI 8, KIFISSIA 14561</label>					</li>
                                                                                    <li>
                                                                        <input type="radio" name="shipping_method[0]"
                                                                               data-index="0"
                                                                               id="shipping_method_0_flat_rate8"
                                                                               value="flat_rate:8"
                                                                               class="shipping_method"><label
                                                                                            for="shipping_method_0_flat_rate8">Speedex (FREE SHIPPING)</label>					</li>
                                                                            </ul>
                                                                            <p class="woocommerce-shipping-destination">
                                                                    Shipping to <strong>ΑΤΤΙΚΗ</strong>. 				</p>



                                                <form class="woocommerce-shipping-calculator" method="post">

                                                    <a href="#" class="shipping-calculator-button">Change address</a>	<section
                                                        class="shipping-calculator-form pt-m"
                                                        style="display:none;">

                                                                    <p class="form-row form-row-wide disable-pad"
                                                                       id="calc_shipping_country_field">
                                                                <select name="calc_shipping_country"
                                                                        id="calc_shipping_country"
                                                                        class="country_to_state country_select"
                                                                        rel="calc_shipping_state">
                                                                    <option value="">Select a country…</option>
                                                                    <option value="AX">Åland Islands</option><option
                                                                        value="AF">Afghanistan</option><option
                                                                        value="AL">Albania</option><option
                                                                        value="DZ">Algeria</option><option value="AS">American Samoa</option><option
                                                                        value="AD">Andorra</option><option value="AO">Angola</option><option
                                                                        value="AI">Anguilla</option><option value="AQ">Antarctica</option><option
                                                                        value="AG">Antigua and Barbuda</option><option
                                                                        value="AR">Argentina</option><option value="AM">Armenia</option><option
                                                                        value="AW">Aruba</option><option value="AU">Australia</option><option
                                                                        value="AT">Austria</option><option value="AZ">Azerbaijan</option><option
                                                                        value="BS">Bahamas</option><option value="BH">Bahrain</option><option
                                                                        value="BD">Bangladesh</option><option
                                                                        value="BB">Barbados</option><option
                                                                        value="BY">Belarus</option><option value="PW">Belau</option><option
                                                                        value="BE">Belgium</option><option
                                                                        value="BZ">Belize</option><option value="BJ">Benin</option><option
                                                                        value="BM">Bermuda</option><option
                                                                        value="BT">Bhutan</option><option value="BO">Bolivia</option><option
                                                                        value="BQ">Bonaire, Saint Eustatius and Saba</option><option
                                                                        value="BA">Bosnia and Herzegovina</option><option
                                                                        value="BW">Botswana</option><option
                                                                        value="BV">Bouvet Island</option><option
                                                                        value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option
                                                                        value="BN">Brunei</option><option value="BG">Bulgaria</option><option
                                                                        value="BF">Burkina Faso</option><option
                                                                        value="BI">Burundi</option><option
                                                                        value="KH">Cambodia</option><option value="CM">Cameroon</option><option
                                                                        value="CA">Canada</option><option value="CV">Cape Verde</option><option
                                                                        value="KY">Cayman Islands</option><option
                                                                        value="CF">Central African Republic</option><option
                                                                        value="TD">Chad</option><option
                                                                        value="CL">Chile</option><option
                                                                        value="CN">China</option><option value="CX">Christmas Island</option><option
                                                                        value="CC">Cocos (Keeling) Islands</option><option
                                                                        value="CO">Colombia</option><option value="KM">Comoros</option><option
                                                                        value="CG">Congo (Brazzaville)</option><option
                                                                        value="CD">Congo (Kinshasa)</option><option
                                                                        value="CK">Cook Islands</option><option
                                                                        value="CR">Costa Rica</option><option
                                                                        value="HR">Croatia</option><option value="CU">Cuba</option><option
                                                                        value="CW">Curaçao</option><option
                                                                        value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option
                                                                        value="DK">Denmark</option><option value="DJ">Djibouti</option><option
                                                                        value="DM">Dominica</option><option value="DO">Dominican Republic</option><option
                                                                        value="EC">Ecuador</option><option
                                                                        value="EG">Egypt</option><option value="SV">El Salvador</option><option
                                                                        value="GQ">Equatorial Guinea</option><option
                                                                        value="ER">Eritrea</option><option value="EE">Estonia</option><option
                                                                        value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option
                                                                        value="FO">Faroe Islands</option><option
                                                                        value="FJ">Fiji</option><option value="FI">Finland</option><option
                                                                        value="FR">France</option><option
                                                                        value="GF">French Guiana</option><option
                                                                        value="PF">French Polynesia</option><option
                                                                        value="TF">French Southern Territories</option><option
                                                                        value="GA">Gabon</option><option value="GM">Gambia</option><option
                                                                        value="GE">Georgia</option><option
                                                                        value="DE">Germany</option><option value="GH">Ghana</option><option
                                                                        value="GI">Gibraltar</option><option value="GR"
                                                                                                             selected="selected">Greece</option><option
                                                                        value="GL">Greenland</option><option value="GD">Grenada</option><option
                                                                        value="GP">Guadeloupe</option><option
                                                                        value="GU">Guam</option><option
                                                                        value="GT">Guatemala</option><option value="GG">Guernsey</option><option
                                                                        value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option
                                                                        value="GY">Guyana</option><option value="HT">Haiti</option><option
                                                                        value="HM">Heard Island and McDonald Islands</option><option
                                                                        value="HN">Honduras</option><option value="HK">Hong Kong</option><option
                                                                        value="HU">Hungary</option><option value="IS">Iceland</option><option
                                                                        value="IN">India</option><option
                                                                        value="ID">Indonesia</option><option value="IR">Iran</option><option
                                                                        value="IQ">Iraq</option><option
                                                                        value="IE">Ireland</option><option value="IM">Isle of Man</option><option
                                                                        value="IL">Israel</option><option value="IT">Italy</option><option
                                                                        value="CI">Ivory Coast</option><option
                                                                        value="JM">Jamaica</option><option
                                                                        value="JP">Japan</option><option value="JE">Jersey</option><option
                                                                        value="JO">Jordan</option><option
                                                                        value="KZ">Kazakhstan</option><option
                                                                        value="KE">Kenya</option><option
                                                                        value="KI">Kiribati</option><option value="KW">Kuwait</option><option
                                                                        value="KG">Kyrgyzstan</option><option
                                                                        value="LA">Laos</option><option value="LV">Latvia</option><option
                                                                        value="LB">Lebanon</option><option value="LS">Lesotho</option><option
                                                                        value="LR">Liberia</option><option value="LY">Libya</option><option
                                                                        value="LI">Liechtenstein</option><option
                                                                        value="LT">Lithuania</option><option value="LU">Luxembourg</option><option
                                                                        value="MO">Macao S.A.R., China</option><option
                                                                        value="MG">Madagascar</option><option
                                                                        value="MW">Malawi</option><option
                                                                        value="MY">Malaysia</option><option value="MV">Maldives</option><option
                                                                        value="ML">Mali</option><option
                                                                        value="MT">Malta</option><option value="MH">Marshall Islands</option><option
                                                                        value="MQ">Martinique</option><option
                                                                        value="MR">Mauritania</option><option
                                                                        value="MU">Mauritius</option><option
                                                                        value="YT">Mayotte</option><option value="MX">Mexico</option><option
                                                                        value="FM">Micronesia</option><option
                                                                        value="MD">Moldova</option><option
                                                                        value="MC">Monaco</option><option value="MN">Mongolia</option><option
                                                                        value="ME">Montenegro</option><option
                                                                        value="MS">Montserrat</option><option
                                                                        value="MA">Morocco</option><option value="MZ">Mozambique</option><option
                                                                        value="MM">Myanmar</option><option value="NA">Namibia</option><option
                                                                        value="NR">Nauru</option><option
                                                                        value="NP">Nepal</option><option value="NL">Netherlands</option><option
                                                                        value="NC">New Caledonia</option><option
                                                                        value="NZ">New Zealand</option><option
                                                                        value="NI">Nicaragua</option><option
                                                                        value="NE">Niger</option><option value="NG">Nigeria</option><option
                                                                        value="NU">Niue</option><option
                                                                        value="NF">Norfolk Island</option><option
                                                                        value="KP">North Korea</option><option
                                                                        value="MK">North Macedonia</option><option
                                                                        value="MP">Northern Mariana Islands</option><option
                                                                        value="NO">Norway</option><option
                                                                        value="OM">Oman</option><option value="PK">Pakistan</option><option
                                                                        value="PS">Palestinian Territory</option><option
                                                                        value="PA">Panama</option><option value="PG">Papua New Guinea</option><option
                                                                        value="PY">Paraguay</option><option
                                                                        value="PE">Peru</option><option value="PH">Philippines</option><option
                                                                        value="PN">Pitcairn</option><option value="PL">Poland</option><option
                                                                        value="PT">Portugal</option><option value="PR">Puerto Rico</option><option
                                                                        value="QA">Qatar</option><option value="RE">Reunion</option><option
                                                                        value="RO">Romania</option><option
                                                                        value="RU">Russia</option><option value="RW">Rwanda</option><option
                                                                        value="ST">São Tomé and Príncipe</option><option
                                                                        value="BL">Saint Barthélemy</option><option
                                                                        value="SH">Saint Helena</option><option
                                                                        value="KN">Saint Kitts and Nevis</option><option
                                                                        value="LC">Saint Lucia</option><option
                                                                        value="SX">Saint Martin (Dutch part)</option><option
                                                                        value="MF">Saint Martin (French part)</option><option
                                                                        value="PM">Saint Pierre and Miquelon</option><option
                                                                        value="VC">Saint Vincent and the Grenadines</option><option
                                                                        value="WS">Samoa</option><option
                                                                        value="SM">San Marino</option><option
                                                                        value="SA">Saudi Arabia</option><option
                                                                        value="SN">Senegal</option><option value="RS">Serbia</option><option
                                                                        value="SC">Seychelles</option><option
                                                                        value="SL">Sierra Leone</option><option
                                                                        value="SG">Singapore</option><option
                                                                        value="SK">Slovakia</option><option value="SI">Slovenia</option><option
                                                                        value="SB">Solomon Islands</option><option
                                                                        value="SO">Somalia</option><option value="ZA">South Africa</option><option
                                                                        value="GS">South Georgia/Sandwich Islands</option><option
                                                                        value="KR">South Korea</option><option
                                                                        value="SS">South Sudan</option><option
                                                                        value="ES">Spain</option><option value="LK">Sri Lanka</option><option
                                                                        value="SD">Sudan</option><option
                                                                        value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option
                                                                        value="SZ">Swaziland</option><option value="SE">Sweden</option><option
                                                                        value="CH">Switzerland</option><option
                                                                        value="SY">Syria</option><option
                                                                        value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option
                                                                        value="TZ">Tanzania</option><option value="TH">Thailand</option><option
                                                                        value="TL">Timor-Leste</option><option
                                                                        value="TG">Togo</option><option
                                                                        value="TK">Tokelau</option><option value="TO">Tonga</option><option
                                                                        value="TT">Trinidad and Tobago</option><option
                                                                        value="TN">Tunisia</option><option value="TR">Turkey</option><option
                                                                        value="TM">Turkmenistan</option><option
                                                                        value="TC">Turks and Caicos Islands</option><option
                                                                        value="TV">Tuvalu</option><option value="UG">Uganda</option><option
                                                                        value="UA">Ukraine</option><option
                                                                        value="AE">United Arab Emirates</option><option
                                                                        value="GB">United Kingdom (UK)</option><option
                                                                        value="US">United States (US)</option><option
                                                                        value="UM">United States (US) Minor Outlying Islands</option><option
                                                                        value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option
                                                                        value="VU">Vanuatu</option><option value="VA">Vatican</option><option
                                                                        value="VE">Venezuela</option><option value="VN">Vietnam</option><option
                                                                        value="VG">Virgin Islands (British)</option><option
                                                                        value="VI">Virgin Islands (US)</option><option
                                                                        value="WF">Wallis and Futuna</option><option
                                                                        value="EH">Western Sahara</option><option
                                                                        value="YE">Yemen</option><option
                                                                        value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>				</select>
                                                            </p>

                                                                    <p class="form-row form-row-wide disable-pad"
                                                                       id="calc_shipping_state_field">
                                                                                    <span>
                                                                        <select name="calc_shipping_state "
                                                                                class="state_select"
                                                                                id="calc_shipping_state"
                                                                                data-placeholder="State / County">
                                                                            <option value="">Select an option…</option>
                                                                            <option value="I"
                                                                                    selected="selected">Αττική</option><option
                                                                                value="A">Ανατολική Μακεδονία και Θράκη</option><option
                                                                                value="B">Κεντρική Μακεδονία</option><option
                                                                                value="C">Δυτική Μακεδονία</option><option
                                                                                value="D">Ήπειρος</option><option
                                                                                value="E">Θεσσαλία</option><option
                                                                                value="F">Ιόνιοι Νήσοι</option><option
                                                                                value="G">Δυτική Ελλάδα</option><option
                                                                                value="H">Στερεά Ελλάδα</option><option
                                                                                value="J">Πελοπόννησος</option><option
                                                                                value="K">Βόρειο Αιγαίο</option><option
                                                                                value="L">Νότιο Αιγαίο</option><option
                                                                                value="M">Κρήτη</option>						</select>
                                                                    </span>
                                                                                </p>

                                                                    <p class="form-row form-row-wide disable-pad mb-sm"
                                                                       id="calc_shipping_city_field">
                                                                <input type="text" class="input-text shipping-input"
                                                                       value="" placeholder="City"
                                                                       name="calc_shipping_city"
                                                                       id="calc_shipping_city">
                                                            </p>

                                                                    <p class="form-row form-row-wide disable-pad mb-sm"
                                                                       id="calc_shipping_postcode_field">
                                                                <input type="text " class="input-text shipping-input"
                                                                       value="" placeholder="Postcode / ZIP"
                                                                       name="calc_shipping_postcode"
                                                                       id="calc_shipping_postcode">
                                                            </p>

                                                        <p><button type="submit" name="calc_shipping" value="1"
                                                                   class="button shipping-button relative color--black hover-red ls-180 uppercase title-13 font-bold display--inline">Update                    <span
                                                                    class="line abs-bl bg--black trans"></span>
                                                            </button></p>
                                                        <input type="hidden" id="woocommerce-shipping-calculator-nonce"
                                                               name="woocommerce-shipping-calculator-nonce"
                                                               value="24f85fe5ec"><input type="hidden"
                                                                                         name="_wp_http_referer"
                                                                                         value="/cart/">	</section>
                                                </form>







                                                                                        </div>
                                                                </div>
                                                                <div class="line bg--black mt-48"></div>
                                                                <div
                                                                    class="maxw-540 m-auto color--black pt-88 mb-70 mobile-hor-maxw-100">
                                                                    <div class="gutter mobile-hor-nomargin">
                                                                                                <div
                                                                                                    class="order-total uppercase">
                                                                            <div
                                                                                class="title-20 ls-30 display--inline font-bold">Total</div>
                                                                            <div class="float-right title-20 a-right"
                                                                                 data-title="Total"><strong><span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">€</span>270.00</span></strong> <small
                                                                                    class="includes_tax">(includes <span
                                                                                        class="woocommerce-Price-amount amount"><span
                                                                                            class="woocommerce-Price-currencySymbol">€</span>52.26</span> VAT)</small></div>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="wc-proceed-to-checkout">

                                                <a href="checkout.html"
                                                   class="checkout-button button color--black relative alt wc-forward button round-button xl br-50 round-button--black right-45 display--block m-auto  trans mb-70">
                                                    <span
                                                        class="block-80 abs-center a-center font-bold title-12 uppercase ls-180">
                                                        Proceed to checkout    </span>
                                                </a>
                                                            </div>


                                                </div>
                                                </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="ns-popup fill-dimensions fixed z-20" id="ns-popup-holder">
            <div class="op-0 fill-dimensions fixed bg--black" id="ns-popup-mask"></div>
            <div class="scale-y fill-dimensions fixed bg--white origin-l ns-popup-bg" id="ns-popup-bg"></div>
            <div class="over">
                <div class="pb-150 pt-184 m-auto maxw-1400 relative a-center mobile-hor-pt-150">
                    <div class="abs-tc cursor op-0 js-anim-fade  cursor top-35 close-popup close-popup--black"
                         id="ns-popup-close"></div>
                    <div
                        class="font-bold title-40 color--black ns-popup__top-title op-0 no-visible js-anim-fade mb-86 ">
                        NEWSLETTER SUBSCRIPTION
                    </div>
                    <div class="ns-form op-0 no-visible js-anim-fade over color--black">
                        <form action="#" id="nsform"
                              data-error_mandatory="PLEASE REVIEW ERRORS ABOVE AND SUBMIT YOUR REQUEST AGAIN."
                              data-error_email="EMAIL IS NOT VALID" data-error_terms="PLEASE ACCEPT THE TERMS">
                            <input type="hidden" name="check" id="ns-check" value="">
                            <input type="hidden" name="ref" id="page_url" value="eshop.minas-designs.com/cart/">
                            <input type="hidden" name="lang" value="en">
                            <div class="form-field block-100 display--inline-top">
                                <div class="gutter mobile-hor-gutter">
                                    <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                        <label class="font-bold title-17 extra-ls extra-lh display--block"
                                               for="full_name">FULL NAME<span class="color--red ml-3">*</span></label>
                                        <input type="text" name="full_name"
                                               class="input required pb-50 maxw-500 block-100 m-auto title-25 extra-lh font-light"
                                               id="full_name" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field block-100 display--inline-top">
                                <div class="gutter mobile-hor-gutter">
                                    <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                        <label class="font-bold title-17 extra-ls extra-lh display--block"
                                               for="ns-email">EMAIL<span class="color--red">*</span></label>
                                        <input type="email" name="email"
                                               class="input  required email title-25 pb-50 extra-lh font-light"
                                               id="ns-email" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field block-100 display--inline-top">
                                <div class="gutter mobile-hor-gutter">
                                    <div class="form-field__inner a-left maxw-500 m-auto a-left mb-24">
                                        <label class="font-bold title-17 extra-ls extra-lh display--block"
                                               for="country">COUNTRY</label>
                                        <input type="text" name="country"
                                               class="input title-25 extra-lh font-light pb-50" id="country" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="ns-gdpr">
                                <div class="gutter mobile-hor-gutter">
                                    <div class="font-light title-16 maxw-477 m-auto ns-policy pt-17"><p>Βy submitting
                                            your request, you agree to the <a href="#">Privacy Policy</a> and <a
                                                href="#">Terms &amp; Conditions</a>.</p>
                                    </div>
                                    <div class="mb-t">
                                        <div class="chk-holder relative display--inline chk-holder-terms">
                                            <input class="chk fill-dimensions abs-tc op-0 required-chk" name="accept"
                                                   value="accept" id="ns-accept" type="checkbox">
                                            <label
                                                class="chk-box trans abs-lc z-8 clickable mobile-abs-tl ns-accept-checkbox"
                                                for="ns-accept">
                                                <svg class="icon icon--check abs-tc sm">
                                                    <use xlink:href="#check"></use>
                                                </svg>
                                            </label>
                                            <label
                                                class="chk-label pl-55 trans over font-bold title-12 extra-ls extra-lh3 color--black clickable ns-accept display--inline"
                                                for="ns-accept">I AGREE WITH THE ABOVE TERMS</label>
                                        </div>
                                    </div>
                                    <div
                                        class="ns-reply-text form-reply trans-med font-bold title-17 extra-ls extra-lh uppercase"
                                        id="ns-reply-text"></div>
                                    <span class="display--block">
                                                                                <span
                                                                                    class="display--inline circle-link relative">
                                                                                    <input type="button"
                                                                                           class="submit-button op-0 z-5 fill-dimensions trans"
                                                                                           value="ΕΓΓΡΑΦΗ"
                                                                                           id="ns-submit"
                                                                                           data-reply="#ns-reply-text">
                                                                                    <span
                                                                                        class="btn-black display--block">
                                                                                        <span
                                                                                            class="circle-btn relative cursor display--inline circle-link "
                                                                                            id="">    <svg
                                                                                                class="circle-btn__wrapper-circle"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 151.689 148.568">
                                                            <path class="js-svg-circle path" fill="none" stroke="#fff"
                                                                  stroke-width="1" stroke-miterlimit="10" d="M75.845,145.15
                                                        c-39.139,0-70.867-31.728-70.867-70.866S36.706,3.418,75.845,3.418c39.138,0,70.866,31.728,70.866,70.866
                                                        S114.983,145.15,75.845,145.15"></path>
                                                            <path class="js-stretched path" fill="none" opacity="0"
                                                                  stroke="#fff" stroke-width="1"
                                                                  stroke-miterlimit="10"
                                                                  d="M113.228 5.526a10.122 10.122 0 0 0-.672-.479c-10.217-6.64-24.534-3.415-35.743-2.101-7.854.92-15.701 2.125-23.366 4.098-13.122 3.376-25.936 9.011-35.57 18.785C.454 43.503-2.653 70.782 4.779 93.701c12.587 38.817 65.455 69.188 104.126 47.793 18.448-10.207 31.242-31.346 37.575-50.686 3.17-9.681 6.398-20.775 4.775-31.049-1.498-9.484-7.574-16.885-13.6-23.975-6.826-8.031-12.545-16.946-19.49-24.863-1.588-1.81-3.064-3.941-4.937-5.395z"></path>
                                                            <path class="js-stretched-2 path" fill="none"
                                                                  stroke="#ffffff" opacity="0" stroke-miterlimit="10"
                                                                  d="M107.309,4.917c-0.223-0.148-0.452-0.288-0.686-0.417
                                                        C96.241-1.223,82.575,2.916,71.792,4.98c-7.556,1.447-15.087,3.17-22.385,5.624C36.912,14.805,24.875,21.176,16.215,31.34
                                                        C0.555,49.718-0.537,76.407,8.292,98.124c3.569,8.781,8.526,22.413,15.723,29.416c13.605,13.24,33.127,13.928,51.836,15.442
                                                        c12.843,1.04,25.689,1.455,36.85-5.824c17.182-11.205,28.106-32.619,32.887-51.832c2.394-9.617,4.744-20.611,2.446-30.465
                                                        c-2.123-9.098-8.54-15.85-14.888-22.307c-7.189-7.311-13.368-15.558-20.665-22.752C110.812,8.158,109.23,6.196,107.309,4.917z"></path>
                                                        </svg>
                                                    <span
                                                        class="abs-center a-center z--1 title-12 font-bold block-80 ls-180">
                                                        <span class="circle-btn__txt">SUBSCRIBE</span>    </span>
                                                    </span>                                    </span>
                                                                                </span>
                                                                            </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </aside>
    </main>
@endsection
