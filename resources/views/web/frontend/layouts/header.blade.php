<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="{{route('site.home')}}" class="navbar-brand">
                <h1 class="text-white">
                    <img src="{{public_storage(settings('site_logo'))}}" width="50px" height="50px" style="border-radius: 50%;" />
                </h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('site.home')}}" class="nav-item nav-link active">{{__('site.Home')}}</a>
                    <a href="{{route('site.about')}}" class="nav-item nav-link">{{__('site.About Us')}}</a>
                    <a href="{{route('site.services')}}" class="nav-item nav-link">{{__('site.Services')}}</a>
                    <a href="{{route('site.blog')}}" class="nav-item nav-link">{{__('site.Blogs')}}</a>
                    <a href="{{route('site.contact')}}" class="nav-item nav-link">{{__('site.Contact')}}</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->