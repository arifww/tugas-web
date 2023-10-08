<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <div class="card mt-5">
              <div class="card-header">
                <h3>UAS - Semester Antara 2023 | Pemrograman Web 2 | Kelompok 2</h3>
              </div>
              <div class="card-body">
                @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                               
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Role</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>Arif Wahyu Wicaksono</td>
                        <td>200401010037</td>
                        <td>Programmer</td>
                      </tr>  
                      <tr>
                        <td>Muchamad Iffan H</td>
                        <td>220401010157</td>
                        <td>Analis</td>
                      </tr>  
                      <tr>
                        <td>Aminatuz Zahra</td>
                        <td>210401070012</td>
                        <td>Dokumentasi</td>
                      </tr>                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>