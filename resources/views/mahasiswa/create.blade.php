<!DOCTYPE html>
<html lang="en">

<head>

    <title>UTS laravel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </form>
    </div>
    </div>
    </div>
    </nav>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Form Mahasiswa</h4>
                <form action=""method="POST">

                <div class="row">
                    <div class="col-sm-6">
                        <label for="">NPM</label>
                        <input type="number" name="npm" class="form-control" placeholder = "Input NPM ">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" placeholder ="input Npm">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="">prodi</label>
                        <select name="prodi" class="form-control">
                            <option>sains data</option>
                            <option>Teknologi Informasi</option>
                            <option>Sistem Informasi</option>
                        </select>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-sm-6">
                        
                      <button class="btn btn-primary" style="width:100%" type="submit">simpan</button>
                    </div>
                    <div class="col-sm-6">
                        <a href="/mahasiswa" class="btn btn-secondary" style="width: 100%">kembali</a>
                    </div>
                </div>
                </form> 
            </div>
            
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
