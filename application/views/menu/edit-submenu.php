<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="menu" class="col-sm-3 col-form-label">Menu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $submenu['menu_id']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-3 col-form-label">URL</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="icon" class="col-sm-3 col-form-label">Icon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                        <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="is_active" class="col-sm-3 col-form-label">Active</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $submenu['is_active']; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
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