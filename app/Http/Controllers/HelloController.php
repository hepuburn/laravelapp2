<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;


class HelloController extends Controller
{
    private $fname;

    function __construct()
    {
    }

    public function index(int $id = -1)
    {
        MyService::setId($id);
        $data = [
            'msg'=> MyService::say(),
            'data'=> MyService::alldata()
        ];
        return view('hello.index', $data);
    }


    public function other()
    {
        $data = [
            'name' => 'Taro',
            'mail' => 'taro@yamada',
            'tel' => '090-999-999',
        ];
        $query_str = http_build_query($data);
        $data['msg'] = $query_str;
        return redirect()->route('hello', $data);
    }
}
