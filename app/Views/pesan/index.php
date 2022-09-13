<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket Wisata</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon-32x32.png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <header>

        <div class="menu">
            <ul>
                <li class="logo" style="height: 80px;">
                    <a href="" target="_blank">
                        <img class="primary-icon" src="/img/Logo.png">
                    </a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="#">Home</a></li>
                <li class="menu-item hidden"><a href="#carouselExampleIndicators">Tempat Wisata</a></li>
                <li class="menu-item hidden"><a href="#pesanTiket">Pesan Tiket</a></li>
                <li class="menu-item hidden"><a href="#daftarPesan">Daftar Pesan</a></li>
            </ul>
        </div>

    </header>

    <section>
        <div class="title">
            <h3>PEMESANAN TIKET WISATA KOTA TANGERANG</h3>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner " style="border-radius:10px;">
                <div class="carousel-item active">
                    <img src="../img/wisata1.jpg" class="d-block w-100" alt="Tebing Koja">
                    <div class="carousel-caption d-none d-md-block capborder">
                        <h5>Tebing Godzzila</h5>
                        <p>Sebuah Wisata diKabupaten Tangerang yang terkenal dengan Tebing menjulang Tinggi.</p>
                        <center><a class="btn btn-primary" href="https://goo.gl/maps/h6KbHCD74kRdxywJ7" target="__blank" role="button">Cek Lokasi</a></center>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/wisata2.jpg" class="d-block w-100" alt="Talaga Biru">
                    <div class="carousel-caption d-none d-md-block capborder">
                        <h5>Talaga Biru</h5>
                        <p>Wisata yang menyajikan pemandangan Talaga Biru, Sangat cocok untuk berlibur sejenak.</p>
                        <center><a class="btn btn-primary" href="https://goo.gl/maps/uYrqgPe83ReaauXJ8" target="__blank" role="button">Cek Lokasi</a></center>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/wisata3.png" class="d-block w-100" alt="Scientia Park">
                    <div class="carousel-caption d-none d-md-block capborder">
                        <h5>Scientia Square Park</h5>
                        <p>Wisata ramah untuk Keluarga berlibur diakhir pekan, di sebuah Taman didaerah Serpong Tangerang Selatan </p>
                        <center><a class="btn btn-primary" href="https://goo.gl/maps/brPCH9ZENXMEnGLc8" target="__blank" role="button">Cek Lokasi</a></center>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section>
        <!-- Button trigger modal -->
        <center><button id="pesanTiket" type="button" class="btn-lg button1 btn-primary center-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Pesan Tiket Wisata
            </button>
        </center>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('pesan/store') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nik" class="form-label">Nomor Identitas</label>
                                <input type="number" class="form-control" id="nik" name="nik">
                            </div>
                            <div class="form-group mb-3">
                                <label for="p_number" class="form-label">Nomor HP</label>
                                <input type="number" class="form-control" id="p_number" name="p_number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="wisata_id" class="form-label">Tempat Wisata</label>
                                <select class="form-control" id="wisata_id" name="wisata_id">
                                    <option selected="" hidden>select..</option>
                                    <option selected="" hidden>1</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tgl_kunjungan" class="form-label">Tanggal Kunjungan</label>
                                <input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="p_dewasa" class="form-label">Pengunjung Dewasa</label>
                                <input type="text" class="form-control" id="p_dewasa" name="p_dewasa">
                            </div>
                            <div class="form-group mb-3">
                                <label for="p_anak" class="form-label">Pengunjung Anak-Anak</label>
                                <input type="text" class="form-control" id="p_anak" name="p_anak">
                            </div>
                            <div class="form-group mb-3">
                                <label for="t_bayar" class="form-label">Total Bayar</label>
                                <input type="text" class="form-control" id="t_bayar" name="t_bayar">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <a>Saya dan/atau Rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telahditetapkan</a>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Hitung Total Bayar</button>
                        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="card shadow mb-4">
            <!-- /.card-header -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Daftar Pengunjung</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="daftarPesan" width="100%" cellspacing="0">
                        <thead class="bg-success text-white">
                            <tr align="center">
                                <th width="5%">No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No HP</th>
                                <th>Wisata</th>
                                <th>Tanggal Kunjung</th>
                                <th>Pengunjung Dewasa</th>
                                <th>Pengunjung Anak</th>
                                <th>Total Bayar</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pemesanan as $data) : ?>
                                <tr align="center">
                                    <td><?= $no ?></td>
                                    <td align="left"><?= $data['nama']; ?></td>
                                    <td align="left"><?= $data['nik']; ?></td>
                                    <td align="left"><?= $data['p_number']; ?></td>
                                    <td align="left"><?= $data['wisata_id']; ?></td>
                                    <td align="left"><?= $data['tgl_kunjungan']; ?></td>
                                    <td align="left"><?= $data['p_dewasa']; ?></td>
                                    <td align="left"><?= $data['p_anak']; ?></td>
                                    <td align="left"><?= $data['t_bayar']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Print</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="environment">

            <p>Page rendered in {elapsed_time} seconds</p>

            <p>Environment: <?= ENVIRONMENT ?></p>

        </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Source Program Pemesanan Tiket Wisata Kota Tangerang</p>

        </div>

    </footer>

</body>

</html>