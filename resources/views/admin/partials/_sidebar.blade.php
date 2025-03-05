<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
        <img src="{{asset('assets/images/3-1.png')}}" alt="Lilly Tours"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Lilly Tours</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Sliders Section (Added Here) -->
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Sliders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('sliders.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sliders.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Sliders</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Categories</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Sub Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('subcategory.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('subcategory.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Sub Categories</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Booking
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{ route('admin.bookings.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show All Bookings</p>
            </a>
        </li>
    </ul>
</li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Programs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('programs.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Program</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('programs.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Programs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('media.program')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Media</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Package Contents
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('package.content.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Package Content</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('package.content.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Package Contents</p>
                            </a>
                        </li>

                    </ul>
                </li>







                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Itineraries
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('itineraries.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New itineraries</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('itineraries.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All itineraries</p>
                            </a>
                        </li>

                    </ul>
                </li>








                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Accommodations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('accommodations.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Hotel/Cruises</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('accommodations.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Hotel/Cruises</p>
                            </a>
                        </li>

                    </ul>
                </li>





                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Addons
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('addons.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Addon</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('addons.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Addons</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Tailor Made Requests
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="{{route('tailors.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Requests</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('blogs.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Post</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blogs.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Posts</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Promo & Referral Codes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="{{route('promo.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show All Promo&Referral</p>
                            </a>
                        </li>

                    </ul>
                </li>
              

                <li class="nav-item">
                <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-file-contract"></i> <!-- أيقونة جديدة -->
        <p>
            Terms & Conditions
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <!-- إضافة Terms & Conditions -->
        <li class="nav-item">
            <a href="{{ route('terms.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Terms & Conditions</p>
            </a>
        </li>
        <!-- عرض Terms & Conditions -->
        <li class="nav-item">
            <a href="{{ route('terms.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Show Terms & Conditions</p>
            </a>
        </li>
    </ul>
</li>
                     


               <li class="nav-item">
                
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Contacts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">

                        <li class="nav-item">
                            <a href="{{route('contacts.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Contacts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('messages.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Messages</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
 