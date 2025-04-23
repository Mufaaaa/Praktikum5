<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listproduk()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Smartphone'],
            ['id' => 3, 'produk' => 'Headphone']
        ];

        return view('list_product', ['data' => $data]);
    }
}
