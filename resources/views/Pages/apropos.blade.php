@extends('layout')

@section('title', 'A-propos')

@section('content')

     <!-- Page Header Start -->
     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/Banque.jpg) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">A Propos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">A propos</li>
                </ol>
            </nav>
        </div>
    </div>
     <!-- Page---!-->
     <section class="mb-5">
        <div class="d-flex justify-content-center wow fadeInUp">
            <div class="historique">
                <h2 class="text-center">Connaitre l'ISIP'A-KOMORIKO</h2> <!-- Titre centré -->
                <p>
                    <strong>Institut Supérieur d'Informatique, Programation et Analyse</strong>(ISIP'A),  est une institution académique de premier plan dédiée à l'enseignement et à la recherche dans les domaines de l'informatique, de la programmation, de l'analyse des données et des sciences économiques et de gestion. Fondée sur des principes d'excellence académique et d'innovation, l'ISIP’A KOMORIKO s'efforce de former des professionnels compétents et des leaders dans le secteur des technologies de l'information.    </p>


            </div>
        </div>
     </section>
<!-- Facilities Section -->


  <!-- histoire -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/Batiment .jpg')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">MISSION</h6>
                    <h1 class="mb-4">Notre objectif</h1>
                    <p>L'ISIP’A KOMORIKO a pour mission de fournir une éducation de haute qualité en informatique et en sciences économiques, en mettant l'accent sur la théorie et la pratique de la programmation et de l'analyse des données.</p>
                    <p class="mb-4">Nous nous engageons à développer des compétences techniques et analytiques chez nos étudiants, tout en les préparant à relever les défis technologiques de demain.</p>

                </div>
            </div>
        </div>
    </div>
