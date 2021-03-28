<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">{{ config('app.name', 'Laravel') }}<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ (request()->is('/')) ? 'active' : '' }} "
                        href="/">{{_('ACCUEIL')}}</a></li>

                <li class="dropdown"><a class=" {{ (request()->is('a-propos*')) ? 'active' : '' }}"
                        href="{{route('website.nous')}}"><span>{{_('A PROPOS DE NOUS')}}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('website.nous')}}#historique">{{_('Historique')}}</a></li>

                        <li><a href="{{route('website.nous')}}#mission">{{_('Mission')}}</a></li>
                        <li><a href="{{route('website.nous')}}#vision">{{_('Vision')}}</a></li>
                        <li><a href="{{route('website.nous')}}#object">{{_('Objectif')}}</a></li>
                        <li><a href="{{route('website.nous')}}#mission">{{_('Equipe')}}</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#services">{{_("ACTIVITE")}}</a></li>

                <li class="dropdown"><a href="#"><span>{{_('AFFAIRES')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>{{_('Epargne')}}</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">{{_('Epargne à la carte')}}</a></li>
                                <li><a href="#">{{_("Compte d'epargner")}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>{{_('Financement')}}</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">{{_('Crédit individuel')}}</a></li>
                                <li><a href="#">{{_('Crédit des groupes')}}</a></li>
                                <li><a href="#">{{_("Crédit express")}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>{{_('Comptes')}}</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">{{_('Compte Entrepreneur')}}</a></li>
                                <li><a href="#">{{_('Compte courant d’affaires')}}</a></li>
                                <li><a href="#">{{_("Compte d'epargner")}}</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ (request()->is('contact-nous')) ? 'active' : '' }}"
                        href="{{ url('contact-nous')}}">{{_("NOUS CONTACTER")}}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
