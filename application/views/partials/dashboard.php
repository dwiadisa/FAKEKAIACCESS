<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->

            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">


                        <div class="card-body">
                            <h5 class="card-title">Data Kereta Api</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-train-front"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $hitung_ka; ?></h6>


                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                            <h5 class="card-title">Data Stasiun</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house"></i>

                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $hitung_stasiun; ?></h6>


                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">



                        <div class="card-body">
                            <h5 class="card-title">Data Relasi </span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-map"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $hitung_relasi ?></h6>


                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">



                        <div class="card-body">
                            <h5 class="card-title">Data Manifest</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-ticket-detailed"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $hitung_manifest ?></h6>
                                    <span class="text-success small pt-1 fw-bold"><?php echo $hitung_manifest_lunas ?></span> <span class="text-muted small pt-2 ps-1">Pembayaran Lunas</span> <br>
                                    <span class="text-danger small pt-1 fw-bold"><?php echo $hitung_manifest_belum_lunas ?></span> <span class="text-muted small pt-2 ps-1">Pembayaran Belum Lunas</span> <br>
                                    <span class="text-secondary small pt-1 fw-bold"><?php echo $hitung_manifest_batal ?></span> <span class="text-muted small pt-2 ps-1">Dibatalkan</span> <br>


                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">



                        <div class="card-body">
                            <h5 class="card-title">Jumlah Akun Penumpang</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?php echo $hitung_penumpang; ?></h6>


                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->




            </div>


        </div>
    </section>

</main><!-- End #main -->