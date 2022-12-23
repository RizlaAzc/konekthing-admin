<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Pdf</title>
</head><body>

    <h3 style="text-align: center;">DATA OUR TEAM</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Kebangsaan</th>
            <th>Status</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>  
        </tr>

        <?php
        $no = 1;
        foreach ($queryAllPrdk as $row) {
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->deskripsi ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->jenis_kelamin ?></td>
                <td><?= $row->tempat_tanggal_lahir ?></td>
                <td><?= $row->kebangsaan ?></td>
                <td><?= $row->status ?></td>
                <td><?= $row->agama ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->telpon ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

</body></html>