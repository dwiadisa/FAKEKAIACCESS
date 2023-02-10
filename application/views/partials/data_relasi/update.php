<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulir Tambah Relasi Perjalanan</h5>

                <!-- Vertical Form -->
                <?php foreach ($relasi as $rls) { ?>
                    <form method="post" action="<?php echo base_url('data_relasi/update_relasi_aksi') ?>" class="row g-3">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama/No Kereta Api</label>
                            <input type="hidden" name="id_relasi" class="form-control" value="<?php echo $rls->id_relasi ?>" id="inputAddress">
                            <select class="form-select" name="kereta_api" aria-label="Default select example">

                                <option value="">- Pilih
                                    Kereta Api</option>
                                <?php foreach ($data_kereta as
                                    $ka) { ?>
                                    <option <?php if ($rls->id_ka == $ka->id_kereta) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $ka->id_kereta
                                                        ?>"><?php echo $ka->nama_kereta . " " . "(" . $ka->kode_kereta . ")"; ?></option>
                                <?php } ?>



                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Stasiun Awal</label>
                            <select class="form-select" name="stasiun_awal" aria-label="Default select example">

                                <option value="">- Pilih Stasiun Awal</option>
                                <?php foreach ($data_stasiun as
                                    $stasiun) { ?>
                                    <option <?php if ($rls->stasiun_awal == $stasiun->id) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $stasiun->id
                                                        ?>"><?php echo $stasiun->nama_stasiun . " " . "(" . $stasiun->kode_stasiun . ")"; ?></option>
                                <?php } ?>






                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Stasiun Akhir</label>
                            <select class="form-select" name="stasiun_akhir" aria-label="Default select example">
                                <option selected="">Pilih Stasiun Akhir</option>

                                <option value="">- Pilih Stasiun Awal</option>
                                <?php foreach ($data_stasiun as
                                    $stasiun) { ?>
                                    <option <?php if ($rls->stasiun_akhir == $stasiun->id) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $stasiun->id
                                                        ?>"><?php echo $stasiun->nama_stasiun . " " . "(" . $stasiun->kode_stasiun . ")"; ?></option>
                                <?php } ?>







                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Jam Berangkat</label>
                            <input type="time" name="jam_berangkat" value="<?php echo $rls->jam_berangkat  ?>" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Jam Tiba</label>
                            <input type="time" name="jam_tiba" value="<?php echo $rls->jam_tiba  ?>" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Tarif</label>
                            <input type="text" name="tarif" value="<?php echo $rls->tarif ?>" class="form-control" id="inputAddress">
                        </div>
                    <?php } ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    </form><!-- Vertical Form -->

            </div>
        </div>
    </section>

</main><!-- End #main -->