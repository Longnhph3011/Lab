<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa</title>
</head>

<body>
    <form action="{{ route('users.updatePostUsers') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $user->id }}" name="idUser">
        <label for="nameUser">Tên User</label>
        <input type="text" name="nameUser" value="{{ $user->name }}">

        <label for="emailUser">Email User</label>
        <input type="text" name="emailUser" value="{{ $user->email }}">

        <label for="phongBanUser">Tên Phòng ban</label>

        <select name="phongBanUser" id="">
            @foreach ($phongBan as $value)
                <option @if ($user->phongban_id === $value->id) selected @endif value= "{{ $value->id }}">
                    {{ $value->ten_donvi }}

                </option>
            @endforeach
        </select>
        <label for="tuoiUser">Tuổi</label>
        <input type="text" name="tuoiUser" value="{{ $user->tuoi }}">
        <label for="songaynghi">Số ngày nghỉ</label>
        <input type="text" name="songaynghi" value="{{ $user->songaynghi }}">
        <button class="btn btn-success" type="submit">Sửa</button>

    </form>
</body>

</html>
