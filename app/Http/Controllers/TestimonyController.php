<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Testimony;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class TestimonyController extends Controller
{
    public function index(): view
    {
        $values = Testimony::latest()->get();
        return view('backend.testimonies.index', [
            'values' => $values,
        ]);
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = Testimony::latest()->get();
        return view('backend.testimonies.register', [
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
            'photo' => ['required'],
            'testimony' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            Image::make($file)->resize(500, 300)->save('upload/testimonies/' . $filename);
        }


        $testimony = new Testimony();
        $testimony->name = $request->name;
        $testimony->testimony = $request->testimony;
        $testimony->job = $request->job;
        $testimony->photo = $filename;

        $testimony->save();
        return Redirect::route('admin.testimonies.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function edit($id): view
    {
//        dd($item);
        $idProper = $id;
        $testmimony = Testimony::find($idProper);
        $types = Testimony::latest()->get();
        return view('backend.testimonies.edit', compact('idProper', 'types', 'testmimony'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function update(Request $request): RedirectResponse
    {

        if ($request->file('photo')) {
            if (file_exists(public_path('upload/testimonies/' . $request->old_photo))) {
                @unlink(public_path('upload/testimonies/' . $request->old_photo));
            }
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            Image::make($file)->resize(500, 300)->save('upload/testimonies/' . $filename);
        }else{
            $filename = $request->old_photo;
        }

        $testimony = Testimony::find($request->id);
        $testimony->name = $request->name;
        $testimony->job = $request->job;
        $testimony->testimony = $request->testimony;
        $testimony->photo = $filename;

        $testimony->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $testimony = Testimony::find($request->id);
        $testimony->delete();
        return Redirect::route('admin.testimonies.index')->with('status', 'eliminated');
    }

}
