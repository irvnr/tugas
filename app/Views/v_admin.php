<div class="panel panel-default panel-table">
    <div class="panel-heading" style="height: 60px;">

        <div style="float: left;">
            <h3 class="m-t-0 m-b-5">Tabel Akun Users</h3>
        </div>

        <!-- <div style="float: right;">
          <a href="#" class="btn btn-primary btn-pill m-w-120  "><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Tambah data</a>
        </div> -->

    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead style="background-color: black;     color: white;">
                    <tr>
                        <th width="30px">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th width="100px">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $row) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['password']; ?></td>
                            <td align="center">
                                <a href="/admin/delete/<?= $row['id']; ?>" class="btn btn-danger m-w-50" title="Hapus Data"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>