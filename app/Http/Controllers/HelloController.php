<?php

namespace App\Http\Controllers;

use App\MyClasses\MyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\containsOnly;
use App\Http\Controllers\PersonController;
use App\Models\Person;
use App\Jobs\MyJob;

class HelloController extends Controller
{
   public function index() {
        $data = [
            'msg' => 'This is Angular application',
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request) {
        $data = [
            'name' => 'Taro',
            'mail' => 'taroy@yamada',
            'tel' => '090-999-999',
        ];
        $query_str = http_build_query($data);
        $data['msg'] = $query_str;
        return redirect()->route('hello', $data);
    }

    public function json($id = -1){
        if($id == -1){
            return Person::get()->toJson();
        } else {
            return Person::find($id)->toJson();
        }
    }
}