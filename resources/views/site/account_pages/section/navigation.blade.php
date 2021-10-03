<nav class="woocommerce-MyAccount-navigation dashboard-navigation a-center">
    <div class="maxw-xl m-auto">
        <div class="gutter mobile-hor-gutter">
            <ul>
{{--                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard {{Request()->route()->getName() == 'myAccount' ? 'is-active':''}} tablet-block">--}}
{{--                    <a class="uppercase dashboard-link" href="{{route('myAccount')}}">--}}
{{--                        Dashboard--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account {{Request()->route()->getName() == 'editAccount' ? 'is-active':''}} tablet-block">
                    <a class="uppercase dashboard-link" href="{{route('editAccount')}}">
                        Profile
                    </a>
                </li>
{{--                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address tablet-block">--}}
{{--                    <a class="uppercase dashboard-link" href="addressess.html">--}}
{{--                        Addresses--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders tablet-block">
                    <a class="uppercase dashboard-link" href="orders.html">
                        Orders
                    </a>
                </li>
                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--tinv_wishlist {{Request()->route()->getName() == 'userWishlist' ? 'is-active':''}} tablet-block">
                    <a class="uppercase dashboard-link" href="{{route('userWishlist')}}">
                        <svg class="icon icon--heart abs-tl no-trans">
                            <use xlink:href="#heart"></use>
                        </svg>
                        Wishlist
                    </a>
                </li>
            </ul>
            <div class="line bg--black"></div>
        </div>
    </div>
</nav>
