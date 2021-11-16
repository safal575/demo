<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function store($data)
    {

    }
    public function index(Request $request)
    {
        $location = 'Nepal';

        $key = '057ec68a5c706a7a924fac1ed4f2f1aa';

        //$url = 'http://api.openweathermap.org/data/2.5/forecast?id=524901&appid={$key}&q={$location}&units=metric';

        $response = Http::get('https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json');

        $newData =  json_decode($response);
        $data = array($newData);
        foreach($newData as $datas){
            foreach($datas as $key => $value) {
                ddd($key,$value);
                // echo $key . " => " . $value . "<br>";
              }
        }
        
    }


}
