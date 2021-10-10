<div class="storefront-sorting">
    <div class="woocommerce-notices-wrapper"></div>
    <aside class="side-popup fixed js-popup" id="popup-sorting">
        <div class="side-popup__bg to-tr fixed z-1 bg-grey js-popup-bg"></div>
        <span class="x-close trans abs-tr display--block clickable color--black hover-white z-20 js-popup-close"></span>
        <div class="side-popup__inner grid over max-3cols-g">
            <div class="gutter pt-perc color--black mobile-hor-gutter">
{{--                <div class="font-bold title-13 ls-180 uppercase mb-t js-popup-option">82 Products</div>--}}
                <div class="js-popup-option">
                    <span class="highlight-underline font-bold title-25 ls-30 uppercase">sort by</span>
                </div>
                <div class="pt-m">
                    <form class="woocommerce-ordering" method="get" id="sorting-form">
                        <div class="check-holder relative js-popup-option">
                            <input type="radio" name="sortbytype" class="input-check abs-tl" value="desc"
                                   id="radio-sort-menu_order"
                                   {{Request()->get('sortbytype') == 'desc' ? 'checked':''}}
                                   onchange="this.form.submit()"/>
                            <label class="check-box br-50 trans abs-tl" for="radio-sort-menu_order">
                                <svg class="icon icon--minus abs-center svg-unchecked">
                                    <use xlink:href="#minus"></use>
                                </svg>
                                <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </label>
                            <label class="check-label trans font-light title-17 ls-80 uppercase"
                                   for="radio-sort-menu_order">Desc</label>
                        </div>

                        <div class="check-holder relative js-popup-option">
                            <input type="radio" name="sortbytype" class="input-check abs-tl" value="lowtohigh"
                                   {{Request()->get('sortbytype') == 'lowtohigh' ? 'checked':''}}
                                   id="radio-sort-price" onchange="this.form.submit()"/>
                            <label class="check-box br-50 trans abs-tl" for="radio-sort-price">
                                <svg class="icon icon--minus abs-center svg-unchecked">
                                    <use xlink:href="#minus"></use>
                                </svg>
                                <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </label>
                            <label class="check-label trans font-light title-17 ls-80 uppercase"
                                   for="radio-sort-price"> price: low to high</label>
                        </div>
                        <div class="check-holder relative js-popup-option">
                            <input type="radio" name="sortbytype" class="input-check abs-tl" value="hightolow"
                                   id="radio-sort-price-desc" onchange="this.form.submit()"/>
                            <label class="check-box br-50 trans abs-tl" for="radio-sort-price-desc">
                                <svg class="icon icon--minus abs-center svg-unchecked">
                                    <use xlink:href="#minus"></use>
                                </svg>
                                <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </label>
                            <label class="check-label trans font-light title-17 ls-80 uppercase"
                                   for="radio-sort-price-desc"> price: high to low</label>
                        </div>

                        <div class="check-holder relative js-popup-option">
                            <input type="radio" name="sortbytype" class="input-check abs-tl" value="atoz"
                                   {{Request()->get('sortbytype') == 'atoz' ? 'checked':''}}
                                   id="radio-sort-price-desc" onchange="this.form.submit()"/>
                            <label class="check-box br-50 trans abs-tl" for="radio-sort-price-desc">
                                <svg class="icon icon--minus abs-center svg-unchecked">
                                    <use xlink:href="#minus"></use>
                                </svg>
                                <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </label>
                            <label class="check-label trans font-light title-17 ls-80 uppercase"
                                   for="radio-sort-price-desc"> A - Z </label>
                        </div>


                        <div class="check-holder relative js-popup-option">
                            <input type="radio" name="sortbytype" class="input-check abs-tl" value="ztoa"
                                   {{Request()->get('sortbytype') == 'ztoa' ? 'checked':''}}
                                   id="radio-sort-price-desc" onchange="this.form.submit()"/>
                            <label class="check-box br-50 trans abs-tl" for="radio-sort-price-desc">
                                <svg class="icon icon--minus abs-center svg-unchecked">
                                    <use xlink:href="#minus"></use>
                                </svg>
                                <svg class="icon icon--plus color--white abs-center opacity-0 svg-checked">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </label>
                            <label class="check-label trans font-light title-17 ls-80 uppercase"
                                   for="radio-sort-price-desc"> Z - A</label>
                        </div>
{{--                        <input type="hidden" name="paged" value="1"/>--}}
                    </form>
                </div>
            </div>
        </div>
    </aside>
</div>
