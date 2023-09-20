<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenitieRequest;
use App\Models\PackagePlan;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PackagePlanController extends Controller
{
    /**
     * Display the FrontEnt web Page for all users.
     */
    public function index(): view
    {
        $values = PackagePlan::orderBy('id', 'ASC')->paginate(10);
        return view('backend.packages.index', [
            'values' => $values,
        ]);
    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function create(): view
    {
        $values = PackagePlan::orderBy('id', 'ASC')->get();
        return view('backend.packages.register', [
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


        $package = new PackagePlan();
        $package->name = $request->name;
        $package->credits = $request->credits;
        $package->amount = $request->amount;
        $package->status = $request->status;
        $package->front_display = $request->front_display;

        $package->save();
        return Redirect::route('admin.packages.register')->with('status', 'created');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditView($id): view
    {
//        dd($item);
        $idProper = $id;
        $package = PackagePlan::find($idProper);
        $types = PackagePlan::orderBy('id', 'ASC')->get();
        return view('backend.packages.edit', compact('idProper', 'types', 'package'));
    }




    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function Edit(Request $request): RedirectResponse
    {

        $package = PackagePlan::find($request->id);
        $package->name = $request->name;
        $package->credits = $request->credits;
        $package->amount = $request->amount;
        $package->status = $request->status;
        $package->front_display = $request->front_display;

        $package->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $package = PackagePlan::find($request->id);
        $package->delete();
        return Redirect::route('admin.packages.index')->with('status', 'eliminated');
    }

    /**
     * Display the FrontEnt web Page for all users.
     */
    public function choose(): view
    {
        $package = PackagePlan::join('users', 'users.package_id', '=', 'package_plans.id')
            ->where('users.id', Auth::user()->id)
            ->select('package_plans.name', 'package_plans.credits', 'package_plans.amount')
            ->first();
        $propertyXagent = Property::where('created_by', Auth::user()->id)->get();
        $propertyXagent = $propertyXagent->count();

        $name = $package->name;
        $credits = $package->credits;
        $amount = $package->amount;

        $values = PackagePlan::orderBy("id", "asc")->where('front_display', "1")->get();
        return view('backend.packages.choose', [
            'values' => $values,
            'package_name' => $name,
            'package_credits' => $credits,
            'package_amount' => $amount,
            'propertyXagent' => $propertyXagent,
        ]);
    }

    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function addUser(Request $request): RedirectResponse
    {
        $packageId = $request->package_Id;
        $agentId = Auth::user()->id;

        if(Auth::user()->role == 'agent'){
            $agent = User::find($agentId);
            $agent->package_id = $packageId;
            $agent->package_status = 'inactive';

            $agent->save();
            return redirect()->back()->with('status', 'updated');
        }else{
            abort(403);
        }

    }



    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function indexApproval(): view
    {
//        $values = User::where("package_status", "inactive")->get();
        $values = User::orderBy("id", "desc")->paginate(15);
        return view('backend.packages.users.approval', [
            'values' => $values,
        ]);

    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function activate($id): RedirectResponse
    {
        $user_package = User::find($id);
        $var = "";
        if ($user_package->package_status == "active"){
            $var = "inactive";
        }
        if ($user_package->package_status == "inactive"){
            $var = "active";
        }
        $user_package->package_status = $var;

        $user_package->save();

        return redirect()->back()->with('status', 'activate');

    }


    /**
     * Display the FrontEnt web Page for all users.
     */
    public function EditPackageView($id): view
    {
//        dd($item);
        $user = User::find($id);
        $packages = PackagePlan::distinct("name")->orderBy("id", "asc")->get();
        return view('backend.packages.users.edit', compact('user', 'packages'));
    }


    /**
     * Update the user's profile information.
     * @throws \Exception
     */

    public function EditPackage(Request $request): RedirectResponse
    {

        $user = User::find($request->id);
        $user->package_id = $request->package;
        $user->package_status = $request->status;

        $user->save();

//        return Redirect::route('profile.edit')->with('status', 'image-updated');
        return redirect()->back()->with('status', 'updated');
    }

}
