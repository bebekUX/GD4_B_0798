<?php
    include '../component/sidebar.php';
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>ADD NEW DATA SERIES</h4><a href="../page/listSeriesPage.php?"onClick="return confirm( \'Apakah anda yakin Kembali?\')">
        <i class='fa fa-plus fa-3x'  style="color: green"></i> </a>
    </div>
    <hr>
<form action="../process/addSeriesProcess.php" method="post">
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input class="form-control" id="name" name="name" placeholder="Name">
    </div>

    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Genre</label>
        <!-- <input class="form-control" id="genre" name="genre" placeholder="Genre"> -->
        <select class="form-select" id="genre"  name="genre">
                    <option selected disabled >Select Genre</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Action">Action</option>
                  </select>

    </div>

    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Release</label>
        <input class="form-control" id="realese" name="realese" placeholder="Release">
    </div>
     
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Episode</label>
        <input class="form-control" id="episode" name="episode" placeholder="episode">
    </div>

    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Season</label>
        <input class="form-control" id="season" name="season" placeholder="Season">
    </div>

    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Synopsis</label>
        <input class="form-control" id="synopsis" name="synopsis" placeholder="Synopsis">
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary" name="TambahSeries">Tambah Series</button>
    </div>

</form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>