<!doctype html>
<html lang="en">

<head>
    <?php
    $this->load->view('admin/template/header')
    ?>
</head>

<body class="antialiased">
    <?php
    $this->load->view('admin/template/sidebar')
    ?>
    <div class="page">
        <?php
        $this->load->view('admin/template/topbar')
        ?>
        <div class="content">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h2 class="page-title">
                                <?= $title ?>
                            </h2>
                        </div>
                        <!-- Page title actions -->

                    </div>
                </div>
                <?php if (!empty($this->session->flashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="row mb-3">
                    <div class="col-12">
                        <a href="<?= base_url('admin/map/tambahdata') ?>" class="btn btn-primary ml-auto">Tambah Data</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Jenis</th>
                                                <th class="w-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($wisata as $w): ?>
                                                <tr>
                                                    <td><?= $w['nama'] ?></td>
                                                    <td class="text-muted">
                                                        <?= $w['latitude'] ?>
                                                    </td>
                                                    <td class="text-muted">
                                                        <?= $w['longitude'] ?>
                                                    </td>
                                                    <td class="text-muted">
                                                        <?= $w['jenis'] == 1 ? 'Wisata Alam' : 'Wisata Kota' ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/map/hapusdata/') . $w['id_wisata'] ?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content here -->
            </div>
            <?php
            $this->load->view('admin/template/footer')
            ?>
</body>

</html>