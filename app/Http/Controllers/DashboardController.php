<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): view
    {

        $result = Property::selectRaw('COUNT(id) AS Count')
            ->where('status', 0)
            ->where('is_project', "0")
            ->groupByRaw('DATE(created_at)')
            ->orderByRaw('DATE(created_at) DESC')
            ->limit(10)
            ->get();

        $count = Property::where('status', 0)
            ->count();


        $totalVendidas = Property::where('status_for_what', "2")
            ->count();

        $diezTopVendidas = Property::selectRaw('COUNT(id) AS Count')
            ->where('status_for_what', "2")
            ->groupByRaw('DATE(created_at)')
            ->orderByRaw('DATE(created_at) DESC')
            ->limit(10)
            ->get();

        $totalUsers = User::where('status', 'active')->count();

        $diezUsuarios = User::selectRaw('COUNT(id) AS Count')
            ->where('status', "active")
            ->groupByRaw('DATE(created_at)')
            ->orderByRaw('DATE(created_at) DESC')
            ->limit(10)
            ->get();


        $propertiesByMonth = Property::selectRaw('COALESCE(MONTHNAME(created_at), "Jan") AS Month, COUNT(id) AS Count')
            ->where('status', 0)
            ->groupBy('Month')
            ->orderByRaw('Month DESC')
            ->get()
            ->pluck('Count', 'Month')
            ->mapWithKeys(function ($count, $month) {
                return [$month => $count];
            })
            ->all();

        $months = [
            'January', 'February', 'Marz', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        $propertiesByMonth = array_merge(array_fill_keys($months, 0), $propertiesByMonth);


        $query = "
                    SELECT distinct
                        specificProperties / totalProperties AS divisionResult
                    FROM (
                        SELECT
                            (SELECT COUNT(id) FROM properties WHERE status = '1') AS totalProperties,
                            (SELECT COUNT(id) FROM properties WHERE status_for_what = '2' AND status = '1') AS specificProperties
                        FROM properties
                        WHERE status = '1'
                    ) AS subquery;
                ";

        $rr = DB::select($query);
        $divisionResult = $rr[0]->divisionResult;

        $proyectos = Property::selectRaw('COALESCE(MONTHNAME(created_at), "Jan") AS Month, COUNT(id) AS Count')
            ->where('status', 0)
            ->where('is_project', "1")
            ->groupBy('Month')
            ->orderByRaw('Month DESC')
            ->get()
            ->pluck('Count', 'Month')
            ->mapWithKeys(function ($count, $month) {
                return [$month => $count];
            })
            ->all();

        $proyectos = array_merge(array_fill_keys($months, 0), $proyectos);

        $xcity = DB::table('properties')
            ->select(DB::raw('COUNT(id) as count'), 'city')
            ->groupBy('city')
            ->orderBy('city', 'asc')
            ->get();


        foreach ($xcity as $res) {
            $city[] = "'" . $res->city . "'";
        }

        $city = implode(",", $city);


        $typeProperties = DB::table('properties as a')
            ->join('property_types as b', 'a.propertytype_id', '=', 'b.id')
            ->where('a.status', 1)
            ->groupBy('a.propertytype_id')
            ->selectRaw('COUNT(a.id) as count, b.type_name, b.type_icon')
            ->get();

        $type_status = DB::table('properties')
            ->where('status', 1)
            ->groupBy('property_status')
            ->selectRaw('COUNT(id) as count, property_status')
            ->get();


        return view('dashboard', [
            'values' => $result,
            'totalProperties' => $count,
            'totalVendidas' => $totalVendidas,
            'diezTopVendidas' => $diezTopVendidas,
            'totalUsers' => $totalUsers,
            'diezUsuarios' => $diezUsuarios,
            'propertiesByMonth' => $propertiesByMonth,
            'divisionResult' => $divisionResult,
            'proyectos' => $proyectos,
            'xcity' => $xcity,
            'city' => $city,
            'typeProperties' => $typeProperties,
            'type_status' => $type_status,
        ]);
    }
}
