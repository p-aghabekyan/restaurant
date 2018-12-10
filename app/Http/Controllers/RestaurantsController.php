<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRestaurant;
use App\Restaurants;
class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaurants::paginate(10);
        return view('admin.restaurants.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurant $request)
    {
        $data = new Restaurants();
        $data->contact_phone = json_encode(['address' => $request->address, 'phone' => $request->phone]);
        $data->order = $request->order;
        $data->save();
        return redirect('/admin/restaurants');
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
        $data = Restaurants::find($id);
        return view('admin.restaurants.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRestaurant $request, $id)
    {
        $data = Restaurants::find($id);
        $data->contact_phone = json_encode(['address' => $request->address, 'phone' => $request->phone]);
        $data->order = $request->order;
        $data->save();
        flash('You have successfully updated')->success();
        return redirect('/admin/restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
