<div class="container mt-5">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="cari buku" id="keyword" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="list-group ">
                <?php foreach ($data["buku"] as $row) :?>
                <li class="list-group-item">
                    <?= $row["judul"]; ?>
                    <a href="#" class="badge badge-danger badge-pill float-right ml-1">delete</a>
                    <a href="#" class="badge badge-primary badge-pill float-right ml-1">update</a>
                    <a href="<?= BASEURL ?>buku/detail/<?= $row["id"]; ?>"
                        class="badge badge-info badge-pill float-right ml-1">detail</a>
                </li>
                <?php endforeach; ?>
        </div>
    </div>
</div>