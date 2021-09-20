<div class="profile">
    <div class="row gutter-sm">
        <div class="col-md-12 col-sm-5">
            <div class="p-about m-b-20">
                <div class="pa-padding">
                    <div class="pa-avatar">
                        <img src="<?= base_url('fotoo/' . $profil->foto) ?>" alt="" width="200" height="200">
                    </div>
                    <div class="pa-name"><?= $profil->nama ?>
                        <i class="zmdi zmdi-check-circle text-success m-l-5"></i>
                    </div><br>


                    <!-- <form class="form-horizontal" action="<?php echo base_url('auth/updateprofil') ?>" method="POST"> -->

                    <?= form_open_multipart(base_url('user/edit')); ?>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1" style="float: left;">Nama Lengkap</label>
                            <div class="col-sm-7">
                                <input id="form-control-1" class="form-control" type="hidden" name="id" value="<?= session()->get('id') ?>">
                                <input id="form-control-1" class="form-control" type="text" name="nama" value="<?= $profil->nama ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1" style="float: left;">Email</label>
                            <div class="col-sm-7">
                                <input id="form-control-1" class="form-control" type="email" name="email" value="<?= $profil->email ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1" style="float: left;">Password</label>
                            <div class="col-sm-7">
                                <input id="form-control-1" class="form-control" type="text" name="password" value="<?= $profil->password ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1" style="float: left;">Upload Foto</label>
                            <div class="col-sm-7">
                                <input id="form-control-1" class="form-control" type="file" name="file_upload">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-1" style="float: left;"></label>
                            <div class="col-sm-7 control-label" for="form-control-1">
                                <button class="btn btn-primary form-control" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                    <!-- </form> -->
                </div>

            </div>
        </div>
    </div>
</div>