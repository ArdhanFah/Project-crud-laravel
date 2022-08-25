<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Produk</title>
  </head>
  <body>
    <h1 class="text-center mb-4 mt-4">Update Produk</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="{{route('produk.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="produk" class="form-label">Nama Produk</label>
                        <input type="text" value="{{ $data->produk }}" name="produk" class="form-control" id="produk" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="text"  value="{{ $data->harga }}" name="harga" class="form-control" id="harga">
                      </div>
                      <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Produk</label>
                        <input type="file"  value="{{ $data->gambar }}" name="gambar" class="form-control" id="gambar">
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
