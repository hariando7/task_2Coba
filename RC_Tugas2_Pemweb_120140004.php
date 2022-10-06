<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hariando Muthi</title>
    <link rel="stylesheet" href="RC_Tugas2_Pemweb_120140004.css">
</head>

<body>
    <center>
        <form class="container" action="RC_Tugas2_Pemweb_120140004.php" method="get">
            <h1>Data Hasil Produk</h1>
            <center>
                <table border="3px">
                    <tr>
                        <td>Nama Lengkap: </td>
                        <td><?php echo $_GET["username"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Barang: </td>
                        <td><?php echo $_GET["warnabarang"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang: </td>
                        <td><?php echo $_GET["jumlahbarang"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3px">Terimakasih</td>
                    </tr>
                </table>
            </center>
        </form>
    </center>
</body>

</html>