@extends('layout')

@section('title', $post->titre)


@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center position-relative">
        <!-- Event Title -->
        <h6 class="section-title text-primary custom-h6 d-inline-block mb-0 wow fadeInUp" data-wow-delay="0.1s">Evenement</h6>
        <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.3s"> {{$post->titre}} </h1>
    </div>

    <!-- Author and Date -->
    <div class="text-center">
        <p class="article-meta wow fadeInUp" data-wow-delay="0.4s"> {{$post->created_at}}</p>
    </div>

    <!-- Image Section -->
    <div class="mb-5 text-center wow fadeInUp" data-wow-delay="0.5s">
        <img src=" {{$post->image}}" alt="Illustration du post" class="img-fluid rounded shadow-lg img-post" width="800" height="400">
    </div>

    <!-- Content Section -->
    <div class="historique wow fadeInUp" data-wow-delay="0.6s">
        <p>
            {{$post->contenu}}
        </p>
    </div>
</div>
            <!-- Comment Start -->
            <div class="container mt-5 wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Commentaires</h4>
                        <!-- Form pour nouveau commentaire -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <img src="img/USERS.jpg" class="rounded-circle me-3" width="40" height="40" alt="User">
                                    <div class="flex-grow-1">
                                        <textarea class="form-control" rows="3" placeholder="Écrivez un commentaire..."></textarea>
                                        <div class="d-flex justify-content-end mt-3">
                                            <button class="btn" style="background-color: #3C3882; color: white;" onmouseover="this.style.backgroundColor='white'; this.style.color='#3C3882'; this.style.border='1px solid #3C3882'" onmouseout="this.style.backgroundColor='#3C3882'; this.style.color='white'">Poster</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Liste des commentaires -->
                        <div class="comments-list">
                            <!-- Commentaire 1 -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="img/seb.jpg" class="rounded-circle me-3" width="40" height="40" alt="User">
                                        <div>
                                            <h6 class="mb-1">Sebastien</h6>
                                            <p class="small text-muted">Il y a 2 heures</p>
                                            <p>Super événement ! C'était dans le cadre de sebene !! tokoss</p>
                                            <div class="comment-actions">
                                                <button class="btn btn-sm text-muted me-2"><i class="far fa-thumbs-up"></i> J'aime</button>
                                                <button class="btn btn-sm text-muted me-2"><i class="far fa-comment"></i> Commenter</button>
                                                <button class="btn btn-sm text-muted"><i class="fas fa-share"></i> Partager</button>
                                                <span class="ms-2 small text-muted">12 j'aime</span>
                                            </div>
                                            <div class="reply-section mt-2" style="display: none;">
                                                <div class="d-flex">
                                                    <img src="img/USERS.jpg" class="rounded-circle me-2" width="32" height="32" alt="User">
                                                    <div class="flex-grow-1">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Écrire un commentaire...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                    <!-- Commentaire 2 -->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="img/seb2.jpg" class="rounded-circle me-3" width="40" height="40" alt="User">
                                        <div>
                                            <h6 class="mb-1">Mr Sebene</h6>
                                            <p class="small text-muted">Il y a 5 heures</p>
                                            <p>Blague a part ! ata blague ezala toutjours a part !! c'était trop sebene ! merci isip'a komoriko dans le sebene ! 🤧</p>
                                            <div class="comment-actions">
                                                <button class="btn btn-sm text-muted me-2"><i class="far fa-thumbs-up"></i> J'aime</button>
                                                <button class="btn btn-sm text-muted me-2"><i class="far fa-comment"></i> Commenter</button>
                                                <button class="btn btn-sm text-muted"><i class="fas fa-share"></i> Partager</button>
                                                <span class="ms-2 small text-muted">12 j'aime</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
