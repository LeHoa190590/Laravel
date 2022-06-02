<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductAdminService;
use Illuminate\Http\JsonResponse;
use App\Models\Product;
use App\Http\Requests\Product\ProductRequest;

class ProductController extends Controller
{
    protected $productService;
    
    public function __construct(ProductAdminService $productService){
        $this->productService = $productService;
    }

    public function index()
    {
        return view('admin.product.list',[
            'title' => 'Danh sách sản phẩm',
            'products' => $this->productService->get()
        ]);
    }

    public function create()
    {
        return view('admin.product.add',[
            'title'=>'Thêm sản phẩm mới',
            'menus' => $this->productService->getMenu()
        ]);
    }

 
    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);
        return redirect()->back();
    }

    public function show(Product $product)
    {
        return view('admin.product.edit',[
            'title'=>'Chinh sua san pham',
            'product' => $product,
            'menus' => $this->productService->getMenu()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $result = $this->productService->update($request, $product);
        if($result){
            return redirect('/admin/products/list');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);
        if($result){
            return response()->json([
                'error'=> false,
                'message'=> 'Xoa thanh cong'
            ]);
        }
        return response()->json(['error'=>true]);

    }
}
