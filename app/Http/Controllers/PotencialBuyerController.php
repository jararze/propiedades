<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
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
        $values = Validation::orderBy('created_at', 'desc')->get();
        $userEmails = User::whereIn('email', $values->pluck('email'))->pluck('id', 'email');
        $propertyNames = Property::whereIn('id', $values->pluck('property_id'))->pluck('name', 'id');
        $userNames = User::whereIn('email', $values->pluck('email'))->pluck('name', 'email');
        $userLastNames = User::whereIn('email', $values->pluck('email'))->pluck('lastname', 'email');

        $matrix = $values->map(function ($posible) use ($userEmails, $propertyNames, $userNames, $userLastNames) {
//            dd($posible);
            $isUser = $userEmails->get($posible->email, 0);
            $userName = $userNames->get($posible->email, '');
            $userLastName = $userLastNames->get($posible->email, '');

            $query = [
                'id' => $posible->id,
                'property_id' => $posible->property_id,
                'email' => $posible->email,
                'phone' => $posible->phone,
                'is_user' => $isUser,
                'property_name' => $propertyNames->get($posible->property_id, ''),
                'user_name' => $isUser ? $userName . ' ' . $userLastName : '-',
            ];

            $sql = $posible->toSql();

            return $query;

        });

        return view('backend.users.potential.index', [
            'values' => $matrix,
        ]);
    }



    public function contact()
    {
        $contact = ContactForm::orderBy('response', 'desc')->paginate(20);
        return view('backend.users.potential.contact', [
            'values' => $contact,
        ]);
    }

}
