<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?php
            $message = $this->session->flashdata('message');
            if (isset($message)) {
                echo '<div class="alert alert-info">' . $message . '</div>';
                $this->session->unset_userdata('message');
            }

            ?>
            <?= form_open_multipart('user/edit') ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>


            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#inputGroupFile01').on('change', function(e) {
            //get the file name
            var fileName = e.target.files[0].name;
            //replace the "Choose a file" label
            $('.custom-file-label').html(fileName);
        })
    })
</script>