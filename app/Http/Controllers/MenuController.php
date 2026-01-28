<?php

namespace Tutorialspoint\Http\Controllers;



use Illuminate\Http\Request;
use Tutorialspoint\Menu;

class MenuController extends Controller
{

     public function __construct()
    {
        $this->middleware('article');
    }


    public function index()
    {
        return view('admin_folder.menus.index');
    }

    public function list()
    {
       


            return Menu::whereNull('parent_id')
        ->orderBy('order')
        ->with(['children.parent','children.children.parent'])
        ->get();
    }

    public function store(Request $request)
    {
        Menu::create([
            'title' => $request->title,
            'url' => $request->url,
            'parent_id' => $request->parent_id,
            'order' => Menu::where('parent_id',$request->parent_id)->count()
        ]);
        return response()->json(['success'=>true]);
    }

    public function update(Request $request,$id)
    {
        Menu::findOrFail($id)->update($request->only('title','url','parent_id'));
        return response()->json(true);
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return response()->json(true);
    }

    public function toggle($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->is_active = !$menu->is_active;
        $menu->save();
        return response()->json(true);
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $item) {
            Menu::where('id',$item['id'])->update([
                'order'=>$item['order'],
                'parent_id'=>$item['parent_id']
            ]);
        }
        return response()->json(true);
    }
}
