@extends('layout')

@section('title', 'inscription')

@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/inscription.png) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Inscription en Ligne</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Inscription</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
    {{-- afficahge des messages de succès --}}
    @if(session('success'))
    <div class="alert alert-success text-center mx-5" role="alert">
        {{ session('success') }}
      </div>
    @endif

<!-- Conditions d'inscription Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-4" style="color: #3C3882; font-weight: bold; font-size: 2.2em; text-transform: uppercase; display: block;">Conditions d'Inscription</h1>
            <p class="fw-medium">Pour s'inscrire à l'ISIP'A KOMORIKO, les candidats doivent remplir les conditions suivantes:</p>
        </div>
        <section id="about" class="about section my-5">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 mb-5 align-items-center">
                    <!-- Texte -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <span class="about-meta" style="color: #3C3882; font-weight: bold; font-size: 1.2em; text-transform: uppercase; display: block;">
                            Conditions d'inscription
                        </span>
                        <h2 class="about-title" style="color: #333; font-size: 1.5em; margin: 15px 0; font-weight: bold;">
                            Nouvelle inscription : pour un nouveau candidat(e)
                        </h2>
                        <div class="feature-list-wrapper">
                            <ul class="feature-list" style="list-style: none; padding-left: 0; font-weight: normal; font-size: 1.1em; line-height: 1.8;">
                                <li style="margin-bottom: 10px;">
                                    <i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i>
                                    Formulaire :
                                    <span style="color: #ff0000; font-weight: bold;">20$</span>
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i>
                                    Test d'admission (Si moins de 60% aux EXETATS) :
                                    <span style="color: #ff0000; font-weight: bold;">10$</span>
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="bi bi-check-circle-fill" style="color: #3C3882; margin-right: 10px;"></i>
                                    Frais administratifs :
                                    <span style="color: #ff0000; font-weight: bold;">25$</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="img-border text-center">
                            <img class="img-fluid rounded shadow" src="img/etudiants.jpeg" alt="" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <br><br>
         <section id="about" class="about section my-5">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row gy-4 mb-5">
                    <div class="col-12 wow fadeInLeft" data-wow-delay="0.1s">
                        <span class="about-meta" style="color: #3C3882; font-weight: bold; font-size: 1.2em; text-transform: uppercase; display: block; text-align: center;">
                            Dossier d'inscription
                        </span>
                        <br>
                        <p class="about-description" style="font-size: 1.1em; line-height: 1.8; color: #666; text-align: center;">
                            Formulaire d'inscription, bulletins 5ème et 6ème des humanités, diplôme d'Etat (ou attestation de réussite),
                            attestation de bonne vie et moeurs, attestation de naissance et 2 photos passeport (à retirer à l'institut).
                            Les relevés de notes sont requis pour les classes inférieures dans le cadre d'une inscription spéciale.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <div class="row g-4 mb-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100%; font-size: 16px;">
                        <thead style="background-color: #3C3882; color: white; text-align: center;">
                            <tr>
                                <th style="width: 50%;">Cas d'un(e) candidat(e) ayant obtenu 60% ou Plus</th>
                                <th style="width: 50%;">Cas d'un(e) candidat(e) ayant obtenu moins de 60%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1. Acheter d'abord le formulaire;<br>
                                    2. Soumettre son dossier d'inscription pour un Contrôle de conformité. Ensuite, le.la candidat(e)
                                    procède à l'inscription en s'acquittant de divers frais. Toute personne disposant
                                    d'un dossier falsifié ne sera pas autorisée à s'inscrire.
                                </td>
                                <td>
                                    1. Acheter le formulaire avant de passer le test;<br>
                                    2. Réussir au test et procéder au Contrôle de dossier;<br>
                                    3. Pour une inscription de L2 en M3, le.la Candidat(e)
                                    présente son dossier à l'apparitorat pour vérification;<br>
                                    4. Le.la candidat(e) dépose son dossier lors de l'inscription ou le complète
                                    dans les 2 mois suivant le début des cours.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-12 text-center">
                        <a
                            href="img/Condition.pdf"
                            download
                            class="btn py-3 px-5 wow fadeInUp"
                            style="background-color: #3C3882; color: white; text-decoration: none;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'"
                            onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">
                            👉 Télécharger le PDF
                        </a>
                    </div>

                </div>
            </div>
        </div>

        </div> <br><br><br>
        <!-- Formulaire d'inscription Start -->
        <div class="row g-4">
            <div class="col-12">
                <h2 class=" text-center mb-4">Formulaire d'Inscription</h2>
                <form  action="{{ route('admission') }}" method="POST" class="wow fadeInUp" data-wow-delay="0.3s" >
                    @csrf
                    {{-- composent input --}}
                    <div class="row g-3">
                        <div class="col-md-6">
                        <x-input name="nom" label="nom" type="text" />

                         </div>
                         <div class="col-md-6">
                        <x-input name="postnom" label="postnom" type="text" />
                          </div>

                          <div class="col-md-6">
                        <x-input name="prenom" label="prenom" type="text" />
                            </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select @error('sexe') is-invalid @enderror" value="{{ old('sexe')}}" id="sexe" name="sexe" required>
                                    <option value="" selected disabled>Sélectionnez Votre Genre</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                                <label for="sexe">Votre Genre</label>
                                @error('sexe')
                                      <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <x-input name="email" label="email" type="email" />

                        </div>

                        <div class="col-md-6">
                            <x-input name="phone" label="telephone" type="text" />
                        </div>

                        <div class="col-12">
                            <x-input name="address" label="Adresse" type="text" />
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select @error('filiere') is-invalid @enderror" value="{{ old('filiere')}}"  id="filiere" name="filiere" required>
                                    <option value="" selected disabled>Sélectionnez une filière</option>
                                    <option value="informatique de Gestion">Informatique de Gestion</option>
                                    <option value="Intelligence artificielle">Intelligence artificielle</option>
                                    <option value="Technique & Maintenance">Technique & Maintenance</option>
                                    <option value="Communication Numérique">Communication Numérique</option>
                                    <option value="Génie Logiciel">Génie logiciel</option>
                                    <option value="Syst Info">Système Info et Admini des Base de données</option>
                                    <option value="gestion">Gestion Financière</option>
                                    <option value="marketing">Marketing Digital</option>
                                    <option value="Banque">Banque, Microfinance et Assurance</option>
                                    <option value="Fiscalité">Fiscalité</option>
                                    <option value="Fiscalité,Douane">Fiscalité, Douane et Accises</option>
                                    <option value="compte, controle">Compté, Contrôle de Gestion et Audit</option>
                                </select>
                                <label for="filiere">Filière souhaitée</label>

                                @error('filiere')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select @error('niveau') is-invalid @enderror" value="{{ old('niveau')}}" id="niveau" name="niveau" required>
                                    <option value="" selected disabled>Sélectionnez un niveau</option>
                                    <option value="l1">Licence 1</option>
                                    <option value="l2">Licence 2</option>
                                    <option value="l3">Licence 3</option>
                                    <option value="M1">Master 1</option>
                                    <option value="M2">Master 2</option>
                                </select>
                                <label for="niveau">Niveau d'études</label>

                                @error('niveau')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn py-3 px-5 wow fadeInUp" type="submit" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">
                                Soumettre l'inscription
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
