<aside class="side-popup popup--search fixed js-popup" id="popup-search">
    <div class="side-popup__bg popup--search to-tr fixed z-1 bg--white js-popup-bg"></div>
    <span class="x-close trans abs-tr display--block clickable color--black hover-red z-20 js-popup-close"></span>
    <div class="side-popup__inner grid over max-5cols-g mobile-hor-100">
        <div class="gutter color--black mobile-hor-gutter">
            <header class="font-thin title-50 ls-30 uppercase pl-34 mb-t js-popup-option tablet-nopad--left">
                Search
            </header>
            <form role="search" method="get" class="pt-10p">
                <div class="relative js-popup-option">
                    <label class="screen-reader-text" for="search-popup__field">Search for</label>
                    <input type="search" name="s" id="search-popup__field"
                           class="input-search ls-30 relative z-1 box-sizing" value="" autocomplete="off"
                           placeholder="KEYWORD"/>
                    <div class="search-submit abs-tr trans">
                        <svg class="icon icon--search abs-center z-1 no-trans">
                            <use xlink:href="#search"></use>
                        </svg>
                        <input type="submit" class="transparent-button fill-dimensions" value="search now">
                    </div>
                </div>
                <div class="search-autocomplete js-popup-option" id="search-autocomplete"></div>
            </form>
        </div>
    </div>
</aside>
