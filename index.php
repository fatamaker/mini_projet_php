<?php
include 'includes/header.php';
?>

<div class="container mt-5">
    <h1 class="text-center">Bienvenue sur notre système de location de voitures</h1>
    <p class="text-center">
        Louez une voiture facilement et rapidement grâce à notre plateforme intuitive.
    </p>

    <!-- Carousel -->
    <div id="carCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/voiture111.jpg" class="d-block w-100" alt="Voiture 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Location de voitures de luxe</h5>
                    <p>Roulez avec style et confort pour vos occasions spéciales.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/jeep-avenger-2022-jaune-avd-mk.webp" class="d-block w-100" alt="Voiture 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Location économique</h5>
                    <p>Des voitures adaptées à tous les budgets.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/vvv.jpg" class="d-block w-100" alt="Voiture 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Services personnalisés</h5>
                    <p>Choisissez le véhicule parfait pour vos besoins.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Informations -->
    <div class="mt-5">
        <h2 class="text-center">Pourquoi nous choisir ?</h2>
        <div class="row mt-4">
            <div class="col-md-4 info-item">
                <img src="assets/images/voiture6.PNG" class="img-fluid mb-3 uniform-img" alt="Service rapide">
                <h4>Service rapide</h4>
                <p>Réservez votre voiture en quelques clics grâce à notre plateforme rapide et intuitive.</p>
                <div class="popup-text">Réservez en quelques minutes, sans tracas.</div>
            </div>
            <div class="col-md-4 info-item">
                <img src="assets/images/voiture5.jpg" class="img-fluid mb-3 uniform-img" alt="Meilleures offres">
                <h4>Meilleures offres</h4>
                <p>Profitez des prix les plus compétitifs et des promotions exclusives sur nos véhicules.</p>
                <div class="popup-text">Offres exceptionnelles tout au long de l'année.</div>
            </div>
            <div class="col-md-4 info-item">
                <img src="assets/images/voiture4.webp" class="img-fluid mb-3 uniform-img" alt="Large choix">
                <h4>Large choix</h4>
                <p>Explorez notre large gamme de voitures, des modèles économiques aux voitures de luxe.</p>
                <div class="popup-text">Des véhicules pour tous les goûts et besoins.</div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="about-us mt-5" id="about">
        <h2 class="text-center">À propos de nous</h2>
        <div class="row mt-4">
            
            <div class="col-md-6">
                <h4>Notre mission</h4>
                <p>Nous sommes une équipe passionnée par les voitures et dédiée à fournir une expérience de location de véhicules de qualité exceptionnelle. Notre objectif est d'offrir un service rapide, abordable et accessible à tous, avec des voitures adaptées à tous les besoins et à tous les budgets.</p>
                <button class="btn btn-dark" id="toggleDetailsBtn">En savoir plus</button>
                <div id="extraDetails" class="mt-3" style="display: none;">
                    <h5>Notre vision</h5>
                    <p>Nous voulons devenir le leader de la location de voitures en ligne, en offrant des solutions innovantes et adaptées aux besoins de nos clients, tout en garantissant un service client irréprochable et une grande diversité de véhicules.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section mt-5" id="faq">
        <h2 class="text-center">Foire Aux Questions</h2>
        <div class="accordion mt-4" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Comment réserver une voiture ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez réserver une voiture en quelques clics en vous inscrivant sur notre plateforme et en choisissant votre modèle préféré.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Quels types de véhicules proposez-vous ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nous proposons une large gamme de véhicules, allant des voitures économiques aux voitures de luxe, adaptées à vos besoins et à votre budget.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Comment puis-je annuler ma réservation ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vous pouvez annuler votre réservation en ligne via votre compte utilisateur avant 24 heures de la date prévue de location.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Témoignages -->
    <div class="mt-5">
        <h2 class="text-center">Ce que disent nos clients</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Excellent service et voitures impeccables. Je recommande à 100 % !"</p>
                        <h5 class="card-title">- Ahmed nwira</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Un processus de réservation simple et rapide. Très satisfait."</p>
                        <h5 class="card-title">- Ali hamami</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Un large choix de véhicules pour tous les budgets."</p>
                        <h5 class="card-title">- Yesmine lengliz</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'includes/footer.php';
?>

<!-- Add JavaScript for smooth scroll and reveal on scroll -->
<script>
    // Smooth scroll behavior for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Function to reveal elements on scroll
    function revealOnScroll() {
        const elements = document.querySelectorAll('.reveal');
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top <= window.innerHeight) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);

    // Toggle extra details visibility
    document.getElementById('toggleDetailsBtn').addEventListener('click', function () {
        const details = document.getElementById('extraDetails');
        details.style.display = details.style.display === 'none' ? 'block' : 'none';
    });

    // Initial call to reveal elements on page load
    revealOnScroll();
</script>

<!-- Add custom CSS for smooth animations -->
<style>
    .uniform-img {
        height: 250px;
        object-fit: cover;
    }

    .info-item {
        position: relative;
        overflow: hidden;
    }

    .popup-text {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px;
        border-radius: 5px;
    }

    .info-item:hover .popup-text {
        display: block;
    }

    .about-us {
        background-color: rgb(0 0 0 / 6%);
        padding: 30px;
        border-radius: 10px;
    }

    /* Scroll-to-reveal effect */
    .reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



