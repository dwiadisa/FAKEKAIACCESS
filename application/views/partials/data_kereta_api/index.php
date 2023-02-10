<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>

        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_kereta/tambah_kereta') ?>" role="button">Tambah Kereta Api</a>



    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Kereta Api</h5>

                <!-- Default Table -->
                <table id="tabel-data" class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nomor Kereta</th>
                            <th scope="col">Nama Kereta Api</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kereta_api as $ka) { ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $ka->kode_kereta ?></td>
                                <td><?php echo $ka->nama_kereta ?></td>
                                <td>
                                    <?php
                                    if ($ka->kelas == 1) {
                                        echo "Eksekutif";
                                    } elseif ($ka->kelas == 2) {
                                        echo "bisnis";
                                    } else {
                                        echo "Ekonomi";
                                    }

                                    ?>

                                </td>
                                <td>

                                    <a href="<?php echo base_url('data_kereta/update_kereta/') . $ka->id_kereta ?>" span class="badge rounded-pill bg-warning">Edit</a>
                                    <a href="<?php echo base_url('data_kereta/hapus_kereta/') . $ka->id_kereta ?>" span class=" badge rounded-pill bg-danger">Hapus</a>

                                </td>

                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>

</main><!-- End #main -->