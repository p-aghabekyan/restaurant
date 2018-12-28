<?php

namespace App\Http\Controllers;

use App\StaffType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStaffType;

class StaffTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StaffType::orderBy('id', 'DESC')->paginate(10);
        return view('admin.staff-type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffType $request)
    {
        $data = new StaffType();
        $data->name = $request->name;
        $data->save();
        return redirect('/admin/staff-types');
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
        $data = StaffType::findOrFail($id);
        return view('admin.staff-type.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStaffType $request, $id)
    {
        $data = StaffType::findOrFail($id);
        $data->name = $request->name;
        $data->save();
        return redirect('/admin/staff-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StaffType::find($id);
        $data->delete();
        flash('Deleted Successfully')->success();
        return redirect()->back();
    }
}
