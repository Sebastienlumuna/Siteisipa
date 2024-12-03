<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('img/LOGO 2.jpg')}}" alt="ISIP'A Logo" style="height: 60px;" class="wow fadeInDown">
                <span class="ms-2 fw-bold wow fadeInDown">ISIP'A KOMORIKO</span>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav text-center mx-auto">
                    <a href="{{ route('home')}}" class="nav-item nav-link @if(Request::route()->getname() == 'home') active @endif  wow fadeInDown" data-wow-delay="0.1s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Acceuil</a>
                    <a href="{{ route('apropos')}}" class="nav-item nav-link @if(Request::route()->getname() == 'apropos') active @endif  wow fadeInDown" data-wow-delay="0.3s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">A Propos</a>
                    <a href="{{ route('progrrammes')}}" class="nav-item nav-link @if(Request::route()->getname() == 'programmes') active @endif wow fadeInDown" data-wow-delay="0.5s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Formation</a>
                    <a href="{{ route('etudiants')}}" class="nav-item nav-link @if(Request::route()->getname() == 'etudiants') active @endif wow fadeInDown" data-wow-delay="0.7s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Etudiants</a>
                    <a href="{{ route('filieres')}}" class="nav-item nav-link @if(Request::route()->getname() == 'filieres') active @endif wow fadeInDown" data-wow-delay="0.8s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Nos filières</a>
                    <a href="{{ route('contact')}}" class="nav-item nav-link @if(Request::route()->getname() == 'filieres') active @endif wow fadeInDown" data-wow-delay="0.9s" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Contact</a>
                    <a href="{{ route('inscription')}}" class="btn rounded-pill py-2 px-3 wow fadeInDown d-lg-none" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="{{ route('inscription')}}" class="btn rounded-pill py-2 px-3 wow fadeInDown" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
                </div>
            </div>
        </nav>
    </div>
</div>
