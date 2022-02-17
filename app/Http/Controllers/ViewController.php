<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data =[];
    private $products;

    public function index(){
        return View('demo');
    }
    public function bitm(){
        $this->city = 'DHAKA';
        $this->mobile = '12345678';
        $this->data = [
            0=>[
                'name'=>'hasib',
                'city'=>'feni',
                'mobile'=>'123890',
            ],
            1=>[
                'name'=>'habib Sir',
                'city'=>'dhaka',
                'mobile'=>'12389990',
            ],
            2=>[
                'name'=>'harun',
                'city'=>'chittagong',
                'mobile'=>'12333890',
            ]
        ];

        return View('bitm',[
            'a'=>$this->city,
            'b'=>$this->mobile,
            'c'=>$this->data
            ]);
    }
    public function about(){
        $this->products = Product::getAllProduct();
//        return $this->products;
        return View('about',['products'=>$this->products]);
    }
    public function contact(){
        return View('contact');
    }
    public function detail($myselfid)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $myselfid)
            {
                return view('detail',['data'=> $item]);
            }
        }
//        return view('detail');
    }
}
