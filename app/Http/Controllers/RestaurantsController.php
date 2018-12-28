<?php

namespace App\Http\Controllers;

use App\Languages;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRestaurant;
use App\Restaurants;
use App\Rest_Language;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaurants::with('languages')->paginate(10);
        return view('admin.restaurants.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Languages::all();
        return view('admin.restaurants.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurant $request)
    {
        $data = new Restaurants();
        $data->contact_phone = $request->phone;
        $data->order = $request->order;
        $data->save();
        $insertedId = $data->id;
        foreach($request->data as $key){
            $data = new Rest_Language();
            $data->language_id = $key['language_id'];
            $data->address = $key['address'];
            $data->name = $key['name'];
            $data->restaurant_id = $insertedId;
            if(!empty($key['description'])){
                $data->description = $key['description'];
            }else{
                $data->description = '';
            }
            $data->save();
        }
        return redirect('/admin/restaurants');
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
        $data = Restaurants::with('languages')->find($id);
        return view('admin.restaurants.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRestaurant $request, $id)
    {
        $data = Restaurants::find($id);
        $data->contact_phone = $request->phone;
        $data->order = $request->order;
        $data->save();
        Rest_Language::where('restaurant_id', $id)->delete();
        foreach($request->data as $key){
            $data = new Rest_Language();
            $data->language_id = $key['language_id'];
            $data->address = $key['address'];
            $data->name = $key['name'];
            $data->restaurant_id = $id;
            if(!empty($key['description'])){
                $data->description = $key['description'];
            }else{
                $data->description = '';
            }
            $data->save();
        }
        flash('You have successfully updated')->success();
        return redirect('/admin/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Restaurants::find($id);
        $data->delete();
        flash('Deleted Successfully')->success();
        return redirect()->back();
    }

}
