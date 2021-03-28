@extends('layouts.web')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Nous contacter</h2>
            <ol>
                <li><a href="{{url('/')}}">Accueil</a></li>
                <li>Nous contacter</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Nous contacter</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Notre Address</h3>
                    <p>Siège social : Quartier de Kalundu /Uvira

                        Avenue commerciale no 58

                        Territoire d’Uvira

                        Province du Sud-Kivu

                        Rép. Dém.du Congo<br />

                        B.P. 969 Bujumbura/Burundi<br />

                        P.O.BOX 681 KIGOMA/Tanzania<br />

                        Tel : + 257 93 35 42<br />

                        Fax : + 255 28 280 3837</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Nous</h3>
                    <p>contact@example.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Applez Nous</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.3004791453997!2d29.137127129152866!3d-3.4016070611030336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c18dab695a47e3%3A0xeb7e3bc9fe3d50f3!2sCoopec%20kalundu!5e1!3m2!1sen!2szm!4v1615988273442!5m2!1sen!2szm"
                    frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection
