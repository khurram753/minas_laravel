@if(sizeof($mensCollection) > 0)

    <section class="grid max-12cols-g pt-section pb-section mobile-hor-100" id="section--1">
        <header class="max-6cols-g m-auto a-center">
            <div class="gutter mobile-hor-gutter">
                <div class="circ m-auto relative br-50 mb-c op-0 no-visible js-fade-up in-view" data-emit-events
                     data-bottom-top="" data-trans="1.4">
                    <div class="block-100 abs-lc font-bold title-13 color--white ls-180">Nº 2</div>
                </div>
                <h2 class="font-bold title-40 color--white ls-30 mb-86 op-0 no-visible js-fade-up in-view"
                    data-emit-events data-bottom-top="" data-trans="1.4" data-delay=".15">MEN’S COLLECTION</h2>
            </div>
        </header>
        @foreach($mensCollection as $key => $menCategory)
            <article class="block-25 tablet-hor-33 tablet-50 mobile-hor-100 display--inline-top product type-product post-1550 status-publish first instock product_cat-mens-accessories product_cat-bracelets has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes"
                itemscope itemtype="http://schema.org/Product">
                <div class="gutter mobile-hor-gutter">
                    <div class=" relative">
                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-above_thumb-add-to-cart tinvwl-loop-button-wrapper">
                            <a role="button" aria-label="Add to Wishlist" class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt  tinvwl-position-above_thumb"
                               data-tinv-wl-list="[]" data-tinv-wl-product="1550"
                               data-tinv-wl-productvariation="1555" data-tinv-wl-productvariations="[0]"
                               data-tinv-wl-producttype="variable" data-tinv-wl-action="add">
                                <img src="{{asset($menCategory->image)}}" alt="Add to Wishlist"/> </a>
                            <div class="tinv-wishlist-clear"></div>
                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                        </div>
                        <a itemprop="url" href="eshop.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <span class="display--block relative overflow" style="padding-top: 146.88128772636%">
                                <img src="{{asset($menCategory->image)}}" class="b-lazy block-100 abs-tl z-1" alt="Minas Jewelry-WISHBONE BRACELET" data-src="{{asset($menCategory->image)}}">
                                <span class="fill-dimensions img-overlay trans-slow"></span>
                            </span>
                            <span class="prod-content display--block a-left op-0 no-visible js-fade-up in-view" data-emit-events data-bottom-top="" data-trans="1.4">
                                <h2 itemprop="name" class="trans woocommerce-loop-product__title">{{ucfirst($menCategory->name)}}</h2>
{{--                                <span class="display--block font-light title-15 mb-xs">BRACELETS</span>--}}
{{--                                <span class="display--block font-light title-15 mb-m">RUBBER</span>--}}
                                <span class="price">
                                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <link itemprop="availability" href="http://schema.org/InStock"/>
                                        <span class="hidden" itemprop="url"></span>
                                        <span class="from price">from</span>
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                            {{$menCategory->price}}
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
        <div class="a-center pb-32">
            <a href="collection.html" class="more-link"><span class="highlight-underline">Wear it easy</span>
                <svg class="icon icon--arrow-small-right ml-arrow">
                    <use xlink:href="#arrow-small-right"></use>
                </svg>
            </a>
        </div>
    </section>


@endif
