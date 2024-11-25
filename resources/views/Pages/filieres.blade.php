@extends('layout')

@section('title', 'Nos filieres')

@section('content')

<style>
    .floating {
        animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
        transition: all 0.3s ease;
    }

    .hover-zoom:hover img {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .hover-scale:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .hover-text:hover {
        color: #3C3882;
        transition: color 0.3s ease;
    }
    </style>

     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/Filières.avif) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Nos Différentes Filières </h1>
        </div>
    </div>

    <!-- Page Header End -->
          <section class="products section-padding position-relative">
              <div class="container">
                  <div class="row">

                      <div class="col-12">
                          <h2 class="mb-5 text-center wow fadeInUp" style="color: #3C3882;">Sciences Informatiques & Sciences et Technologies</h2>
                          <h4 class="mb-5 text-center wow fadeInUp animate__animated animate__flash" style="color: red;"><i class="fas fa-arrow-left animate__animated animate__fadeInLeft" style="color: #3C3882;"></i> Licence <i class="fas fa-arrow-right animate__animated animate__fadeInRight" style="color: #3C3882;"></i></h4>
                      </div>

                      <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
                          <div class="card border-0 shadow-lg h-100 hover-shadow">
                              <div class="product-thumb position-relative overflow-hidden">
                                  <a href="{{ route('infogestion')}}" class="hover-zoom">
                                      <img src="{{ asset('img/Info-g.jpg')}}" class="img-fluid product-image" alt="Informatique de gestion">
                                  </a>

                                  <div class="product-top">
                                      <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">550$</span>
                                  </div>

                                  <div class="product-info p-4">
                                      <div class="card-body">
                                          <h5 class="product-title">
                                              <a href="{{ route('infogestion')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Informatique de Gestion</a>
                                          </h5>
                                          <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                          <p class="card-text text-muted">Formation complète en gestion informatisée des entreprises</p>
                                      </div>
                                  </div>
                                  <div class="text-center position-absolute w-100 bottom-0">
                                      <a href="{{ route('infogestion')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.3s">
                          <div class="card border-0 shadow-lg h-100 hover-shadow">
                              <div class="product-thumb position-relative overflow-hidden">
                                  <a href="{{ route('genilogiciel')}}" class="hover-zoom">
                                      <img src="{{ asset('img/Génie_IMG.jpg')}}" class="img-fluid product-image" alt="Génie Logiciel">
                                  </a>

                                  <div class="product-top">
                                      <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">550$</span>
                                  </div>

                                  <div class="product-info p-4">
                                      <div class="card-body">
                                          <h5 class="product-title">
                                              <a href="{{ route('genilogiciel')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Génie Logiciel</a>
                                          </h5>
                                          <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                          <p class="card-text text-muted">Développement et architecture des logiciels</p>
                                      </div>
                                  </div>
                                  <div class="text-center position-absolute w-100 bottom-0">
                                      <a href="{{ route('genilogiciel')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.5s">
                          <div class="card border-0 shadow-lg h-100 hover-shadow">
                              <div class="product-thumb position-relative overflow-hidden">
                                  <a href="{{ route('communication')}}" class="hover-zoom">
                                      <img src="{{ asset('img/Com_Numérique.jpeg')}}" class="img-fluid product-image" alt="Communication Numérique">
                                  </a>

                                  <div class="product-top">
                                      <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">580$</span>
                                  </div>

                                  <div class="product-info p-4">
                                      <div class="card-body">
                                          <h5 class="product-title">
                                              <a href="{{ route('communication')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Communication Numérique</a>
                                          </h5>
                                          <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                          <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                      </div>
                                  </div>
                                  <div class="text-center position-absolute w-100 bottom-0">
                                      <a href="{{ route('communication')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating mx-auto text-center" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('tm')}}" class="hover-zoom">
                                    <img src="{{ asset('img/Maintenance-Img.jpg')}}" class="img-fluid product-image" alt="Technique de Maintenance">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">580$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('tm')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Technique de Maintenance</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                        <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('tm')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-12">
                        <h4 class="mb-5 text-center wow fadeInUp animate__animated animate__flash" style="color: red;"><i class="fas fa-arrow-left animate__animated animate__fadeInLeft" style="color: #3C3882;"></i> Master <i class="fas fa-arrow-right animate__animated animate__fadeInRight" style="color: #3C3882;"></i></h4>
                      </div>
                      <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('communication')}}" class="hover-zoom">
                                    <img src="{{ asset('img/Com_Numérique.jpeg')}}" class="img-fluid product-image" alt="Communication Numérique">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">700$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('communication')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Communication Numérique</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                        <p class="card-text text-muted">Formation complète en gestion informatisée des entreprises</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('communication')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('genilogiciel')}}" class="hover-zoom">
                                    <img src="{{ asset('img/Génie_IMG.jpg')}}" class="img-fluid product-image" alt="Génie Logiciel">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">700$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('genilogiciel')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Génie Logiciel</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                        <p class="card-text text-muted">Développement et architecture des logiciels</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('genilogiciel')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('ia')}}" class="hover-zoom">
                                    <img src="{{ asset('img/IA-IMAGE.webp')}}" class="img-fluid product-image" alt="Intellignece Artificielle">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">700$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('ia')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Intellignece Artificielle</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                        <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('ia')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating mx-auto text-center" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('systemebdd')}}" class="hover-zoom">
                                    <img src="{{ asset('img/bdd_système.jpg')}}" class="img-fluid product-image" alt="système Info et Admin des BDD ">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">700$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{route('systemebdd')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Système Info et Admin des BDD</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                        <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('systemebdd')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
              </div>
          </section> <br><br>


          <hr style="height: 3px; width: 50%; margin: auto; background: linear-gradient(to right, #3C3882, #ff0000, #3C3882); border: none; animation: pulse 2s infinite;"> <br><br>

        <!-- Page Header End -->
        <section class="products section-padding position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5 text-center wow fadeInUp" style="color: #3C3882;">Sciences Economiques et de Gestion</h2>
                        <h4 class="mb-5 text-center wow fadeInUp animate__animated animate__flash" style="color: red;"><i class="fas fa-arrow-left animate__animated animate__fadeInLeft" style="color: #3C3882;"></i> Licence<i class="fas fa-arrow-right animate__animated animate__fadeInRight" style="color: #3C3882;"></i></h4>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('banque')}}" class="hover-zoom">
                                    <img src="{{ asset('img/Banque.jpg')}}" class="img-fluid product-image" alt="Banque, Microfinance et Assurance">
                                </a>
                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">500$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('banque')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Banque, Microfinance et Assurance</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                        <p class="card-text text-muted">Formation complète en gestion informatisée des entreprises</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('banque')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.3s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('comptabilite')}}" class="hover-zoom">
                                    <img src="{{  asset('img/CPT-IMG.webp')}}" class="img-fluid product-image" alt="Comptabilité et Finance">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">500$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('comptabilite')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Comptabilité et Finance</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                        <p class="card-text text-muted">Développement et architecture des logiciels</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('comptabilite')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.5s">
                        <div class="card border-0 shadow-lg h-100 hover-shadow">
                            <div class="product-thumb position-relative overflow-hidden">
                                <a href="{{ route('fiscalite')}}" class="hover-zoom">
                                    <img src="{{ asset('img/Douance_Fisca.webp')}}" class="img-fluid product-image" alt="Fiscalité, Douane et Accises">
                                </a>

                                <div class="product-top">
                                    <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">500$</span>
                                </div>

                                <div class="product-info p-4">
                                    <div class="card-body">
                                        <h5 class="product-title">
                                            <a href="{{ route('fiscalite')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Fiscalité, Douane et Accises</a>
                                        </h5>
                                        <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                        <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                    </div>
                                </div>
                                <div class="text-center position-absolute w-100 bottom-0">
                                    <a href="{{ route('fiscalite')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating mx-auto text-center" data-wow-delay="0.5s">
                    <div class="card border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-thumb position-relative overflow-hidden">
                            <a href="{{ route('marketing')}}" class="hover-zoom">
                                <img src="{{ asset('img/R.jpeg')}}" class="img-fluid product-image" alt="Maketing(Markeing Digital)">
                            </a>

                            <div class="product-top">
                                <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">500$</span>
                            </div>

                            <div class="product-info p-4">
                                <div class="card-body">
                                    <h5 class="product-title">
                                        <a href="{{ route('marketing')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Maketing(Markeing Digital)</a>
                                    </h5>
                                    <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Licence - 3 ans</p>
                                    <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                </div>
                            </div>
                            <div class="text-center position-absolute w-100 bottom-0">
                                <a href="{{ route('marketing')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-12">
                        <h4 class="mb-5 text-center wow fadeInUp animate__animated animate__flash" style="color: red;"><i class="fas fa-arrow-left animate__animated animate__fadeInLeft" style="color: #3C3882;"></i> Master <i class="fas fa-arrow-right animate__animated animate__fadeInRight" style="color: #3C3882;"></i></h4>
                    </div>
                    <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-thumb position-relative overflow-hidden">
                            <a href="{{ route('banque')}}" class="hover-zoom">
                                <img src="{{ asset('img/Banque.jpg')}}" class="img-fluid product-image" alt="Banque, Microfinance et Assurance">
                            </a>

                            <div class="product-top">
                                <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">650$</span>
                            </div>

                            <div class="product-info p-4">
                                <div class="card-body">
                                    <h5 class="product-title">
                                        <a href="{{ route('banque')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Banque, Microfinance et Assurance</a>
                                    </h5>
                                    <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                    <p class="card-text text-muted">Formation complète en gestion informatisée des entreprises</p>
                                </div>
                            </div>
                            <div class="text-center position-absolute w-100 bottom-0">
                                <a href="{{ route('banque')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-thumb position-relative overflow-hidden">
                            <a href="{{ route('comptabilite')}}" class="hover-zoom">
                                <img src="{{ asset('img/compte, AUDIT.jpeg')}}" class="img-fluid product-image" alt="Compté, Contrôle et Gestion Audit">
                            </a>
                            <div class="product-top">
                                <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">650$</span>
                            </div>

                            <div class="product-info p-4">
                                <div class="card-body">
                                    <h5 class="product-title">
                                        <a href="{{ route('comptabilite')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Compté, Contrôle et Gestion Audit</a>
                                    </h5>
                                    <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                    <p class="card-text text-muted">Développement et architecture des logiciels</p>
                                </div>
                            </div>
                            <div class="text-center position-absolute w-100 bottom-0">
                                <a href="{{ route('comptabilite')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.5s">
                    <div class="card border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-thumb position-relative overflow-hidden">
                            <a href="{{ route('fiscalite')}}" class="hover-zoom">
                                <img src="{{ asset('img/Douance_Fisca.webp')}}" class="img-fluid product-image" alt="Fiscalité">
                            </a>

                            <div class="product-top">
                                <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">650$</span>
                            </div>

                            <div class="product-info p-4">
                                <div class="card-body">
                                    <h5 class="product-title">
                                        <a href="{{ route('fiscalite')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Fiscalité</a>
                                    </h5>
                                    <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                    <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                </div>
                            </div>
                            <div class="text-center position-absolute w-100 bottom-0">
                                <a href="{{ route('fiscalite')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-4 wow fadeInUp floating mx-auto text-center" data-wow-delay="0.5s">
                    <div class="card border-0 shadow-lg h-100 hover-shadow">
                        <div class="product-thumb position-relative overflow-hidden">
                            <a href="{{ route('gfinaniere')}}" class="hover-zoom">
                                <img src="{{ asset('img/Gest_Finance.jpeg')}}" class="img-fluid product-image" alt="Gestion Financière">
                            </a>

                            <div class="product-top">
                                <span class="badge bg-primary rounded-pill position-absolute top-0 end-0 m-3 hover-scale">650$</span>
                            </div>

                            <div class="product-info p-4">
                                <div class="card-body">
                                    <h5 class="product-title">
                                        <a href="{{ route('gfinaniere')}}" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">Gestion Financière</a>
                                    </h5>
                                    <p class="card-text text-end"><i class="fas fa-graduation-cap me-2"></i>Master - 2 ans</p>
                                    <p class="card-text text-muted">Administration des réseaux et cybersécurité</p>
                                </div>
                            </div>
                            <div class="text-center position-absolute w-100 bottom-0">
                                <a href="{{ route('gfinaniere')}}" class="btn btn-primary rounded-pill px-4 hover-btn" style="background-color: #3C3882; opacity: 0; transition: all 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='translateY(-5px)'" onmouseout="this.style.opacity='0'; this.style.transform='translateY(0)'">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </section>




    @endsection
