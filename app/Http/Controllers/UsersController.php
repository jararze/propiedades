<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacilityRequest;
use App\Http\Requests\UserRequest;
use App\Models\Facility;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values =  User::leftJoin('properties', 'properties.created_by', '=', 'users.id')
            ->select('users.*', DB::raw('COUNT(properties.id) AS property_count'))
            ->groupBy('users.id', 'users.name', 'users.lastname', 'users.jobtitle', 'users.username', 'users.email', 'users.email_verified_at', 'users.password', 'users.photo', 'users.phone', 'users.address', 'users.city', 'users.country', 'users.aboutme', 'users.package_id', 'users.package_status', 'users.role', 'users.status', 'users.role', 'users.remember_token', 'users.created_at', 'users.updated_at')
            ->get();
        return view('backend.users.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = User::latest()->get();
        return view('backend.users.register', [
            'values' => $values,
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(UserRequest $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'photo' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            Image::make($file)->resize(500, 300)->save('upload/profiles/' . $filename);
        }


        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'jobtitle' => $request->jobtitle,
            'username' => $request->username,
            'email' => $request->email,
            'city' => $request->city,
            'country' => $request->country,
            'address' => $request->address,
            'aboutme' => $request->aboutme,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
            'photo' => $filename,
            'password' => Hash::make($request->password),
        ]);

        return Redirect::route('admin.users.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditView($id): view
    {
//        dd($item);
        $idProper = $id;
        $users = User::find($idProper);
        $types = User::latest()->get();
        return view('backend.users.edit', compact('idProper', 'types', 'users'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function Edit(Request $request): RedirectResponse
    {

        $user = User::find($request->id);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            Image::make($file)->resize(500, 300)->save('upload/profiles/' . $filename);
            if (file_exists(public_path('upload/profiles/' . $user->photo))) {
                @unlink(public_path('upload/profiles/' . $user->photo));
            }
        }else{
            $filename = NULL;
        }
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->jobtitle = $request->jobtitle;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->aboutme = $request->aboutme;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->photo = $filename;

        $user->save();

        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = User::find($request->id);
        if (!is_null($user->photo)) {
            if (file_exists(public_path('upload/profiles/' . $user->photo))) {
                @unlink(public_path('upload/profiles/' . $user->photo));
            }
        }
        $user->delete();
        return Redirect::route('admin.users.index')->with('status', 'eliminated');
    }
}
