<div class="container-fluid">
                    
                            <div class="row">
                                <div class="col" style="margin: 0 0 5% 0;">
                                    <div class="card d-lg-flex" style="width: 70%;margin: 0 auto;box-shadow: 0px 10px 14px 6px rgba(133,135,150,0.14);">
                                        <div class="card-body" style="width: 100%;margin: 0 auto;">
                                            <h4 class="card-title" style="text-align: center;margin: 32px;color: var(--bs-green);"><strong>Form Edit Nilai</strong></h4>
                                            <form class="d-flex d-lg-flex flex-column align-items-lg-center" action="<?= site_url('nilai/update')?>" method ="post">
                                                <input type="hidden" name="id_nilai" id="id_nilai" value="<?= $nilai->Id_nilai; ?>"/>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0;"><span class="input-group-text">Nama Mahasiswa</span><input class="form-control" type="text" name="nama" value="<?= $nilai->Nama?>" disabled></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Matakuliah</span><input class="form-control"  type="text" name="matakuliah" value="<?= $nilai->Matakuliah?>" disabled></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Nilai</span><input class="form-control" id="nilai" type="text" name="nilai" value="<?= $nilai->Nilai?>" oninput="calculate()"></div>
                                                <div class="input-group d-lg-flex justify-content-lg-center" style="width: 80%;margin: 0 0 40px 0 ;"><span class="input-group-text">Grade</span><input class="form-control" id="grade" type="text" name="grade" value="<?= $nilai->Grade?>"></div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a href="<?= site_url('nilai')?>" class="btn btn-danger" type="button" style="width: 200px;margin: 0 0 40px 0;color:white">Kembali</a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input class="btn btn-success" type="submit" style="width: 200px;margin: 0 0 40px 0;color:white" value="Ubah"></input>
                                                    </div>  
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <script>
                function calculate(){
                    var grade_val = document.getElementById('grade');
                    var nilai = document.getElementById('nilai').value;
                    if (nilai >= '85'){
                        grade_val.value = "A";
                    }else if (nilai >= '75' && nilai < '85') {
                        grade_val.value = "B";
                    }else if (nilai >= '65' && nilai < '75'){
                        grade_val.value = "C";
                    }else if(nilai >= '50' && nilai < '65'){
                        grade_val.value = "D";
                    }else{
                        grade_val.value = "E";
                    }
                }
            </script>