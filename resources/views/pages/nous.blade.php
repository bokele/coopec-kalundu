@extends('layouts.web')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>A Propos de Nous</h2>
            <ol>
                <li><a href="index.html">Accueil</a></li>
                <li>A propos de nous</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-12 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" id="mission">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">{{_('La mission')}}</a></h4>
                        <p class="description">{{ $nous->mission}}
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">{{_('La vision')}}</a></h4>
                        <p class="description">
                            {{ $nous->vision}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mp-5">
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch mp-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">{{_('Objectif')}}</a></h4>
                        <p class="description">
                            {{ $nous->objectif}}
                        </p>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="historique" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Nous</h2>
                <h3>Savoir plus A Propos <span>De Nous</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                    atque
                    vitae autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Bref Historique de la COOPEC - Kalundu</h3>
                    <p class="font-italic">
                        La Coopérative d'Epargne et de Crédit de Kalundu fut créée le 12 février 1988 par les pauvres
                        paysans de Kalundu qui
                        n'avaient pas accès aux services financiers des banques classiques afin de financer leurs
                        activités génératrices de
                        revenus et de consommations (scolaires, santé,...).

                        Celle - ci est agréée par le gouverneur de la Banque Centrale du Congo en date du 26 avril 2008,
                        sous Réf :
                        Gouv./D1143/n°0005640, avec le statut d'une Coopérative d'Epargne et de Crédit.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>La COOPEC -
                                    Kalundu compte 5 guichets :</h5>
                                <p>
                                    Au siège à Songo, à Mulongwe, à Kalundu, à Kavimvira au rond point et à Luvungi.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>LES ORGANES DE GESTION</h5>
                                <p>

                                    1. Assemblée Générale ( A.G)<br />
                                    2. Conseil d’administration ( C.A.)<br />
                                    3. La Commission de Crédit (C.C)<br />
                                    4. Le Conseil de Surveillance ( C.S)<br />
                                    5. La Direction Générale<br />
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

</section>

@endsection
