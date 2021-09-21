@if(sizeof($earings) > 0)

    <section class="grid max-12cols-g pt-section pb-section mobile-hor-100" id="section--2">
        <header class="max-6cols-g m-auto a-center">
            <div class="gutter mobile-hor-gutter">
                <div class="circ m-auto relative br-50 mb-c op-0 no-visible js-fade-up in-view" data-emit-events
                     data-bottom-top="" data-trans="1.4">
                    <div class="block-100 abs-lc font-bold title-13 color--white ls-180">Nº 3</div>
                </div>
                <h2 class="font-bold title-40 color--white ls-30 mb-86 op-0 no-visible js-fade-up in-view"
                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15">SOMETHING FRESH</h2>
            </div>
        </header>
        @foreach($earings  as $key => $earing)
            @if($key == 0)
                <article class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-4848 status-publish instock product_cat-earrings has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes" itemscope itemtype="http://schema.org/Product">
            @elseif($key == 1)
                <article class="block-50 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-4844 status-publish last instock product_cat-earrings has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            @elseif($key == 2)
                <article class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-4848 status-publish instock product_cat-earrings has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            @endif
                    <div class="gutter mobile-hor-gutter">
                        <div class="prod-width-max-wide relative">
                            <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
                                <a role="button" aria-label="Add to Wishlist" class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
                                   data-tinv-wl-list="[]" data-tinv-wl-product="4848"
                                   data-tinv-wl-productvariation="4853" data-tinv-wl-productvariations="[0]"
                                   data-tinv-wl-producttype="variable" data-tinv-wl-action="add">
                                    <img src="{{$earing->image}}" alt="Add to Wishlist"/>
                                </a>
                                <div class="tinv-wishlist-clear"></div>
                                <div class="tinvwl-tooltip">Add to Wishlist</div>
                            </div>
                            <a itemprop="url" href="eshop.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                <span class="display--block relative overflow" style="padding-top: 99.88128772636%">
                                    <img src="{{asset($earing->image)}}" class="b-lazy block-100 abs-tl z-1" alt="Minas Jewelry-THE VOLONTÉ CLIP EARRINGS" data-src="{{asset($earing->image)}}">
                                    <span class="fill-dimensions img-overlay trans-slow"></span>
                                </span>
                                <span class="prod-content display--block a-left op-0 no-visible js-fade-up in-view" data-emit-events data-bottom-top="" data-trans="1.4">
                                    <h2 itemprop="name" class="trans woocommerce-loop-product__title">{{ucfirst($earing->name)}}</h2>
                                    <span class="display--block font-light title-15 mb-xs">{{ucfirst($earing->category->name)}}</span>
                                    <span class="price">
                                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <span class="hidden" itemprop="price" content="590.00"></span>
                                            <span class="hidden" itemprop="priceCurrency" content="EURO"></span>
                                            <link itemprop="availability" href="http://schema.org/InStock"/>
                                            <span class="hidden" itemprop="url"></span>
                                            <span class="from price">from</span>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$earing->price}}</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </article>
        @endforeach

        <div class="a-center pb-32">
            <a href="eshop-product-category.html/earrings/" class="more-link"><span class="highlight-underline">Discover the freshness </span>
                <svg class="icon icon--arrow-small-right ml-arrow">
                    <use xlink:href="#arrow-small-right"></use>
                </svg>
            </a>
        </div>
    </section>


@endif
