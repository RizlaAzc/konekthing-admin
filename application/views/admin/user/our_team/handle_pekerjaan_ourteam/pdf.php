<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pdf</title>
</head><body>

    <h3 style="text-align: center;">DATA HANDLE PEKERJAAN OUR TEAM</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Tahun Dari</th>
            <th>Tahun Sampai</th>
            <th>Deskripsi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($queryAllPrdk as $row) {
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama_project ?></td>
                <td><?= $row->tahun_dari ?></td>
                <td><?= $row->tahun_sampai ?></td>
                <td><?= $row->deskripsi ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body></html>