<div class="container">
    <div class="row header-menu">
        <div class="u-pull-left four columns ">
            <div class="logo"><a href="/">Innovator Club Thailand</a></div>
        </div>
        <div class="u-pull-right menu" style="overflow: hidden;">
            @if(Session::has('Auth'))
            <div class="u-pull-right header-menu-link "><a href="/member/logout">Logout</a></div>
            <div class="u-pull-right header-menu-link header-menu-after"><a href="/member/manage">Manage</a></div>
            @else
            <div class="u-pull-right header-menu-link "><a href="/member/login">Login</a></div>
            <div class="u-pull-right header-menu-link header-menu-after"><a href="/member/signup">Sign Up</a></div>
            @endif

            <div class="u-pull-right header-menu-link header-menu-after"><a href="/contact">Contact Us</a></div>
            <div class="u-pull-right header-menu-link header-menu-after"><a href="/about">About Us</a></div>
            <div class="u-pull-right header-menu-link header-menu-after"><a href="/news">News & Activity</a></div>
        </div>
        <!-- Responsive Menu -->
        <div class="column menu-responsive slideOutRight animated" style="overflow: hidden; text-align: center;">
            <div class="menu-button corner-left column" style="text-align: left;"><a>&#9776;</a></div>
            <div class="header-menu-link column"><a href="/contact">Contact Us</a></div>
            <div class="header-menu-link column"><a href="/about">About Us</a></div>
            <div class="header-menu-link column"><a href="/news">News & Activity</a></div>
            <div class="header-menu-link column">Project</div>
        </div>
        <!-- Responsive Menu -->
    </div>
</div>