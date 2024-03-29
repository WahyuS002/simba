<header class="container-fluid grey1 navbar">
    <h4> <i class="fas fa-paw"></i> SIMBA </h4>
    <a href="<?= base_url('auth'); ?>">
        <h4 class="btn btn-2">UPLOAD LOMBA</h4>
    </a>
</header>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"> SISTEM INFORMASI LOMBA </h1>
        <p class="lead">Universitas Bengkulu</p>
    </div>
</div>



<ul class="nav justify-content-center text-center">
    <?php foreach ($kategori as $k) : ?>
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('home/kategori_lomba/') ?><?= $k['id_kategori'] ?>"> <i class="<?= $k['icon'] ?>"></i><br> <?= $k['kategori'] ?> </a>
        </li>
    <?php endforeach; ?>
</ul>

<div class="container-fluid ">
    <div class="row">
        <?php foreach ($katLomba as $kl) : ?>
            <?php if ($kl['id_lomba'] == 1) : ?>
                <?= redirect('home') ?>
            <?php else : ?>
                <div class="col-sm col-md-3">
                    <div class="col-lg-9 col-md-12 col-sm-12 text-center">
                        <div class="card-body" style="width: 18rem;">
                            <a href="<?= base_url('home/detail/') ?><?= $kl['id_lomba'] ?>">
                                <img src="<?= base_url() ?>/assets/img/lomba/<?= $kl['gambar'] ?>" class="card-img-top" alt="gambar2" style=" height:350px;">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $kl['judul_lomba'] ?></h5>
                                <p class="card-text text-truncate"><?= $kl['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>