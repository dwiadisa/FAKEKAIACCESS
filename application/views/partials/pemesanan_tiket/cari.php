<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>
        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_manifest/tambah_data_manifest') ?>" role="button">Kembali</a>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $stasiun_awal ?>
                        <i class="bi bi-arrow-right"></i>
                        <?php echo $stasiun_akhir ?>


                    </h5>
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

                                    </div>

                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                    <a href="<?php echo base_url('Pesan_tiket_ka/detail/') . $rs->id_relasi ?>" button class="btn btn-primary" type="button">Pesan</a>
                                </div>

                            </div>

                        </div>
                    <?php } ?>
                </div>
    </section>

</main><!-- End #main -->