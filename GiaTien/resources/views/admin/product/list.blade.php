@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá bán lẻ</th>
                <th>Giá bán buôn</th>
                <th>Giá khuyến mãi</th>
                <th>Tồn kho</th>
                <th>Mã code</th>
                <th>Active</th>
                <th>Update</th>
                <th style="width: 100px">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)    
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->menu->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price_wholesale}}</td>
                    <td>{{$product->price_sale}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->code}}</td>
                    <td>{!!\App\Helpers\Helper::active($product->active)!!}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="edit/{{$product->id}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" onclick="removeRow({{$product->id}},'/admin/products/destroy')"> 
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {!! $products->links()!!}
    
@endsection
