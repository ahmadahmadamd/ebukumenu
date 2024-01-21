<?php
require_once 'header_template.php';

$query_select = 'select * from users';
$run_query_select = mysqli_query($conn, $query_select);
?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Users</h3>

        <div class="card">
            <a href="users_add.php" class="btn" title="tambah data"><i class="fa fa-plus"></i></a>
            <table class="table">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($run_query_select) > 0) { ?>
                        <?php $nomer = 1; ?>
                        <?php while ($row = mysqli_fetch_array($run_query_select)) { ?>

                            <tr>
                                <td align="center"><?= $nomer++ ?></td>
                                <td><?= $row['namalengkap'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td align="center">
                                    <a href="users_edit.php?id=<?= $row['iduser'] ?>" class="btn" title="Edit Data">
                                        <i class="fa fa-edit"></i></a>
                                    <a href="?delete=<? $row['iduser'] ?>" class="btn" onclick="return confirm('yakin ?')" title="Hapus Data">
                                        <i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="4">Tidak ada data</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>

<?php
require_once 'footer_template.php'; ?>