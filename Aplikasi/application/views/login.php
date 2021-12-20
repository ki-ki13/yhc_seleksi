<body class="bg-gradient-primary" style="background: var(--bs-success);">
    <div class="container">
    <?php if ($this->session->flashdata('salah_usrname')){ ?>
                            <script>
                                Swal.fire({
                                    title: "Maaf",
                                    text: "<?php echo $this->session->flashdata('salah_usrname'); ?>",
                                    timer: 3000,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php }
                    if ($this->session->flashdata('salah_pass')) {?>
                       <script>
                                Swal.fire({
                                    title: "Maaf",
                                    text: "<?php echo $this->session->flashdata('salah_pass'); ?>",
                                    timer: 3000,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php } ?>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5" style="height: 100%;">
                    <div class="card-body p-0">
                        <div class="row" style="margin: 0;height: 100%;">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/illus.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Selamat Datang!</h4>
                                    </div>
                                    <form class="user" action="<?= site_url('auth/proses_login')?>" method="post">
                                        <div class="mb-3"><input class="form-control form-control-user" type="text"  placeholder="Masukkan username" name="username"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Masukkan password" name="password"></div><button class="btn btn-success d-block btn-user w-100" type="submit" style="color: white">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>