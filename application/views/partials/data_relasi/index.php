<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Relasi</h1>

        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_relasi/tambah_relasi') ?>" role="button">Tambah Relasi</a>

    </div><!-- End Page Title -->

    <section class="section">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Data Relasi</h5>
                <!-- Default Table -->
                <table id="tabel-data" class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama/Nomor KA</th>
                            <th scope="col">Detail Relasi</th>
                            <th scope="col">Tarif</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $no = 1;
                        foreach ($data_relasi as $relasi) { ?>

                            <tr>
                                <th scope="row"><?php echo  $no++ ?></th>
                                <td>
                                    <?php echo $relasi->nama_kereta . "<br>" . $relasi->kode_kereta  ?>


                                </td>
                                <td>
                                    <?php echo $relasi->nama_stasiun . "(" . $relasi->kode_stasiun . ")"  . " - " . $relasi->jam_berangkat . "<br>" . $relasi->nama_stasiun_akhir  . "(" . $relasi->kode_stasiun_akhir . ")"  . " - " . $relasi->jam_tiba;

                                    ?>


                                </td>
                                <td><?php echo $relasi->tarif ?></td>
                                <td>

                                    <a href="<?php echo base_url('data_relasi/update_relasi/' . $relasi->id_relasi)  ?>" span class="badge rounded-pill bg-warning text-dark">Edit</a>
                                    <a href="<?php echo base_url('data_relasi/hapus_relasi/' . $relasi->id_relasi)  ?>" span class="badge rounded-pill bg-danger">Hapus</a>



                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>



    </section>

</main><!-- End #main -->