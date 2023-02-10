<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Penumpang</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Formulir Tambah Data Penumpang</h5>
                    <b> Biodata Diri </b>
                    <hr>

                    <form action="<?php echo base_url('data_penumpang/tambah_penumpang_aksi') ?>" method="POST" class="row g-3">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>


                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Tipe Identitas</label>
                            <select class="form-select" name="tipe_id" aria-label="Default select example">
                                <option selected="">Pilih Jenis Tipe Identitas</option>
                                <option value="KTP">KTP</option>
                                <option value="PASSPORT">PASSPORT</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">No Identitas</label>
                            <input type="text" class="form-control" name="no_id" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>


                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">No HP </label>
                            <input type="text" class="form-control" name="no_hp" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Status </label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected="">Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>

                            </select>

                        </div>







                        <b> Autentifikasi </b>
                        <hr>


                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="inputNanme4">
                        </div>


                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label"> Konfirmasi Password</label>
                            <input type="password" name="konfirmasi_password" class="form-control" id="inputPassword4">
                        </div>

                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url('Data_penumpang') ?>" button type="reset" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>








                </div>
            </div>




        </div>
    </section>

</main><!-- End #main -->