<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $location = 'Nepal';

        $key = '057ec68a5c706a7a924fac1ed4f2f1aa';

        $response = Http::get('http://api.openweathermap.org/data/2.5/forecast?id=524901&appid={$key}&q={$location}&units=metric');

        return view('weather' , [
            'response' => $response->json()
        ]);
    }
}
