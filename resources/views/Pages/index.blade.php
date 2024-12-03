@extends('layout')

@section('title', 'Une longeur d avance')

@section('content')

 <!-- Carousel Start -->
 <div class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <h2 class="display-1 text-white mb-4 animated slideInRight">Bienvenue à <br>ISIP'A KOMORIKO</h2>
                                <h3 class="fs-4" style="color: #3C3882;" animated slideInRight><strong>Une longueur d'avance</strong></h3> <br>
                                <a href="{{ route('inscription')}}" class="btn rounded-pill py-3 px-5 animated slideInRight" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <h2 class="display-1 text-white mb-5 animated slideInLeft">Bienvenue à <br>ISIP'A KOMORIKO</h2>
                                <h3 class="fs-4"  style="color:#3C3882;" animated slideInLeft><strong>Une longueur d'avance</strong></h3>
                                <a href="{{ route('inscription')}}" class="btn rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">Inscription</a>                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <br>
<!-- Carousel End -->
<hr style="height: 3px; width: 50%; margin: auto; background: linear-gradient(to right, #3C3882, #ff0000, #3C3882); border: none; animation: pulse 2s infinite;">

<!-- About Start -->

<section id="about" class="about section my-5">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4 mb-5 align-items-center justify-content-between">

        <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
          <span class="about-meta" style="color: #3C3882; font-weight: bold; font-size: 1.2em; text-transform: uppercase;">À PROPOS DE NOUS</span>
          <h2 class="about-title" style="color: #333; font-size: 2.5em; margin: 20px 0;">ISIP'A KOMORIKO</h2>
          <p class="about-description" style="font-size: 1.1em; line-height: 1.8; color: #666;">Les étudiants bénéficient d’un accompagnement sur mesure pour réussir leur parcours académique et professionnel.</p>

          <div class="row feature-list-wrapper">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <ul class="feature-list" style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Formation professionnelle</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Équipements modernes</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Professeurs qualifiés</li>
              </ul>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <ul class="feature-list" style="list-style: none; padding-left: 0;">
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Stage garanti</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Suivi personnalisé</li>
                <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i> Insertion professionnelle</li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
          <div class="image-wrapper">
            <div class="images position-relative">
              <img src="{{ asset('img/etudiants.jpeg')}}" alt="Business Meeting" class="img-fluid main-image rounded-4 wow zoomIn" data-wow-delay="0.2s" style="max-width: 100%; width: 100%; height: 150%;">
              <img src="{{ asset('img/IMG FORM.jpg')}}" alt="Team Discussion" class="img-fluid small-image rounded-4 wow zoomIn" data-wow-delay="0.4s">
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->
  <!-- Features Cards Section -->
   <br>

   <br>
   <br>
  <section id="features-cards" class="features-cards section mb-5">

                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h2 class="display-5 mb-5">Nos Qualités</h2>
                </div>

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="feature-box orange">
            <i class="bi bi-award"></i>
            <h4>Corps enseignant expérimenté</h4>
            <p>Les étudiants bénéficient d’un accompagnement sur mesure pour réussir leur parcours académique et professionnel.</p>
          </div>
        </div><!-- End Feature Borx-->

        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="feature-box blue">
            <i class="bi bi-patch-check"></i>
            <h4>les compétences pratiques</h4>
            <p> Les programmes sont conçus pour répondre aux besoins du marché de l’emploi, avec un accent sur l'informatique appliquée, le management et l’entrepreneuriat.</p>
          </div>
        </div><!-- End Feature Borx-->

        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="feature-box green">
            <i class="bi bi-sunrise"></i>
            <h4>Technologies modernes et outils innovants</h4>
            <p> Accès à des infrastructures modernes, comme des laboratoires informatiques de pointe et des plateformes de simulation de gestion.</p>
          </div>
        </div><!-- End Feature Borx-->

        <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="feature-box red">
            <i class="bi bi-shield-check"></i>
            <h4>Accessibilité et inclusion</h4>
            <p>Options pour les cours en présentiel et en ligne pour s’adapter aux besoins des étudiants.</p>
          </div>
        </div><!-- End Feature Borx-->

      </div>

    </div>

  </section>


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Filières</p>
            <h3 class="display-5 mb-5">Nos différentes filières-LMD</h3>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/InfoG(1).png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Informatique de Gestion</h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Infos-G.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/MaintG.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Technique & Maintenance </h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Maintenance.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('img/icon/Genie.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Génie Logiciel</h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Genie_logiciel.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/IA.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Intelligence Artificielle</h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Intelligence artificielle.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/cpte.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Comptabilité et Finance</h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Comptabilité_Financière.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100">
                    <div class="service-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/banque.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Banque,Microfinance et Assurance</h4>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet</p>
                    </div>
                    <div class="service-btn rounded-0 rounded-bottom">
                        <a class="text-primary fw-medium" href="Filières_Banque_Microfinance.html">Savoir Plus<i class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

    <!-- About Start -->
    <div class="contain er-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('img/PDG1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">La Direction actuelle</h1>
                        <p class="mb-4"></p>
                        <p class="mb-4">Actuellement, l’ISIP’A komoriko est sous la direction de sa PDG,
                             qui supervise l’ensemble des activités de l’institut et veille à sa bonne gestion.
                             Sous son leadership, l’ISIP’A a mis en place une Politique Générale de Développement (PGD),
                              qui guide les décisions et les orientations stratégiques de l’institution. Cette PGD se
                               concentre sur l’amélioration continue de la qualité
                             de l’enseignement, l'innovation dans les programmes académiques, et l'engagement social.</p>
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0" style="background-color: #3C3882; padding: 1.5rem;">
                                <h1 class="display-2 text-white mb-0">+30</h1>
                                <h5 class="text-white">ans</h5>
                                <h5 class="text-white">d'Expérience</h5>
                            </div>
                            <div class="ms-4">
                                <p><i class="fa fa-check" style="color: #3C3882;" me-2"></i>Formation de qualité supérieure</p>
                                <p><i class="fa fa-check" style="color: #3C3882;" me-2"></i>Professeurs hautement qualifiés</p>
                                <p><i class="fa fa-check" style="color: #3C3882;" me-2"></i>Accompagnement personnalisé</p>
                                <p class="mb-0"><i class="fa fa-check" style="color: #3C3882;" me-2"></i>Programmes académiques innovants</p>
                            </div>
                        </div>                            <a href="" class="btn py-3 px-5" style="background-color: #3C3882; color: white;">Savoir Plus...</a>                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium" style="color: #3C3882;">Professeurs</p>
            <h1 class="display-5 mb-5">Nos Experts</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/DG.jpg')}}" alt="">
                    <h5>ILUNGA KASAMBAY Casimir </h5>
                    <span class="text-primary">Professeur des universités</span> <br>
                    <span class="text-primary">Directeur Général</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/Académique.jpg')}}" alt="">
                    <h5>KIKWATI NTOTILA Claude</h5>
                    <span class="text-primary">Chef de Travaux (Doctorant)</span> <br>
                    <span class="text-primary">Sécretaire Général académique</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="{{ asset('img/milondo.jpg')}}" alt="">
                    <h5>MILONNDO KABAMBA Solonge</h5>
                    <span class="text-primary">Chef de Travaux (Doctorant)</span> <br>
                    <span class="text-primary">Chef de Section</span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded overflow-hidden pb-4">
                    <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                    <h5>KINANGA MASALA Jean-Christ</h5>
                    <span class="text-primary">Professeur Ordinaire</span> <br>
                    <span class="text-primary">Chef de Section </span>
                    <ul class="team-social">
                        <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
