<?php
//contoh array asosiatif
$student=array(
    array(
        "name"=>"John Doe",
        "age"=>20,
        "gender"=>"male",
        "address"=>"123 main stress",
        "phone"=>"555-1234"
    ),
    array(
        "name"=>"Jane smith",
        "age"=>22,
        "gender"=>"female",
        "address"=>"456 oak Avenue",
        "phone"=>"555-6789"
    ),
    array(
        "name"=>"Bob Johnson",
        "age"=>21,
        "gender"=>"male",
        "address"=>"789 Elm stress",
        "phone"=>"555-9999"
    ),
    array(
        "name"=>"Mardiansyah",
        "age"=>26,
        "gender"=>"male",
        "address"=>"Telaga",
        "phone"=>"0823-4323-4430"
    ),

);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<table>
    <!-- Header Tabel -->
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>No.Telpon</th>
        <th>Alamat</th>
    </thead>
    <!-- Isi Tabel -->
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($student as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age']; ?></td>
            <td><?= $row['gender']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['address']; ?></td>
        </tr>
        <?php endforeach ; ?>
    </tbody>
</table>
</html>
