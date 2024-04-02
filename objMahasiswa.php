<?php 
require_once 'Mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Daftar Nilai Ujian
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>

    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center fw-bold">DAFTAR NILAI UJIAN</h2>
            </div>
            <div class="card-body">
                <form action="objMahasiswa.php" method="post" class="mb-4">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <label for="nim" class="col-form-label">NIM</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="nim" class="form-control" aria-describedby="nim" name="nim" required
                                value="<?php if(isset($_POST['nim'])){ echo $_POST['nim']; } ?>">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <label for="nama" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="nama" class="form-control" aria-describedby="nama" name="nama"
                                required value="<?php if(isset($_POST['nama'])){ echo $_POST['nama']; } ?>">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <label for="kuliah" class="col-form-label">Kuliah</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="kuliah" class="form-control" aria-describedby="kuliah" name="kuliah"
                                required value="<?php if(isset($_POST['kuliah'])){ echo $_POST['kuliah']; } ?>">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <label for="makul" class="col-form-label">Mata Kuliah</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="makul" class="form-control" aria-describedby="makul" name="makul"
                                required value="<?php if(isset($_POST['makul'])){ echo $_POST['makul']; } ?>">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <label for="nilai" class="col-form-label">Nilai</label>
                        </div>
                        <div class="col-8">
                            <input type="number" id="nilai" class="form-control" aria-describedby="nilai" name="nilai"
                                required value="<?php if(isset($_POST['nilai'])){ echo $_POST['nilai']; } ?>">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                        </div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <div class="row mt-4">

                    <div class="col-12">
                        <h2 class="text-center fw-bold mb-4">
                            Daftar Nilai Ujian Mahasiswa
                        </h2>
                        <hr>
                        <a href="objMahasiswa.php" class="btn btn-primary mb-3">
                            <- Kembali </a>
                                <table class="table table-dark table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Kuliah</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nilai</th>
                                            <th>Grade</th>
                                            <th>Pedikat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <?php 

                            // get form data
                           if(isset($_POST['nim'])){
                                $nim = $_POST['nim'];
                                $nama = $_POST['nama'];
                                $kuliah = $_POST['kuliah'];
                                $makul = $_POST['makul'];
                                $nilai = $_POST['nilai'];

                                // create object
                                $mhs1 = new Mahasiswa($nim, $nama, $kuliah, $makul, $nilai);

                                // get result
                                $grade = $mhs1->getGrade();
                                $predikat = $mhs1->getPredikat();
                                $status = $mhs1->getStatus();
    
                           }

                             ?>
                                    <tbody class="text-center">
                                        <tr>
                                            <?php if(isset($_POST['nim'])){ ?>
                                            <td><?php echo $mhs1->nim; ?></td>
                                            <td><?php echo $mhs1->nama; ?></td>
                                            <td><?php echo $mhs1->kuliah; ?></td>
                                            <td><?php echo $mhs1->mataKuliah; ?></td>
                                            <td><?php echo $mhs1->nilai; ?></td>
                                            <td><?php echo $grade; ?></td>
                                            <td><?php echo $predikat; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>