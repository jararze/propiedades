<?php

namespace App\Http\Controllers;

use App\Events\ProjectEvent;
use App\Http\Requests\PropertyRequest;
use App\Models\Amenities;
use App\Models\City;
use App\Models\Facility;
use App\Models\FacilityProperty;
use App\Models\MultiImage;
use App\Models\PackagePlan;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\User;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display all properties in admin page.
     */
    public function index(): view
    {
        $values = Property::where('is_project', "1")->orderBy("id", "desc")->get();
        return view('backend.projects.index', [
            'values' => $values,
        ]);
    }

    public function own(): view
    {
        $values = Property::where('is_project', "1")->where('created_by', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('backend.projects.own', [
            'values' => $values,
        ]);
    }

    public function sale(): view
    {
        $values = Property::where('is_project', "1")->where('status_for_what', "1")->orWhere('status_for_what', "2")->orderBy('created_at', 'desc')->get();

        return view('backend.projects.sale', [
            'values' => $values,
        ]);
    }

    public function inactives(): view
    {
        $values = Property::where('is_project', "1")->where('status', '0')->orderBy('id', 'DESC')->get();

        return view('backend.projects.inactives', [
            'values' => $values,
        ]);
    }

    public function cancelled(): view
    {
        $values = Property::where('is_project', "1")->where('status', '2')->orderBy('id', 'DESC')->get();

        return view('backend.projects.cancelled', [
            'values' => $values,
        ]);
    }


    public function sold(Request $request): RedirectResponse
    {
//        dd($request->id);
        $property = Property::find($request->id);
        $property->status_for_what = "1";
        $property->updated_at = Carbon::now();

        $property->save();
        toastr()->success('Solicitud enviada para sacar del mercado', '!Proceso!');
        return redirect()->back()->with('status', 'updated-amenities');
    }

    public function propertieChangeStatus(Request $request): RedirectResponse
    {
        $var = ($request->status_for_what == "1") ? "2" : "0";
        $property = Property::find($request->id);
        $property->status_for_what = $var;
        $property->updated_at = Carbon::now();
        $property->save();
        $msg = ($request->status_for_what == "1") ? 'Proyecto fuera de mercado, estará 3 días hábiles con el cartel de vendida/alquilada, etc' : "Proyecto activado y puesta en el mercado nuevamente";
        toastr()->success($msg, '!Proceso!');
        return redirect()->back()->with('status', 'updated-amenities');
    }


    public function activate(Request $request): RedirectResponse
    {
//        dd($request->inactiveid);
        $property = Property::find($request->inactiveid);
        $property->status = "1";
        $property->updated_at = Carbon::now();

        $property->save();
        toastr()->success('Proyecto activado', '!Bien!');
        return redirect()->back()->with('status', 'updated-amenities');
    }


    /**
     * Display the page with the form to create the item.
     * @throws \Exception
     */
    public function create(): view
    {
        $propertyXagent = Property::where('created_by', Auth::user()->id)->get();
        $propertyXagent = $propertyXagent->count();


        if (Auth::user()->package_status == 'active') {
            $package = PackagePlan::join('users', 'users.package_id', '=', 'package_plans.id')
                ->where('users.id', Auth::user()->id)
                ->select('package_plans.name', 'package_plans.credits', 'package_plans.amount')
                ->first();


            if ($package) {
                $name = $package->name;
                $credits = $package->credits;
                $amount = $package->amount;
                if ($propertyXagent < $credits) {
                    $propertyType = PropertyType::where('status', 1)->orderBy('type_name', 'asc')->get();
                    $amenities = Amenities::where('status', 1)->orderBy('name', 'asc')->get();
                    $facilities = Facility::orderBy('name', 'asc')->get();
                    $agents = User::where('status', 'active')->where('role', 'agent')->orderBy('name', 'asc')->get();
                    $projects = Property::where('is_project', "1")->where('status', 1)->get();
                    $cities = City::orderBy('name', 'asc')->get();
                    return view('backend.projects.register', [
                        'propertyTypes' => $propertyType,
                        'amenities' => $amenities,
                        'agents' => $agents,
                        'facilities' => $facilities,
                        'projects' => $projects,
                        'cities' => $cities,
                    ]);
                } else {
                    $values = PackagePlan::orderBy('id', 'asc')->get();
                    return view('backend.properties.more.credits', [
                        'package_name' => $name,
                        'package_credits' => $credits,
                        'package_amount' => $amount,
                        'values' => $values,
                        'propertyXagent' => $propertyXagent,
                    ]);
                }
            } else {
                abort(403, "Acción no permitida, tienes más propiedades que creditos. Por favor compra mas creditos.");
            }
        } else {
            abort(403, "Acción no permitida, el paquete no está activo.");
        }


    }


    /**
     * Handle an incoming request for savin info request.
     * @throws \Exception
     */
    public function store(PropertyRequest $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lowest_price' => ['required', 'max:255'],
            'max_price' => ['required', 'max:255'],
            'short_description' => ['required'],
            'long_description' => ['required'],
        ]);

        $code = IdGenerator::generate(['table' => 'properties', 'field' => 'code', 'length' => 10, 'prefix' => 'P' . date('ym')]);
        $age_id = (Auth::user()->role === 'agent') ? '22' : $request->agent_id;

        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            @mkdir(public_path('upload/properties/' . $code));
            @mkdir(public_path('upload/properties/' . $code . '/multipleImages/'));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            Image::make($file)->resize(800, 680)->insert(public_path('watermarker.png'), 'bottom-right', 10, 10)->save('upload/properties/' . $code . '/' . $filename);
        } else {
            $filename = NULL;
        }

        if (!isset($request->featured)) {
            $featured_var = 0;
        } else {
            $featured_var = (Auth::user()->role === 'agent') ? '0' : $request->featured;
        }
        if (!isset($request->hot)) {
            $hot_var = 0;
        } else {
            $hot_var = (Auth::user()->role === 'agent') ? '0' : $request->hot;
        }

        if (isset($request->amenities_id)) {
            $amenities_list = implode(", ", $request->amenities_id);
        } else {
            $amenities_list = NULL;
        }

        $property_id = Property::create([
            'name' => $request->name,
            'address' => $request->address,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'code' => $code,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'country' => $request->country,
            'is_project' => "1",
            'propertytype_id' => $request->propertytype_id,
            'property_status' => $request->property_status,
            'project_status' => $request->project_status,
            'delivery' => $request->delivery,
            'construction_Date' => $request->construction_Date,
            'currency' => $request->currency,
            'chosen_currency' => $request->chosen_currency,
            'lowest_price' => $request->lowest_price,
            'max_price' => $request->max_price,
            'size' => $request->size,
            'size_max' => $request->size_max,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'bedrooms' => $request->bedrooms,
            'bedrooms_max' => $request->bedrooms_max,
            'bathrooms' => $request->bathrooms,
            'bathrooms_max' => $request->bathrooms_max,
            'garage' => $request->garage,
            'garage_max' => $request->garage_max,
            'garage_size' => $request->garage_size,
            'garage_size_max' => $request->garage_size_max,
            'video' => $request->video,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $featured_var,
            'hot' => $hot_var,
            'thumbnail' => $filename,
            'agent_id' => $age_id,
            'created_by' => Auth::user()->id,
            'status' => $request->status,
            'amenities_id' => $amenities_list,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($request->file('multiple_images')) {
            $multiple_images = $request->file('multiple_images');
            @mkdir(public_path('upload/properties/' . $code));
            @mkdir(public_path('upload/properties/' . $code . '/multipleImages/'));
            foreach ($multiple_images as $image) {
                $filenames = date('YmdHi') . $image->getClientOriginalName();
                Image::make($image)->resize(770, 520)->save('upload/properties/' . $code . '/multipleImages/' . $filenames);

                MultiImage::insert([
                    'property_id' => $property_id->id,
                    'name' => $filenames,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

            }
        }

        $numFacilities = count($request->facility_id);

        for ($i = 0; $i < $numFacilities; $i++) {
            if ($request->facility_id[$i] != "NH") {
                if ($request->nameFac[$i] != null) {
                    $namfac = $request->nameFac[$i];
                } else {
                    $namfac = " ";
                }
                if ($request->distance[$i] != null) {
                    $distances = $request->distance[$i];
                } else {
                    $distances = 0;
                }
                $facilities = new FacilityProperty();
                $facilities->property_id = $property_id->id;
                $facilities->facility_id = $request->facility_id[$i];
                $facilities->name = $namfac;
                $facilities->distance = $distances;
                $facilities->save();
            }
        }

        event(new ProjectEvent($property_id));

        toastr()->success('Proyecto creado, satisfactoriamente', '!Bien!');

        return Redirect::route('admin.project.register')->with('status', 'created');

    }


    /**
     * Display the form to edit .
     */
    public function EditView($id): view
    {
//        dd($item);
        $idItem = $id;
        $property = Property::find($idItem);
        $propertyType = PropertyType::where('status', 1)->orderBy('type_name', 'asc')->get();
        $amenities = Amenities::where('status', 1)->orderBy('name', 'asc')->get();
        $facilities = FacilityProperty::where('property_id', $idItem)->orderBy('name', 'asc')->get();
        $facility = Facility::orderBy('name', 'asc')->get();
        $multiImages = MultiImage::where('property_id', $idItem)->orderBy('name', 'asc')->get();
        $agents = User::where('status', 'active')->where('role', 'agent')->orderBy('name', 'asc')->get();

        $property_aminities = explode(",", $property->amenities_id);

        $cities = City::orderBy('name', 'asc')->get();


        return view('backend.projects.edit', compact('idItem', 'property', 'propertyType', 'amenities', 'agents', 'property_aminities', 'facilities', 'multiImages', 'facility', 'cities'));
    }

    /**
     * Update the property firt block information.
     * @throws \Exception
     */
    public function Edit(Request $request): RedirectResponse
    {
//        dd($request->request);
        $property = Property::find($request->id);

        if (!isset($request->featured)) {
            $featured_var = 0;
        } else {
            $featured_var = $request->featured;
        }
        if (!isset($request->hot)) {
            $hot_var = 0;
        } else {
            $hot_var = $request->hot;
        }

        $age_id = (Auth::user()->role === 'agent') ? Auth::user()->id : $request->agent_id;
//        dd($request);
        $property->name = $request->name;
        $property->address = $request->address;
        $property->neighborhood = $request->neighborhood;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->propertytype_id = $request->propertytype_id;
        $property->property_status = $request->property_status;
        $property->currency = $request->currency;
        $property->project_status = $request->project_status;
        $property->lowest_price = $request->lowest_price;
        $property->max_price = $request->max_price;
        $property->delivery = $request->delivery;
        $property->construction_Date = $request->construction_Date;
        $property->size = $request->size;
        $property->size_max = $request->size_max;
        $property->short_description = $request->short_description;
        $property->long_description = $request->long_description;
        $property->bedrooms = $request->bedrooms;
        $property->bedrooms_max = $request->bedrooms_max;
        $property->bathrooms = $request->bathrooms;
        $property->bathrooms_max = $request->bathrooms_max;
        $property->garage = $request->garage;
        $property->garage_max = $request->garage_mx;
        $property->garage_size = $request->garage_size;
        $property->garage_size_max = $request->garage_size_max;
        $property->video = $request->video;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->featured = $featured_var;
        $property->hot = $hot_var;
        $property->chosen_currency = $request->chosen_currency;
        $property->agent_id = $age_id;
        if (Auth::user()->role != 'age-nt') {
            $property->status = $request->status;
        }
//        $property->agent_id = $age_id;
        $property->updated_at = Carbon::now();

        $property->save();
        toastr()->success('Proyecto Modificado, satisfactoriamente', '!Bien!');
        return redirect()->back()->with('status', 'updated');
    }

    /**
     * Update principal Image of property information.
     * @throws \Exception
     */
    public function EditPrincipalImage(Request $request): RedirectResponse
    {
        $request->validate([
            'thumbnail' => 'required',
        ]);
        $property = Property::find($request->id);
        $file = $request->file('thumbnail');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        if (is_null($property->thumbnail)) {
            @mkdir(public_path('upload/properties/' . $property->code));
        }
        Image::make($file)->resize(370, 250)->save('upload/properties/' . $property->code . '/' . $filename);
        if (file_exists(public_path('upload/properties/' . $property->code . '/' . $request->old_img))) {
            @unlink(public_path('upload/properties/' . $property->code . '/' . $request->old_img));
        }
        $property->thumbnail = $filename;
        $property->updated_at = Carbon::now();
        $property->save();
        toastr()->success('Imagen modificada, satisfactoriamente', '!Bien!');
        return redirect()->back()->with('status', 'image-updated');
    }

    /**
     * Delete the images properties.
     */
    public function deleteImage(Request $request): RedirectResponse
    {
        $property = Property::find($request->id);
        $response = MultiImage::where('id', $request->idImage)->where('property_id', $request->id)->delete();

        if ($response == 1) {
            if (file_exists(public_path('upload/properties/' . $property->code . '/multipleImages/' . $request->old_img))) {
                @unlink(public_path('upload/properties/' . $property->code . '/multipleImages/' . $request->old_img));
            }
            $message = "deleted-addMIages";
        } else {
            $message = "Error";
        }

        return redirect()->back()->with('status', $message);

    }

    /**
     * Add multiple images to property.
     * @throws \Exception
     */
    public function addImages(Request $request): RedirectResponse
    {
        $request->validate([
            'multiple_images' => 'required',
        ]);

        $property = Property::find($request->id);
        if ($request->file('multiple_images')) {
            $multiple_images = $request->file('multiple_images');
            @mkdir(public_path('upload/properties/' . $property->code . '/multipleImages/'));
            foreach ($multiple_images as $image) {
                $filenames = date('YmdHi') . $image->getClientOriginalName();
                Image::make($image)->resize(770, 520)->save('upload/properties/' . $property->code . '/multipleImages/' . $filenames);

                MultiImage::insert([
                    'property_id' => $property->id,
                    'name' => $filenames,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

            }
        }
        toastr()->success('Imagen@s subidas, satisfactoriamente', '!Bien!');
        return redirect()->back()->with('status', 'updated-addMIages');
    }


    /**
     * Add Properties Facilities.
     */
    public function addFacility(Request $request): RedirectResponse
    {

        $request->validate([
            'facility_id' => 'required',
            'nameFac' => 'required',
            'distance' => 'required',
        ]);

        if ($request->facility_id == "NH") {
            return redirect()->back()->with('status', 'add-error');
        } else {
            $property = Property::find($request->id);

            FacilityProperty::insert([
                'property_id' => $property->id,
                'facility_id' => $request->facility_id,
                'name' => $request->nameFac,
                'distance' => $request->distance,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);


            return redirect()->back()->with('status', 'add-newFacility');
        }


    }

    /**
     * Delete facility from property.
     */
    public function deleteFacility(Request $request): RedirectResponse
    {
        $property = Property::find($request->id);
        $response = FacilityProperty::where('id', $request->idFacility)->where('property_id', $request->id)->delete();

        if ($response == 1) {
            $message = "deleted-facility";
        } else {
            $message = "Error";
        }

        return redirect()->back()->with('status', $message);

    }

    /**
     * Update the user's profile information.
     * @throws \Exception
     */
    public function editAmenities(Request $request): RedirectResponse
    {
        $property = Property::find($request->id);
        $property->amenities_id = implode(", ", $request->amenities_id);
        $property->updated_at = Carbon::now();

        $property->save();
        return redirect()->back()->with('status', 'updated-amenities');
    }


    /**
     * Delete Property.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $property = Property::find($request->id);

        MultiImage::where('property_id', $request->id)->delete();
        FacilityProperty::where('property_id', $request->id)->delete();
        Property::where('id', $request->id)->delete();
        $dirname = public_path('upload/properties/' . $property->code);
        $dirname2 = public_path('upload/properties/' . $property->code . '/multipleImages/');

        if (is_dir($dirname)) {
            array_map('unlink', glob("$dirname/*.*"));
            array_map('unlink', glob("$dirname2/*.*"));
            rmdir($dirname2);
            rmdir($dirname);
        }

        return redirect()->back()->with('status', 'eliminated');

    }

    /**
     * Property list front end.
     */
    public function propertiesFilter(): view
    {
        $properties  = Property::where('status', 1)->where("is_project", "1")->orderBy('id', 'desc')->paginate(4);
        $project_map = Property::where('is_project', "1")->where('status', 1)->whereNotNull('latitude')->whereNotNull('longitude')->get();

        $types = PropertyType::where('status', 1)->orderBy('id', 'asc')->get();
        $cities = City::orderBy('name', 'asc')->get();
        $neighborhoods = Property::where('status', 1)
            ->where('neighborhood', '!=', '')
            ->orderBy('neighborhood', 'asc')
            ->distinct()
            ->pluck('neighborhood');


        $propertyStatuses = ['Venta', 'Alquiler', 'Anticretico', 'Roomie'];

        $counts = Property::where('status', 1)
            ->whereIn('property_status', $propertyStatuses)
            ->distinct()
            ->select('property_status', Property::raw('COUNT(DISTINCT id) as count'))
            ->groupBy('property_status')
            ->pluck('count', 'property_status');

        $garages = Property::where('status', 1)
            ->where('garage', '!=', 0)
            ->orderBy('garage', 'asc')
            ->distinct()
            ->pluck('garage');

        $bedrooms = Property::where('status', 1)
            ->where('bedrooms', '!=', 0)
            ->orderBy('bedrooms', 'asc')
            ->distinct()
            ->pluck('bedrooms');

        $bathrooms = Property::where('status', 1)
            ->where('bathrooms', '!=', 0)
            ->orderBy('bathrooms', 'asc')
            ->distinct()
            ->pluck('bathrooms');

        $amenities = Amenities::where('status', 1)
            ->select('id', 'name')
            ->selectSub(function ($query) {
                $query->from('properties')
                    ->selectRaw('COUNT(DISTINCT id)')
                    ->whereColumn('properties.status', '=', 'amenities.status')
                    ->where(function ($subquery) {
                        $subquery->whereRaw("CONCAT(',', properties.amenities_id, ',') LIKE CONCAT('%,', amenities.id, ',%')")
                            ->orWhere('properties.amenities_id', '=', \DB::raw('amenities.id'))
                            ->orWhere(\DB::raw("CONCAT(',', properties.amenities_id)"), 'LIKE', \DB::raw("CONCAT('%,', amenities.id)"));
                    })
                    ->limit(1);
            }, 'property_count')
            ->orderBy('name', 'asc')
            ->get();


        return view('frontend.pages.projects.index', [
            'featuredProperties' => $properties,
            'types' => $types,
            'cities' => $cities,
            'neighborhoods' => $neighborhoods,
            'garages' => $garages,
            'bedrooms' => $bedrooms,
            'bathrooms' => $bathrooms,
            'counts' => $counts,
            'amenities' => $amenities,
            'projectsMap' => $project_map,
        ]);
    }


    /**
     * Display the inner property  Page for all users.
     */
    public function inner($id): View
    {
        $property = Property::find($id);
        if (is_null($property->amenities_id)) {
            $property_aminities = NULL;
        } else {
            $property_aminities = explode(",", $property->amenities_id);
        }
        $units = Property::where("project_id", $id)->get();
        $multiImages = MultiImage::where('property_id', $id)->get();
        $amenities = Amenities::where('status', 1)->orderBy('name', 'asc')->get();
        $principal_facilities = Facility::orderBy('name', 'asc')->get();
        $facilities = FacilityProperty::where('property_id', $id)->orderBy('name', 'asc')->get();
        $countFacility = FacilityProperty::where('property_id', $id)->distinct()->get('facility_id');
        $agentPro = User::where('id', 22)->get();
        $allVideos = Property::select("id", "thumbnail", "video", "code", "name")->where('id', $id)->orWhere("project_id", $id)->get();
        $totals = Property::where('project_id', $id)
            ->selectRaw('SUM(units) as total_units, SUM(bedrooms*units) as total_bedrooms, SUM(bathrooms*units) as total_bathrooms, SUM(size) as total_size')
            ->first();

        return view('project.index', [
            'property' => $property,
            'multiImages' => $multiImages,
            'amenities' => $amenities,
            'property_aminities' => $property_aminities,
            'facilities' => $facilities,
            'principal_facilities' => $principal_facilities,
            'countFacility' => $countFacility,
            'agentPro' => $agentPro,
            'unitss' => $units,
            'allVideos' => $allVideos,
            'totals' => $totals,
        ]);
    }


    public function validateProject(Request $request)
    {
        $property = Property::find($request->project_id);
        return response()->json(['success' => "bien", 'id' => $property]);
    }

    public function units()
    {
        $values = Property::select('properties.*', 'p.name as project_name')
            ->leftJoin('properties as p', 'properties.project_id', '=', 'p.id')
            ->where('properties.is_project', '0')
            ->whereNotNull('properties.project_id')
            ->orderBy('properties.id', 'desc')
            ->get();
        return view('backend.projects.units', [
            'values' => $values,
        ]);
    }

    public function unitsEdit(Request $request)
    {
        $values = Property::find($request->id);
        return view('backend.projects.units.edit', [
            'package' => $values,
        ]);
    }
    public function unitsEditInfo(Request $request)
    {

        $property = Property::find($request->id);
        $property->sold_units = $request->sold_units;
        $property->updated_at = Carbon::now();
        $property->save();
        toastr()->success("Unidades vendidas actualizadas", '!Proceso!');

        return redirect()->back()->with('status', 'updated');
    }


    public function notificaction(){
        $rNotificactions = Auth::user()->readNotifications;
        $urNotificactions = Auth::user()->unreadNotifications;
        return view('backend.notifications.index', [
            'rNotificactions' => $rNotificactions,
            'urNotificactions' => $urNotificactions,
        ]);
    }

}
