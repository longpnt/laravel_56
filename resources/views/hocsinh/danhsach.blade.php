@extends('hocsinh.layout')

@section('content')
<a href="/store" class="btn btn-success pull-right">Thêm Học Viên</a>
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Số Điện Thoại</th>
            <th>Lớp học</th>
            <th>CMND</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <td><img class="avatar" src="{!!  $item->avatar !!}" alt=""></td>
            <td>{!! $item->name !!}</td>
            <td>{!! $item->birthday !!}</td>
            <td>{!! $item->phone !!}</td>
            <td>{!! $item->class !!}</td>
            <td>{!! $item->person_id !!}</td>
            <td><a href="/edit/{!! $item->id !!}">Cập nhật</a></td>
            <td><a href="/remove/{!! $item->id !!}">Xóa</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
