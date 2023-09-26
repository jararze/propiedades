<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyTypeRequest;
use App\Models\PropertyType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PropertyTypeController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values = PropertyType::latest()->get();
        return view('backend.typeProperties.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = PropertyType::latest()->get();
        return view('backend.typeProperties.register', [
            'values' => $values,
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(PropertyTypeRequest $request): RedirectResponse
    {

        $request->validate([
            'type_name' => ['required', 'string', 'max:255'],
            'type_icon' => ['required', 'string', 'max:255'],
            'description' => ['required'],
        ]);


        $property = new PropertyType();
        $property->type_name = $request->type_name;
        $property->type_icon = $request->type_icon;
        $property->status = $request->status;
        $property->description = $request->description;

        $property->save();
        return Redirect::route('admin.TypesProperties.register')->with('status', 'property-created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditView($id): view
    {
//        dd($item);
        $idProper = $id;
        $property = PropertyType::find($idProper);
        $types = PropertyType::latest()->get();
        return view('backend.typeProperties.edit', compact('idProper', 'types', 'property'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function Edit(Request $request): RedirectResponse
    {

        $property = PropertyType::find($request->id);
        $property->type_name = $request->type_name;
        $property->type_icon = $request->type_icon;
        $property->status = $request->status;
        $property->description = $request->description;

        $property->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'property-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $property = PropertyType::find($request->id);
        $property->delete();
        return Redirect::route('admin.TypesProperties.index')->with('status', 'property-eliminated');
    }


}
