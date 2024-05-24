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
                <h3 class="fw-bold text-center mb-3 mt-3">Halaman Dashboard User {{ $user->id }}</h3>
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <p class="fw-bold">Nama Akun</p>
                        <p class="fw-bold">Email</p>
                        <p class="fw-bold">Gender</p>
                        <p class="fw-bold">Umur</p>
                        <p class="fw-bold">Tanggal Lahir</p>
                        <p class="fw-bold">Alamat</p>
                    </div>
                    <div>
                        <p class="">{{ $user->name }}</p>
                        <p class="">{{ $user->email }}</p>
                        <p class="">{{ $user->gender }}</p>
                        <p class="">{{ $user->age }} tahun</p>
                        <p class="">{{ $user->birth }}</p>
                        <p class="">{{ $user->alamat }}</p>
                    </div>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf()
                    <div class="d-flex justify-content-center">
                        <div class="me-1">
                            <a href="{{ route('exportData') }}" type="submit" class="btn btn-info mx-auto mb-3">Export
                                Data</a>
                        </div>
                        <button type="submit" class="btn btn-danger mb-3">Logout</button>
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
