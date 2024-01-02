<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>produk
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    h1{
        margin-top:20px;
    }
    table{
        align-items: center;
    }
    </style>

</head>
<body>
    <h1 id="produk">halaman produk</h1>
        <style>
            table, th, td {
              border:1px solid black;
              background-color:blueviolet;
            }
            </style>
            <body>
            
            <h2>Tabel Produk</h2>
            
            <table style="width:80%">
              <tr>
                <th>kode produk</th>
                <th>nama produk</th>
                <th>jenis produk</th>
                <th>harga</th>
              </tr>
              <tr>
                <td>BRG001</td>
                <td>Pena</td>
                <td>alat tulis</td>
                <td>20000</td>
              </tr>
              <tr>
                <td>BRG002</td>
                <td>BUku</td>
                <td>alat tulis</td>
                <td>15000</td>
              </tr>
            </table>

        </tbody>
           
        </table>
        <form>
            <fieldset disabled>
              <legend>Disabled fieldset example</legend>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                  <option>Disabled select</option>
                </select>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">UTS laravel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="home" href=>Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="produk">produk</a>
                    </li>
                   
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
            </div>
          </nav>
    </tr>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>