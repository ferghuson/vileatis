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
    <title>Viléatis | Assurance Automobile</title>
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
                                            <p>Assurance Automobile</p>
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
                    <span class="ibBgImage bgCover position-absolute" style="background-image: url(/images/automobile.jpg);"></span>
                </article>
            </div>
        </div>

        <!-- Automobile -->
        <div id="automobile" class="scrolltoblock">
            <section class="aboutUsBlock pt-10 pb-8 pt-lg-15 pb-lg-10 pt-xl-20 pb-xl-13">
                <div class="container">
                    <!-- headingHead -->
                    <header class="headingHead hhv2 text-center mb-7 mb-md-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>
                            <!-- headingTitle -->
                            <strong class="d-block headingTitle fontBase font-weight-normal">Assurance Automobile</strong>
                            <span class="d-block text-uppercase"><?= $pack; ?></span>
                        </h2>
                    </header>

                    <?php if ($pack == 'adultes'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Parce qu'avons pas tous les mêmes besoins en assurance,
                                            cette formule convient aux personnes qui désirent l'essentiel à un prix convenable.
                                        </p>
                                        <h6>Prix à partir de 28 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL PLUS I</h4>
                                        <p class="card-text">
                                            Vous voulez être couvert quoi qu’il arrive ? VILEATIS vous propose une assurance
                                            répondant à vos besoins au meilleur prix.
                                        </p>
                                        <h6>Prix à partir de 39 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL PLUS II</h4>
                                        <p class="card-text">
                                            Vous voulez être couvert quoi qu’il arrive ? VILEATIS vous propose une assurance
                                            répondant à vos besoins au meilleur prix.
                                        </p>
                                        <h6>Prix à partir de 17 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">PRESTIGE I</h4>
                                        <p class="card-text">
                                            Vous êtes propriétaire d'un véhicule haut de gamme.
                                            La formule prestige vous propose le meilleur à prix attractif.
                                        </p>
                                        <h6>Prix à partir de 49 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">PRESTIGE II</h4>
                                        <p class="card-text">
                                            Le luxe est pour Vous un art de vivre, Vous êtes habitués à l'excellence!
                                            Optez pour notre formule Prestige !
                                        </p>
                                        <h6>Prix à partir de 25 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($pack == 'seniors'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Parce qu’on a pas tous besoin de la même assurance,
                                            VILEATIS a revu ses contrats pour être plus proche de vos préoccupations.
                                        </p>
                                        <h6>Prix à partir de 13 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/moto.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL II</h4>
                                        <p class="card-text">
                                            Parce que nous n'avons pas tous les mêmes besoins en assurance et
                                            que vous désirez l'essentiel à un prix convenable.
                                        </p>
                                        <h6>Prix à partir de 19 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL PLUS I</h4>
                                        <p class="card-text">
                                            Vous voulez être couvert quoi qu’il arrive ?
                                            <br>
                                            VILEATIS vous propose une assurance répondant à vos besoins au meilleur prix.
                                        </p>
                                        <h6>Prix à partir de 17 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">PRESTIGE I</h4>
                                        <p class="card-text">
                                            Le luxe est pour vous un art de vivre, vous êtes habitués à l'excellence !
                                            <br>
                                            Optez pour notre formule Prestige !
                                        </p>
                                        <h6>Prix à partir de 25 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($pack == 'malusses'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/automobile.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I</h4>
                                        <p class="card-text">
                                            Vous en avez assez de ne pas trouver la formule qui vous correspond ?
                                            <br>
                                            Choisissez VILEATIS !
                                            <br>
                                            Nos packs sont fait pour vous.
                                        </p>
                                        <h6>Prix à partir de 29 € / mois</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php elseif ($pack == 'moto'): ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/moto.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">ESSENTIEL I (JEUNES & ADULTES)</h4>
                                        <p class="card-text">
                                            Quelle que soit la catégorie de votre moto et sa cylindrée, vous trouverez chez VILEATIS,
                                            la solution adaptée à vos besoins!!!
                                        </p>
                                        <h6>Prix à partir de 12 € / mois</h6>
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