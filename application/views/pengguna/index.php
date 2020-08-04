<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pengguna Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('pengguna/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Pass</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nip</th>
                        <th>Perusahaan</th>
                        <th>Alamat</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($pengguna as $p) { ?>
                        <tr>
                            <td><?php echo $p['id']; ?></td>
                            <td>
                                <?php
                                if ($p['role'] == 1) {
                                    echo "admin";
                                } elseif ($p['role'] == 2) {
                                    echo "Investigasi";
                                } else {
                                    echo "Client";
                                }

                                ?>
                            </td>
                            <td><?php echo $p['pass']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td><?php echo $p['email']; ?></td>
                            <td><?php echo $p['nip']; ?></td>
                            <td><?php echo $p['perusahaan']; ?></td>
                            <td><?php echo $p['alamat']; ?></td>
                            <td> <img src="../gambar/<?php echo $p['pic'] ?>" style="width:80px;height:120px;"> </td>
                            <td>
                                <a href="<?php echo site_url('pengguna/edit/' . $p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('pengguna/remove/' . $p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>