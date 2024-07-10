<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('users.addPostUser') }}" method="post">
        @csrf
        <label for="nameUser">Tên User</label>
        <input type="text" name="nameUser">

        <label for="emailUser">Email User</label>
        <input type="text" name="emailUser">

        <label for="phongBanUser">Tên Phòng ban</label>

        <select name="phongBanUser" id="">
            @foreach ($phongBan as $value)
                <option value= "{{ $value->id }}">{{ $value->ten_donvi }}</option>
            @endforeach
        </select>
        <label for="tuoiUser">Tuổi</label>
        <input type="text" name="tuoiUser">
        <button>Thêm</button>

    </form>
</body>

</html>
