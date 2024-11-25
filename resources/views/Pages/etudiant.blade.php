@extends('layout')

@section('title', 'Etudiants')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/students.jpg) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Vie Étudiante à ISIP'A</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Étudiants</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Student Life Carousel Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Vie Étudiante</h6>
                <h1 class="display-6 mb-4">Découvrez la vie à ISIP'A</h1>
               <p>La vie étudiante à l'ISIP'A KOMORIKO est dynamique et enrichissante, avec de nombreuses activités extracurriculaires, des clubs technologiques, et des compétitions de programmation. Les étudiants bénéficient également de services de soutien académique et de conseils de carrière pour les aider à réussir dans leurs études et à préparer leur avenir professionnel.
                En rejoignant L'ISIP'A KOMORIKO, les étudiants font le choix de l'excellence académique et de l'innovation technologique, se préparant ainsi à devenir des leaders dans le monde en constante évolution des technologies de l'information.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('img/student-1.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Activités Académiques</h5>
                            <span>Cours et formations</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="{{ asset('img/student-2.jpg')}}" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Événements Étudiants</h5>
                            <span>Activités extra-scolaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Life Carousel End -->

        <!-- Student Events Description Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Événements Étudiants</h6>
                    <h2 class="mb-4">Nos étudiants participent à de nombreux événements tout au long de l'année</h2>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Hackathons</h5>
                                <p>Participation à des compétitions de programmation intensives sur 24-48h pour développer des solutions innovantes.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Forums Entreprises</h5>
                                <p>Rencontres avec des professionnels du secteur pour découvrir les opportunités de carrière et de stages.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Conférences Tech</h5>
                                <p>Organisation et participation à des conférences sur les dernières technologies et innovations.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Projets Associatifs</h5>
                                <p>Engagement dans des associations étudiantes pour développer des projets sociaux et culturels.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Compétitions Sportives</h5>
                                <p>Participation aux tournois inter-écoles et championnats universitaires dans différentes disciplines.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item bg-light rounded p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                                <h5>Soirées Culturelles</h5>
                                <p>Organisation de soirées thématiques, spectacles et événements culturels tout au long de l'année.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Events Description End -->

    <!-- Student Activities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <video class="w-100 rounded" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" controls>
                            <source src="{{ asset('videos/campus-life.mp4')}}" type="video/mp4">
                            Votre navigateur ne supporte pas la vidéo.
                        </video>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-end">
                        <h6 class="section-title bg-white text-primary pe-3">Nos Étudiants</h6>
                        <h1 class="mb-4">Une Communauté Dynamique</h1>
                        <p class="mb-4">Nos étudiants participent activement à la vie du campus à travers:</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="skill" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Associations étudiantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="skill" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Projets académiques</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="skill" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateX(10px)'" onmouseout="this.style.transform='translateX(0)'">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Événements culturels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Activities End -->

      <!-- Photo Gallery Start -->
      <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <h6 class="section-title bg-white text-center text-primary px-3">Galerie Photos</h6>
                  <h1 class="display-6 mb-4">Moments Mémorables</h1>
              </div>
              <div class="row g-4">
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="team-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                          <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/student-life-1.jpg')}}" alt="">
                          <h5>Activités Sportives</h5>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="team-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                          <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/student-life-2.jpg')}}" alt="">
                          <h5>Conférences</h5>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="team-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                          <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/student-life-3.jpg')}}" alt="">
                          <h5>Travaux Pratiques</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Photo Gallery End -->

        <!-- Course Delivery Section Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Méthodes d'Enseignement</h6>
                    <h1 class="display-6 mb-4">Comment se déroulent nos cours?</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                            <i class="fa fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                            <h5>Cours en présentiel</h5>
                            <p>Des cours magistraux interactifs avec des professeurs expérimentés dans des salles modernes et équipées.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5>Travaux Pratiques</h5>
                            <p>Des séances pratiques en laboratoire informatique pour appliquer les concepts théoriques.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                            <i class="fa fa-3x fa-users text-primary mb-4"></i>
                            <h5>Projets de Groupe</h5>
                            <p>Des projets collaboratifs pour développer l'esprit d'équipe et les compétences pratiques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Delivery Section End -->


            <!-- Student Testimonials Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h6 class="section-title bg-white text-center text-primary px-3">Témoignages</h6>
                        <h1 class="display-6 mb-4">Ce que disent nos étudiants</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                                <img class="img-fluid rounded-circle mb-4" src="{{ asset('img/testimonial-1.jpg')}}" alt="">
                                <h5>Jean Mukendi</h5>
                                <p class="mb-0">L'ISIPA m'a offert une formation de qualité qui m'a permis de trouver rapidement un emploi dans mon domaine.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="testimonial-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                                <img class="img-fluid rounded-circle mb-4"  src="{{ asset('img/testimonial-1.jpg')}}" alt="">
                                <h5>Marie Kalonda</h5>
                                <p class="mb-0">Les professeurs sont très compétents et toujours disponibles pour nous accompagner dans notre apprentissage.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="testimonial-item text-center p-4" style="transition: all 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                                <img class="img-fluid rounded-circle mb-4"  src="{{ asset('img/testimonial-1.jpg')}}" alt="">
                                <h5>Patrick Kabongo</h5>
                                <p class="mb-0">L'environnement d'apprentissage est excellent avec des équipements modernes et une bonne ambiance estudiantine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Student Testimonials End -->

                        <!-- Student Organizations Start -->
                        <div class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                    <h6 class="section-title bg-white text-center text-primary px-3">Associations Étudiantes</h6>
                                    <h1 class="display-6 mb-4">Vie Associative à l'ISIPA</h1>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item text-center p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'" onmouseout="this.style.transform='translateY(0) scale(1)'">
                                            <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/club-tech.jpg')}}" alt="">
                                            <h5>Club Technologie</h5>
                                            <p>Participez à des projets innovants et des compétitions technologiques</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="team-item text-center p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'" onmouseout="this.style.transform='translateY(0) scale(1)'">
                                            <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/club-sport.jpg')}}" alt="">
                                            <h5>Association Sportive</h5>
                                            <p>Rejoignez nos équipes sportives et participez aux tournois inter-universitaires</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="team-item text-center p-4" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'" onmouseout="this.style.transform='translateY(0) scale(1)'">
                                            <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/club-culture.jpg')}}" alt="">
                                            <h5>Club Culturel</h5>
                                            <p>Découvrez et partagez la richesse culturelle à travers diverses activités</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Student Organizations End -->

                        <!-- Academic Resources Start -->
                        <div class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                    <h6 class="section-title bg-white text-center text-primary px-3">Ressources</h6>
                                    <h1 class="display-6 mb-4">Ressources Académiques</h1>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item bg-light rounded h-100 p-5" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'" onmouseout="this.style.transform='translateY(0) scale(1)'">
                                            <h4 class="mb-3">Bibliothèque Numérique</h4>
                                            <p class="mb-4">Accédez à notre vaste collection de ressources numériques, livres électroniques et articles scientifiques</p>
                                            <a class="btn btn-primary px-3" href="">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="service-item bg-light rounded h-100 p-5" style="transition: transform 0.3s ease-in-out;" onmouseover="this.style.transform='translateY(-10px) scale(1.02)'" onmouseout="this.style.transform='translateY(0) scale(1)'">
                                            <h4 class="mb-3">Centre de Tutorat</h4>
                                            <p class="mb-4">Bénéficiez d'un soutien personnalisé avec nos tuteurs expérimentés dans différentes matières</p>
                                            <a class="btn btn-primary px-3" href="">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


@endsection
