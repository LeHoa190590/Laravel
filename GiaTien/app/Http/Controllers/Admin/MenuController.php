<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\JsonResponse;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $MenuService;

    public function __construct(MenuService $menuService){
        $this->menuService = $menuService;
    }

    public function create(){
       return view('admin.menu.add',[
           'title'=>'Them danh muc moi',
           'menus' => $this->menuService->getParent()
       ]);
    }

    public function store(CreateFormRequest $request){
       $this->menuService->create($request);

       return redirect()->back();
    }

    public function index(){
        return view('admin.menu.list',[
            'title' => 'Danh sách các Danh Mục',
            'menus' => $this->menuService->getAll()
        ]);
    }

    public function edit(Menu $menu){
        //dd($menu);
        return view('admin.menu.edit',[
            'title' => 'Chinh sua Danh Mục'.$menu->name,
            'menu' => $menu,
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function update(Menu $menu, CreateFormRequest $request){
        $this->menuService->update($request,$menu);

        return redirect('/admin/menu/list');
    }

    public function destroy(Request $request): JsonResponse
    {

        $result = $this->menuService->destroy($request);
    
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xoa thanh cong danh muc'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
