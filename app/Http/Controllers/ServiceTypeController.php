<?php

namespace App\Http\Controllers;

use App\Languages;
use App\ServiceType;
use App\StaffType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = ServiceType::all();
        return view('admin.service-type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['staff_type'] = StaffType::all();
        return view('admin.service-type.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ServiceType();
        $data->staff_type_id = $request->staff_type_id;
        $data->name = $request->name;
        $data->save();
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['name' => $key['name']]);
            }
        }
        flash('You have successfully stored')->success();
        return redirect('/admin/service-types');
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
        $data['data'] = ServiceType::with('languages')->find($id);
        $data['staff_type'] = StaffType::all();
        $data['languages'] = Languages::all();
        return view('admin.service-type.edit', compact('data'));

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
        $data = ServiceType::with('languages')->findOrFail($id);
        $data->staff_type_id = $request->staff_type_id;
        $data->name = $request->name;
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
        return redirect('/admin/service-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
