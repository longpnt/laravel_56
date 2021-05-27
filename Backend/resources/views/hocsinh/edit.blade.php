@extends('hocsinh.layout')

@section('content')
<div class="form-group mb-3">
    <a href="/" class="btn btn-success pull-right">Quay lại danh sách</a>
</div>

<div class="col-md-6 col-md-offset-3 form-group">
    <form action="/update" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $item->id }}">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Tên</label>
            <input value="{{ $item->name }}" type="text" class="form-control" name="name" placeholder="nhập tên">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Ngày Sinh</label>
            <input type="date" value="{{ $item->birthday }}" class="form-control" name="birthday" placeholder="nhập Ngày Sinh">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
            <input type="text" value="{{ $item->phone }}" class="form-control" name="phone" placeholder="nhập Số điện thoạ">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">CMND</label>
            <input type="text" value="{{ $item->person_id }}" name="person_id" class="form-control" placeholder="nhập CMND">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Lớp</label>
            <select value="{{ $item->class }}" name="class" class="form-control">
                <option value="{{ $item->class }}">{{ $item->class }}</option>
                <option value="10A1">10A1</option>
                <option value="10A2">10A2</option>
                <option value="10A3">10A3</option>
                <option value="11A1">11A1</option>
                <option value="11A2">11A2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Avatar</label>
            <input type="text" value="{{ $item->avatar }}" name="avatar" class="form-control" placeholder="nhập URL">
        </div>
        <button type="submit" class="btn btn-primary pull-right">Lưu</button>
    </form>
</div>

@endsection