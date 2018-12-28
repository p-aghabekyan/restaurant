<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storehols;
use App\Languages;
use Illuminate\Http\Request;
use App\Hols;
use App\Restaurants;

class HolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hols::with('restaurants.languages')->paginate(10);
        return view('admin.hols.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Restaurants::with('languages')->get();
        return view('admin.hols.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storehols $request)
    {
        $max = Hols::max('order');
        if ($max == null) {
            $max = 0;
        }
        $max++;
        $data = new Hols();
        $data->volume = $request->volume;
        $data->restaurant_id = $request->restaurant_id;
        $data->order = $max;
        $data->save();
        foreach($request->data as $key){
            if(empty($data['description'])){
                $data['description'] = '';
            }
            $data->languages()->attach($key['language_id'] ,['name' => $key['name'], 'description' => $key['description']]);
        }
        return redirect('admin/hols');

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
        $data['data'] = Hols::with('languages')->find($id);
        $data['languages'] = Languages::all();
        $data['restaurants'] = Restaurants::with('languages')->get();
        return view('admin.hols.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Hols::with('languages')->find($id);
        $data->volume = $request->volume;
        $data->restaurant_id = $request->restaurant_id;
        $data->save();
        foreach($data->languages as $key){
            $data->languages()->detach($key['language_id']);
        }
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach([$key['language_id'] => ['name' => $key['name'], 'description' => $key['description']]]);
            }
        }
        return redirect('admin/hols');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hols::find($id)->delete();
        return redirect('admin/hols');
    }
}
