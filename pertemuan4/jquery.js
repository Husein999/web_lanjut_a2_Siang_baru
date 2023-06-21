$("#simpan").click(function(){
    var npm = $("#npm").val()
    if (npm == "") {
        $("#lihat_npm").text("NPM Masing kosong!")
    }else{
        $("#lihat_npm").text("")
    }

    var nama_mahasiswa = $("#nama_mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#lihat_nama_mahasiswa").text("Nama mahasiswa masih kosong!")
    }else{
        $("#lihat_nama_mahasiswa").text("")
    }

    var tgl_lahir = $("#tgl_lahir").val()
    if (tgl_lahir == "") {
        $("#lihat_tgl_lahir").text("Tanggal Lahir belum dipilih!")
    }else{
        $("#lihat_tgl_lahir").text("")
    }

    var jurusan = $("#jurusan").val()
    if (jurusan == "") {
        $("#lihat_jurusan").text("Jurusan belum dipilih!")
    }else{
        $("#lihat_jurusan").text("")
    }

    if (npm != "" && nama_mahasiswa != "" && tgl_lahir != "" && jurusan != "") {
        $("#alert_berhasil").html(`
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully!</strong> Data Berhasil ditambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)
    }

})