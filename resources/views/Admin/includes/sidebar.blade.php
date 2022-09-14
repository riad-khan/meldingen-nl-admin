<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">Meldingen NL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">

                    <a href="#" class="nav-link {{Request::segment(1) === 'admin' ? 'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>







                <li class="nav-item">
                    <a href="/meldingen" class="nav-link {{Request::segment(1) === 'meldingen' ? 'active':''}} ">

                        <p>Meldingen</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/regio" class="nav-link {{Request::segment(1) === 'regio' ? 'active':''}} ">

                        <p>Regio</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/blog-category" class="nav-link {{Request::segment(1) === 'blog-category' ? 'active':''}} ">

                        <p>Blog Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/blogs" class="nav-link {{Request::segment(1) === 'blogs' ? 'active':''}} ">

                        <p>Blogs</p>
                    </a>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
