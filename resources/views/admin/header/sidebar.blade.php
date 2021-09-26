<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>

                <li class="submenu">
                    <a

                        @if(Request()->route()->getName() == 'adminDashboard')
                        class="active"
                        @endif
                        href="{{route('adminDashboard')}}">
                        <i class="fas fa-tachometer-alt"></i> <span> Dashboard</span>
                        {{--<span class="menu-arrow"></span>--}}
                    </a>
                </li>


                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'aboutUsEdit' ||
                        Request()->route()->getName() == 'qualityEdit' ||
                        Request()->route()->getName() == 'policyEdit' ||
                        Request()->route()->getName() == 'bannerEdit')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> CMS </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('bannerEdit')}}">Banner Video and Text</a></li>
                        <li><a href="{{route('aboutUsEdit')}}">About Us</a></li>
                        <li><a href="{{route('policyEdit')}}">Privacy Policy</a></li>
                        <li><a href="{{route('qualityEdit')}}">Quality & Craftsmanship</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'contactUsListing' ||
                            Request()->route()->getName() == 'contactUsCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Contact Us Store </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('contactUsListing')}}">Listing</a></li>
{{--                        <li><a href="{{route('contactUsCreate')}}">Create</a></li>--}}
                        <li><a href="{{route('retailerRequest')}}">Retailer Request</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'storeListing' ||
                            Request()->route()->getName() == 'storeCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Stores </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('storeListing')}}">Listing</a></li>
                        <li><a href="{{route('storeCreate')}}">Create</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'pressListing' ||
                            Request()->route()->getName() == 'pressCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Media Kit Types  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('pressListing')}}">Listing</a></li>
                        <li><a href="{{route('pressCreate')}}">Create</a></li>


                    </ul>
                </li>


                <li>
                    <a
                        @if(Request()->route()->getName() == 'pressRecordListing' ||
                            Request()->route()->getName() == 'pressRecordCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Media Kit Records </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('pressRecordListing')}}">Listing</a></li>
                        <li><a href="{{route('pressRecordCreate')}}">Create</a></li>


                    </ul>
                </li>



                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'heritageListing' ||
                            Request()->route()->getName() == 'heritageCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Heritage </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('heritageListing')}}">Listing</a></li>
                        <li><a href="{{route('heritageCreate')}}">Create New Heritage</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'projectCategoryListing' ||
                            Request()->route()->getName() == 'projectCategoryCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Project Category </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('projectCategoryListing')}}">Listing</a></li>
                        <li><a href="{{route('projectCategoryCreate')}}">Create New Project Category</a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'projectListing' ||
                            Request()->route()->getName() == 'projectCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Project </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('projectListing')}}">Listing</a></li>
                        <li><a href="{{route('projectCreate')}}">Create New Project</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'newsCategoryListing' ||
                            Request()->route()->getName() == 'newsCategoryCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> News Category </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('newsCategoryListing')}}">Listing</a></li>
                        <li><a href="{{route('newsCategoryCreate')}}">Create New News Category</a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'newsListing' ||
                            Request()->route()->getName() == 'newsCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> News  </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('newsListing')}}">Listing</a></li>
                        <li><a href="{{route('newsCreate')}}">Create New News </a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'categoryListing' ||
                            Request()->route()->getName() == 'categoryCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('categoryListing')}}">Listing</a></li>
                        <li><a href="{{route('categoryCreate')}}">Create New Category</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'cordListing' ||
                            Request()->route()->getName() == 'cordCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Cords </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('cordListing')}}">Listing</a></li>
                        <li><a href="{{route('cordCreate')}}">Create New Cords</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'materialListing' ||
                            Request()->route()->getName() == 'materialCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Material </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('materialListing')}}">Listing</a></li>
                        <li><a href="{{route('materialCreate')}}">Create New Material</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a
                        @if(Request()->route()->getName() == 'productListing' ||
                            Request()->route()->getName() == 'productCreate')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i> <span> Product </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('productListing')}}">Listing</a></li>
                        <li><a href="{{route('productCreate')}}">Create New Product</a></li>
                    </ul>
                </li>








            </ul>


            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->
