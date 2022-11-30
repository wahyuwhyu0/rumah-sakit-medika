<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Dokter</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Dokter</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('dokter/tambah') ?>">+ Dokter</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title"> DAFTAR DOKTER PERTAMA MEDIKA</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Jumlah Pasien Yang Ditangani</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomer = 1; ?>
                            <?php foreach ($dataDokter as $dd) : ?>
                            <tr>
                                <th scope="row"><?= $nomer; ?></th>
                                <td><?= $dd['nama_dokter']; ?></td>
                                <td><?= $dd['jumlah_pasien_perdokter']; ?></td>
                                <td class="text-center" width="160px">
                                    <a href="<?= base_url('pegawai/ubah/'); ?><?= $dd['kd_dokter'] ?>"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-pen"></i>Edit
                                    </a>
                                    <a href="<?= base_url('pegawai/hapus/'); ?><?= $dd['kd_dokter'] ?>"
                                        onclick="return confirm('Yakin ingin menghapus data?');"
                                        class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash "></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php $nomer++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- End Special title treatmen -->
        </div>
    </section>

</main><!-- End #main -->