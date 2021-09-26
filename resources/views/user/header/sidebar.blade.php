<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>

                <li class="submenu">
                    <a

                        @if(Request()->route()->getName() == 'userDashboard')
                        class="active"
                        @endif
                        href="{{route('userDashboard')}}">
                        <i class="fas fa-tachometer-alt"></i> <span> Dashboard</span>
                        {{--<span class="menu-arrow"></span>--}}
                    </a>
                </li>

                <li class="submenu">
                    <a

                        @if(Request()->route()->getName() == 'userWishlist')
                        class="active"
                        @endif
                        href="{{route('userWishlist')}}">
                        <i class="fas fa-shopping-basket"></i> <span> Wishlist</span>
                        {{--<span class="menu-arrow"></span>--}}
                    </a>
                </li>



                <li class="submenu">
                    <a

                        @if(Request()->route()->getName() == 'userOrderListing' || Request()->route()->getName() == 'userOrderDetail')
                        class="active"
                        @endif
                        href="{{route('userOrderListing')}}">
                        <i class="fas fa-shopping-basket"></i> <span> Order</span>
                        {{--<span class="menu-arrow"></span>--}}
                    </a>
                </li>






            </ul>


            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->
