<main id="main" class="main">

    <section class="section">
        <div class="col-lg-9">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pasien Baru</h5>

                    <!-- Multi Columns Form -->
                    <form method="POST" class="row g-3">
                        <div class="col-md-5">
                            <label for="no_identitas" class="form-label">Nomor Indentitas</label>
                            <input type="number" class="form-control" name="no_identitas" id="no_identitas">
                            <?= form_error('no_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                            <input type="hidden" class="form-control" name="no_identitas" id="no_identitas">
                        </div>
                        <div class="col-md-4">
                            <label for="nama_dokter" class="form-label">Dokter</label>
                            <select name="kd_dokter" id="kd_dokter" class="form-select">
                                <option hidden value="">--Pilih Dokter--</option>
                                <?php foreach ($dataDokter as $dd) : ?>
                                <option value="<?= $dd['kd_dokter']; ?>"><?= $dd['nama_dokter']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="jumlah_pasien_perdokter" class="form-label">Jumlah Pasien Perdokter</label>
                            <select id="jumlah_pasien_perdokter" class="form-select" name="jumlah_pasien_perdokter">
                                <option hidden value="">--Masukan Jumlah--</option>
                                <option value="1">1 Pasien</option>
                                <option value="2">2 Pasien</option>
                                <option value="3">3 Pasien</option>
                                <option value="4">4 Pasien</option>
                                <option value="5">5 Pasien</option>
                                <option value="6">6 Pasien</option>
                                <option value="7">7 Pasien</option>
                                <option value="8">8 Pasien</option>
                                <option value="9">9 Pasien</option>
                                <option value="10">10 Pasien</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" name="nama_pasien">
                        </div>
                        <div class="col-md-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                <option hidden value="">--Jenis Kelamin--</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="kelompok_pasien" class="form-label">Kelompok Pasien</label>
                            <select name="kelompok_pasien" id="kelompok_pasien" name="kelompok_pasien"
                                class="form-select">
                                <option hidden value="">--Jenis Kelompok--</option>
                                <option value="BPJS">BPJS</option>
                                <option value="Umum/Pribadi">Umum/Pribadi</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="tgl_registrasi" class="form-label">Tanggal Registrasi</label>
                            <input type="date" class="form-control" name="tgl_registrasi" id="tgl_registrasi">
                        </div>
                        <div class="col-md-4">
                            <label for="kd_ruangan" class="form-label">Ruangan</label>
                            <select name="kd_ruangan" id="kd_ruangan" class="form-select">
                                <option hidden value="">--Pilih Ruangan--</option>
                                <?php foreach ($dataRuangan as $dr) : ?>
                                <option value="<?= $dr['kd_ruangan']; ?>"><?= $dr['nama_ruangan']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="jumlah_pasien_peruangan" class="form-label">Jumlah Pasien Peruangan</label>
                            <select id="jumlah_pasien_peruangan" class="form-select" name="jumlah_pasien_peruangan">
                                <option hidden value="">--Masukan Jumlah--</option>
                                <option value="1">1 Pasien</option>
                                <option value="2">2 Pasien</option>
                                <option value="3">3 Pasien</option>
                                <option value="4">4 Pasien</option>
                                <option value="5">5 Pasien</option>
                                <option value="6">6 Pasien</option>
                                <option value="7">7 Pasien</option>
                                <option value="8">8 Pasien</option>
                                <option value="9">9 Pasien</option>
                                <option value="10">10 Pasien</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="diagnosis" class="form-label">Diagnosis</label>
                            <input type="text" class="form-control" name="diaknosis" id="diaknosis">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->