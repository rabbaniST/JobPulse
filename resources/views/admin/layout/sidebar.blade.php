<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin_dashboard')}}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin_dashboard')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin_dashboard')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{Request::is('admin/home-page/setting') ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Forntend Page Setting</span></a>
                <ul class="dropdown-menu">
                    <li class="{{Request::is('admin/home-page/setting') ? 'active' : ' '}}"><a class="nav-link" href="{{route('home_page_setting')}}"><i class="fas fa-angle-right"></i>Home</a></li>
                    <li class="{{ Request::is('admin/faq-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_page') }}"><i class="fas fa-angle-right"></i> FAQ</a></li>
                    <li class="{{ Request::is('admin/blog-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_blog_page') }}"><i class="fas fa-angle-right"></i> Blog</a></li>
                </ul>

            </li>

            <li class="nav-item dropdown {{Request::is('admin/job-category') ? 'active' : ''}}">
                <a href="{{route('admin_job_category')}}" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Job Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{Request::is('admin/job-category') ? 'active' : ' '}}"><a class="nav-link" href="{{route('admin_job_category')}}"><i class="fas fa-angle-right"></i>Job Category</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i>Job Location</a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/why-choose') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin_why_choose')}}"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Why Choose Items"><i class="fas fa-hand-point-right"></i> <span>Why Choose Item</span></a>
            </li>

            <li class="{{ Request::is('admin/testimonial') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin_testimonial')}}"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fas fa-hand-point-right"></i> <span>Testimonial</span></a>
            </li>

            <li class="{{ Request::is('admin/blog-post') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin_blog_post')}}"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Blog Post"><i class="fas fa-hand-point-right"></i> <span>Blog Post</span></a>
            </li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQs"><i class="fas fa-hand-point-right"></i> <span>FAQ</span></a></li>
        </ul>
    </aside>
</div>
