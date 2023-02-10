<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Manifest</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pemesanan Tiket Kereta Api</h5>
                    Tanggal <?php echo date('d-m-y'); ?>
                    <hr>


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form action="<?php echo base_url('Data_manifest/cari_relasi') ?>" method="get">
                                    <div class="col-12">
                                        <label for="inputNanme4" class="form-label">Stasiun Keberangkatan</label>
                                        <select class="form-select" name="stasiun_awal" aria-label="Default select example">
                                            <option selected="">Pilih Stasiun</option>
                                            <?php

                                            foreach ($data_stasiun as $stasiun) { ?>

                                                <option value="<?php echo $stasiun->kode_stasiun ?>"><?php echo $stasiun->nama_stasiun . " " . "(" . $stasiun->kode_stasiun . ")" ?></option>


                                            <?php } ?>
                                        </select>
                                    </div>


                            </div>
                            <div class="col">


                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Stasiun Tujuan</label>
                                    <select class="form-select" name="stasiun_akhir" aria-label="Default select example">
                                        <option selected="">Pilih Stasiun</option>
                                        <?php

                                        foreach ($data_stasiun as $stasiun) { ?>

                                            <option value="<?php echo $stasiun->kode_stasiun ?>"><?php echo $stasiun->nama_stasiun . " " . "(" . $stasiun->kode_stasiun . ")" ?></option>


                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Cari Tiket</button>

                        </div>
                        </form>




                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->