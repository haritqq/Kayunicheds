<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->


    <div class="row">
        <div class="col-lg-6">
            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Limbah Kayu</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <?= form_error('limbah', '<div class="alert
                    alert-danger" role="alert">', '</div>'); ?>

                        <?= $this->session->flashdata('message'); ?>
                        <a href="<?= base_url('cekkayu/tambahlimbah'); ?>" class="btn btn-secondary mb-3">Silahkan Isi Nama Limbah Kayu Anda Disini</a>
                        <div class="table-responsive">
                            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url() ?>cekkayu/cetak_limbah/"><i class="fas fa-print"></i> Print IsiLimbahKayu SPK</a>

                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Limbah Kayu</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($limbah as $k) : ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $k['nama_limbah']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>cekkayu/editlimbah/<?= $k['id_limbah']; ?>" class="badge badge-success">edit</a>
                                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#hapusLimbahModal<?= $k['id_limbah']; ?>">delete</a>

                                                <div class="modal fade" id="hapusLimbahModal<?= $k['id_limbah']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Limbah</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('cekkayu/hapuslimbah'); ?>" method="post">
                                                                <input type="hidden" name="id_limbah" value="<?= $k['id_limbah'] ?>">
                                                                <div class="modal-body">Apakah ingin menghapus <?= $k['nama_limbah']; ?> ?</div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                                    <button class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                            </td>

                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
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