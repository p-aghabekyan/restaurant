<?php

namespace App\Http\Controllers;

use App\Languages;
use Illuminate\Http\Request;
use App\Menus;
use App\Categories;
use App\Http\Requests\StoreMenu;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menus::with('categories')->paginate(10);
        return view('admin.menus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Categories::all();
        return view('admin.menus.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenu $request)
    {
        $data = new Menus();
        $data->pic = $request->pic;
        $data->category_id = $request->category;
        $data->save();
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['name' => $key['name']]);
            }
        }
        return redirect('/admin/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['menus'] = Menus::with('languages')->find($id);
        $data['categories'] = Categories::all();
        $data['languages'] = Languages::all();
        return view('admin.menus.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMenu $request, $id)
    {
        $data = Menus::with('languages')->findOrFail($id);
        $data->pic = $request->pic;
        $data->category_id = $request->category;
        $data->save();
        foreach($data->languages as $key){
            $data->languages()->detach($key['language_id']);
        }
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['name' => $key['name']]);
            }
        }
        flash('You have successfully updated')->success();
        return redirect('/admin/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = menus::find($id);
        $data->delete();
        flash('Deleted Successfully')->success();
        return redirect()->back();
    }
}
