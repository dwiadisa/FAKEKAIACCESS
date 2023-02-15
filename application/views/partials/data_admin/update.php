<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title ?></h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> Form Update Admin</h5>

                <!-- Vertical Form -->
                <form action="<?php echo base_url('data_admin/update_admin_aksi') ?>" method="POST" class="row g-3">

                    <?php foreach ($data_admin as $admin) { ?>


                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="hidden" name="id_user" value="<?php echo $admin->id_user ?>" class="form-control" id="inputNanme4">
                            <input type="text" name="nama" value="<?php echo $admin->nama ?>" class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Username</label>
                            <input type="text" name="username" value="<?php echo $admin->username ?>" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4">
                            <small>kosongkan jika tidak merubah password</small>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('data_admin/') ?>" button type="reset" class="btn btn-secondary">Kembali</a>
                        </div>
                </form><!-- Vertical Form -->
            <?php    } ?>
            </div>
        </div>
    </section>

</main><!-- End #main -->