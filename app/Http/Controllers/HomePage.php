<?php

namespace App\Http\Controllers;

use App\Models\Assignedtest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePage extends Controller
{
    public function index()
    {
        $mostbuyedtestsids = [23, 411, 26, 10, 4, 3, 37, 22, 21];
        $mostbuyedresults = Test::whereIn('id', $mostbuyedtestsids)
            ->select('id', 'parameters', 'test_image', DB::raw("IF(LENGTH(name) > 20, CONCAT(SUBSTRING(name, 1, 20), '...'), name) as most_buyed_test_name_short"))
            ->get();

        $requirementbasistestsids = [7, 409, 8, 404];
        $requirementbasistestresults = Test::whereIn('id', $requirementbasistestsids)
            ->select('id', 'parameters', 'test_image', DB::raw("IF(LENGTH(name) > 20, CONCAT(SUBSTRING(name, 1, 20), '...'), name) as requirement_basis_test_name_short"))
            ->get();

        return view("platform.home", compact("mostbuyedresults", "requirementbasistestresults"));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        if (strlen($query) > 0) {
            $results = Test::where('name', 'like', '%' . $query . '%')->get();
            return response()->json($results);
        } else {
            return response()->json([]);
        }
    }

    public function get_quotes($id)
    {
        $temp_search_query = Test::where('id', $id)->get()->firstOrFail();
        $results = Assignedtest::where('test_id', $id)
        ->with('user') 
        ->get();
        $total = $results->count();
        return view('platform.diagnosisquotes',compact("results", "temp_search_query", "total"));
    }
    public function manualsearch(Request $request)
    {
        $request->validate([
            'manualsearchterm' => 'required|string|min:1',
        ], [
            'manualsearchterm.min' => 'The search term must be at least :min characters.',
        ]);

        $tempsearchQuery = $request->input('manualsearchterm');

        try {
            $temp_search_query = Test::where('name', $tempsearchQuery)->firstOrFail();
            $results = Assignedtest::where('test_id', $temp_search_query->id)
            ->with('user') 
            ->get();
            $total = $results->count();
            return view('platform.diagnosisquotes',compact("results", "temp_search_query", "total"));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $tempresults = Test::where('name', 'LIKE', '%' . $tempsearchQuery . '%')
            ->select('id', 'parameters', 'test_image', DB::raw("IF(LENGTH(name) > 40, CONCAT(SUBSTRING(name, 1, 40), '...'), name) as manually_searched_tests_name"))
            ->get();

            $temptotal = $tempresults->count();
    
            //3 Return the results to your view or perform any other actions
            return view('platform.manually-searched-results',compact("tempresults", "tempsearchQuery", "temptotal"));
            
    
        }

    }

    public function about_us()
    {
        return view("platform.aboutus");
    }

    public function contact_us()
    {
        return view("platform.contactus");
    }

    public function privacy_policy()
    {
        return view("platform.privacypolicy");
    }

    public function terms_conditions()
    {
        return view("platform.termsconditions");
    }

    public function refund_policy()
    {
        return view("platform.refundpolicy");
    }
}