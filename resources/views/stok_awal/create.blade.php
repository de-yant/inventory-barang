<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="TambahDataBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
            <button type="reset" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('databarang.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama_barang" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Harus di isi ...">
                </div>
                <div class="form-group">
                    <label for="kategory" class="form-label">Kategori</label>
                    <select name='kategory' id='kategory' class="form-control">
                        <option selected disabled value="">Pilih Kategori</option>
                        @foreach ($kategory as $kty )
                        <option value="{{ $kty->id }}">{{ $kty->kategory }}</option>
                        @endforeach
                    </select>
                <div class="form-group">
                    <label for="satuan" class="form-label">Satuan</label>
                    <select name='satuan' id='satuan' class="form-control">
                        <option selected disabled value="">Pilih Satuan</option>
                        <option value="Pcs">Pcs</option>
                        <option value="Kg">Kg</option>
                        <option value="Meter">Meter</option>
                        <option value="Liter">Liter</option>
                        <option value="Unit">Unit</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Harus di isi ...">
                </div>
                <div class="form-group">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
