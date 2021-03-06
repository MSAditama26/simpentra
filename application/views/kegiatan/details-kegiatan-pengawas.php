<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-lg-6">
                    <h1>Pengawas: <?= $pengawas['name']; ?></h1>
                </div>
            </div>

            <table class="table table-bordered table-striped" id="mydata">
                <thead>
                    <tr align=center>

                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Start</th>
                        <th scope="col">Finish</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>


                    <?php $i = 1; ?>
                    <?php foreach ($details as $d) : ?>
                        <tr align=center>
                            <td><?= $d['nama']; ?></td>
                            <td><?= date('d F Y', $d['start']); ?></td>
                            <td><?= date('d F Y', $d['finish']); ?></td>
                            <?php $now = (time()); ?>
                            <?php if ($now < $d['start']) : ?>
                                <td><a class="badge badge-warning">belum mulai</a></td>
                            <?php elseif ($now > $d['finish']) : ?>
                                <td><a class="badge badge-danger">selesai</a></td>
                            <?php else : ?>
                                <td><a class="badge badge-primary">sedang berjalan</a></td>
                            <?php endif; ?>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->