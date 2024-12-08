@extends('layout')

@section('title', 'Nos actualités')

@section('content')

  <!-- actu Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/Filières.avif) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Nos dernières actualités </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('apropos')}}">A-propos</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Actualités</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Header End -->
  <!-- recherche Start -->
 <div class="container mb-5">
     <div class="row justify-content-center">
         <div class="col-12 col-md-8 col-lg-6">
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Rechercher une actualité..." aria-label="Rechercher">
                 <button class="btn" type="button" style="background-color: #3C3882; color: white;">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </div>
 </div>
 <!--recherhce end -->
    <!-- Actualités Start -->
<section class="products section-padding position-relative">
    <div class="container">
      <div class="row">
        <!-- Start of Post -->
        <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
          <div class="card border-0 shadow-lg h-100 hover-shadow">
            <div class="product-thumb position-relative overflow-hidden">
              <a href="l" class="hover-zoom">
                <img src="{{ asset('img/actu/journeepays.jpg')}}" class="img-fluid product-image" alt="actu" width="1232" height="816">
              </a>
            </div>
            <div class="product-info p-4">
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <small class="text-muted"> le 27 Novembre 2024</small>
                  <small class="text-danger"><a href="#" class="">Événement</a></small>
                </div>
                <h5 class="product-title">
                  <a href="" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                    La journée mondiale des pays
                  </a>
                </h5>
                <a href="l">
                  <p class="text-muted">
                    Tous habillés en bleu, rouge et jaune ; la PDG de l'ISIP'A Komoriko Madame Ruphine Luyeye avec tout son comité de gestion ainsi que les étudiants de cette Alma-mater ont représenté la RDC à la journée mondiale des pays ...
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Post -->
        <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">

<div class="product-thumb position-relative overflow-hidden">
<a href="" class="hover-zoom">
<img src="{{ asset('img/actu/pdg.jpg')}}" class="img-fluid product-image custom-image" alt="actu">
</a>
</div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted"> le 26 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">Info</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                     Messages de la PDG aux étudiants
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Madame Ruphine Luyeye avec tout son comité de gestion ainsi que les étudiants de cette Alma-mater ont représenté la RDC à la journée mondiale des pays ce mercredi 27/11/2024.
                        Le patriotisme...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="l" class="hover-zoom">
                  <img src="{{ asset('img/actu/match.jpg')}}" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted"> le 25 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">activités</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                        accueil des nouveaux étudiants à ISIP'A Komoriko
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Dans le cadre des activités d'accueil des nouveaux étudiants, ISIP'A Komoriko organise un match de football qui oppose les anciens VS les nouveaux étudiants de cette Alma mater. ...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="l" class="hover-zoom">
                  <img src="{{ asset('img/actu/courscontinue.jpg')}}" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted"> le 2 Novembre 2024</small>
                    <small class="text-danger"><a href="#" class="">Rentré académique</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                     Des conditions modernes pour l'evolution de cours,La théorie associée à la pratique.
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Nos étudiants suivent les cours dans des conditions modernes. La théorie associée à la pratique. Rendez-vous au sommet...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="" class="hover-zoom">
                  <img src="{{ asset('img/actu/courdebut.jpg')}}" class="img-fluid product-image" alt="actu">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted"> le 28 Octobre 2024</small>
                    <small class="text-danger"><a href="#" class="">Rentré académique</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                      Début la rentrée académique 2024-2025 à l'ISIP'A Komoriko
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Revivez en image ce qui a été la rentrée académique 2024-2025 à l'ISIP'A/ Komoriko le lundi 28 octobre. Bienvenue aux nouveaux étudiant(es)...         </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
            <div class="card border-0 shadow-lg h-100 hover-shadow">
              <div class="product-thumb position-relative overflow-hidden">
                <a href="l" class="hover-zoom">
                  <img src="{{ asset('img/actu/collation.jpg')}}" class="img-fluid product-image" alt="actu" width="1232" height="816">
                </a>
              </div>
              <div class="product-info p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted"> le 3 Octobre 2024</small>
                    <small class="text-danger"><a href="#" class="">Événement</a></small>
                  </div>
                  <h5 class="product-title">
                    <a href="#" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                        Collation des grades académiques à l'ISIP'A Komoriko
                    </a>
                  </h5>
                  <a href="#">
                    <p class="text-muted">
                        Tomber et se relever n'est pas donné à tout le monde. Ici la relève est assurée, collation des grades académiques à l'ISIP'A Komoriko...
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <!-- Repeat the block above for other posts -->
      </div>
    </div>
  </section>


@endsection
