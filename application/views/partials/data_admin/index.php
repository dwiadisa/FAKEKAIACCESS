<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title ?></h1>
        <a class="btn btn-primary mt-1" href="<?php echo base_url('data_admin/tambah_admin') ?>" role="button">Tambah Admin</a>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Data Admin</h5>

                <!-- Default Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_admin as $admin) { ?>


                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $admin->username ?></td>
                                <td><?php echo $admin->nama ?></td>
                                <td>


                                    <a href="<?php echo base_url('data_admin/update_admin/' . $admin->id_user)  ?>" span class="badge rounded-pill bg-warning text-dark">Edit</a>
                                    <a href="<?php echo base_url('data_admin/hapus_admin/' . $admin->id_user)  ?>" span class="badge rounded-pill bg-danger">Hapus</a>




                                </td>

                            </tr>
                        <?php    } ?>
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>

</main><!-- End #main -->