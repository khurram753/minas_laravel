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
                        @if(Request()->route()->getName() == 'aboutUsEdit' || Request()->route()->getName() == 'qualityEdit')
                        class="active"
                        @endif
                        href="javascript:void(0)">
                        <i class="fas fa-tachometer-alt"></i>
                        <span> CMS </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('aboutUsEdit')}}">About Us</a></li>
                        <li><a href="{{route('qualityEdit')}}">Quality & Craftsmanship</a></li>
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





            </ul>


            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->
