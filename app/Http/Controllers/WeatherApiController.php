<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zttp\Zttp;

class WeatherApiController extends Controller
{
    public function index()
    {
        $response = Zttp::get('https://cors-anywhere.herokuapp.com/https://api.darksky.net/forecast/705649fe5200c09fe02eba094afba55c/37.8267,-122.4233');
        return $response->json();
    }
}
