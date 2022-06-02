<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;
    protected $menus;

    public function __construct(MenuService $menuService){
        $this->menuService = $menuService;
    }
    public function index(Request $request, $id, $slug=''){
        $menu = $this->menuService->getId($id);
        $products = $this->menuService->getProduct($menu,$request); 
        return view('menu',[
            'title' => $menu->name,
            'products' => $products,
            'menu' => $menu,
           // 'menus' => $menus
        ]);
    }

    public function index_parent(Request $request, $id, $slug=''){
        //$menus = $this->menuService->getIds($id);
        //dd($menus);
       // $products = $this->menuService->getProduct($menu,$request); 
        return view('menus',[
            'title' =>'Xin lựa chọn loại sản phẩm',
            //'products' => $products,
            'menus' => $this->menuService->getIds($id),
           // 'menus' => $menus
        ]);
    }
}
