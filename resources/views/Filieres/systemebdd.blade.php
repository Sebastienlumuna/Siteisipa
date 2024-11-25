@extends('layout')

@section('title', 'Systeme informatique & administration de BDD')

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/bdd_système.jpg) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Système Info et Admin des BDD</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('filieres')}}">Nos Filières</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Système Info et Admin des BDD</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid rounded shadow" src="{{ asset('img/Equipe_Info.jpeg')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">À propos</h6>
                        <h1 class="mb-4">Bienvenue en Système Info et Admin des BDD</h1>
                        <p>La section Système d'Information et Administration des Bases de Données forme des experts en conception, implémentation et gestion des systèmes d'information complexes.</p>
                        <p class="mb-4">Nos étudiants maîtrisent les technologies de bases de données avancées, l'architecture des systèmes d'information et la sécurité informatique.</p>
                        <a class="btn rounded-pill py-3 px-5 wow animate__animated animate__pulse animate__infinite" href="{{ route('inscription')}}" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Opportunités</h6>
                        <h1 class="mb-4">Perspectives Professionnelles</h1>
                        <p>Nos diplômés sont recherchés pour des postes stratégiques:</p>
                        <p class="mb-4">
                        - Administrateur de bases de données<br>
                        - Architecte de systèmes d'information<br>
                        - Expert en sécurité des données<br>
                        - Consultant en solutions informatiques<br>
                        - Gestionnaire de projets SI</p>
                        <a class="btn rounded-pill py-3 px-5 wow animate__animated animate__pulse animate__infinite" href="{{ route('inscription')}}" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">s'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="img-fluid rounded shadow" src="{{ asset('img/Equipe_Info.jpeg')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


@endsection

