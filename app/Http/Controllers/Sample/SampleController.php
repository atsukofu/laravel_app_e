<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller {
  public function index(Request $request){
    // $data = [
    //   'msg' => 'SAMPLE-CONTROLLER-INDEX!',
    // ];
    $data = config('sample.message');
    return view('hello.index', $data);
  }

  public function other(Request $request) {
    $data = [
      'msg' => 'SAMPLE-CNOTROLLER-OTHER!!',
    ];
    return view('hello.index', $data);
  }
}