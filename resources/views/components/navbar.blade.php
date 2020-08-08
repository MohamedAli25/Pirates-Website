<div>
<nav class="navbar navbar-expand-md sticky-top">
    <h3 class="navbar-brand"><img id="logo" src="/images/pirates logo.png" alt=""></h3>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            {{-- <li class="nav-item"><a href="user.Events" class="nav-link">Events</a></li> --}}
            {{-- <li class="nav-item"><a href="user.Committess" class="nav-link">Committess</a></li> --}}
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url('event') }}" class="nav-link">Events</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
                @if (Auth::user()->isSuperAdmin())
                    <li class="nav-item"><a href="{{ route('admin_panel') }}" class="nav-link">Admin Panel</a></li>
                @endif
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit" class="nav-link" value="Logout">
                    </form>
                </li>
            @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li>
            @endauth
        </ul>
    </div>
    <button class="btn bars d-md-none"><i class="fa fa-bars"></i>
    </button>
</nav>
<nav class="sidenav" id="sidenavbar" style="width: 0%;">
    <ul class="navbar-nav flex-column sidenavbar">
        <li class="sidebartext"><a href="{{ route('home') }}">Home</a></li>
        {{-- <li class="sidebartext"><a href="user.Events">Events</a></li> --}}
        {{-- <li class="sidebartext"><a href="user.Committess">Committess</a></li> --}}
        <li class="sidebartext"><a href="{{ route('about') }}">About</a></li>
        <li class="sidebartext"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="sidebartext"><a href="{{ url('event') }}">Events</a></li>
        @auth
            @if (Auth::user()->isSuperAdmin())
                <li class="sidebartext"><a href="{{ route('admin_panel') }}">Admin Panel</a></li>
            @endif
            <li class="sidebartext">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            </li>
        @else
            <li class="sidebartext"><a href="{{ route('login') }}">Sign In</a></li>
            <li class="sidebartext"><a href="{{ route('register') }}">Sign Up</a></li>
        @endauth
    </ul>
</nav>
<div class="dark-layer">

</div>
</div>