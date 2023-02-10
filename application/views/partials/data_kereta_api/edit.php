<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>





    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Data Kereta Api</h5>

                <!-- Vertical Form -->
                <form action="<?php echo base_url('data_kereta/update_kereta_aksi') ?>" method="POST" class="row g-3">
                    <?php
                    foreach ($kereta_api as $ka) { ?>



                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">No Kereta</label>
                            <input type="hidden" class="form-control" value="<?php echo $ka->id_kereta ?>" name="id_kereta" id="inputNanme4">
                            <input type="text" class="form-control" value="<?php echo $ka->kode_kereta  ?>" name="kode_kereta" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Kereta</label>
                            <input type="text" class="form-control" value="<?php echo $ka->nama_kereta ?>" name="nama_kereta" id="inputNanme4">
                        </div>

                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Kelas Kereta</label>
                            <select class="form-select" name="kelas" aria-label="Default select example">

                                <?php if ($ka->kelas == 3) {
                                    echo " <option selected value='3'>Ekonomi</option>
                                    <option  value='2'>Bisnis</option>
                                    <option  value='1'>Eksekutif</option>";
                                } elseif ($ka->kelas == 2) {
                                    echo " <option selected value='2'>Bisnis</option>
                                    <option  value='3'>Ekonomi</option>
                                    <option  value='1'>Eksekutif</option>";
                                } else {
                                    echo " <option selected value='1'>Eksekutif</option>
                                    <option  value='3'>Ekonomi</option>
                                    <option  value='2'>Bisnis</option>";
                                }
                                ?>
                            </select>
                        </div>

                    <?php } ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('Data_Kereta') ?>" button type="reset" class="btn btn-secondary">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </section>

</main><!-- End #main -->