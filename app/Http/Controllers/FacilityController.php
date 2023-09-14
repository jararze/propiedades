<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenitieRequest;
use App\Http\Requests\FacilityRequest;
use App\Models\Amenities;
use App\Models\Facility;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacilityController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values = Facility::latest()->paginate(10);
        return view('backend.facilities.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = Facility::latest()->get();
        return view('backend.facilities.register', [
            'values' => $values,
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(FacilityRequest $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:255'],
        ]);


        $facilities = new Facility();
        $facilities->name = $request->name;
        $facilities->icon = $request->icon;
        $facilities->status = $request->status;

        $facilities->save();
        return Redirect::route('admin.Facilities.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditView($id): view
    {
//        dd($item);
        $idProper = $id;
        $facility = Facility::find($idProper);
        $types = Facility::latest()->get();
        return view('backend.facilities.edit', compact('idProper', 'types', 'facility'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function Edit(Request $request): RedirectResponse
    {

        $facility = Facility::find($request->id);
        $facility->name = $request->name;
        $facility->icon = $request->icon;
        $facility->status = $request->status;

        $facility->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $facility = Facility::find($request->id);
        $facility->delete();
        return Redirect::route('admin.Facilities.index')->with('status', 'eliminated');
    }
}
