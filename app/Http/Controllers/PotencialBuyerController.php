<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Property;
use App\Models\User;
use App\Models\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Mail\ContactMail;

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
                'response' => $posible->reponse,
                'property_name' => $propertyNames->get($posible->property_id, ''),
                'user_name' => $isUser ? $userName . ' ' . $userLastName : '-',
            ];

//            dd($query);
            $sql = $posible->toSql();

            return $query;

        });

        return view('backend.users.potential.index', [
            'values' => $matrix,
        ]);
    }

    public function contacted($id)
    {
        $contact = Validation::find($id);
        $status = ($contact->reponse == "1") ? "0" : "1";
        $contact->reponse = $status;
        $contact->save();
        toastr()->success('Usuario contactado', '!Ok!');
        return redirect()->back();
    }


    public function contact()
    {
        $contact = ContactForm::orderBy('response', 'desc')->paginate(20);
        return view('backend.users.potential.contact', [
            'values' => $contact,
        ]);
    }

    public function sendEmail(Request $request)
    {
//        dd($request);
        $contact = ContactForm::find($request->id);
        $contact->response = "1";
        $contact->save();
        Mail::to($request->email)->send(new ContactMail($request->long_description));
        toastr()->success('Mensaje enviado correctamente', '!Ok!');
        return redirect()->back();
    }


    public function sendWhatsapp(Request $request)
    {
        $contact = ContactForm::findOrFail($request->id);
        $contact->update(['response' => '2']);

        $url = 'https://api.whatsapp.com/send/?phone=+591' . $request->phone . '&text=' . $request->long_description;
        toastr()->success('Mensaje enviado correctamente', '!Ok!');
        // Generate JavaScript code to open the URL in a new tab
        $javascript = "window.open('$url', '_blank');";
        $data = ContactForm::orderBy('response', 'desc')->paginate(20);

        // Return a response with the JavaScript code
        return response()->view('backend.users.potential.contact', [
            'values' => $data,
            'javascript' => $javascript
        ]);
    }

}
