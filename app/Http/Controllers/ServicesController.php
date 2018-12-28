<?php

namespace App\Http\Controllers;

use App\Languages;
use App\Restaurants;
use App\Service;
use App\ServiceType;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Service::with('languages')->get();
        return view('admin.service.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['languages'] = Languages::all();
        $data['service_types'] = ServiceType::with('languages')->get();
        return view('admin.service.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Service();
        $data->service_type_id = $request->service_type_id;
        $data->save();
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['name' => $key['name']]);
            }
        }
        flash('You have successfully updated')->success();
        return redirect('/admin/services');
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
        $data['data'] = Service::with('languages')->find($id);
        $data['service_types'] = ServiceType::with('languages')->get();
        $data['languages'] = Languages::all();
        return view('admin.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Service::find($id);
        $data->service_type_id = $request->service_type_id;
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
        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id);
        return redirect('admin/services');
    }
}
