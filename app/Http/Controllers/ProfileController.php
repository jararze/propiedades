<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function userEdit(Request $request): View
    {
//        return view('userProfile.edit', [
        return view('frontend.profile.edit', [
            'user' => $request->user(),
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function imageUpdatePage(Request $request): View
    {
//        return view('userProfile.edit', [
        return view('frontend.profile.editImage', [
            'user' => $request->user(),
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function userEditPassword(Request $request): View
    {
//        return view('userProfile.edit', [
        return view('frontend.profile.editPassword', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     * @throws \Exception
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
//        dd($request->file('photo'));
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

//        return Redirect::route('profile.edit')->with('status', 'profile-updated');
        return redirect()->back()->with('status', 'profile-updated');
    }

    public function imageUpdate(Request $request): RedirectResponse
    {
        $profile = User::find(Auth::user()->id);
        if($request->file('photo')) {
            $file     = $request->file('photo');
            @unlink(public_path('upload/profiles/' . $profile->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/profiles'),$filename);
            $profile->photo = $filename;
        }

        $profile->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'image-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
