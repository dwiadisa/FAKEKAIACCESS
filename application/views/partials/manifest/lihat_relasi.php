<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title ?></h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Relasi</h5>
                    <?php
                    foreach ($relasi as $rs) {
                    ?>
                        <div class="card info-card customers-card  shadow-sm p-3 mb-5 bg-body-tertiary rounded   ">
                            <div class="card-body border border-primary">
                                <h5 class="card-title "><?php echo  $rs->nama_kereta ?> <span> | <?php echo $rs->kode_kereta ?></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png" style="width: 50px;" alt="" srcset="">
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $rs->nama_stasiun . "" . "(" . $rs->kode_stasiun . ")" . " <i class='bi bi-arrow-right'></i>" . " " . $rs->nama_stasiun_akhir . " " . "(" . $rs->kode_stasiun_akhir . ")" ?></h6>
                                        <?php
                                        if ($rs->kelas == 3) {
                                            echo  "<span class='badge bg-primary'>Ekonomi</span>";
                                        } elseif ($rs->kelas == 2) {
                                            echo  "<span class='badge bg-primary'>Bisnis</span>";
                                        } else {
                                            echo  "<span class='badge bg-primary'>Eksekitif</span>";
                                        }


                                        ?>
                                        | <?php echo $rs->tarif ?>

                                        <br>
                                        <span class="text-primary small pt-1 fw-bold"><?php echo $rs->jam_berangkat . " " . " <i class='bi bi-arrow-right'></i>" . " " . $rs->jam_tiba   ?></span>
                                    <?php } ?>
                                    </div>

                                </div>


                            </div>

                        </div>
                        <form action="<?php echo base_url('data_manifest/tambah_manifest_aksi/') ?>" method="post">
                            <!-- input tersembunyi untuk id_relasi -->
                            <input type="hidden" class="form-control" value="<?php echo $rs->id_relasi ?>" name="relasi" id="inputNanme4">
                            <!-- input tersembunyi untuk id_relasi -->

                            <h5 class="card-title">Data Diri Penumpang</h5>
                            <hr>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Nama Penumpang</label>
                                <select class="form-select" name="penumpang" aria-label="Default select example">
                                    <option selected="">Pilih Penumpang</option>

                                    <?php foreach ($penumpang as $pn) { ?>


                                        <option value="<?php echo $pn->id_penumpang ?>"><?php echo $pn->nama_penumpang ?> </option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Tanggal Berangkat</label>
                                <input type="date" name="tanggal_berangkat" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Status Pembayaran</label>
                                <select class="form-select" name="pembayaran" aria-label="Default select example">
                                    <option selected="">Pilih Status Pembayaran</option>
                                    <option value="0">Belum Lunas</option>
                                    <option value="1">Lunas</option>
                                    <option value="2">Batal</option>
                                </select>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Status Check in</label>
                                    <select class="form-select" name="checkin" aria-label="Default select example">
                                        <option selected="0">Belum Check in</option>
                                        <option value="1">Sudah Check in</option>

                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Status Print</label>
                                    <select class="form-select" name="print" aria-label="Default select example">
                                        <option selected="0">Belum Print</option>
                                        <option value="1">Sudah Print</option>

                                    </select>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>

                        </form>



                </div>

            </div>




        </div>




        </div>
    </section>

</main><!-- End #main -->