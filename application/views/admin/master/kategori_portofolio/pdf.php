<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pdf</title>
</head><body>

    <h3 style="text-align: center;">DATA KATEGORI PORTOFOLIO</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi Kategori</th>
        </tr>

        <?php
        $no = 1;
        foreach ($queryAllPrdk as $row) {
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->kategori_portofolio ?></td>
                <td><?= $row->deskripsi ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body></html>