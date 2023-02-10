<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>





    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Tambah Kereta</h5>

                <!-- Vertical Form -->
                <form action="<?php echo base_url('data_kereta/tambah_kereta') ?>" method="POST" class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">No Kereta</label>
                        <input type="text" class="form-control" name="kode_kereta" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Nama Kereta</label>
                        <input type="text" class="form-control" name="nama_kereta" id="inputNanme4">
                    </div>

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Kelas Kereta</label>
                        <select class="form-select" name="kelas" aria-label="Default select example">
                            <option selected="">Pilih Kelas</option>
                            <option value="1">Eksekutif</option>
                            <option value="2">Bisnis</option>
                            <option value="3">Ekonomi</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('data_kereta') ?>" button type="reset" class="btn btn-secondary">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </section>

</main><!-- End #main -->