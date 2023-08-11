<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use App\Models\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PotencialBuyerController extends Controller
{
    public function index(): view
    {
//        $values = Validation::orderBy('created_at', 'desc')->get();
//        foreach ($values as $posible) {
//            $countUser = User::where('email', $posible->email)->get();
//            $property = Property::where('id', $posible->property_id)->get();
//            if($countUser->count() > 0){
//                $is_user = $countUser[0]['id'];
//                $user_name = $countUser[0]['name'] . " " . $countUser[0]['lastname'];
//            }else{
//                $is_user = 0;
//                $user_name = "";
//            }
//            $matrix[] = array(
//                'id' => $posible->id,
//                'property_id' => $posible->property_id,
//                'email' => $posible->email,
//                'phone' => $posible->phone,
//                'is_user' => $is_user,
//                'property_name' => $property[0]['name'],
//                'user_name' => $user_name,
//            );
//
//        }
//        return view('backend.users.potential.index', [
//            'values' => $matrix,
//        ]);

        $values = Validation::orderBy('created_at', 'desc')->get();
        $userEmails = User::whereIn('email', $values->pluck('email'))->pluck('id', 'email');
        $propertyNames = Property::whereIn('id', $values->pluck('property_id'))->pluck('name', 'id');
        $userNames = User::whereIn('email', $values->pluck('email'))->pluck('name', 'email');
        $userLastNames = User::whereIn('email', $values->pluck('email'))->pluck('lastname', 'email');

        $matrix = $values->map(function ($posible) use ($userEmails, $propertyNames, $userNames, $userLastNames) {
            $isUser = $userEmails->get($posible->email, 0);
            $userName = $userNames->get($posible->email, '');
            $userLastName = $userLastNames->get($posible->email, '');

            return [
                'id' => $posible->id,
                'property_id' => $posible->property_id,
                'email' => $posible->email,
                'phone' => $posible->phone,
                'is_user' => $isUser,
                'property_name' => $propertyNames->get($posible->property_id, ''),
                'user_name' => $isUser ? $userName . ' ' . $userLastName : '-',
            ];
        });

        return view('backend.users.potential.index', [
            'values' => $matrix,
        ]);
    }
}
