<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihans()
    {
        return view('latihan.index');
    }
    public function addLatihan(Request $request)
    {
        $request->validate(
            [
                'name_latihan' => 'required|unique:Latihans',
                'price_latihan' => 'required',

            ],
            [
                'name_latihan.required' => 'Name is required',
                'name_latihan.unique' => 'Latihan Already Exists',
                'price_latihan.required' => 'Price_latihan is required',
            ]
        );
    }
}
