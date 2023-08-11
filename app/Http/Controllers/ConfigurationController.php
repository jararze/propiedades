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
}
