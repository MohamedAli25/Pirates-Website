@section('navbar')
<nav class="navbar navbar-expand-md fixed-top">
    <h3 class="navbar-brand"><img id="logo" src="/images/pirates logo.png" alt=""></h3>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Committess</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link">Sign In</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Sign Up</a></li>
        </ul>
    </div>
    <button class="btn  d-md-none" onclick="opensidebar()"><i class="fa fa-bars"></i>
    </button>

</nav>
<nav class="navbar" id="sidenavbar">
    <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Committess</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Sign In</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Sign Up</a></li>
    </ul>
</nav>
@endsection

@section('navcss')
<link rel="stylesheet" href="/css/Shared/navbar.css">
@endsection

@section('js')
<script>
    function opensidebar(){
        var sidebar = document.getElementById('sidenavbar');
        var body = document.getElementById('content');
        sidebar.style.width = "40%";
        body.style.marginLeft = "40%";
        body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
</script>

@endsection