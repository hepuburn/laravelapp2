<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Person;
use Illuminate\Support\Facades\Storage;
use App\MyClasses\MyService;


class HelloController extends Controller
{
    private $fname;

    function __construct()
    {
       $this->fname = 'hello.txt';
    }

    public function index(MyService $myservice)
    {
        $data = [
            'msg'=> $myservice->say(),
            'data'=> $myservice->data()
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
