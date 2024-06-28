<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $value) : ?>
                <tr>
                    <td><?php $value['id'] ?></td>
                    <td><?php $value['name'] ?></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>