<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <a class="btn btn-success" href="{{ route('users.addUsers') }}">Thêm mới</a>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phòng Ban</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUsers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->ten_donvi }}</td>
                        <td>

                            <a class="btn btn-primary" href="{{ route('users.updateUser', $item->id) }}">Chỉnh sửa</a>
                            <a class="btn btn-danger" href="{{ route('users.deleteUser', $item->id) }}"
                                onclick="return confirm('Ban co chac muon xoa?')">Xóa</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
