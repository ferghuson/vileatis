<?php
$title = 'services';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Viléatis | Assurance Voyage</title>
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
                                            <p>Assurance Voyage</p>
                                        </div>
                                        <h1 class="text-white mb-4 wow fadeInDown text-uppercase">Solution Intégrale</h1>
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
                    <span class="ibBgImage bgCover position-absolute" style="background-image: url(/images/voyage.jpg);"></span>
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
                            <strong class="d-block headingTitle fontBase font-weight-normal">Assurance Voyage</strong>
                            <span class="d-block text-uppercase">Solution Intégrale</span>
                        </h2>
                    </header>

                    <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/voyage-1.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">Solution Schengen</h4>
                                        <p class="card-text">
                                            Vous souhaitez visiter un pays de l’Espace Schengen ?
                                            <br>
                                            Il est important que vous ayez une protection en cas d’aléas pouvant intervenir.
                                        </p>
                                        <h6>Prix à partir de 6 € / souscripteur</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-5">
                                <div class="card shadow-sm">
                                    <img class="card-img-top" src="/images/voyage-2.jpg" alt="Assurance Automobile">
                                    <div class="card-body">
                                        <h4 class="card-title">Residencia</h4>
                                        <p class="card-text">
                                            Vous avez réservé une location espagne en bord de mer ?
                                        </p>
                                        <h6>Prix à partir de 10 € / voyage</h6>
                                        <a href="" class="btn btn-primary">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

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