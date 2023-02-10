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
                        <form action="<?php echo base_url('Pesan_tiket_ka/tambah_data_pemesanan/') ?>" method="post">
                            <!-- input tersembunyi untuk id_relasi -->
                            <input type="hidden" class="form-control" value="<?php echo $rs->id_relasi ?>" name="relasi" id="inputNanme4">
                            <!-- input tersembunyi untuk id_relasi -->
                            <?php foreach ($data_penumpang as $pn) { ?>


                                <h5 class="card-title">Data Diri Penumpang</h5>
                                <hr>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Nama Penumpang</label>
                                    <input type="hidden" disabled class="form-control" value="<?php echo $pn->id_penumpang ?>" name="id_penumpang" id="inputNanme4">
                                    <input type="text" disabled class="form-control" value="<?php echo $pn->nama_penumpang ?>" name="nama_penumpang" id="inputNanme4">

                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Email</label>
                                    <input type="text" disabled class="form-control" value="<?php echo $pn->email ?>" name="email" id="inputNanme4">

                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Tipe Identitas</label>
                                    <input type="text" disabled class="form-control" value="<?php echo $pn->tipe_identitas ?>" name="tipe_identitas" id="inputNanme4">

                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">No. Identitas</label>
                                    <input type="text" disabled class="form-control" value="<?php echo $pn->no_identitas ?>" name="no_identitas" id="inputNanme4">

                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">No. HP</label>
                                    <input type="text" disabled class="form-control" value="<?php echo $pn->no_hp ?>" name="no_hp" id="inputNanme4">

                                </div>
                            <?php   } ?>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Tanggal Berangkat</label>
                                <input type="date" name="tanggal_berangkat" class="form-control">
                            </div>

                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        </form>



                </div>

            </div>




        </div>




        </div>
    </section>

</main><!-- End #main -->