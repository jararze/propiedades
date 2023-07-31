<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenitieRequest;
use App\Models\Amenities;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AmenitiesController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values = Amenities::latest()->get();
        return view('backend.amenities.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = Amenities::latest()->get();
        return view('backend.amenities.register', [
            'values' => $values,
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AmenitieRequest $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);


        $amenities = new Amenities();
        $amenities->name = $request->name;
        $amenities->status = $request->status;

        $amenities->save();
        return Redirect::route('admin.Amenities.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditView($id): view
    {
//        dd($item);
        $idProper = $id;
        $amenitie = Amenities::find($idProper);
        $types = Amenities::latest()->get();
        return view('backend.amenities.edit', compact('idProper', 'types', 'amenitie'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function Edit(Request $request): RedirectResponse
    {

        $amenitie = Amenities::find($request->id);
        $amenitie->name = $request->name;
        $amenitie->status = $request->status;

        $amenitie->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $amenitie = Amenities::find($request->id);
        $amenitie->delete();
        return Redirect::route('admin.Amenities.index')->with('status', 'eliminated');
    }
}
