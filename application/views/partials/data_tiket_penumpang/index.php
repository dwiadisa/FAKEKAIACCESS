<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title ?></h1>

        <a class="btn btn-primary mt-1" href="<?php echo base_url('pesan_tiket_ka') ?>" role="button">Pesan TIket</a>
    </div><!-- End Page Title -->

    <section class="section">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Tiket Penumpang</h5>

                <?php


                foreach ($tiket as $tk) {

                ?>

                    <div class="card info-card customers-card border border-primary">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $tk->nama_kereta ?><span> | <?php echo $tk->kode_kereta ?></span>
                                <span> <?php

                                        if ($tk->status_paid == 1) {
                                            echo " <span class='badge text-bg-success'>Pembayaran Lunas</span>";
                                        } elseif ($tk->status_paid == 0) {
                                            echo " <span class='badge text-bg-danger'>Belum Lunas</span>";
                                        } else {
                                            echo " <span class='badge text-bg-secondary'>Batal</span>";
                                        }


                                        ?></span>
                            </h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png" style="width: 50px;" alt="" srcset="">
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $tk->nama_stasiun . "" . "(" . $tk->kode_stasiun . ")" . " <i class='bi bi-arrow-right'></i>" . " " . $tk->nama_stasiun_akhir . " " . "(" . $tk->kode_stasiun_akhir . ")" ?>
                                        <h6 class="fw-bold"><?php echo $tk->kode_reservasi ?></h6>

                                    </h6>
                                    <?php
                                    if ($tk->kelas == 3) {
                                        echo  "<span class='badge bg-primary'>Ekonomi</span>";
                                    } elseif ($tk->kelas == 2) {
                                        echo  "<span class='badge bg-primary'>Bisnis</span>";
                                    } else {
                                        echo  "<span class='badge bg-primary'>Eksekitif</span>";
                                    }


                                    ?>
                                    | <?php echo $tk->tarif ?>

                                    <br>
                                    <span> <?php echo $tk->tanggal_berangkat ?></span> <br>
                                    <span class="text-primary small pt-1 fw-bold"><?php echo $tk->jam_berangkat . " " . " <i class='bi bi-arrow-right'></i>" . " " . $tk->jam_tiba   ?></span>

                                </div>

                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                <a href="<?php echo base_url('Data_tiket_penumpang/lihat_tiket/') . $tk->kode_reservasi ?>" button class="btn btn-primary" type="button">Pilih</a>
                            </div>
                        </div>
                    </div>


                <?php } ?>







            </div>
        </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->