<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    private $data = [
        [
            'id' => 1,
            'ma_sv' => 'SV001',
            'ho_ten' => 'Nguyễn Văn A',
            'nam_sinh' => 2003,
            'so_dt' => '0987123456',
            'email' => 'a@gmail.com',
            'dia_chi' => 'Hà Nội'
        ],
        [
            'id' => 2,
            'ma_sv' => 'SV002',
            'ho_ten' => 'Trần Văn B',
            'nam_sinh' => 2002,
            'so_dt' => '0123456789',
            'email' => 'b@gmail.com',
            'dia_chi' => 'Hải Phòng'
        ]
    ];

    // Hiển thị danh sách
    public function index()
    {
        return view('sinhvien.index', ['sinhviens' => $this->data]);
    }

    // Form thêm
    public function create()
    {
        return view('sinhvien.create');
    }

    // Lưu (fake)
    public function store(Request $request)
    {
        return redirect()->route('sinhvien.index');
    }

    // Xóa (fake)
    public function delete($id)
    {
        return redirect()->route('sinhvien.index');
    }
}