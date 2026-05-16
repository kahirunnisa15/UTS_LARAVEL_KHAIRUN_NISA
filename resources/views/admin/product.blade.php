<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f4f7fc;
        }

        .card-custom{
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .table thead{
            background: #0d6efd;
            color: white;
        }

        .btn-add{
            border-radius: 12px;
            padding: 10px 20px;
        }

        h1{
            font-weight: bold;
        }
    </style>

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>📦 Data Product</h1>

        <a href="/product/create" class="btn btn-primary btn-add">
            + Tambah Product
        </a>

    </div>

    <div class="card card-custom p-4">

        <table class="table table-hover align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Product</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>

                @forelse($products as $product)

                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nama }}</td>
                    <td>Rp {{ number_format($product->harga) }}</td>
                </tr>

                @empty

                <tr>
                    <td colspan="3" class="text-center text-muted">
                        Belum ada data product
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>