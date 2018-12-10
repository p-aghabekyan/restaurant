<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Languages;
use App\Http\Requests\StoreLanguage;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Languages::paginate(10);
        return view('admin.languages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguage $request)
    {
        $data = new Languages();
        $data->name = $request->name;
        $data->code  = $request->code;
        $data->default = $request->default;
        $data->save();
        return redirect('/admin/languages');
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
        $data = Languages::find($id);
        return view('admin.languages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLanguage $request, $id)
    {
        $data = Languages::find($id);
        $data->name = $request->name;
        $data->code  = $request->code;
        $data->default = $request->default;
        $data->save();
        flash('You have successfully updated')->success();
        return redirect('/admin/languages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Languages::find($id);
        $data->delete();
        flash('Deleted Successfully')->success();
        return redirect()->back();
    }
}
