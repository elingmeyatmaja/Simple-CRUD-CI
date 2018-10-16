<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Crud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Status</td>
            <td>Jurusan</td>
        </tr>
        <?php foreach ($content->result_array() as $key): ?>
            <tr>
                <td><?php echo $key['id'] ?></td>
                <td><?php echo $key['nama'] ?></td>
                <td><?php echo $key['status'] ?></td>
                <td><?php echo $key['jurusan'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>