<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Acceuil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Gestion des catégorie</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="afficherCategorie.php">Liste des catégories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="ajoutCategory.php">Ajouter une catégorie</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Gestion des produits</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="afficherProduit.php">Liste des produits</a></li>
                    <li class="nav-item"> <a class="nav-link" href="ajoutProduit.php">Ajouter un produit</a></li>
                </ul>
            </div>
        </li>



    </ul>
</nav>