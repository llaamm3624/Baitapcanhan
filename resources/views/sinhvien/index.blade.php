@extends('layouts.app')

@section('content')

<a href="{{ route('sinhvien.create') }}">+ Thêm sinh viên</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Năm sinh</th>
        <th>Hành động</th>
    </tr>

    @foreach($sinhviens as $sv)
    <tr>
        <td>{{ $sv['id'] }}</td>
        <td>{{ $sv['ma_sv'] }}</td>
        <td>{{ $sv['ho_ten'] }}</td>
        <td>{{ $sv['nam_sinh'] }}</td>
        <td>
            <a href="{{ route('sinhvien.delete', $sv['id']) }}">Xóa</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection