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

                    <?php foreach ($manifest as $tk) {


                    ?>

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

                        <form action="<?php echo base_url('Data_manifest/ubah_status') ?>" method="post">

                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Status Pembayaran</label>
                                <input type="hidden" name="id_manifest" value="<?php echo $tk->id_manifest ?>" id="">
                                <select class="form-select" name="pembayaran" aria-label="Default select example">

                                    <?php

                                    if ($tk->status_paid == 0) {

                                        echo " <option selected value='0'>Belum Lunas</option>
                                    <option value='1'>Lunas</option>
                                    <option value='2'>Batal</option>
                                    ";
                                        # code...
                                    } elseif ($tk->status_paid == 1) {

                                        echo " <option selected value='1'>Lunas</option>
                                    <option value='0'> Belum Lunas</option>
                                    <option value='2'>Batal</option>
                                    ";
                                        # code...
                                    } else {
                                        echo " <option selected value='2'>Batal</option>
                                    <option value='0'> Belum Lunas</option>
                                    <option value='1'>Lunas</option>
                                    ";
                                    }
                                    ?>

                                </select>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Status Check in</label>
                                    <select class="form-select" name="checkin" aria-label="Default select example">
                                        <?php

                                        if ($tk->status_checkin == 0) {
                                            echo " <option selected value='0'>Belum Checkin</option>
                                        <option value='1'>Sudah Checkin</option>
                                        ";



                                            # code...
                                        } else {
                                            echo " <option selected value='1'>Sudah Checkin</option>
                                        <option value='0'>Belum Checkin</option>
                                        
                                        ";


                                            # code...
                                        } ?>




                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputNanme4" class="form-label">Status Print</label>
                                    <select class="form-select" name="print" aria-label="Default select example">

                                        <?php

                                        if ($tk->status_print == 0) {
                                            echo " <option selected value='0'>Belum Print</option>
                                        <option value='1'>Sudah Print</option>
                                        ";
                                        } else {
                                            echo " <option selected value='0'>Belum Print</option>
                                        <option value='1'>Sudah Print</option>
                                        ";
                                        }

                                        ?>


                                    </select>
                                </div>
                            </div>
                            <hr>



                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" value="submit">Simpan</button>
                                <a href="<?php echo base_url('Data_manifest') ?>" class="btn btn-secondary" type="button">Kembali</a>
                            </div>
                        </form>
                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->
<?php } ?>