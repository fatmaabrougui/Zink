
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Reservation <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.php">Liste des tables</a></li>
                                                <li><a href="tabreservee.php">Reservation</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li><a href="#">menu</a></li>
                                        <li><a href="#">gallery</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="index.php">


                                                	<!-- LOGO IMAGE -->

                                                    <img src="../../assets/client/img/logo.png" alt="">
                                                </a>
                                            </div>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">blog</a></li>
                                                <li><a href="#">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Compte (<?php echo $_SESSION['username']; ?> ) <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="../deconnexion.php">Deconnexion</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="index.html">
                                    <img src="../../assets/client/img/logo.png" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->