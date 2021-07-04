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
                <?php if (!empty($this->session->flashdata('message_error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('message_error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    Tambah data map
                                </h4>
                            </div>
                            <?php echo form_open_multipart(); ?>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label required">Nama</label>
                                    <input type="text" class="form-control" name="nama" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi
                                        <!-- <span class="form-label-description">56/100</span></label> -->
                                        <textarea class="form-control" name="deskripsi" rows="6"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="form-label">
                                        Jenis
                                    </div>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" name="jenis" value="1" type="radio" checked />
                                            <span class="form-check-label">Wisata Alam</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" name="jenis" value="2" type="radio" />
                                            <span class="form-check-label">Wisata Kota</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div class="form-label">
                                                Upload Gambar
                                            </div>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" name="gambar" id="customFile" />
                                                <label class="form-file-label" for="customFile">
                                                    <span id="input_text" class="form-file-text">Choose file...</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex">
                                    <a href="<?= base_url('admin/map') ?>" class="btn btn-link">Cancel</a>
                                    <button type="submit" name="submit" value="1" class="btn btn-primary ml-auto">
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Content here -->
            </div>
            <?php
            $this->load->view('admin/template/footer')
            ?>
            <script>
                $('#customFile').change(function() {
                    var filename = $('#customFile').val().split('\\').pop();;
                    $('#input_text').html(filename);
                });
            </script>
</body>

</html>