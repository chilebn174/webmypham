<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Components\Recusive;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function create()
    {
        $htmlOption = $this->getMenu($parentId = '');
        return view('admin.menu.add', compact('htmlOption'));
    }

    public function index()
    {
        $menus = $this->menu->latest()->paginate(5);
        return view('admin.menu.index', compact('menus'));
    }

    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }

    public function getMenu($parentId)
    {
        $data = $this->menu->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->recusive($parentId);
        return $htmlOption;
    }

    public function edit($id)
    {
        $menu = $this->menu->find($id);
        $htmlOption = $this->getMenu($menu->parent_id);

        return view('admin.menu.edit', compact('menu', 'htmlOption'));

    }

    public function update($id, Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('menus.index');

    }

    public function delete($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('menus.index');
    }
}
