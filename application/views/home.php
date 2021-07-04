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

    <div class="page-hero-section bg-image hero-home-1" style="background-image: url(<?= base_url() ?>assets/img/bg_hero_1.svg);">
        <div class="hero-caption pt-5">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 wow fadeInUp">
                        <h1 class="mb-4">Sistem Informasi Geografis Wisata Riau</h1>
                        <a href="<?= base_url('home/map') ?>" class="btn btn-primary rounded-pill">Lihat Map</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block wow zoomIn">
                        <div class="img-place mobile-preview shadow floating-animate" style="margin-top: 0;">
                            <img src="<?= base_url() ?>assets/img/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="position-realive bg-image" style="background-image: url(<?= base_url() ?>assets/img/pattern_1.svg);">

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="mapid"></div>
                    </div>
                </div>
            </div>
        </div>


    </div> -->

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

        var greenIcon = L.icon({
            iconUrl: '<?= base_url('assets/icon/waterfall.png') ?>',

            iconSize: [30, 30], // size of the icon
        });

        var geojsonFeature = {
            "type": "Feature",
            "properties": {
                "name": "Coors Field",
                "amenity": "Baseball Stadium",
                "popupContent": "This is where the Rockies play!"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [-104.99404, 39.75621]
            }
        };

        L.geoJSON(geojsonFeature).addTo(mymap);

        var myLines = [{
            "type": "LineString",
            "coordinates": [
                [-100, 40],
                [-105, 45],
                [-110, 55]
            ]
        }, {
            "type": "LineString",
            "coordinates": [
                [-105, 40],
                [-110, 45],
                [-115, 55]
            ]
        }];

        var myStyle = {
            "color": "#ff7800",
            "weight": 5,
            "opacity": 0.65
        };

        L.geoJSON(myLines, {
            style: myStyle
        }).addTo(mymap);

        <?php foreach ($wisata as $w) : ?>
            L.marker([<?= $w['latitude'] ?>, <?= $w['longitude'] ?>], {
                icon: greenIcon
            }).addTo(mymap).bindPopup('<div class="text-center"><img src="<?= base_url('assets/img/riau.png') ?>" alt="Gambar <?= $w['nama'] ?>" height="50px"><br><?= $w['nama'] ?><br><?= $w['deskripsi'] ?><br><a href="<?= base_url('home/detail/') . $w['id_wisata'] ?>">Lihat lebih lanjut</a></div>');
        <?php endforeach; ?>

        // L.marker([0.7948177, 102.0467978], {
        //     icon: greenIcon
        // }).addTo(mymap);

        // L.marker([0.3145212, 100.7761287], {
        //     icon: greenIcon
        // }).addTo(mymap);

        // L.marker([0.3284754, 101.0180113], {
        //     icon: greenIcon
        // }).addTo(mymap);

        // L.marker([0.2580023, 100.6193365], {
        //     icon: greenIcon
        // }).addTo(mymap);

        // L.marker([1.2596404, 101.2043422], {
        //     icon: greenIcon
        // }).addTo(mymap);

        // Creating latlng object
        var latlngs = [
            [17.385044, 78.486671],
            [16.506174, 80.648015],
            [17.686816, 83.218482]
        ];
        // Creating a polygon
        var polygon = L.polygon(latlngs, {
            color: 'red'
        });

        // Adding to polygon to map
        polygon.addTo(mymap);
    </script>

</body>

</html>