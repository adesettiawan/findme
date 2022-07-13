<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="<?= base_url('menu/editsubmenuid/' . $subMenu['id']); ?>">
                <div class="form-group row">
                    <label for="id" class="col-sm-3 col-form-label">Id</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $subMenu['id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Menu Title</label>
                    <div class="col-sm-9">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>" <?php echo $subMenu['menu_id'] == $m['id'] ? 'selected' : '' ?>><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Submenu Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Submenu Url</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Submenu Icon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
                        <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">isActive?</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $subMenu['is_active']; ?>" name="is_active[0]" id="is_active" <?= $subMenu['is_active'] != 0 ? 'checked' : '' ?>>
                            <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
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