<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'T-shirt',
                'price'=>'230',
                'description'=>'Lorem ....',
                'image'=>asset('/img/pro5.jpg'),
            ],
            1=>[
                'id'=>2,
                'name'=>'Pant',
                'price'=>'250',
                'description'=>'Lorem ....',
                'image'=>asset('/img/pro6.jpg'),
            ],
            2=>[
                'id'=>3,
                'name'=>'Mobile',
                'price'=>'280',
                'description'=>'Lorem ....',
                'image'=>asset('/img/pro7.jpg'),
            ],
            3=>[
                'id'=>4,
                'name'=>'Laptop',
                'price'=>'290',
                'description'=>'Lorem ....',
                'image'=>asset('/img/pro8.jpg'),
        ],
        ];
    }
}
