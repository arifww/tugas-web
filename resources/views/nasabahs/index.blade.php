<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="main-content">
          <div class="container">
            <div class="card mt-5">
              <div class="card-header">
                <h3>Data Nasabah</h3>
              </div>
              <div class="card-body">
                @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <p>
                  <a class="btn btn-primary" href="{{ route('nasabahs.create') }}">Input Nasabah Baru</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>Nama Belakang</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Avatar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($nasabahs as $nasabah)
                      <tr>
                        <td>{{ $nasabah->id }}</td>
                        <td>{{ $nasabah->email }}</td>
                        <td>{{ $nasabah->password }}</td>
                        <td>{{ $nasabah->nama }}</td>
                        <td>{{ $nasabah->namabelakang }}</td>
                        <td>{{ $nasabah->alamat }}</td>
                        <td>{{ $nasabah->telepon }}</td>
                        <td>{{ $nasabah->avatar }}</td>
                        <td>
                          <a href="{{ route('nasabahs.edit', ['id' => $nasabah->id]) }}" class="btn btn-secondary btn-sm">edit</a>
                          <a href="#" class="btn btn-sm btn-danger" onclick="
                            event.preventDefault();
                            if (confirm('Anda yakin hapus data ini?')) {
                              document.getElementById('delete-row-{{ $nasabah->id }}').submit();
                            }">
                            delete
                          </a>
                          <form id="delete-row-{{ $nasabah->id }}" action="{{ route('nasabahs.destroy', ['id' => $nasabah->id]) }}" method="POST">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6">
                            Tidak ada data Nasabah!
                        </td>
                      </tr>
                    @endforelse
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