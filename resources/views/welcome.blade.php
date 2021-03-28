<x-web-layout>

    @include('layouts.hero')
    @section('content')
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Le crédit individuel</a></h4>
                        <p class="description">


                            Ce type de crédit est octroyé aux membres de bonne moralité dans leur milieu résidentiel et
                            professionnel disposant
                            d'une garantie et d'une épargne garantie de 10% du montant accordé.

                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Le crédit des groupes</a></h4>
                        <p class="description">
                            Il est accordé aux personnes membres d'un groupe solidaire de prêt, de bonne moralité dans
                            leur milieu résidentiel et
                            professionnel disposant d'une garantie d'épargne de 10% du montant.<br />
                            Ce crédit est couvert essentiellement par la caution solidaire, c'est - à - dire, tous les
                            membres sont solidairement
                            liés dans les pertes subies et dans le gain reçu.<br />

                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Le crédit express</a></h4>
                        <p class="description">
                            Pour ce cas, il est octroyé aux membres de la Coopérative d'épargne et de crédit de Kalundu
                            ayant un caractère express
                            (soit pour de dédouanement des marchandises) à un taux de 4% et son échéance est de 2 mois
                            négociable selon la nature à
                            entreprendre.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->


    <!-- ======= Member Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Membre</h2>
                <h3>Niveau <span>international</span></h3>
                <p>La Coopec est membre des réseaux internationaux de microfinance ci-dessous</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/reseaux-international/INAFI.png')}}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info text-center">
                            <h4>INAISE </h4>
                            <span>Basé à Bruxelles</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/reseaux-international/INAFI.png')}}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info text-center">
                            <h4>INAISE </h4>
                            <span>Basé à Nairobi-Kenya</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/reseaux-international/sommet.png')}}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info text-center">
                            <h4>Sommet de microcredit </h4>
                            <span>Basé à Washington-USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('images/reseaux-international/cgap.jpg')}}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info text-center">
                            <h4>CGAP </h4>
                            <span>Basé à Washington-USA</span>
                        </div>
                    </div>
                </div>







            </div>

        </div>
    </section><!-- End Member Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Les activités</h2>
                <h3> Les principales <span> activités</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Intermédiation financière</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Mobilisation de l'épargne en dollars et en franc congolais</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Octroi des crédits</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">L'éducation en gestion de crédit, santé, nutrition et planification familiale</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Les transferts de fonds</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Activités non financières</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
    @endsection
</x-web-layout>
