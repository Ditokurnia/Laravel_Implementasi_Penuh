<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-md-4 offset-4 rounded border border-dark">
                <h3 class="fw-bold text-center mb-3 mt-3">Halaman Register User</h3>
                <form action="{{ route('register_user') }}" method="POST">
                    @csrf()
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1 mb-1">Nama Lengkap</label>
                        <input type="text" class="form-control mt-1" id="exampleFormControlInput1" name="nama"
                            placeholder="Masukkan Nama Lengkap kamu">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control mt-1" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" placeholder="Masukkan Email kamu">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control mt-1" id="exampleInputPassword1"
                            placeholder="Masukkan Password kamu" name="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1 mb-1">Jenis Kelamin</label>
                        <select class="form-control mt-1 form-select" id="exampleFormControlInput1" name="gender"
                            placeholder="name@example.com">
                            <option value="0" selected>Pilih Jenis Kelamin kamu</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1 mb-1">Umur</label>
                        <input type="number" class="form-control mt-1" id="exampleFormControlInput1" name="age"
                            placeholder="Masukkan Umur kamu">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1 mb-1">Tanggal Lahir</label>
                        <input type="date" class="form-control mt-1" id="exampleFormControlInput1" name="birth"
                            placeholder="Masukkan Tanggal Lahir kamu">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlInput1 mb-1">Alamat</label>
                        <textarea class="form-control mt-1" id="exampleFormControlInput1" name="alamat" rows="3"
                            placeholder="Masukkan Alamat kamu"></textarea>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-success mx-auto mb-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>