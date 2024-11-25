@extends('layout')

@section('title', 'Nous contactez')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/contact.jpg) center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="A-propos fin.html">A propos</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Contactez-nous</p>
            <h1 class="display-5 mb-5">Si vous avez des questions, veuillez nous contacter</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="mb-4">Besoin d'un formulaire de contact fonctionnel ?</h3>
                <p class="mb-4"></a>Vous avez des questions, des suggestions ou besoin d'aide ? N'hésitez pas à nous écrire via le formulaire, et nous vous répondrons dans les plus brefs délais. Nous sommes là pour vous aider ! 😊</p>
                <form class="wow fadeInUp" data-wow-delay="0.3s">
                    @csrf
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name"
                                style="transition: all 0.3s ease-in-out;"
                                onmouseover="this.style.transform='translateY(-2px)'"
                                onmouseout="this.style.transform='translateY(0)'">
                                <label for="name">Votre Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light" id="email" placeholder="Your Email"
                                style="transition: all 0.3s ease-in-out;"
                                onmouseover="this.style.transform='translateY(-2px)'"
                                onmouseout="this.style.transform='translateY(0)'">
                                <label for="email">Votre Mail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="Subject"
                                style="transition: all 0.3s ease-in-out;"
                                onmouseover="this.style.transform='translateY(-2px)'"
                                onmouseout="this.style.transform='translateY(0)'">
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message"
                                style="height: 200px; transition: all 0.3s ease-in-out;"
                                onmouseover="this.style.transform='translateY(-2px)'"
                                onmouseout="this.style.transform='translateY(0)'"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp"
                            style="transition: all 0.3s ease-in-out; background: linear-gradient(to right, #3C3882, #5046b9);"
                            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'"
                            type="submit">Envoi Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square rounded-circle" style="background: linear-gradient(to right, #3C3882, #5046b9);">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Notre bureau</h6>
                        <span>14, Croisement avenue OUA - KOMORIKO C/KITAMBO Réf : Stade vélodrome</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square rounded-circle" style="background: linear-gradient(to right, #3C3882, #5046b9);">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Appelez-nous</h6>
                        <span>+243-895-997-501</span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square rounded-circle" style="background: linear-gradient(to right, #3C3882, #5046b9);">
                        <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Envoyez-nous un mail</h6>
                        <span>isipakomoriko@gmail.com</span>
                    </div>
                </div>

                <iframe class="w-100 rounded"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.5576068221394!2d15.297943!3d-4.327397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33a392a0b0c9%3A0x2b8b2f9fa7c1be4a!2sAv.%20de%20l'OUA%2C%20Kinshasa!5e0!3m2!1sfr!2scd!4v1703159547736!5m2!1sfr!2scd"
                frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0" geolocation></iframe>                </div>            </div>
    </div>
</div>
<!-- Contact End -->

@endsection
