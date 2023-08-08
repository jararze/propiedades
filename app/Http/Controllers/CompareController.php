<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Compare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CompareController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        if(Auth::check() !== null){
            $exists = Compare::where("user_id", $request->user_id)->where("property_id", $request->property_id)->get();
//            $exists = Wishlist::where("user_id", $request->user_id)->where("property_id", $request->property_id)->toSql();
            if(count($exists) == 0){

                $package = new Compare();
                $package->property_id = $request->property_id;
                $package->user_id = $request->user_id;

                $msg = $package->save();
            }else{
                $msg = false;
            }
        }else{
            $msg = "Debes iniciar sesión para grabar la propiedad en tu lista de deseados";
        }


        return response()->json(['success'=> $msg]);
    }


    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        $amenities = Amenities::where('status', 1)->orderBy('name', 'asc')->get();
        $properties = Compare::where("user_id", Auth::user()->id)->get();
        return view('frontend.profile.compare', [
            'properties' => $properties,
            'amenities' => $amenities,
        ]);
    }


    /**
     * Write code on Method
     *
     * @return \Illuminate\Http\RedirectResponse()
     */
    public function delete($id)
    {
        Compare::where('id', $id)->delete();
        toastr()->success('Propiedad comparativa, eliminada');
        return back();
    }
}
