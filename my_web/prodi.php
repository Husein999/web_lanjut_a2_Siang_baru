<?php
require "functions.php";
?>

<h2>Ini adalah halaman Program Studi</h2>

<p id="berhasil"></p>

<div class="row">
    <div class="col-sm-6">
        <label for="">Nama Program Studi</label>
        <input type="text" class="form-control" id="nama_prodi">
        <p class="peringatan" id="lihat_nama_prodi"></p>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>

    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Prodi</th>
                    <th>Nama Prodi</th>
                    <th>Update</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach (prodi() as $p): ?>
                <tr>
                    <td><? = $no++ ?></td>
                    <td><? = $p["id"]; ?></td>
                    <td><? = $p["nama_prodi"]; ?></td>
                    <td><? = date ("d F Y, H:i", strtotime($p["edit"];))?></td>
                    <td>
                        <button class="btn btn-sm btn-success"> Edit </button>
                        <button class="btn btn-sm btn-danger"> Hapus </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $("#simpan_prodi").click(function() {
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $("#lihat_nama_prodi").text("Nama Prodi masih kosong!")
        } else {
            $.ajax({
                type: "POST",
                url: "controllers/simpan_prodi.php",
                data: "nama_prodi=" + nama_prodi,
                success: function(data) {
                    if (data == "berhasil") {
                        $("#berhasil").html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successfully!</strong> Data berhasil ditambahkan.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `)
                        $("#halaman_body").load("prodi.php")
                    } else {
                        $("#berhasil").html(`
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Warning!</strong> Data pernah ditambahkan sebelumnya.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `)
                    }
                }
            })
            $("#lihat_nama_prodi").text("")
        }
    })
</script>