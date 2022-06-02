@extends('admin.main')

@section('head')
    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tên Sản phẩm</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"  placeholder="Nhập tên">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Thuộc Danh Mục</label>
                    <select class="form-control" name="menu_id">
                        @foreach($menus as $menu)
                        <option value="{{$menu->id}}" {{$product->menu_id == $menu->id ? 'selected':''}} >{{$menu->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div> 
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá bán lẻ</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá bán buôn</label>
                    <input type="number" name="price_wholesale" value="{{ $product->price_wholesale }}" class="form-control" >
                </div>
            </div> 
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Giá khuyến mãi</label>
                    <input type="number" name="price_sale" value="{{$product->price_sale}}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tồn kho</label>
                    <input type="number" name="stock" value="{{$product->stock}}" class="form-control" >
                </div>
            </div> 
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Mã code</label>
                    <input type="number" name="code" value="{{$product->code}}" class="form-control" >
                </div>
            </div> 
        </div>

        <div class="form-group">
            <label>Chi tiết</label>
            <textarea name="content" id="content" class="form-control">{{$product->content}}</textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="upload">
            <div id="image_show">
                <a href="{{$product->thumb}}" target="_blank">
                    <img src="{{$product->thumb}}" width="100px">
                </a>
            </div>
            <input type="hidden" name="thumb" value="{{$product->thumb}}" id="thumb">
        </div>

        <div class="form-group">
            <label>Hiển Thị Sản Phẩm?</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" {{$product->active == 1 ? 'checked=""':''}}>
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="0" id="deactive" name="active" {{$product->active == 0 ? 'checked=""':''}}>
                <label for="deactive" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Cập nhật Sản Phẩm</button>
    </div>
    @csrf
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection