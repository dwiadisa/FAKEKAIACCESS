<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title;  ?></h1>

        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_manifest/tambah_data_manifest') ?>" role="button">Tambah Data Manifest</a>

    </div><!-- End Page Title -->

    <section class="section">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Data Manifest Penumpang</h5>


                <table id="tabel-data" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Reservasi</th>
                            <th scope="col">Identitas Penumpang</th>
                            <th scope="col">Detail Perjalanan</th>

                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_manifest as $manifest) { ?>
                            <tr>
                                <th scope="row"> <?php echo  $no++ ?></th>
                                <td><?php echo $manifest->kode_reservasi; ?></td>
                                <td>
                                    <span class="fw-bold"><?php echo  $manifest->nama_penumpang;  ?> </span><br>
                                    <?php echo $manifest->tipe_identitas; ?> <br>
                                    <?php echo $manifest->no_identitas; ?>
                                </td>
                                <td><span class="fw-bold"><?php echo $manifest->nama_kereta . " " . "(" . $manifest->kode_kereta . ")";
                                                            ?> </span><br>
                                    <?php echo $manifest->nama_stasiun . " " . "(" . $manifest->kode_stasiun . ")"; ?> <i class="bi bi-arrow-right"></i> <?php echo $manifest->nama_stasiun_akhir .  " " . "(" . $manifest->kode_stasiun_akhir . ")" ?> <br>
                                    <?php echo $manifest->tanggal_berangkat ?> <br>
                                    <?php echo $manifest->jam_berangkat ?><i class="bi bi-arrow-right"></i> <?php echo $manifest->jam_tiba; ?>
                                </td>
                                <td>
                                    <!-- status bayar  -->
                                    <?php

                                    if ($manifest->status_paid == 1) {
                                        echo " <span class='badge text-bg-success'>Pembayaran Lunas</span>";
                                    } elseif ($manifest->status_paid == 0) {
                                        echo " <span class='badge text-bg-danger'>Belum Lunas</span>";
                                    } else {
                                        echo " <span class='badge text-bg-secondary'>Batal</span>";
                                    }


                                    ?>
                                    <br>
                                    <!-- status bayar  -->
                                    <!-- status print -->

                                    <?php

                                    if ($manifest->status_print == 1) {


                                        echo " <span class='badge text-bg-success'>Telah Print</span>";
                                    } else {
                                        echo " <span class='badge text-bg-danger'>Belum Print</span>";
                                    }


                                    ?>
                                    <br>
                                    <!-- status print -->

                                    <!-- status checkin -->
                                    <?php
                                    if ($manifest->status_checkin == 1) {
                                        echo " <span class='badge text-bg-success'>Sudah Checkin</span>";
                                    } else {
                                        echo " <span class='badge text-bg-danger'>Belum Checkin</span>";
                                    }




                                    ?>


                                    <!-- status checkin -->




                                </td>
                                <td>


                                    <a href="<?php echo base_url('Data_manifest/Edit_status_manifest/') . $manifest->id_manifest ?>" span class="badge text-bg-warning">Edit Status</a>
                                    <a href="<?php echo base_url('Data_manifest/hapus_manifest/') . $manifest->id_manifest ?>" class="badge text-bg-danger">Hapus</a>

                            </tr>

                        <?php } ?>
                    </tbody>
                </table>







            </div>
        </div>

    </section>

</main><!-- End #main -->