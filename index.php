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
                <img src="assets/images/voiture3.jpg" class="d-block w-100" alt="Voiture 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Location économique</h5>
                    <p>Des voitures adaptées à tous les budgets.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/voiture2.jpg" class="d-block w-100" alt="Voiture 3">
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
            <div class="col-md-4">
                <img src="assets/images/voiture6.PNG" class="img-fluid mb-3 uniform-img" alt="Service rapide">
                <h4>Service rapide</h4>
                <p>Réservez votre voiture en quelques clics grâce à notre plateforme rapide et intuitive.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/voiture5.jpg" class="img-fluid mb-3 uniform-img" alt="Meilleures offres">
                <h4>Meilleures offres</h4>
                <p>Profitez des prix les plus compétitifs et des promotions exclusives sur nos véhicules.</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/voiture4.webp" class="img-fluid mb-3 uniform-img" alt="Large choix">
                <h4>Large choix</h4>
                <p>Explorez notre large gamme de voitures, des modèles économiques aux voitures de luxe.</p>
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
                        <h5 class="card-title">- Jean Dupont</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Un processus de réservation simple et rapide. Très satisfait."</p>
                        <h5 class="card-title">- Marie Curie</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Un large choix de véhicules pour tous les budgets."</p>
                        <h5 class="card-title">- Alain Bernard</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

   

<?php
include 'includes/footer.php';
?>
