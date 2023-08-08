<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Response;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        if(Auth::check() !== null){
            $exists = Wishlist::where("user_id", $request->user_id)->where("property_id", $request->property_id)->get();
//            $exists = Wishlist::where("user_id", $request->user_id)->where("property_id", $request->property_id)->toSql();
            if(count($exists) == 0){

                $package = new Wishlist();
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
        $properties = Wishlist::where("user_id", Auth::user()->id)->get();
        return view('frontend.profile.wishlist', [
            'properties' => $properties,
        ]);
    }


    /**
     * Write code on Method
     *
     * @return \Illuminate\Http\RedirectResponse()
     */
    public function delete($id)
    {
        Wishlist::where('id', $id)->delete();
        toastr()->success('Propiedad deseada, eliminada');
        return back();
    }
}
