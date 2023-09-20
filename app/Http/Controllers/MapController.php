<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(Request $request)
    {
        $property = Property::where('is_project', "0")->where('status', 1)->get();
        return view("show-map",['locations'=>$property]);
    }
}
