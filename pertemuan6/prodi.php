<?php
require "functions.php";
?>

<h2>Ini adalah halaman Program Studi</h2>

<div class="row">
    <div class="col-sm-6">
        <label for="">Nama Program Studi</label>
        <input type="text" class="form-control" id="nama_prodi">
        <p class="peringatan" id="lihat_nama_prodi"></p>
    </div>
    <div class="col-sm-6">
        <button class="btn btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>

<script>
    $("#simpan_prodi").click(function(){
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $("#lihat_nama_prodi").text("Nama Prodi Masih Kosong!")
        }else{
            $("#lihat_nama_prodi").text("")
        }
    })
</script>