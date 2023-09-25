<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Configuration;
use App\Models\ContactForm;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Testimony;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        $property = Property::where('is_project', "0")->where('status', 1)->whereNotNull('latitude')->whereNotNull('longitude')->get();
        $featuredProperties = Property::where('featured', 1)->orderBy('id', 'desc')->where('status', 1)->take(3)->get();
        $hotProperties = Property::where('hot', 1)->where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        $agents = User::where('status', 'active')->where('role', 'agent')->whereNot('id', 22)->orderBy('id', 'desc')->get();
        $confPrincipalImage = Configuration::where('name', 'principal-image')->firstOrFail();
        $properties = Property::where("status", 1)->where('is_project', "0")->get();
        $configuration = Configuration::all();
        $testimonies =Testimony::all();

        $cities = City::orderBy('name', 'asc')->get();


        return view('index', [
            'propertyTypes' => $types,
            'count' => $num,
            'featuredProperties' => $featuredProperties,
            'hotProperties' => $hotProperties,
            'agents' => $agents,
            'confPrincipalImage' => $confPrincipalImage,
            'cities' => $cities,
            'properties' => $properties,
            'configuration' => $configuration,
            'testimonies' => $testimonies,
            'locations'=>$property
        ]);
    }

    /**
     * Display Signin in web Page for all users.
     */
    public function userSignin(): View
    {
        return view('frontend.pages.signin');
    }


    public function about(): View
    {
        return view('frontend.pages.about');
    }


    public function contact(): View
    {
        return view('frontend.pages.contact');
    }


    public function maincontact(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required' ],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        toastr()->success('Mensaje enviado, satisfactoriamente', '!Bien!');
        return redirect()->back();


    }


}
