<header>
    <div class="logo">
        <a href = "{{route('frontsite.home')}}" class="logo">

            <h1 class="logo-text"><span>Noor</span>Blog</h1>
        </a>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="{{route('frontsite.home')}}">Home</a></li>
{{--        <li><a href="{{route('frontsite.single')}}">Single</a></li>--}}

        <!-- <li><a href="#">Sign Up</a></li>
        <li><a href="#">Login</a></li> -->
        <li>
            <a href="#">
{{--                <i class="fa fa-user"></i>--}}
Dashboard
<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
                @auth()
                <li><a href="{{route('admin.admin')}}">Dashboard</a></li>
                @endauth
                @guest()
                <li><a href="{{route('login')}}">Login</a></li>
                    @endguest
                <li><a href="{{route('logout')}}" class="logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>

