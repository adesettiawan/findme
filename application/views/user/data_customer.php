<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- table customer -->
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-12">
            <form method="get" action="<?= base_url('user/search_customer'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="keyword" class="form-control" id="keyword" placeholder="Ketikan nama yang ingin anda cari disini..!" rows="4"></textarea>
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
                    <?php $i = 1; ?>
                    <?php foreach ($dt_customer as $customer) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $customer->Name; ?></td>
                            <td><?= $customer->Address; ?></td>
                            <td><?= $customer->Status; ?></td>
                            <td><?= $customer->Date; ?></td>
                            <!-- <td>
                            <a class="badge badge-success" href="">Edit</a>
                            <a class="badge badge-danger" href="">Delete</a>
                        </td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->