<?php
    $title = 'services';
    $pack = (isset($_GET['pack']) && !empty($_GET['pack'])) ? $_GET['pack'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Viléatis | Assurance Santé</title>
    <!-- pageLinks -->
    <?php include_once '../../includes/links.php'; ?>
</head>
<body>
<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- phStickyWrap -->
    <div class="phStickyWrap">
        <!-- pageHeader -->
        <?php include_once '../../includes/header.php'; ?>
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
                                            <p>Assurance Santé</p>
                                        </div>
                                        <h1 class="text-white mb-4 wow fadeInDown text-uppercase"><?= $pack; ?></h1>
                                        <div class="d-flex flex-wrap ibBtnsWrap mx-n2 mx-md-n3 pt-3">
                                            <a href="#automobile" class="btn smooth mb-3 btnTheme position-relative border-0 p-0 mx-2 mx-md-3 wow bounceIn" data-wow-delay="1s" data-hover="Découvrir nos offres">
                                                <span class="d-block btnText">Découvrir nos offres</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="ibBgImage bgCover position-absolute" style="background-image: url(/images/sante.jpg);"></span>
                </article>
            </div>
        </div>

        <!-- Sante -->
        <div id="automobile" class="scrolltoblock">
            <section class="aboutUsBlock pt-10 pb-8 pt-lg-15 pb-lg-10 pt-xl-20 pb-xl-13">
                <div class="container">
                    <!-- headingHead -->
                    <header class="headingHead hhv2 text-center mb-7 mb-md-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>
                            <!-- headingTitle -->
                            <strong class="d-block headingTitle fontBase font-weight-normal">Assurance Santé</strong>
                            <span class="d-block text-uppercase"><?= $pack; ?></span>
                        </h2>
                    </header>

                    <?php if ($pack == 'jeunes'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/sport-1.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Pour les jeunes et les couples sans enfants,
                                            idéales pour les petits budgets avec peu de consommation médicale...
                                        </p>
                                        <h6>Prix à partir de 12 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/sport-2.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL II</h4>
                                        <p class="card-text">
                                            Pour les jeunes désirent une assurance simple et adapté à tous leurs besoins.
                                        </p>
                                        <h6>Prix à partir de 10 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($pack == 'adultes'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/sport-3.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Pour les personnes qui souhaitent souscrire à une assurance santé ou changer la précédente,
                                            cette gamme répond à vos besoins en offrant l'essentiel.
                                        </p>
                                        <h6>Prix à partir de 12 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($pack == 'seniors'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/sport-3.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Toutes les personnes, et notamment les personnes âgées ont besoin d'une assurance santé.
                                        </p>
                                        <h6>Prix à partir de 17 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </section>
        </div>
    </main>
    <!-- pageFooter -->
    <?php include_once '../../includes/footer.php'; ?>
</div>

<!-- pageScripts -->
<?php include_once '../../includes/script.php'; ?>

</body>
</html>