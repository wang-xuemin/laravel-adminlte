<?php

namespace App\Http\Controllers\Laravel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Laravel\Laravel;

class LaravelController extends Controller
{
    public $request;
    public $model;
    
    const USERS = array(
        'name' => '名字',
        'age' => 20
    );
    
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->model = new Laravel();
    }
    
    public function index()
    {
        var_dump('<pre>', $this->model->getAll());exit;
        // var_dump($this->request->all());exit;
        $name = $this->request->all();
        return view('Laravel/index', ['name' => $name]);
    }
    
    public function list()
    {
        var_dump(self::USERS);exit;
    }
    
    public function detail()
    {
        echo 1111;exit();
    }
    
    public function showDetail()
    {
        echo 1111;exit();
    }
    
}
