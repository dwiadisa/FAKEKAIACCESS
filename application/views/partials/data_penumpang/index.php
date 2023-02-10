<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>
        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_penumpang/tambah_penumpang') ?>" role="button">Tambah Penumpang</a>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Data Penumpang</h5>

                    <table id="tabel-data" class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Username/Nama Penumpang</th>
                                <th scope="col">Tipe Identitas/ No ID</th>
                                <th scope="col">No Hp </th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Status/ Akun Dibuat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($penumpang as $pn) {
                                # code...
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php
                                        echo $pn->username . "<br>" . $pn->nama_penumpang;

                                        ?></td>
                                    <td>

                                        <?php echo $pn->tipe_identitas . "<br>" . $pn->no_identitas; ?>
                                    </td>
                                    <td><?php echo $pn->no_hp; ?></td>
                                    <td><?php echo $pn->tanggal_lahir;  ?></td>
                                    <td><?php if ($pn->status == 1) {
                                            echo "<span class='badge bg-success'>Aktif</span>";
                                        } else {
                                            echo "<span class='badge bg-danger'>NonAktif</span>";
                                        }
                                        echo "<br>";

                                        echo $pn->akun_dibuat;
                                        ?></td>
                                    <td>
                                        <a href="<?php echo base_url('data_penumpang/update_penumpang/' . $pn->id_penumpang)  ?>" span class="badge rounded-pill bg-warning text-dark">Edit</a>
                                        <a href="<?php echo base_url('data_penumpang/hapus_penumpang/' . $pn->id_penumpang)  ?>" span class="badge rounded-pill bg-danger">Hapus</a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </section>

</main><!-- End #main -->