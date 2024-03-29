<?php
require_once 'header_template.php';

?>

<div class="content">
    <div class="container">

        <h3 class="page-title">Tambah User</h3>

        <div class="card">

            <form action="" method="post">

                <div class="input-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama lengkap" class="input-control" required>
                </div>

                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="user" placeholder="Username" class="input-control" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="text" name="pass" placeholder="Password" class="input-control" required>
                </div>

                <div class="input-group">
                    <button type="button" onclick="window.location.href = 'users.php'" class="btn-back">Kembali</button>
                    <button type="submit" name="submit" class="btn-submit">Simpan</button>
                </div>

            </form>

            <?php
            if (isset($_POST['submit'])) {

                // proses inser data
                $query_insert = 'INSERT INTO users (namalengkap, username, password) VALUES
                ("' . $_POST['nama'] . '", "' . $_POST['user'] . '", "' . md5($_POST['pass']) . '")';

                $run_query_insert = mysqli_query($conn, $query_insert);

                if ($run_query_insert) {
                    echo 'simpan data berhasil';
                    header("Location: users.php");
                    exit();
                } else {
                    echo 'simpan data gagal';
                }
            }
            ?>

        </div>

    </div>
</div>

<?php
require_once 'footer_template.php'; ?>