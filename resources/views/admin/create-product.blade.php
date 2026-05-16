<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
        }

        .card-form{
            border: none;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .left-side{
            background: #0d6efd;
            color: white;
        }

        .logo-circle{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: white;
            padding: 20px;
        }

        .btn-save{
            border-radius: 12px;
            padding: 10px;
            font-weight: bold;
        }

        input{
            border-radius: 12px !important;
            padding: 12px !important;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card card-form">

                <div class="row g-0">

                    <!-- KIRI -->
                    <div class="col-md-5 left-side d-flex flex-column justify-content-center align-items-center p-5">

                        <img src="https://cdn-icons-png.flaticon.com/512/3081/3081559.png"
                            class="logo-circle mb-4">

                        <h2>Tambah Product</h2>

                        <p class="text-center">
                            Tambahkan product baru dengan tampilan modern dan menarik
                        </p>

                    </div>

                    <!-- KANAN -->
                    <div class="col-md-7 bg-white p-5">

                        <h3 class="mb-4">Form Product</h3>

                        <form action="/product" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label>Nama Product</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama product">
                            </div>

                            <div class="mb-4">
                                <label>Harga Product</label>
                                <input type="number" name="harga" class="form-control" placeholder="Masukkan harga">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 btn-save">
                                Simpan Product
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>