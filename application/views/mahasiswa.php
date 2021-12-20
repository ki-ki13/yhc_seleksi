<div class="container-fluid">
                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <h3 class="text-start text-dark mb-4">Mahasiswa</h3>
                        </div>
                        <div class="col d-lg-flex justify-content-lg-end align-items-lg-start"><a href="<?= site_url('mahasiswa/tambah')?>" class="btn btn-success d-lg-flex justify-content-lg-center align-items-lg-start" type="button" style="width: 200px;height: 39px;color: white">Tambah Mahasiswa</a></div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-success m-0 fw-bold">Tabel Mahasiswa</p>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 124.6px;">Nim</th>
                                            <th style="width: 211px;">Nama Mahasiswa</th>
                                            <th>Program Studi</th>
                                            <th>No Hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($mhs as $row ) {?>
                                        <tr>
                                            <td><?= $row['Nim']?></td>
                                            <td><?= $row['Nama']?></td>
                                            <td><?= $row['Program_studi']?></td>
                                            <td>0<?= $row['Nohp']?></td>
                                            <td><a href="<?= site_url() ?>mahasiswa/hapus/<?= $row['Id_mhs']?>" class="btn btn-danger" type="button" style="color: white;border-style: none;">Hapus</a>
                                            <a href="<?= site_url() ?>mahasiswa/edit/<?= $row['Id_mhs']?>" class="btn btn-success" type="button" style="color: white;border-style: none;margin: 0 0 0 5px;">Edit</a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Nim</strong></td>
                                            <td><strong>Nama Mahasiswa</strong></td>
                                            <td><strong>Program Studi</strong></td>
                                            <td><strong>No Hp</strong></td>
                                            <td><strong>Aksi</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            