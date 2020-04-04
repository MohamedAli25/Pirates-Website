<div>
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
    <button class="btn bars d-md-none" onclick="opensidebar()"><i class="fa fa-bars"></i>
    </button>
</nav>
<nav class="sidenav" id="sidenavbar" style="width: 0%;">
    <ul class="navbar-nav flex-column sidenavbar">
        <li class="sidebartext"><a href="#">Home</a></li>
        <li class="sidebartext"><a href="#">Events</a></li>
        <li class="sidebartext"><a href="#">Committess</a></li>
        <li class="sidebartext"><a href="#">About</a></li>
        <li class="sidebartext"><a href="#">Sign In</a></li>
        <li class="sidebartext"><a href="#">Sign Up</a></li>
    </ul>
</nav>
<link rel="stylesheet" href="/css/Shared/navbar.css">
<script>
    function opensidebar(){
        if(document.getElementById('sidenavbar').style.width === '0%'){
        var sidebar = document.getElementById('sidenavbar');
        var body = document.getElementById('content');
        sidebar.style.width = "60%";
        body.style.backgroundColor = "rgba(0,0,0,0.4)";
       
        var elements = document.getElementsByClassName('sidebartext');
        for(var i=0; i<elements.length; i++) { 
            elements[i].classList.add('tracking');
            elements[i].classList.remove('trackingo');
        }
        
        }else{
        var sidebar = document.getElementById('sidenavbar');
        var body = document.getElementById('content');
        sidebar.style.width = "0%";
        body.style.backgroundColor = "rgba(0,0,0,0)";
        var elements = document.getElementsByClassName('sidebartext');
        for(var i=0; i<elements.length; i++) { 
            elements[i].classList.remove('tracking');
            elements[i].classList.add('trackingo');
        }         
        }
    }
</script>
</div>