<?php

namespace App\Http\Controllers;

use App\Languages;
use App\StaffType;
use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Staff::with('languages')->get();
        return view('admin.staff.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['languages'] = Languages::all();
        $data['staff_type'] = StaffType::all();
        return view('admin.staff.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Staff();
        $data->staff_type_id = $request->staff_type_id;
        $data->save();
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['firstname' => $key['firstname'], 'lastname' => $key['lastname'] ]);
            }
        }
        return redirect('/admin/staff');
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
        $data['data'] = Staff::with('languages')->find($id);
        $data['staff_type'] = StaffType::all();
        $data['languages'] = Languages::all();
        return view('admin.staff.edit', compact('data'));
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
        $data = Staff::with('languages')->find($id);
        $data->staff_type_id = $request->staff_type_id;
        $data->save();
        foreach($data->languages as $key){
            $data->languages()->detach($key['language_id']);
        }
        if (isset($request->data)) {
            foreach ($request->data as $key) {
                $data->languages()->attach($key['language_id'], ['firstname' => $key['firstname'], 'lastname' => $key['lastname'] ]);
            }
        }
        return redirect('/admin/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::find($id)->delete();
        return redirect('/admin/staff');
    }
}
