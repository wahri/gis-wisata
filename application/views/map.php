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

    <div class="page-hero-section bg-image hero-home-2" style="background-image: url(<?= base_url('assets') ?>/img/bg_hero_2.svg);">
        <div class="hero-caption">
            <div class="container fg-white h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <div id="mapid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('template/footer');
    ?>
    <script>
        var mymap = L.map('mapid').setView([0.7067962, 101.0847497], 8);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2FoeXViYWhyaSIsImEiOiJja2xwaHZhMDcwaXM5MndxbXh2MWRqamdpIn0.GZF2fKpBkHyyve6oR8i_Tg', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);

        var wisataAlam = L.icon({
            iconUrl: '<?= base_url('assets/icon/river.png') ?>',

            iconSize: [30, 30],
        });

        var wisataKota = L.icon({
            iconUrl: '<?= base_url('assets/icon/buildings.png') ?>',

            iconSize: [30, 30],
        });


        <?php foreach ($wisata as $w) : ?>
            L.marker([<?= $w['latitude'] ?>, <?= $w['longitude'] ?>], {
                icon: <?= $w['jenis'] == 1 ? 'wisataAlam' : 'wisataKota' ?>
            }).addTo(mymap).bindPopup('<div class="text-center"><img src="<?= base_url('assets/img/wisata/') . $w['gambar'] ?>" alt="Gambar <?= $w['nama'] ?>" height="50px"><br><?= $w['nama'] ?><br><a href="<?= base_url('home/detail/') . $w['id_wisata'] ?>">Lihat lebih lanjut</a></div>');
        <?php endforeach; ?>
    </script>

</body>

</html>