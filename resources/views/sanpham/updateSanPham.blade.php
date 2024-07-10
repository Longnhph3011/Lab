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
    <form class="form-control" action="{{ route('sanpham.updatePostSanPham') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $sanpham->id }}" name="idSanPham">
        <label for="namesp">Tên Sản Phẩm</label>
        <input type="text" name="namesp" value="{{ $sanpham->name }}">

        <label for="price">Giá</label>
        <input type="text" name="price" value="{{ $sanpham->price }}">
        <label for="view">View</label>
        <input type="text" name="view" value="{{ $sanpham->view }}">

        <label for="category_id">danh mục</label>

        <select name="category_id" id="">
            @foreach ($category as $value)
                <option @if ($sanpham->category_id === $value->id) selected @endif value= "{{ $value->id }}">
                    {{ $value->name }}</option>
            @endforeach
        </select>

        <button type="submit">Sửa</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
