<div class="container mt-5">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Form Tambah Buku</h3>
            <form method="POST" action="<?= BASEURL ?>buku/menambahkan">
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="Penerbit">Penerbit</label>
                    <input type="text" class="form-control" id="Penerbit" name="penerbit">
                </div>
                <div class="form-group">
                    <label for="Pengarang">Pengarang</label>
                    <input type="text" class="form-control" id="Pengarang" name="pengarang">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Buku</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>