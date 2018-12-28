<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Languages;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::paginate(10);
        return view('admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $data = new Categories();
        $data->name = $request->name;
        $data->save();
        foreach($request->data as $key){
            if(empty($key['description'])){
                $key['description'] = '';
            }
            $data->languages()->attach($key['language_id'], ['name' => $key['name'], 'description' => $key['description']]);
        }
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Categories::with('languages')->find($id);
        $data['languages'] = Languages::all();
        return view('admin.categories.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $data = Categories::with('languages')->find($id);
        $data->name = $request->name;
        $data->save();
        foreach($data->languages as $key){
            $data->languages()->detach($key['language_id']);
        }
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                if (empty($key['description'])) {
                    $key['description'] = '';
                }
                $data->languages()->attach($key['language_id'], ['name' => $key['name'], 'description' => $key['description']]);
            }
        }
        flash('You have successfully updated')->success();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = categories::find($id);
        $data->delete();
        flash('Deleted Successfully')->success();
        return redirect()->back();
    }
}
