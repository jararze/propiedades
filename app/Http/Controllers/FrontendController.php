<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{

    /**
     * Display index in web Page for all users.
     */
    public function index(): View
    {
        $types = PropertyType::where('status', 1)->orderBy('id', 'asc')->get();
        $num = [];
        foreach ($types as $type) {
            $num[$type->id] = count(Property::where('propertytype_id', $type->id)->get());
        }
        $featuredProperties = Property::where('featured', 1)->orderBy('id', 'desc')->take(3)->get();
        $hotProperties = Property::where('hot', 1)->orderBy('id', 'desc')->take(3)->get();
        $agents = User::where('status', 'active')->where('role', 'agent')->orderBy('id', 'desc')->get();
        return view('index', [
            'propertyTypes' => $types,
            'count' => $num,
            'featuredProperties' => $featuredProperties,
            'hotProperties' => $hotProperties,
            'agents' => $agents,
        ]);
    }

    /**
     * Display Signin in web Page for all users.
     */
    public function userSignin(): View
    {
        return view('frontend.pages.signin');
    }
}
