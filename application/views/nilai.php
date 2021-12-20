<div class="container-fluid">
                    <h3 class="text-dark mb-4">Nilai Mahasiswa</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-success m-0 fw-bold">Tabel Nilai Mahasiswa</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Mahasiswa</th>
                                            <th style="width: 131.2px;">Matakuliah</th>
                                            <th>Nilai</th>
                                            <th>Grade</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($nilai as $row){?>
                                        <tr>
                                            <td><?= $row['Nama']?></td>
                                            <td><?= $row['Matakuliah']?></td>
                                            <td><?= $row['Nilai']?></td>
                                            <td><?= $row['Grade']?></td>
                                            <td><a href="<?= site_url() ?>nilai/edit/<?= $row['Id_nilai']?>" class="btn btn-success" type="button" style="margin: 5px;border-style: none;text-decoration:none">Edit</a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Mahasiswa</strong></td>
                                            <td><strong>Matakuliah</strong></td>
                                            <td><strong>Nilai</strong></td>
                                            <td><strong>Grade</strong></td>
                                            <td><strong>Aksi</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#Tabel').DataTable();
                } );
            </script>