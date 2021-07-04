<nav class="navbar navbar-expand-lg <?= $active_menu == 'home' ? 'navbar-light' : 'navbar-dark' ?> navbar-floating">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/img/logo-bulat.png" alt="" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
                <li class="nav-item <?= $active_menu == 'home' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item <?= $active_menu == 'map' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('home/map') ?>">Map</a>
                </li>
            </ul>
        </div>
    </div>
</nav>