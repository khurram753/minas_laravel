<div class="fixed abs-tr cross-sells-inner laptop-hidden">
    <div class="fill-dimensions bg--grey-light"></div>
    <div class="cross-sells z-20 relative">
        <div class="pt-129 pb-ft">
            <div class="gutter ">
                <h2 class="uppercase font-bold title-13 color--black ls-180 mb-70  ml-40">yοu might also like</h2>
            </div>

            @foreach($relatedProducts as $key => $relatedProduct)
                <article class="block-100 display--inline-top product type-product post-1189 status-publish first instock product_cat-pendants-of-the-year has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="gutter mobile-hor-gutter">
                        <div class="ml-40">
                            <div class=" maxw-230 color--black relative">
                                <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
                                    <a role="button" aria-label="Add to Wishlist"
                                       class="add_to_wishlist"
                                       data-id="{{$relatedProduct->id}}"
                                       @guest
                                       href="{{route('loginPageUser')}}"
                                        @endguest
                                    >
                                        <img src="{{asset('site/images/wishlist.png')}}" alt="Add to Wishlist"/>
                                    </a>
                                    <div class="tinv-wishlist-clear"></div>
                                    {{--                            <div class="tinvwl-tooltip">Add to Wishlist</div>--}}
                                </div>
                                <a itemprop="url" href="{{route('productDetail',['id'=>$relatedProduct->id])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="relative">
                                        <img class="resp-image display--block" src="{{asset($relatedProduct->image)}}" alt="">
                                        <span class="fill-dimensions img-overlay trans-slow"></span>
                                    </div>

                                    <span class="prod-content display--block a-left">
                                                                            <span class="prod-content__year display--block font-bold title-13 color--black ls-180 mb-mm">{{Carbon\Carbon::parse($relatedProduct->created_at)->format('Y')}}</span><h2
                                            itemprop="name" class="trans woocommerce-loop-product__title">{{ucfirst($relatedProduct->name)}}</h2>
                                                                            <span class="display--block font-light title-15 mb-m">{{ucfirst($relatedProduct->category->name)}}</span>
                                                                            <span class="price">
                                                                                <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                    <link itemprop="availability" href="http://schema.org/InStock">
                                                                                    <span class="hidden" itemprop="url"></span>
                                                                                    <span class="from price">from</span>
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$relatedProduct->price}}</span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach


        </div>
    </div>
</div>
