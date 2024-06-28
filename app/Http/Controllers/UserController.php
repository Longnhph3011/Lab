<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    function showUser()
    {
        //Câu 1: Lấy danh sách user ( select * from users)
        // $listUser = DB::table('users')->get();
        /////////////////////////
        //Câu 2: lấy thông tin user id=4 ( select * from users where id =4)
        // Cách 1
        // $result = DB::table('users')->where('id', '=', 4)->first();
        // $result =DB::table('users')->find(4);  --- chỉ dùng để tìm id
        // dd($result);
        //////////////////////////
        // Câu 3:Lấy thuộc tính 'name' của user có id = 16
        // $result = DB::table('users')->where('id', '=', 16)->value('name');
        // dd($result);
        ////////////////////////
        // Câu 4: Lấy danh sách id user của phòng ban 'Ban giám hiệu'
        // $idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', '%Ban giám hiệu%')
        //     ->value('id');
        // $result = DB::table('users')->where('phongban_id', '=', $idPhongBan)->pluck('id');
        // dd($result);
        ////////////////////////
        // Câu 5: Tìm user có độ tuổi lớn nhất trong công ty 
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->max('tuoi'))
        //     ->get();
        // return $result;
        /////////////////////////
        // Câu 6: Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->min('tuoi'))
        //     ->get();
        // dd($result);
        ///////////////////////
        // Câu 7: Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $result = DB::table('phongban')->where('ten_donvi', 'like', '%Ban giám hiệu')
        //     ->value('id');
        // $result2 = DB::table('users')->where('phongban_id', '=', $result)
        //     ->count();
        // dd($result2);
        /////////////////////////
        // Câu 8: Lấy danh sách tuổi các user 
        // $result = DB::table('users')->distinct()->pluck('tuoi');
        // dd($result);
        ////////////////////////
        // Câu 9: Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')
        // ->where('name', 'like', '%Khải')
        // ->orWhere('name', 'like', '%Thanh')
        //     ->get();
        // dd($result);
        //////////////////
        // Câu 10: Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $result = DB::table('phongban')->where('ten_donvi', 'like', '%Ban đào tạo')
        //     ->value('id');
        // $result2 = DB::table('users')->where('phongban_id', '=', $result)
        //     ->select('id', 'name', 'email')
        //     ->get();
        // dd($result2);
        /////////////////////
        // Câu 11: Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')->where('tuoi', '>=', 30)
        //     ->select('id', 'name', 'email', 'tuoi')
        //     ->orderBy('tuoi', 'asc')->get();
        // dd($result);
        ////////////////////
        // Câu 12: Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')
        //     ->select('name', 'id', 'tuoi', 'email')
        //     ->offset(5)
        //     ->limit(10)
        //     ->get();
        // dd($result);
        ////////////////////
        // Câu 13: Thêm 1 user mới
        // $data = [
        //     'name' => ' Long',
        //     'email' => 'longnhph41704@gmail.com',
        //     'phongban_id' => '1',
        //     'songaynghi' => '0',
        //     'tuoi' => '18',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ];
        // DB::table('users')->insert($data);
        //////////////////
        // Câu 14: Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        // $result = DB::table('phongban')->where('ten_donvi', 'like', '%Ban đào tạo')
        //     ->value('id');
        // $result2 = DB::table('users')->where('phongban_id', '=', $result)
        //     ->select('id', 'name', 'email')
        //     ->get();
        // foreach ($result2 as $value) {
        //     DB::table('users')->where('id', $value->id)->update([
        //         'name' => $value->name  .  'PĐT'
        //     ]);
        // }
        ///////////////////////
        // Câu 15 : Xóa user nghỉ trên 15 ngày
        $result = DB::table('users')->where('songaynghi', '>', '15')->delete();
    }
}
