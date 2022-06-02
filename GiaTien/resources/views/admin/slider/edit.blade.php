@extends('admin.main')

@section('content')
<form action="" method="POST">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Tiêu đề</label>
                    <input type="text" name="name" value="{{ $sliders->name }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="menu">Đường dẫn</label>
                    <input type="text" name="url" value="{{ $sliders->url }}" class="form-control" >
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh slider</label>
            <input type="file" class="form-control"  id="upload">
            <div id="image_show">
                <a href="{{$sliders->thumb}}"><img src="{{$sliders->thumb}}" width="100px"></a>
            </div>
            <input type="hidden" name="thumb" value="{{$sliders->thumb}}" id="thumb">
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="menu">Sắp xếp</label>
                <input type="number" name="sorb_by" value="{{$sliders->sorb_by}}" class="form-control" >
            </div>
        </div>

        <div class="form-group">
            <label>Hiển Thị Slider?</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" {{$sliders->active == 1 ? 'checked=""':''}}>
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="0" id="deactive" name="active" {{$sliders->active == 0 ? 'checked=""':''}} >
                <label for="deactive" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Cập nhật Slider</button>
    </div>
    @csrf
</form>
@endsection
