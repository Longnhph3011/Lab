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
    <a class="btn btn-success" href="{{ route('sanpham.addSanPham') }}">Thêm mới</a>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Danh mục</th>
                    <th>Price</th>
                    <th> View</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listSanPham as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->namecate }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->view }}</td>


                        <td>

                            <a class="btn btn-primary" href="{{ route('sanpham.updateSanPham', $item->id) }}">Chỉnh
                                sửa</a>
                            <a class="btn btn-danger" href="{{ route('sanpham.deleteSanPham', $item->id) }}"
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