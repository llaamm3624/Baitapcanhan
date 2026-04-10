@extends('layouts.app')

@section('content')

<h2>Danh sách học phần</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Mã HP</th>
        <th>Tên học phần</th>
        <th>Tín chỉ</th>
        <th>Thực hành</th>
        <th>Học kỳ</th>
        <th>Năm học</th>
        <th>Khoa</th>
        <th>Loại</th>
    </tr>

    @foreach($hocphans as $hp)
    <p>{{ $hp['ma_hp'] }}</p>
    <tr>
        <td>{{ $hp['ma_hp'] }}</td>
        <td>{{ $hp['ten_hp'] }}</td>
        <td>{{ $hp['so_tin_chi'] }}</td>
        <td>{{ $hp['so_tiet_thuc_hanh'] }}</td>
        <td>{{ $hp['hoc_ky'] }}</td>
        <td>{{ $hp['nam_hoc'] }}</td>
        <td>{{ $hp['khoa_phu_trach'] }}</td>
        <td>{{ $hp['loai_hoc_phan'] }}</td>
    </tr>
    @endforeach

</table>

@endsection