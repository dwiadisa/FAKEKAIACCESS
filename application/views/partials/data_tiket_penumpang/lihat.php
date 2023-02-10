<main id="main" class="main">

    <div class="pagetitle">
        <h1>Lihat Tiket KA</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">




            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail E-Tiket</h5>
                    <span class="fw-bold">

                        Data Perjalanan
                    </span>
                    <hr>
                    <?php
                    foreach ($tiket as $tk) { ?>

                        <div class="card info-card customers-card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $tk->nama_kereta ?><span> | <?php echo $tk->kode_kereta ?></span></h5>

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

                            </div>
                        </div>



                        <hr>

                        <p class="fw-bold">Data Diri Penumpang</p>
                        <hr>

                        Nama Penumpang : <?php echo $tk->nama_penumpang ?><br>
                        Tanggal Lahir : <?php echo $tk->tanggal_lahir ?><br>
                        Tipe Identitas : <?php echo $tk->tipe_identitas ?><br>
                        No Identitas : <?php echo $tk->no_identitas ?><br>
                        Email : <?php echo $tk->email  ?><br>
                        <hr>
                        <span class="fw-bold">

                            <p>Status</p>
                        </span>
                        <!-- status bayar  -->
                        <?php

                        if ($tk->status_paid == 1) {
                            echo " <span class='badge text-bg-success'>Pembayaran Lunas</span>";
                        } elseif ($tk->status_paid == 0) {
                            echo " <span class='badge text-bg-danger'>Belum Lunas</span>";
                        } else {
                            echo " <span class='badge text-bg-secondary'>Batal</span>";
                        }


                        ?>

                        <!-- status bayar  -->
                        <!-- status print -->

                        <?php

                        if ($tk->status_print == 1) {


                            echo " <span class='badge text-bg-success'>Telah Print</span>";
                        } else {
                            echo " <span class='badge text-bg-danger'>Belum Print</span>";
                        }


                        ?>

                        <!-- status print -->

                        <!-- status checkin -->
                        <?php
                        if ($tk->status_checkin == 1) {
                            echo " <span class='badge text-bg-success'>Sudah Checkin</span>";
                        } else {
                            echo " <span class='badge text-bg-danger'>Belum Checkin</span>";
                        }




                        ?>
                        <hr>


                        <div class="d-grid gap-2">
                            <?php
                            $link = base_url('data_tiket_penumpang/batal/' . $tk->kode_reservasi);

                            if ($tk->status_paid == 0) {
                                echo "<button class='btn btn-danger fw-bold' type='button' disabled>Batalkan Tiket</button>";
                            } elseif ($tk->status_paid == 1) {
                                echo "<a href='$link' class='btn btn-danger fw-bold' type='button'>Batalkan Tiket</a>";
                            } else {
                                echo "<button class='btn btn-danger fw-bold' type='button' disabled>Batalkan Tiket</button>";
                            }
                            ?>

                            <a href="<?php echo base_url('data_tiket_penumpang') ?>" button class="btn btn-primary fw-bold" type="button">Kembali</a>
                        </div>

                </div>

            </div>


        <?php } ?>
        </div>
    </section>

</main><!-- End #main -->