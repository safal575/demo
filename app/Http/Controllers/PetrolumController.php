<?php

namespace App\Http\Controllers;

use App\Models\Petrolum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetrolumController extends Controller
{
    public function index()
        {
            $response = Http::get('https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json');

            $mydata = json_decode($response->body());
            foreach($mydata as $data){
                $product = new Petrolum();
                $product->year = $data->year;
                $product->petroleum_product = $data->petroleum_product;
                $product->sale = $data->sale;
                $product->country = $data->country;
                $product->save();
            }
            return redirect('/products');

    }

    public function show(Petrolum $product)
    {
        $product = Petrolum::all();
        return view('petroleum.products',['product' => $product]);
    }

}