@extends('layout')

@section('title', 'Programmes')

@section('content')


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8 wow fadeInUp text-center" data-wow-delay="0.1s">
                <div class="h-100">
                    <h1 class="display-6 mb-4">Notre Programme Académique</h1>
                    <p class="fs-5 mb-4">
                       L'ISIP'A KOMORIKO propose une gamme complète de programmes académiques, allant des diplômes de premier cycle aux programmes de deuxième cycle :
                       </p>
                    <div class="row g-4 mb-4 justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-graduation-cap fa-2x text-primary me-2"></i>
                                <h6 class="mb-2">Formation en Licence (3 ans)</h6>
                            </div>
                            <p class="mb-0">Un programme de trois ans qui couvre les bases de
                               l'informatique et en économie, incluant la programmation, les systèmes d'exploitation, les sciences administratives et économiques, les bases de données, et les réseaux.</p>
                        </div>
                        <div class="row g-4 mb-4 justify-content-center">
                           <div class="col-sm-8">
                               <div class="d-flex justify-content-center">
                                   <i class="fa fa-graduation-cap fa-2x text-primary me-2"></i>
                                   <h6 class="mb-2">Formation en Master (2 ans)</h6>
                               </div>
                               <p class="mb-0">un programme de deux ans axé sur les techniques avancées,
                                   les recherches modernes, et le développement de notions pratiques complexes.</p>
                           </div>
                       </div>                                 </div>
                    <p class="mb-4">Nos programmes sont accrédités et reconnus par le ministère de l'enseignement supérieur, offrant une formation pratique et théorique équilibrée.</p>
                    <a class="btn btn-primary py-3 px-4" href="">En savoir plus</a>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->
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
                   <h6 class="section-title bg-white text-start text-primary pe-3">enseignement</h6>
                   <h1 class="mb-4">Corps Enseignant</h1>
                   <p>Notre corps enseignant est composé de Professeurs, de Chefs de Travaux, d’Assistants, de Chargés de Pratique Professionnelle et de chercheurs de renommée internationale, possédant une vaste expérience académique.</p>
                   <p class="mb-4">Ils sont engagés dans la recherche de pointe et apportent leurs connaissances et leur expertise dans les salles de classe pour offrir une éducation de qualité supérieure.</p>

               </div>
           </div>
       </div>
   </div>
</div>
<!-- Team Start -->
<div class="container-xxl py-5">
   <div class="container">
       <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
           <h1 class="display-6 mb-4">Notre Corps Académique</h1>
           <p class="text-primary fs-5 mb-5">Des Experts Dévoués à Votre Réussite</p>
       </div>
       <div class="row g-4">
           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item text-center p-4">
                 <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/team-1.jpg')}}" alt="">
                 <h5 class="mb-1">Prof. Jean Mukendi</h5>
                 <p class="mb-4">Professeur Ordinaire en Informatique</p>
                 <div class="d-flex justify-content-center">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-envelope"></i></a>
                 </div>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
             <div class="team-item text-center p-4">
                 <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/team-2.jpg')}}" alt="">
                 <h5 class="mb-1">CT. Marie Kabongo</h5>
                 <p class="mb-4">Chef de Travaux en Gestion</p>
                 <div class="d-flex justify-content-center">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-envelope"></i></a>
                 </div>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
             <div class="team-item text-center p-4">
                 <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="{{ asset('img/team-3.jpg')}}" alt="">
                 <h5 class="mb-1">Ass. Patrick Kalala</h5>
                 <p class="mb-4">Assistant en Fiscalité</p>
                 <div class="d-flex justify-content-center">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fas fa-envelope"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </div>

</div>
@endsection

