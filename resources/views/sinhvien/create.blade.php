@extends('layouts.app')

@section('content')

<h2>Thêm sinh viên</h2>

<form method="POST" action="{{ route('sinhvien.store') }}">
    @csrf

    Mã SV: <input type="text" name="ma_sv"><br><br>
    Họ tên: <input type="text" name="ho_ten"><br><br>
    Năm sinh: <input type="text" name="nam_sinh"><br><br>

    <button type="submit">Lưu</button>
</form>

@endsection