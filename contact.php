<?php $title = 'contact'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Viléatis | Contact</title>
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
        <!-- scrollto5 -->
        <div class="scrolltoblock">
            <!-- contactBlock -->
            <aside class="contactBlock pt-7 pb-6 pt-md-10 pb-md-10 pt-md-10 pb-lg-14 pt-xl-14 pb-xl-20 position-relative">
                <div class="container">
                    <!-- headingHead -->
                    <header class="headingHead hhv2 text-center mb-7 mb-md-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>
                            <!-- headingTitle -->
                            <strong class="d-block headingTitle fontBase font-weight-normal">Contactez-nous</strong>
                            <span class="d-block">Entrons en contact</span>
                        </h2>
                    </header>
                    <div class="row wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="col-12 col-md-10 offset-md-1">
                            <!-- ctForm -->
                            <form id="contactForm" class="ctForm" data-toggle="validator">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control w-100 d-block" placeholder="Votre Nom *" required data-error="NEW ERROR MESSAGE" id="name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control w-100 d-block" placeholder="Votre Email *" required data-error="NEW ERROR MESSAGE" id="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control w-100 d-block" placeholder="Votre Numéro *" required data-error="NEW ERROR MESSAGE" id="tel">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <select class="custom-select w-100 d-block" required data-error="NEW ERROR MESSAGE" id="sub">
                                                <option value="1">I Would Like to Discuss</option>
                                                <option value="2">I Would Like to Discuss2</option>
                                                <option value="3">I Would Like to Discuss3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 d-block" placeholder="Votre Message *" required data-error="NEW ERROR MESSAGE" id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="msgSubmit" class="form-message hidden"></div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button id="form-submit" class="btn btnTheme btnNoOver">Envoyer <i class="bx bx-right-arrow-alt icn ml-1"><span class="sr-only">icon</span></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- pageFooter -->
    <?php include_once 'includes/footer.php'; ?>
</div>

<!-- pageScripts -->
<?php include_once 'includes/script.php'; ?>

</body>
</html>
