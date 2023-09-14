<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenitieRequest;
use App\Models\Amenities;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CityController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values = City::latest()->paginate(10);
        return view('backend.cities.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = City::latest()->get();
        return view('backend.cities.register', [
            'values' => $values,
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);


        $city = new City();
        $city->name = $request->name;

        $city->save();
        return Redirect::route('admin.cities.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function edit($id): view
    {
//        dd($item);
        $idProper = $id;
        $amenitie = City::find($idProper);
        $types = City::latest()->get();
        return view('backend.cities.edit', compact('idProper', 'types', 'amenitie'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function update(Request $request): RedirectResponse
    {

        $city = City::find($request->id);
        $city->name = $request->name;

        $city->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $city = City::find($request->id);
        $city->delete();
        return Redirect::route('admin.cities.index')->with('status', 'eliminated');
    }
}
