<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class ConfigurationController extends Controller
{
    public function index(): view
    {
        $values = Configuration::where('name', 'principal-image')->get();
        return view('backend.configuration.index', [
            'values' => $values,
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'thumbnail' => 'required',
        ]);
        $configuration = Configuration::where('name', 'principal-image')->firstOrFail();


        $file = $request->file('thumbnail');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $filePath = 'upload/configuration/principal_image/' . $filename;


        Image::make($file)->resize(1000, 800)->save(public_path($filePath));


        if (file_exists(public_path('upload/configuration/principal_image/' . $request->old_img))) {
            unlink(public_path('upload/configuration/principal_image/' . $request->old_img));
        }


        $configuration->value = $filename;
        $configuration->updated_at = Carbon::now();
        $configuration->save();


        return redirect()->back()->with('status', 'Image-updated');
    }

    public function indexMenu(): view
    {
        $configurations = Configuration::whereIn('name', ['top-menu-address', 'top-menu-jobHours', 'top-menu-phone', 'top-menu-facebook', 'top-menu-tiktok', 'top-menu-email', 'top-menu-about'])
            ->get()
            ->keyBy('name');

//        dd($configurations);

        return view('backend.configuration.top-menu', ['values' => $configurations]);
    }


    public function updateMenu(Request $request): RedirectResponse
    {
//        dd($request->all());
        $request->validate([
            'address' => 'required',
            'jobHours' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'about' => 'required',
            'facebook' => 'required',
            'tiktok' => 'required',
        ]);

        $now = Carbon::now();

        Configuration::where('name', 'top-menu-address')->update([
            'value' => $request->address,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-jobHours')->update([
            'value' => $request->jobHours,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-phone')->update([
            'value' => $request->phone,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-facebook')->update([
            'value' => $request->facebook,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-tiktok')->update([
            'value' => $request->tiktok,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-email')->update([
            'value' => $request->email,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'top-menu-about')->update([
            'value' => $request->about,
            'updated_at' => $now,
        ]);

        return redirect()->back()->with('status', 'updated');
    }


    public function indexVideo(): view
    {
        $configurations = Configuration::whereIn('name', ['top-menu-video'])
            ->get()
            ->keyBy('name');

//        dd($configurations);

        return view('backend.configuration.video', ['values' => $configurations]);
    }


    public function updateVideo(Request $request): RedirectResponse
    {
//        dd($request->all());
        $request->validate([
            'video' => 'required',
        ]);

        $now = Carbon::now();

        Configuration::where('name', 'top-menu-video')->update([
            'value' => $request->video,
            'updated_at' => $now,
        ]);


        return redirect()->back()->with('status', 'updated');
    }


    public function indexReasons(): view
    {
        $configurations = Configuration::whereIn('name', ['reason_1', 'reason_2', 'reason_3'])
            ->get()
            ->keyBy('name');

        return view('backend.configuration.reasons', ['values' => $configurations]);
    }


    public function updateReasons(Request $request): RedirectResponse
    {
        $request->validate([
            'reason_1' => 'required',
            'reason_2' => 'required',
            'reason_3' => 'required',
        ]);

        $now = Carbon::now();

        Configuration::where('name', 'reason_1')->update([
            'value' => $request->reason_1,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'reason_2')->update([
            'value' => $request->reason_2,
            'updated_at' => $now,
        ]);

        Configuration::where('name', 'reason_3')->update([
            'value' => $request->reason_3,
            'updated_at' => $now,
        ]);


        return redirect()->back()->with('status', 'updated');
    }

}
