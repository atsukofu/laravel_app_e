<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {
       $msg = 'please input text:';
       $keys = [];
       $values = [];
       if($request->isMethod('post')){
           $form = $request->all();
           $keys = array_keys($form);
           $values = array_values($form);
       }
       $data = [
           'msg' => $msg,
           'keys' => $keys,
           'values' => $values,
       ];
       return view('hello.index', $data);
    }

    public function other(Request $request) {
        $ext = '.' . $request->file('file')->extension();
        Storage::disk('local')->putFileAs('files', $request->file('file'), 'upload' . $ext);
        return redirect()->route('hello');
    }
}