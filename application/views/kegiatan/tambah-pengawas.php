<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg">
            <?= form_error('tambah-pengawas', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div>
                <div class="row">
                    <div class="col-lg-4">
                        <h1><?= $kegiatan['nama']; ?></h1>
                    </div>
                    <div class="col-lg-4">
                        <h1>Kuota = <?= $kuota['kegiatan_id']; ?> / <?= $kegiatan['k_pengawas']; ?></h1>
                    </div>

                </div>

                <form method="post" action="">
                    <table class="table table-bordered table-striped" id="mydata">
                        <thead>
                            <tr align=center>
                                <th scope="col">Tambah</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($pengawas as $p) : ?>
                                <tr align=center>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-pengawas-input" type="checkbox" <?= check_pengawas($kegiatan['id'], $p['id']); ?> data-kegiatan="<?= $kegiatan['id']; ?>" data-pengawas="<?= $p['id']; ?>">
                                        </div>
                                    </td>
                                    <td><?= $p['email']; ?></td>
                                    <td><?= $p['name']; ?></td>
                                    <td>
                                        <a href="<?= base_url('kegiatan/details_kegiatan_pengawas/') . $p['id']; ?>" class="badge badge-primary">details kegiatan yang diikuti</a>
                                    </td>

                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->