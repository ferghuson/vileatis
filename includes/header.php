<header id="pageHeader" class="headerFixer">
    <!-- hdTopBar -->
    <div class="hdTopBar bg-dark position-relative">
        <div class="container">
            <div class="row">
                <div class="col-9 d-none d-md-flex align-items-center">
                    <!-- hdScheduleList -->
                    <ul class="list-unstyled d-flex mb-0 hdScheduleList fwMedium fontAlter mb-0">
                        <li>
                            <span class="icnWrap rounded d-flex align-items-center justify-content-center text-white flex-shrink-0 mr-1 mr-lg-3">
                                <i class="bx bx-support"><span class="sr-only">icon</span></i>
                            </span>
                            <div class="descrWrap">
                                <strong class="title d-block fwMedium text-white">Appellez-nous (n° indigo):</strong>
                                <p><a href="tel:+330820821565">0820 821 565</a></p>
                            </div>
                        </li>
                        <li>
                            <span class="icnWrap rounded d-flex align-items-center justify-content-center text-white flex-shrink-0 mr-1 mr-lg-3">
                                <i class="bx bx-at"><span class="sr-only">icon</span></i>
                            </span>
                            <div class="descrWrap">
                                <strong class="title d-block fwMedium text-white">Écrivez-nous:</strong>
                                <p><a href="mailto:info@vileatis.com">info@vileatis.com</a></p>
                            </div>
                        </li>
                        <li>
                            <span class="icnWrap rounded d-flex align-items-center justify-content-center text-white flex-shrink-0 mr-1 mr-lg-3">
                                <i class="bx bxs-map"><span class="sr-only">icon</span></i>
                            </span>
                            <div class="descrWrap">
                                <strong class="title d-block fwMedium text-white">Visitez-nous:</strong>
                                <p>Paris, France</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 d-md-flex justify-content-md-end position-static">
                    <!-- hdBtn -->
                    <a href="/services/credit" class="hdBtn d-flex align-items-center justify-content-center fwMedium fontAlter"><b>Vileatis Crédit</b><i class="bx bx-right-arrow-alt icn ml-1"><span class="sr-only">icon</span></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- hdHolder -->
    <div class="hdHolder clearfix pt-2 pb-2 pt-lg-5 pb-lg-5 position-relative">
        <div class="container">
            <!-- logo -->
            <div class="logo">
                <a href="/index.php">
                    <img src="/images/logo.png" class="img-fluid" alt="Vileatis Logo">
                </a>
            </div>
            <!-- pageNav -->
            <nav id="pageNav" class="navbar navbar-expand-md navbar-light justify-content-end position-static">
                <!-- pageMainNavCollapse -->
                <div class="collapse navbar-collapse pageMainNavCollapse justify-content-end" id="pageMainNavCollapse">
                    <!-- mainNavigation -->
                    <ul class="navbar-nav mainNavigation fwSemi fontAlter">
                        <li class="nav-item <?php if($title == 'home'): ?>active<?php endif; ?>">
                            <a class="nav-link" href="/index.php">Accueil</a>
                        </li>
                        <li class="nav-item <?php if($title == 'about'): ?>active<?php endif; ?>">
                            <a class="nav-link" href="/a-propos.php">A Propos</a>
                        </li>
                        <li class="nav-item <?php if($title == 'services'): ?>active<?php endif; ?>">
                            <!-- <a class="nav-link" href="/services.php">Nos Services</a> -->
                            <div class="dropdown show">
                                <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nos Services
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Défiscalisation - Réducution d'impôt</a>
                                    <a class="dropdown-item" href="#">Épargne - Retraite - Assurance vie</a>
                                    <a class="dropdown-item" href="#">Assurance Emprunteur</a>
                                    <a class="dropdown-item" href="#">Assurance Santé</a>
                                    <a class="dropdown-item" href="#">Assurance Voyage</a>
                                    <a class="dropdown-item" href="#">Assurance Automobile</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item <?php if($title == 'contact'): ?>active<?php endif; ?>">
                            <a class="nav-link" href="/contact.php">Contactez-nous</a>
                        </li>
                        <li class="nav-item <?php if($title == 'france'): ?>active<?php endif; ?>">
                            <a class="nav-link" href="/france.php">France</a>
                        </li>
                    </ul>
                </div>
                <!-- pageNavOpener -->
                <button class="navbar-toggler pageNavOpener position-relative" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><span class="sr-only">menu</span></span>
                </button>
            </nav>
        </div>
    </div>
</header>