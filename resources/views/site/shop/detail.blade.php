@extends('layout.shop-layout.app')

@section('title')
    MINAS - Product Detail
@endsection

@section('style')

@endsection


@section('content')
    <main id="content" class="site-content relative">

        <!-- cart popup end -->
        <div id="product-2496" class="product type-product post-2496 status-publish first instock product_cat-pendants has-post-thumbnail taxable shipping-taxable purchasable product-type-variable has-default-attributes">
            <div id="main-product-info" itemscope itemtype="http://schema.org/Product">
                <span class="hidden" itemprop="sku" content="young-hearts"></span>
                <div class="grad-black-top-grey-bottom">
                    <section class="product-top-section m-auto relative mobile-hor-padded" id="product-top-section">
                        <div class="product-top-section__img-holder abs-tl overflow tablet-rel">
                            <div class="mobile-hor-gutter">
                                <div class="fill-dimensions z-1" id="js-product-variations-images"></div>
                                <img src="{{$data->image}}" alt="Minas Jewelry-YOUNG HEARTS"
                                     class="product-top-section__img abs-bc tablet-rel" style="z-index: 3"
                                     id="js-main-product-img">
                                <div class="fill-dimensions"></div>
                                <div class="grad-black-top op-07 block-100 h-50 abs-tl"></div>
                                <span class="arrow-scroll abs-bl z-15 scroll-to color--red clickable trans hover-white tablet-hidden" data-target="#product-info">
                                    <span class="op-0 no-visible js-fade-in in-view display--block" data-emit-events data-delay=".15" data-bottom-top="">
                                        <svg class="icon icon--arrow-long-down display--block">
                                            <use xlink:href="#arrow-long-down"></use>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="product-top-section__content ml-auto">
                            <div class="mobile-hor-gutter">
                                <div class="woocommerce-notices-wrapper"></div>
                                <header class="product-header abs-tl color--white uppercase tablet-hor-rel js-bt in-view" data-emit-events data-bottom-top="">
                                    <div class="font-bold title-13 ls-180 mb-g overflow">
                                        <div class="js-bt__el">
                                            Designed In {{\Carbon\Carbon::parse($data->created_at)->format('Y')}}
                                        </div>
                                    </div>
                                    <h1 class="font-bold title-35 ls-30 overflow">
                                    <span class="js-bt__el display--block">
                                        <span itemprop="name">{{ucfirst($data->name)}}</span>
                                    </span>
                                    </h1>
                                </header>
                                <div class="product-addtocart op-0 no-visible js-fade-in in-view" data-emit-events
                                     data-delay=".15" data-bottom-top="" id="add-to-cart">
                                    <div class="product__actions a-right mb-y color--grey">
                                        <span class="product__info br-50 display--inline ml-icon relative trans clickable hover-white scroll-to" data-target="#product-info">
                                            <svg class="icon icon--info abs-center">
                                                <use xlink:href="#info"></use>
                                            </svg>
                                        </span>
                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart">
                                            <a role="button" aria-label="Add to Wishlist"
                                               class="tinvwl_add_to_wishlist_button tinvwl-icon-custom no-txt wishlist tinvwl-position-shortcode ftinvwl-animated"
                                               data-tinv-wl-list="[]" data-tinv-wl-product="2496"
                                               data-tinv-wl-productvariation="" data-tinv-wl-productvariations="[0]"
                                               data-tinv-wl-producttype="variable" data-tinv-wl-action="add"><img
                                                    src="imagess/wishlist.png" alt="Add to Wishlist"/> </a>
                                            <div class="tinv-wishlist-clear"></div>
                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                        </div>
                                        <span class="display--inline ml-icon trans clickable hover-white">
                                            <svg style="display:none;" width="0" height="0" style="position:absolute"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <symbol viewBox="18.35 18.35 20 20" id="share-delicious">
                                                    <path d="M37.927 18.346H18.763a.417.417 0 0 0-.417.417v19.165c0 .231.187.418.417.418h19.165c.23 0 .418-.187.418-.418V18.764a.418.418 0 0 0-.419-.418zm-9.581 19.165v-9.165h-9.164v-9.164h9.164v9.164h9.163v9.165h-9.163z"/></symbol>
                                                <symbol viewBox="17.35 21.85 22 13" id="share-digg">
                                                    <path d="M20.657 22.082v2.915h-3.311v6.672h5.461v-9.587h-2.15zm0 7.794h-1.121v-3.033h1.12l.001 3.033zm6.633-4.852v6.67h3.312v1.044h-3.35v1.873h5.499v-9.587H27.29zm3.312 4.825h-1.123v-3.033h1.123v3.033zm3.284-4.825v6.67h3.309v1.044h-3.348v1.873h5.499v-9.587h-5.46zm3.309 4.825h-1.118v-3.033h1.119l-.001 3.033zM23.92 24.98h2.23v6.71h-2.23zm0-2.78h2.23v1.82h-2.23z"/></symbol>
                                                <symbol viewBox="2 4 20 16" id="share-email">
                                                    <path
            d="M11.999 12.8c-1.562 0-9.611-6.487-9.611-6.487V5.6c0-.883.717-1.6 1.602-1.6h16.02c.886 0 1.603.717 1.603 1.6l-.013.8s-7.962 6.4-9.601 6.4zm0 2.2c1.714 0 9.601-6.2 9.601-6.2l.013 9.601c0 .883-.717 1.6-1.603 1.6H3.989a1.602 1.602 0 0 1-1.602-1.6L2.4 8.8c-.001 0 8.037 6.2 9.599 6.2z"/></symbol>
    <symbol viewBox="23.35 18.35 10 20" id="share-facebook"><path
            d="M32.993 24.823h-3.164v-2.076c0-.779.516-.961.879-.961h2.234v-3.428l-3.076-.012c-3.415 0-4.192 2.557-4.192 4.192v2.284h-1.975v3.531h1.975v9.992h4.155v-9.992h2.803l.361-3.53z"/></symbol>
    <symbol viewBox="14.85 19.85 27 17" id="share-googleplus"><path
            d="M23.466 27.13c-.004.966 0 1.933.004 2.897 1.619.053 3.242.028 4.862.053-.714 3.592-5.601 4.757-8.186 2.411-2.658-2.058-2.533-6.571.231-8.482 1.932-1.542 4.679-1.161 6.611.174a30.073 30.073 0 0 0 2.154-2.232c-1.606-1.282-3.578-2.196-5.677-2.098-4.378-.146-8.404 3.689-8.478 8.068-.28 3.58 2.074 7.089 5.397 8.356 3.312 1.274 7.557.405 9.671-2.569 1.396-1.879 1.696-4.298 1.533-6.57-2.708-.02-5.415-.016-8.122-.008zm15.835-.012c-.008-.808-.012-1.619-.017-2.427H36.87c-.008.808-.017 1.615-.021 2.427-.812.004-1.619.008-2.427.016v2.415l2.427.024c.008.808.008 1.615.017 2.422h2.418c.005-.807.009-1.614.017-2.427.812-.008 1.619-.012 2.427-.02v-2.415c-.808-.007-1.62-.007-2.427-.015z"/></symbol>
    <symbol viewBox="33.52 34.02 18 17" id="share-linkedin"><path
            d="M51.413 51.019v-6.576c0-3.524-1.881-5.164-4.389-5.164-2.023 0-2.931 1.113-3.436 1.895v-1.625h-3.812c.05 1.077 0 11.47 0 11.47h3.812v-6.405c0-.342.024-.685.125-.93.275-.685.903-1.395 1.956-1.395 1.38 0 1.931 1.052 1.931 2.594v6.137l3.813-.001zM35.758 37.983c1.329 0 2.158-.882 2.158-1.983-.024-1.125-.828-1.98-2.132-1.98-1.305 0-2.157.855-2.157 1.98 0 1.101.827 1.983 2.107 1.983h.024zm1.907 13.036v-11.47h-3.812v11.47h3.812z"/></symbol>
    <symbol viewBox="20.85 18.35 15 20" id="share-pinterest"><path
            d="M28.802 18.658c-5.289 0-7.955 3.791-7.955 6.953 0 1.914.725 3.618 2.279 4.251.255.105.483.004.558-.277.051-.195.173-.688.227-.894.074-.279.046-.377-.16-.621-.448-.528-.735-1.212-.735-2.182 0-2.812 2.104-5.331 5.48-5.331 2.989 0 4.631 1.826 4.631 4.265 0 3.21-1.42 5.919-3.528 5.919-1.164 0-2.035-.963-1.757-2.145.335-1.41.982-2.931.982-3.95 0-.911-.489-1.67-1.501-1.67-1.189 0-2.146 1.231-2.146 2.881 0 1.05.355 1.761.355 1.761L24.1 33.683c-.426 1.8-.064 4.006-.034 4.229.019.133.188.165.266.064.108-.144 1.527-1.894 2.009-3.643.137-.495.783-3.06.783-3.06.387.739 1.518 1.388 2.719 1.388 3.577 0 6.005-3.262 6.005-7.628-.002-3.301-2.796-6.375-7.046-6.375z"/></symbol>
    <symbol viewBox="18.85 21.35 19 14" id="share-stumbleupon"><path
            d="M29.317 26.59l1.252.583 1.867-.558V25.32a4.093 4.093 0 0 0-4.09-3.974 4.095 4.095 0 0 0-4.09 3.95v5.918a.97.97 0 1 1-1.94 0v-2.508H19.18v2.542a4.095 4.095 0 1 0 8.191.059l.004-5.846a.97.97 0 0 1 1.941 0v1.129zm5.059 2.116v2.625a.97.97 0 1 1-1.94 0v-2.575l-1.867.558-1.252-.584v2.555a4.099 4.099 0 0 0 8.196-.036v-2.542h-3.137z"/></symbol>
    <symbol viewBox="0 0 525.15 525.15" id="share-symbol"><path
            d="M420.735 371.217c-20.021 0-37.942 7.855-51.596 20.24L181.112 282.094c1.357-6.061 2.407-12.166 2.407-18.468s-1.072-12.385-2.407-18.468l185.904-108.335c14.179 13.129 32.931 21.334 53.719 21.334 43.828 0 79.145-35.251 79.145-79.079C499.88 35.338 464.541 0 420.735 0c-43.741 0-79.079 35.338-79.079 79.057 0 6.389 1.072 12.385 2.407 18.468L158.158 205.947c-14.201-13.194-32.931-21.378-53.741-21.378-43.828 0-79.145 35.317-79.145 79.057s35.317 79.079 79.145 79.079c20.787 0 39.54-8.206 53.719-21.334l187.698 109.604c-1.291 5.58-2.101 11.4-2.101 17.199 0 42.45 34.594 76.979 76.979 76.979 42.428 0 77.044-34.507 77.044-76.979s-34.593-76.957-77.021-76.957z"/></symbol>
    <symbol viewBox="246 248 20 16" id="share-twitter"><path
            d="M265.844 249.894a8.061 8.061 0 0 1-2.32.636 4.056 4.056 0 0 0 1.777-2.235 8.092 8.092 0 0 1-2.566.98 4.04 4.04 0 0 0-6.883 3.684 11.463 11.463 0 0 1-8.325-4.22 4.02 4.02 0 0 0-.547 2.031c0 1.401.713 2.638 1.797 3.362a4.034 4.034 0 0 1-1.83-.505v.051a4.044 4.044 0 0 0 3.24 3.961 4.06 4.06 0 0 1-1.824.069 4.044 4.044 0 0 0 3.773 2.806 8.108 8.108 0 0 1-5.017 1.729c-.326 0-.647-.019-.964-.056a11.435 11.435 0 0 0 6.192 1.814c7.43 0 11.492-6.155 11.492-11.493 0-.175-.004-.349-.012-.522a8.221 8.221 0 0 0 2.017-2.092z"/></symbol>
    <symbol viewBox="0 0 77.47 77.47" id="share-x"><path
            d="M77.474 5.011L72.463 0 38.737 33.727 5.011 0 0 5.011l33.727 33.726L0 72.463l5.011 5.011 33.726-33.726 33.726 33.726 5.011-5.011-33.726-33.726z"/></symbol>
