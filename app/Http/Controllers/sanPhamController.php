<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sanPhamController extends Controller
{
    public function listSanPham()
    {
        $listSanPham = DB::table('products')->join('category', 'category.id', '=', 'products.category_id')
            ->select('products.name', 'products.id', 'products.price', 'products.view', 'products.category_id', 'category.name as namecate')
            // ->select('*')
            ->orderBy('view', 'DESC')
            ->get();
        // return $listSanPham;
        return view('sanpham/listSanPham')->with([
            'listSanPham' => $listSanPham
        ]);
    }
    public function addSanPham()
    {
        $category = DB::table('category')->select('id', 'name')->get();
        return view('sanpham/addSanPham')->with(['category' => $category]);
    }
    public function addPostSanPham(Request $req)
    {
        $data = [
            'name' => $req->namesp,
            'price' => $req->price,
            'category_id' => $req->category_id,
            'view' => $req->view,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ];
        DB::table('products')->insert($data);
        return redirect()->route('sanpham.listSanPham');
    }
    public function deleteSanPham($idSanPham)
    {
        DB::table('products')->where('id', $idSanPham)->delete();
        return redirect()->route('sanpham.listSanPham');
    }
    public function updateSanPham($idSanPham)
    {
        $category = DB::table('category')->select('id', 'name')->get();
        $sanpham = DB::table('products')->where('id', $idSanPham)->first();
        return view('sanpham/updateSanPham')->with([
            'sanpham' => $sanpham,
            'category' => $category
        ]);
    }
    public function updatePostSanPham(Request $req)
    {
        $data = [
            'name' => $req->namesp,
            'price' => $req->price,
            'category_id' => $req->category_id,
            'view' => $req->view,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ];

        DB::table('products')->where('id', $req->idSanPham)->update($data);
        return redirect()->route('sanpham.listSanPham');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = DB::table('products')
            ->where('name', 'LIKE', "%{$query}%")
            ->get();

        return view('sanpham.listSanPham', ['listSanPham' => $products]);
    }
}