</div>
  <!-- histoire -->

  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">ACTUALITÉS</h6>
                    <h1 class="mb-4">Restez Informé</h1>
                    <p>Suivre l'actualité de l'ISIP'A KOMORIKO est essentiel pour rester connecté avec notre communauté académique. Nos actualités vous informent sur les événements importants, les innovations pédagogiques, les succès de nos étudiants et les opportunités professionnelles.</p>
                    <div class="d-flex align-items-center mb-4">
               <a href="{{ route('actualites')}}" class="btn rounded-pill py-2 px-3 wow fadeInDown" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">Plus d'actualité</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- objectif et vision -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Colonne texte -->
            <div class="col-lg-6 order-2 order-lg-1 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Objectif et vision</h6>
                    <h1 class="mb-4">Perspectives Professionnelles</h1>
                    <p>
                     Devenir un centre d'excellence reconnu mondialement pour notre capacité à produire des experts en informatique, en sciences économiques et en analyse, capables de contribuer de manière significative à l'avancement de la technologie et à l'innovation dans divers secteurs industriels.
                    </p>

                </div>
            </div>
            <!-- Colonne image -->
            <div class="col-lg-6 order-1 order-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/ollation.jpg')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- objectif et vision -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-4">Installations et Ressources</h1>
            <p class="text-muted">L'ISIP’A KOMORIKO dispose d'installations modernes et bien équipées, comprenant :</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative h-100">
                    <div class="rounded p-4">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/library.jpg')}}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Bibliothèque Numérique</h4>
                        <p>: un accès à une vaste collection de ressources électroniques, y compris des livres, des revues, et des bases de données spécialisées.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item position-relative h-100">
                    <div class="rounded p-4">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/InfoG(1).png')}}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Laboratoires Informatiques</h4>
                        <p>équipés des dernières technologies et logiciels pour permettre aux étudiants de travailler sur des projets pratiques et des recherches.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item position-relative h-100">
                    <div class="rounded p-4">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('img/icon/recherche.png')}}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Centre de recherche en informatique </h4>
                        <p>
                           un hub pour la recherche collaborative où étudiants et professeurs travaillent ensemble sur des projets innovants.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Partenariats Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center h-100">
                    <h6 class="section-title bg-white  text-primary pe-3">Partenariats</h6>
                    <h1 class="mb-4">Partenariats et Collaborations</h1>

                    <p>L'ISIP'A KOMORIKO entretient des partenariats étroits avec l'industrie et d'autres institutions académiques. Ces collaborations offrent aux étudiants des opportunités de stages, de projets en entreprise, et de programmes d'échange international, enrichissant ainsi leur expérience académique et professionnelle.</p>
                    <div class="container">

                        <div class="row justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.1s">
                            <!-- Logo 1 -->
                            <div class="col-6 col-sm-4 col-md-2 mb-4">
                                <img src="{{ asset('img/MinSup.png')}}" alt="Logo 1" class="img-fluid">
                            </div>
                            <!-- Logo 2 -->
                            <div class="col-6 col-sm-4 col-md-2 mb-4">
                                <img src="{{ asset('img/minrecherche.png')}}" alt="Logo 2" class="img-fluid">
                            </div>
                            <!-- Logo 3 -->
                            <div class="col-6 col-sm-4 col-md-2 mb-4">
                                <img src="{{ asset('img/uba.jpg')}}" alt="Logo 3" class="img-fluid">
                            </div>
                            <!-- Logo 4 -->
                            <div class="col-6 col-sm-4 col-md-2 mb-4">
                                <img src="{{ asset('img/minnumerique.png')}}" alt="Logo 4" class="img-fluid">
                            </div>

                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
 <!-- pdg -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/PDG1.jpg')}}" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">objective</h6>
                    <h1 class="mb-4">Notre PDG</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe id fugiat numquam necessitatibus blanditiis nihil reprehenderit doloribus, possimus vitae corporis itaque suscipit dolor  lot
                        rem voluptatibus alias, animi perferendis. Tempora, quo?</p>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam voluptates, tempora optio voluptatem velit quas repellat impedit quasi magni similique officiis. Ipsa eius natus voluptate iste soluta beatae et consequuntur?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sint possimus odio nam recusandae, ad architecto culpa quam voluptas officiis natus sed quis! Minima nostrum sequi similique rerum alias tenetur.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

 <!-- pdg -->
     <!-- martin -->


    <div class="d-flex align-items-center justify-content-center wow fadeInUp " data-wow-delay="0.1s">

        <div class="profile-container">
            <img src="{{ asset('img/PDG Martin.jpg')}}" alt="Profile Photo" class="profile-image">
            <h3 class="profile-name">Ir Martin Ekanda</h3>
            <p class="profile-quote">
                “ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex doloribus illum officia explicabo voluptas,
                placeat doloremque sunt alias ad id porro at minus quis, quasi neque, facilis expedita provident cum. “
            </p>
        </div>
     </div>

     <!-- ma -->
<section id="corps academique">

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium" style="color: #3C3882;">Professeurs</p>
                <h1 class="display-5 mb-5">Corps Académique</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>ILUNGA KASAMBAY Casimir </h5>
                        <span class="text-primary">Directeur Général</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>ILUNGA KASAMBAY Casimir </h5>
                        <span class="text-primary">Directeur Général</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>ILUNGA KASAMBAY Casimir </h5>
                        <span class="text-primary">Directeur Général</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>ILUNGA KASAMBAY Casimir </h5>
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
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>KIKWATI NTOTILA Claude</h5>
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
                        <img class="img-fluid mb-4" src="img/USERS.jpg" alt="">
                        <h5>MILONNDO KABAMBA Solonge</h5>
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
                        <span class="text-primary">Professeur Ordinaire</span>
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
</section>

<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Gallery</p>
            <h1 class="display-5 mb-5">Photos des constructions bâtiments ISIP'A avec la PDG Ruphine</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/Const1.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/Const1.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Fondation du bâtiment</a>
                    <span>Phase initiale de la construction avec les travaux de fondation</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/Const2.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/Const2.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Élévation des murs</a>
                    <span>Construction des murs et mise en place de la structure principale</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/Const3.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/Const3.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Installation de la toiture</a>
                    <span>Mise en place de la charpente et couverture du bâtiment</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/Const4.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/Const4.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Finitions extérieures</a>
                    <span>Travaux de façade et aménagement des espaces extérieurs</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/Const5.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/Const5.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">Aménagements intérieurs</a>
                    <span>Finalisation des espaces intérieurs et installations techniques</span>
                </div>
            </div>
        </div>
    </div></div>
@endsection
