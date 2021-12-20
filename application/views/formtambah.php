<div class="container-fluid">
                    
                            <div class="row">
                                <div class="col" style="margin: 0 0 5% 0;">
                                    <div class="card d-lg-flex" style="width: 70%;margin: 0 auto;box-shadow: 0px 10px 14px 6px rgba(133,135,150,0.14);">
                                        <div class="card-body" style="width: 100%;margin: 0 auto;">
                                            <h4 class="card-title" style="text-align: center;margin: 32px;color: var(--bs-green);"><strong>Form Tambah Mahasiswa</strong></h4>
                                            <form class="d-flex d-lg-flex flex-column align-items-lg-center" action="<?= site_url('mahasiswa/simpan')?>" method ="post">
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0;"><span class="input-group-text">Nim Mahasiswa</span><input class="form-control" type="text" name="nim"></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Nama Mahasiswa</span><input class="form-control" type="text" name="nama"></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Program Studi</span><input class="form-control" type="text" name="prodi"></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Nomor Hp</span><input class="form-control" type="text" name="nohp"></div>
                                                <input class="btn btn-success" type="submit" style="width: 200px;margin: 0 0 40px 0;color:white" value="Tambah"></input>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>