    <!-- GAMBAR SLIDER -->
    <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/baju.jpg') ?>" class="card-img-top" height="600">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/baju1.jpg') ?>" class="card-img-top" height="600">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/celana.jpg') ?>" class="card-img-top" height="600">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div> 
    <!-- GAMBAR PRODUK -->
    <div class="row text-center mt-4">
        <?php foreach ($baju as $brg) : ?>

            <div class="card ml-3" style="width: 17rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" height="300">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-2">Rp. <?php echo number_format($brg->harga), 0,',','.' ?></span><br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg, 
                    '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/' .$brg->id_brg, 
                    '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    
                </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>