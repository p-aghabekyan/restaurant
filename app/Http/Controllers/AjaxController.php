<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Languages;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AjaxController extends Controller
{
    public function getData(Request $request)
    {
        if ($request->data == 'address') {
            $data = Rest_Language::where('language_id', $request->id);
        }

        echo json_encode($data);
    }

    function getForm(Request $request)
    {
        $languages = Languages::all();
        $count = $request->count;
        $data['languages'] = $languages;
        $data['count'] = $count;
        if ($request->data == 'address') {
            return view('admin/ajax/getFormAddress', compact('data'));
        }elseif ($request->data == 'hols') {
            return view('admin/ajax/getFormHols', compact('data'));
        }elseif($request->data == 'categories'){
            return view('admin/ajax/getFormCategories', compact('data'));
        }elseif($request->data == 'menus' ){
            return view('admin/ajax/getFormMenus', compact('data'));
        }elseif($request->data == 'staff'){
            return view('admin/ajax/getFormStaff', compact('data'));
        }elseif($request->data == 'service_types'){
            return view('admin/ajax/getServiceTypes', compact('data'));
        }elseif($request->data == 'service'){
            return view('admin/ajax/getFormService', compact('data'));
        }
    }

    function changeLang(Request $request)
    {
        Session::put('lang', $request->lang);
    }

    public function getThis() {
        echo 'aasdasdasdasdasdass';
    }
}