</svg>
                                            <span class="custom-share__button trans " data-id="2496" data-permalink="" data-title="" data-image="" data-via="">
                                                <svg class="icon icon--share display--block"><use xlink:href="#share"></use></svg>
                                            </span>
                                        </span>
                                    </div>
                                    <!--<div class="product-price-from"></div>-->

                                    @include('site.shop.detail_section.form')

                                </div>
                            </div>
                        </div>
                    </section>
                    @include('site.shop.detail_section.product_information')
                </div>
                <div class="bg--black-light">
                    <section class="grid max-12cols-g a-center pt-r mobile-hor-100 mobile-hor-pt-90" id="svg-cursor">
                        <div class="block-50 display--inline-top tablet-100">
                            <div class="gutter js-hover-svg-cursor  mobile-hor-gutter" data-goto="0" data-pid="2496">
                                <div class="relative m-auto mb-162 tablet-mb-90" style="max-width: 633px">
                                    <div class="relative overflow" style="padding-top: 100%">
                                        <img src=images/cord-clip.jpg class="b-lazy block-100 abs-tl"
                                             alt="Minas Jewelry-Comes with our signature cord clip"
                                             data-src="images/cord-clip.jpg">
                                        <div class="fill-dimensions"></div>
                                    </div>
                                    <div
                                        class="prod-image-title font-light title-13 ls-180 uppercase a-left js-bt overflow relative in-view"
                                        data-emit-events data-bottom-top="">
                                        <div class="js-bt__el">
                                            Comes with our signature cord clip
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-page tablet-hor-nopad--top">
                            <div
                                class="gutter  relative color--white z-5 mobile-hor-gutter op-0 no-visible js-fade-up in-view"
                                data-emit-events data-bottom-top="" data-trans="1.4">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @include('site.shop.detail_section.related_product')
            <span class="buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden"
                  data-target="#add-to-cart"
                  data-anchor-target="#main-product-info"
                  data-0="@class: buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden"
                  data-60p="@class: buy-this scroll-to br-50 clickable trans tablet-hor-hidden"
                  data-160-bottom="@class: buy-this scroll-to br-50 clickable trans faded tablet-hor-hidden">
                <span class="block-100 abs-lc a-center">Add to cart</span>
            </span>
        </div>
    </main>
@endsection
