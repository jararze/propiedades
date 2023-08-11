<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Facility;
use App\Models\FacilityProperty;
use App\Models\MultiImage;
use App\Models\Property;
use App\Models\PropertyMessage;
use App\Models\User;
use App\Models\Validation;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PropertyMessageController extends Controller
{
    /**
     * Display the inner property  Page for all users.
     */
    public function send_message(Request $request)
    {
//        dd($request);
        $message = new PropertyMessage();
        $message->property_id = $request->property_id;
        $message->user_id = $request->user_id;
        $message->agent_id = $request->agent_id;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        if ($message->save()) {
            toastr()->success('Mensaje enviado correctamente');
        } else {
            toastr()->error('Ocurrio un error por favor trate nuevamente');
        }

        return redirect()->back()->with('status', 'updated');
    }


    /**
     * Handle an incoming authentication request.
     */
    public function validatePhone(Request $request)
    {
        $prop_id = $request->property_id;
        $exists = Validation::where("email", $request->email)->where("property_id", $request->property_id)->get();
        if (count($exists) == 0) {
            $validation = new Validation();
            $validation->property_id = $request->property_id;
            $validation->email = $request->email;
            $validation->phone = $request->phone;

            $phone = $phone = User::where('id', function ($query) use ($prop_id) {
                $query->select('agent_id')
                    ->from('properties')
                    ->where('id', $prop_id)
                    ->distinct();
            })->value('phone');
            $msg = $validation->save();
        } else {
            $msg = false;
            $phone = 0;
        }
//        dd($phone);


        return response()->json(['success' => $msg, 'phone' => $phone]);
    }

}
