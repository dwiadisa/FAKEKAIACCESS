<main id="main" class="main">

    <div class="pagetitle">
        <h1><?php echo $title; ?></h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Stasiun</h5>

                <!-- Default Table -->
                <table id="tabel-data" class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kode Stasiun</th>
                            <th scope="col">Nama Stasiun</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($stasiun as $st) { ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $st->kode_stasiun ?></td>
                                <td><?php echo $st->nama_stasiun ?></td>

                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>

</main><!-- End #main -->