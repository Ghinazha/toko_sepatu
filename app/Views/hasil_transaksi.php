<!DOCTYPE html>
<html lang="en">

<head>
    <title>Full Width Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">TOKO SEPATU - Keterangan Pembelian</div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Nama Pembeli</th>
                            <td> <?= $nama; ?> </td>
                        </tr>
                        <tr>
                            <th scope="row">No Handphone</th>
                            <td><?= $hp; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">Merk Sepatu</th>
                            <td><?= $merk; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">Size</th>
                            <td><?= $size; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Harga</th>
                            <td> Rp. <?= $hrg; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>