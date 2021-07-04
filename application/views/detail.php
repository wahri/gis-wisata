<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view('template/header')
    ?>
    <style>
        #mapid {
            height: 500px;
            border-radius: 5%;
        }
    </style>
</head>

<body>

    <?php
    $this->load->view('template/navbar');
    ?>
    <main>

        <div class="page-hero-section bg-image hero-mini" style="background-image: url(<?= base_url('assets') ?>/img/hero_mini.svg);">
            <div class="hero-caption">
                <div class="container fg-white h-100">
                    <div class="row justify-content-center align-items-center text-center h-100">
                        <div class="col-lg-6">
                            <h3 class="mb-4 fw-medium"><?= $wisata['nama'] ?></h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $wisata['nama'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section" style="padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 py-3">
                        <article class="blog-single-entry">
                            <div class="post-thumbnail">
                                <img src="<?= base_url('assets/img/wisata/') . $wisata['gambar'] ?>" alt="">
                            </div>
                            <h1 class="post-title"><?= $wisata['nama'] ?></h1>
                            <!-- <div class="entry-meta mb-4">
                                <div class="meta-item entry-author">
                                    <div class="icon">
                                        <span class="mai-person"></span>
                                    </div>
                                    by <a href="#">Admin</a>
                                </div>
                                <div class="meta-item">
                                    <div class="icon">
                                        <span class="mai-pricetags"></span>
                                    </div>
                                    Category:
                                    <a href="#">Business</a>,
                                    <a href="#">Finances</a>
                                </div>
                                <div class="meta-item">
                                    <div class="icon">
                                        <span class="mai-chatbubble-ellipses"></span>
                                    </div>
                                    <a href="#">24 Comments</a>
                                </div>
                            </div> -->
                            <div class="entry-content">
                                <p>
                                    <?= $wisata['deskripsi'] ?>
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4 py-3">

                        <div class="widget-wrap">
                            <h3 class="widget-title">Wisata Lainnya</h3>
                            <?php foreach ($wisata_lainnya as $w) : ?>
                                <div class="blog-widget">
                                    <div class="blog-img">
                                        <img src="<?= base_url('assets/img/wisata/') . $w['gambar'] ?>" alt="">
                                    </div>
                                    <div class="entry-footer">
                                        <div class="blog-title mb-2"><a href="<?= base_url('home/detail/') . $w['id_wisata'] ?>"><?= $w['nama'] ?></a></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div> <!-- end sidebar -->

                </div> <!-- .row -->
            </div>
        </div>

    </main>
    <?php
    $this->load->view('template/footer');
    ?>

</body>

</html>