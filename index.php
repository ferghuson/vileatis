<?php $title = 'home'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Viléatis | Accueil</title>
    <!-- pageLinks -->
    <?php include_once 'includes/links.php'; ?>
</head>
<body>
<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- phStickyWrap -->
    <div class="phStickyWrap">
        <!-- pageHeader -->
        <?php include_once 'includes/header.php'; ?>
    </div>
    <main>
        <!-- Intro -->
        <div class="introBlock ibsSlider">
            <div>
                <!-- ibSlideColumn -->
                <article class="ibSlideColumn d-flex w-100 position-relative">
                    <div class="alignHolder d-flex align-items-center w-100">
                        <div class="align w-100 py-7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-8 col-xl-6">
                                        <h1 class="text-white mb-4 wow fadeInDown">L'assurance pour tous au meilleur prix</h1>
                                        <div class="wow fadeInDown" data-wow-delay="0.5s">
                                            <p>Nous vous offrons le meilleur service d'assurance à un très bon prix.</p>
                                        </div>
                                        <div class="d-flex flex-wrap ibBtnsWrap mx-n2 mx-md-n3 pt-3">
                                            <a href="services.php" class="btn mb-3 btnTheme position-relative border-0 p-0 mx-2 mx-md-3 wow bounceIn" data-wow-delay="1s" data-hover="Nos Services">
                                                <span class="d-block btnText">Nos Services</span>
                                            </a>
                                            <a href="a-propos.php" class="btn mb-3 btnThemeWhite position-relative border-0 p-0 mx-2 mx-md-3 wow bounceIn" data-wow-delay="1.5s" data-hover="Qui sommes-nous ?">
                                                <span class="d-block btnText">Qui sommes-nous ?</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="ibBgImage bgCover position-absolute" style="background-image: url(images/intro-cover.jpg);"></span>
                </article>
            </div>
        </div>

        <!-- About Us -->
        <div id="scrollto2" class="scrolltoblock">
            <!-- aboutUsBlock -->
            <section class="aboutUsBlock pt-10 pb-8 pt-lg-15 pb-lg-10 pt-xl-20 pb-xl-13">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <!-- videoWrap -->
                            <div class="videoWrap position-relative shadow rounded mx-auto mx-lg-0 mb-4 mb-lg-0">
                                <img src="images/about-intro.jpg" class="img-fluid rounded w-100" alt="Vileatis Presentation">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 wow slideInRight" data-wow-delay="0.35s">
                            <div class="descrWrap pt-4">
                                <!-- headingHead -->
                                <header class="headingHead mb-6">
                                    <h2>
                                        <strong class="d-block headingTitle fontBase font-weight-normal">Qui sommes-nous ?</strong>
                                        <span class="d-block">Votre cabinet de courtage en assurance par excellence</span>
                                    </h2>
                                </header>
                                <p>
                                    Vileatis est un cabinet de courtage en assurance régie par le code du commerce et le code des assurances. Notre équipe spécialisée dans la conception des produits d'assurances et des produits de finances sélectionne les meilleurs produits correspondant à votre besoin spécifique.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Services -->
        <div id="scrollto3" class="scrolltoblock">
            <!-- servicesBlock -->
            <section class="servicesBlock bg-light pt-6 pb-5 pt-md-8 pb-md-9 pt-lg-10 pb-lg-12 pt-xl-14 pb-xl-17 text-center">
                <div class="container">
                    <!-- headingHead -->
                    <header class="headingHead hhv2 text-center mb-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>
                            <!-- headingTitle -->
                            <strong class="d-block headingTitle fontBase font-weight-normal">Nos Services</strong>
                            <span class="d-block">Nos Offres</span>
                        </h2>
                    </header>
                    <div class="row justify-content-center wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- serviceColumn -->
                            <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                                <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                    <img src="images/automobile.jpg" class="img-fluid w-100" alt="Vileatis Automobile">
                                    <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-car-side"><span class="sr-only">icon</span></i>
										</span>
                                </div>
                                <h3 class="mb-4">
                                    <a href="services.php#automobile">Assurance Automobile</a>
                                </h3>
                                <p>
                                    Parce qu'on a pas tous besoin de la même assurance,
                                    <br>
                                    VILEATIS a revu ses contrats d'assurance de véhicules pour être plus proches de vos préoccupations.
                                </p>
                                <a href="services.php#automobile" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- serviceColumn -->
                            <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                                <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                    <img src="images/sante.jpg" class="img-fluid w-100" alt="image description">
                                    <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-heartbeat"><span class="sr-only">icon</span></i>
										</span>
                                </div>
                                <h3 class="mb-4">
                                    <a href="services.php#sante">Assurance Santé</a>
                                </h3>
                                <p>
                                    Toute personne (jeune ou adulte) a besoin d'une assurance santé...
                                    <br>
                                    VILEATIS vous propose des gammes qui répondrons à tous vos besoins à des prix préférenciels.
                                </p>
                                <a href="services.php#sante" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- serviceColumn -->
                            <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                                <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                    <img src="images/voyage.jpg" class="img-fluid w-100" alt="image description">
                                    <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-plane"><span class="sr-only">icon</span></i>
										</span>
                                </div>
                                <h3 class="mb-4">
                                    <a href="services.php#voyage">Assurance Voyage</a>
                                </h3>
                                <p>
                                    Vous voulez faire le tour du monde, vous avez une mission professionnelle, ou bien vous voulez faire vos études à l’étranger ?
                                    <br>
                                    VILEATIS vous offre l’opportunité de voyager dans le monde en toute sérénité.
                                </p>
                                <a href="services.php#voyage" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                            </article>
                        </div>
                    </div>

                    <footer class="text-center wow fadeInDown" data-wow-delay="1s">
                        <!-- btnMore -->
                        <p>Voir tous nos services <a href="services.php" class="btnMore fontAlter fwMedium d-inline-block position-relative mt-1 hasArrow">ici <i class="bx bx-right-arrow-alt icn"><span class="sr-only">icon</span></i></a></p>
                    </footer>
                </div>
            </section>
        </div>
    </main>

    <!-- pageFooter -->
    <?php include_once 'includes/footer.php'; ?>
</div>

<!-- pageScripts -->
<?php include_once 'includes/script.php'; ?>

</body>
</html>
