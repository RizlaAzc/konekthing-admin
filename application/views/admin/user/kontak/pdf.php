<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pdf</title>
</head><body>

    <h3 style="text-align: center;">DATA KONTAK</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nomor Telepon</th>
            <th>Email</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($queryAllPrdk as $row) {
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->telepon ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->lokasi ?></td>
                <td><?= $row->deskripsi ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body></html>