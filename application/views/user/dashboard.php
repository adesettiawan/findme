<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">

        <!-- Selamat datang Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                                Selamat Datang,</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user['name']; ?>!</div>
                        </div>
                        <div class="col-auto">
                            <img class="img-profile rounded-circle" width="60" height="60" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Tentang Website -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tentang FindMe</h6>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="<?= base_url('assets/img/draw_findme.svg') ?>" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <p style="text-align: justify;">

                                FindMe merupakan situs web yang digunakan untuk mencari dan melihat data customer
                                terbaru, terkait status pemasangan, apakah pemasangan jaringan yang akan dilakukan di lokasi customer sudah memenuhi syarat untuk pemasangan. Apabila tidak terpenuhi, seperti tidak adanya kabel Fiber Optik di lingkungan tersebut ataupun masalah lainnya, maka dari itu status pemasangan akan dibatalkan. Situs ini tidak bersifat publik. Hanya staff <i>Human Development</i> yang dapat mengelola dan mengakses halaman web secara utuh, serta hanya pihak <i>sales/management</i> yang dapat mengakses halaman web dengan fitur yang hanya diperlukan oleh <i>sales/management</i>.

                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->