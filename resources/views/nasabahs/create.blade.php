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
            <form method="post" action="{{ route('nasabahs.store') }}">
              @csrf
              <div class="card mt-5">
                <div class="card-header">
                  <h3>New Nasabah</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <div class="alert-title"><h4>Maaf!</h4></div>
                          Ada kesalahan data.
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div> 
                    @endif

                    @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                      <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@domain.com">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control" name="password" value="{{ old('password') }}"  placeholder="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"  placeholder="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Belakang</label>
                      <input type="text" class="form-control" name="namabelakang" value="{{ old('namabelakang') }}"  placeholder="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}"  placeholder="">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Telepon</label>
                      <input type="text" class="form-control" name="telepon" value="{{ old('telepon') }}"  placeholder="08111111111">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Avatar</label>
                      <input type="text" class="form-control" name="avatar" value="{{ old('avatar') }}"  placeholder="1234">
                    </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" type="submit">Create</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>