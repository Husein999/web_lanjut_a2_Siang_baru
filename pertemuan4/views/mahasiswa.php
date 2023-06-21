<div class="row">
<div class="col-sm-8">

                <p id="alert_berhasil"></p>

                <h4>Data Mahasiswa</h4>
                <table class="table table-striped table-dark">
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tanggal lahir</th>
                        <th>Jurusan</th>
                    </tr>
                    <tr>
                        <td>98765</td>
                        <td>Luffy</td>
                        <td>21/09/2000</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>98766</td>
                        <td>Jeno</td>
                        <td>23/04/2000</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>98767</td>
                        <td>Renjun</td>
                        <td>23/03/2000</td>
                        <td>Teknik Informasi</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <h4>Form Input Mahasiswa</h4>
                <div class="form-group">
                    <label for="">NPM</label>
                    <input type="number" id="npm" class="form-control" placeholder="Input NPM">
                    <p id="lihat_npm" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa">
                    <p id="lihat_nama_mahasiswa" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label for="">Tanggal lahir</label>
                    <input type="date" id="tgl_lahir" class="form-control">
                    <p id="lihat_tgl_lahir" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="" id="jurusan" class="form-control">
                        <option value="" selected>Pilih Jurusan</option>
                        <option>Sistem Informasi</option>
                        <option>Teknik Informasi</option>
                        <option>Data Sains</option>
                    </select>
                    <p id="lihat_jurusan" class="peringatan"></p>
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-danger">Batal</button>
                    <button class="btn btn-success" id="simpan">Simpan</button>
                </div>
            </div>
            </div>