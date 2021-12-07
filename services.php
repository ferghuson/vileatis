<?php $title = 'services'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Viléatis | Nos Services</title>
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
                                        <div class="wow fadeInDown" data-wow-delay="0.5s">
                                            <p>VILEATIS</p>
                                        </div>
                                        <h1 class="text-white mb-4 wow fadeInDown text-uppercase">NOS SERVICES</h1>
                                        <div class="d-flex flex-wrap ibBtnsWrap mx-n2 mx-md-n3 pt-3">
                                            <a href="#serviceBlock" class="btn smooth mb-3 btnTheme position-relative border-0 p-0 mx-2 mx-md-3 wow bounceIn" data-wow-delay="1s" data-hover="Découvrir nos offres">
                                                <span class="d-block btnText">Découvrir nos offres</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="ibBgImage bgCover position-absolute" style="background-image: url(/images/services.jpg);"></span>
                </article>
            </div>
        </div>

        <!-- servicesBlock -->
        <section class="servicesBlock bg-light pt-6 pb-5 pt-md-8 pb-md-9 pt-lg-10 pb-lg-12 pt-xl-14 pb-xl-17 text-center" id="serviceBlock">
            <div class="container">
                <!-- headingHead -->
                <header class="headingHead hhv2 text-center mb-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2>
                        <!-- headingTitle -->
                        <strong class="d-block headingTitle fontBase font-weight-normal">VILEATIS</strong>
                        <span class="d-block">Nos Services</span>
                    </h2>
                </header>
                <div class="row justify-content-center wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/impot.jpg" class="img-fluid w-100" alt="Vileatis Automobile">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-euro-sign"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php#automobile">DEFISCALISATION - REDUCTION D'IMPÔTS</a>
                            </h3>
                            <p>
                            <ul class="text-left">
                                <li><a href="">LMNP</a></li>
                                <li><a href="">LOI PINEL</a></li>
                                <li><a href="">GIRARDIN</a></li>
                            </ul>
                            </p>
                            <a href="services.php#automobile" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/epargne.jpg" class="img-fluid w-100" alt="image description">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-coins"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php#sante">ÉPARGNE - RETRAITE - ASSURANCE VIE</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Frater et T. Quis non odit sordidos, vanos, leves, futtiles?
                                Duo Reges: constructio interrete. Ita enim vivunt quidam, ut eorum vita refellatur oratio.
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
											<i class="fa fa-hand-holding-usd"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php#voyage">ASSURANCE EMPRUNTEUR</a>
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
                <div class="row justify-content-center wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/location.jpg" class="img-fluid w-100" alt="Vileatis Automobile">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-home"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php#automobile">ASSURANCE LOCATION</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Frater et T. Quis non odit sordidos, vanos, leves, futtiles?
                                Duo Reges: constructio interrete. Ita enim vivunt quidam, ut eorum vita refellatur oratio.
                            </p>
                            <a href="services.php#automobile" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                        </article>
                    </div>
                    <div id="sante" class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/sante.jpg" class="img-fluid w-100" alt="image description">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-heartbeat"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php">ASSURANCE SANTE</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Frater et T. Quis non odit sordidos, vanos, leves, futtiles?
                                Duo Reges: constructio interrete. Ita enim vivunt quidam, ut eorum vita refellatur oratio.
                            </p>
                            <a href="services.php" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                        </article>
                    </div>
                    <div id="voyage" class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/voyage.jpg" class="img-fluid w-100" alt="image description">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-plane"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php#voyage">ASSURANCE VOYAGE</a>
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Frater et T. Quis non odit sordidos, vanos, leves, futtiles?
                                Duo Reges: constructio interrete. Ita enim vivunt quidam, ut eorum vita refellatur oratio.
                            </p>
                            <a href="services.php#voyage" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                        </article>
                    </div>
                </div>
                <div class="row justify-content-center wow flipInX" data-wow-duration="1s" data-wow-delay="1s">
                    <div id="automobile" class="col-12 col-md-6 col-lg-4">
                        <!-- serviceColumn -->
                        <article class="serviceColumn rounded bg-white shadow overflow-hidden text-center mb-6 px-3 px-xl-5 py-5 py-xl-8 mx-auto mx-md-0">
                            <div class="imgHolder position-relative mb-16 mx-n3 mt-n5 mx-xl-n5 mt-xl-n8">
                                <img src="images/automobile.jpg" class="img-fluid w-100" alt="Vileatis Automobile">
                                <span class="icnWrap d-flex align-items-center justify-content-center text-white rounded-circle position-absolute">
											<i class="fa fa-tools"><span class="sr-only">icon</span></i>
										</span>
                            </div>
                            <h3 class="mb-4">
                                <a href="services.php">ASSURANCE AUTOMOBILE</a>
                            </h3>
                            <p>
                            <ul class="text-left">
                                <li><a href="">Voiture Électrique</a></li>
                                <li><a href="">Adultes</a></li>
                                <li><a href="">Séniors</a></li>
                                <li><a href="">Malussés</a></li>
                            </ul>
                            </p>
                            <a href="services.php#automobile" class="btnMore fontAlter fwMedium d-inline-block align-top position-relative mt-1">En savoir plus</a>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- pageFooter -->
    <?php include_once 'includes/footer.php'; ?>
</div>

<!-- pageScripts -->
<?php include_once 'includes/script.php'; ?>

</body>
</html>
