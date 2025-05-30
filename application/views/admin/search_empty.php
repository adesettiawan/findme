<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="<?= base_url('admin/data_customer_import'); ?>" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="file" class="form-control" id="file_data" name="file_data">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i>&ensp;Import Data Excel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

    </div>
    <!-- table customer -->
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-12">
            <form method="get" action="<?= base_url('admin/search_customer'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea type="text" rows="4" class="form-control" id="keyword" placeholder="Ketikan nama yang ingin anda cari disini..!" name="keyword"><?= html_escape($keyword) ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" style="margin-bottom: 70px;" class="btn btn-primary"><i class="fa fa-search"></i>&ensp;Cari Data Customer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('message')) {
                echo $this->session->flashdata('message');
            } ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal<veh>
                                <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center">Data tidak ditemukan..!</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->