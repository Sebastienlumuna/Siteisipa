@extends('layout')

@section('title', 'Intelligence Artificielle')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/IA-IMAGE.webp) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Intelligence Artificielle</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('ia')}}">Nos Filières</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Intelligence Artificelle</li>
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
                      <img class="img-fluid rounded shadow" src="{{ asset('img/IA-IMAGE.webp')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="h-100">
                      <h6 class="section-title bg-white text-start text-primary pe-3">À propos</h6>
                      <h1 class="mb-4">Bienvenue en Intelligence Artificielle</h1>
                      <p>La section Intelligence Artificielle forme des experts capables de développer des systèmes intelligents et des solutions basées sur l'apprentissage automatique.</p>
                      <p class="mb-4">Nos étudiants acquièrent des compétences en machine learning, deep learning, traitement du langage naturel, vision par ordinateur et science des données.</p>
                      <a class="btn rounded-pill py-3 px-5 wow fadeInUp" href="{{ route('ia')}}" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
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
                      <p>Nos diplômés trouvent des emplois passionnants dans le domaine de l'IA:</p>
                      <p class="mb-4">
                      - Data Scientist<br>
                      - Ingénieur en Machine Learning<br>
                      - Spécialiste en Deep Learning<br>
                      - Expert en NLP<br>
                      - Chercheur en IA</p>
                      <a class="btn rounded-pill py-3 px-5 wow fadeInUp" href="{{ route('inscription')}}" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
                  </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="img-border">
                      <img class="img-fluid rounded shadow" src="{{ asset('img/IA-IMAGE.webp    ')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Features End -->

@endsection
