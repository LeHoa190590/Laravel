@extends('admin.main')
@section('head')
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
<form action="" method="POST">

    <div class="card-body">

    <div class="form-group">
        <label for="menu">Tên Danh Mục</label>
        <input type="text" name="name" class="form-control"  placeholder="Nhập tên">
    </div>

    <div class="form-group">
        <label for="menu">Thuộc Danh Mục</label>
        <select class="form-control" name="parent_id">
            <option value="0">Danh mục cha</option>
            @foreach($menus as $menu)
            <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Chi tiết</label>
        <textarea name="content" id="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Hiển Thị Danh Mục?</label>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
            <label for="active" class="custom-control-label">Có</label>
        </div>
        <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" value="0" id="deactive" name="active" >
            <label for="deactive" class="custom-control-label">Không</label>
        </div>
    </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
    @csrf
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection