<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title ?></h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Formulir Tambah Admin</h5>

                <!-- Vertical Form -->
                <form action="<?php echo base_url('data_admin/tambah_admin') ?>" method="POST" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">username</label>
                        <input type="text" name="username" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('data_admin/') ?>" button type="reset" class="btn btn-secondary">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </section>

</main><!-- End #main -->