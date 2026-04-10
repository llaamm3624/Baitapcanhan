<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HocPhanController extends Controller
{
    private $data = [
        [
            'ma_hp' => 'HP001',
            'ten_hp' => 'Lập trình Python',
            'so_tin_chi' => 3,
            'so_tiet_thuc_hanh' => 30,
            'hoc_ky' => 1,
            'nam_hoc' => '2025-2026',
            'khoa_phu_trach' => 'Công nghệ thông tin',
            'loai_hoc_phan' => 'Bắt buộc'
        ],
        [
            'ma_hp' => 'HP002',
            'ten_hp' => 'Cơ sở dữ liệu',
            'so_tin_chi' => 3,
            'so_tiet_thuc_hanh' => 20,
            'hoc_ky' => 2,
            'nam_hoc' => '2025-2026',
            'khoa_phu_trach' => 'Công nghệ thông tin',
            'loai_hoc_phan' => 'Tự chọn'
        ]
    ];

 public function index()
{
    $hocphans = $this->data;
    return view('hocphan.index', compact('hocphans'));
}
}