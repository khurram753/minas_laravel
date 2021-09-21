<section class="related-products bg--dark-grey-light pt-gap pb-ft">
    <div class="grid max-12cols-g a-center color--black mobile-hor-100">
        <h2 class="gutter font-bold title-13 ls-180 uppercase pb-f mobile-hor-pb-70 mobile-hor-gutter op-0 no-visible js-fade-up in-view"
            data-emit-events data-bottom-top="" data-trans="1.4"><span class="bracket">{</span> Related
            products <span class="font-light">}</span></h2>
        @foreach($relatedProducts as $key => $relatedProduct)
            <article class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-621 status-publish instock product_cat-pendants has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            <div class="gutter mobile-hor-gutter">
                <div class=" relative">
                    <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
                        <a role="button" aria-label="Add to Wishlist"
                           class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
                           data-id="{{$relatedProduct->id}}"
                           @guest
                                href="{{route('loginPageUser')}}"
                           @endguest
                        >
                            <img src="{{asset('site/images/wishlist.png')}}" alt="Add to Wishlist"/>
                        </a>
                        <div class="tinv-wishlist-clear"></div>
                        <div class="tinvwl-tooltip">Add to Wishlist</div>
                    </div>
                    <a itemprop="url" href="{{route('productDetail',['id'=>$relatedProduct->id])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                        <span class="display--block relative overflow" style="padding-top: 146.88128772636%">
                            <img src="{{asset($relatedProduct->image)}}" class="b-lazy block-100 abs-tl z-1" style="visibility: visible;opacity: 1;">
                            <span class="fill-dimensions img-overlay trans-slow"></span>
                        </span>
                        <span class="prod-content display--block a-left op-0 no-visible js-fade-up in-view" data-emit-events data-bottom-top="" data-trans="1.4"
                              style="visibility: visible;opacity: 1;">
                            <h2 itemprop="name" class="trans woocommerce-loop-product__title">{{ucfirst($relatedProduct->name)}}</h2>
                            <span class="display--block font-light title-15 mb-xs">{{ucfirst($relatedProduct->category->name)}}</span>
                            <span class="price">
                                <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <link itemprop="availability" href="http://schema.org/InStock"/>
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$relatedProduct->price}}</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </article>
        @endforeach

    </div>
</section>
