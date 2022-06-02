<?php

namespace App\Http\Services\Product;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductAdminService
{
    public function getMenu(){
        return Menu::where('active',1)->get();
    }

    public function isValidPrice($request){
        if($request->input('price') != 0 && $request->input('price_sale') != 0 && $request->input('price_sale') >= $request->input('price')){
            Session::flash('error','Gia khuyen mai phai nho hon gia goc');
            return false;
        }

        if($request->input('price_sale') != 0 && (int) $request->input('price') == 0 ){
            Session::flash('error','Vui long nhap gia goc');
            return false;
        }

        return true;

    }

    public function insert($request){
        $isValidPrice = $this->isValidPrice($request);
        if($isValidPrice === false) return false;

        try{
            $request->except('_token');
            Product::create($request->all());

            Session::flash('success','Them san pham moi thanh cong');
        }catch(\Exception $err){
            Session::flash('error','Them san pham khong thanh cong, kiem tra lai');
            \Log::info($err->getMessage());
            return false;
        }

        return true;
    }

    public function get(){
        return Product::with('menu')->orderByDesc('id')->paginate(15);
    }

    public function update($request, $product){
        $isValidPrice = $this->isValidPrice($request);
        if($isValidPrice === false) return false;

        try{
            $product->fill($request->input());
            $product->save();
            Session::flash('success','Cap nhat san pham thanh cong');
        }catch(\Exception $err){
            Session::flash('error','khong thanh cong, kiem tra lai');
            \Log::info($err->getMessage());
            return false;
        }

        return true;
    }

    public function delete($request){
        $product = Product::where('id', $request->input('id'))->first();
        if($product){
            $product->delete();
            return true;
        }
        return false;
    }

}