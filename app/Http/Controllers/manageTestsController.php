<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\Assignedtest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

class manageTestsController extends Controller
{
    public function create()
    {
        return view("authenticatedviews.createtest");
    }

    public function store_random_test_assigned(Request $request)
    {
        $request->validate([
            'test_id' => [
                'required',
                'numeric',
                'digits_between:1,4',
                function ($attribute, $value, $fail) {
                    $exists = DB::table('tests')->where('id', $value)->exists();
                    if (!$exists) {
                        $fail('The test ID must correspond to a valid test.');
                    }
                },
            ],
            'lab_id' => [
                'required',
                'numeric',
                'digits_between:1,3',
                function ($attribute, $value, $fail) {
                    $exists = DB::table('model_has_roles')
                        ->where('model_type', User::class)
                        ->where('role_id', 3) // Assuming role ID 3 is for labs
                        ->where('model_id', $value)
                        ->exists();
                    if (!$exists) {
                        $fail('The lab ID must correspond to a user with the lab role.');
                    }
                },
            ],
            'lab_rate' => ['required', 'numeric'],
            'final_rate' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value < $request->input('lab_rate')) {
                        $fail('The final rate cannot be less than the lab rate.');
                    }
                },
                // Custom validation rule to check if the test is already assigned to the lab
                function ($attribute, $value, $fail) use ($request) {
                    $testId = $request->input('test_id');
                    $labId = $request->input('lab_id');

                    $exists = DB::table('assignedtests')
                        ->where('test_id', $testId)
                        ->where('lab_id', $labId)
                        ->exists();

                    if ($exists) {
                        $fail('This test has already been assigned to this lab.');
                    }
                },
            ],
        ]);

        $assigned_test = new Assignedtest;
        $assigned_test->test_id = $request->input('test_id');
        $assigned_test->lab_id = $request->input('lab_id');
        $assigned_test->lab_rate = $request->input('lab_rate');
        $assigned_test->final_rate = $request->input('final_rate');

        $assigned_test->save();
        return redirect()->back()->with('Success', 'Test assigned Successfully');
    }

    public function update_random_test_assigned(Request $request)
    {
        $id = session('original_radom_assigned_test_id');
        if ($id) {
            $assigned_test = Assignedtest::where('id', '=', $id)->firstOrFail();
            $request->validate([
            'test_id' => [
                'required',
                'numeric',
                'digits_between:1,4',
                function ($attribute, $value, $fail) {
                    $exists = DB::table('tests')->where('id', $value)->exists();
                    if (!$exists) {
                        $fail('The test ID must correspond to a valid test.');
                    }
                },
            ],
            'lab_id' => [
                'required',
                'numeric',
                'digits_between:1,3',
                function ($attribute, $value, $fail) {
                    $exists = DB::table('model_has_roles')
                        ->where('model_type', User::class)
                        ->where('role_id', 3) // Assuming role ID 3 is for labs
                        ->where('model_id', $value)
                        ->exists();
                    if (!$exists) {
                        $fail('The lab ID must correspond to a user with the lab role.');
                    }
                },
            ],
            'lab_rate' => ['required', 'numeric'],
            'final_rate' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value < $request->input('lab_rate')) {
                        $fail('The final rate cannot be less than the lab rate.');
                    }
                },
                // Custom validation rule to check if the test is already assigned to the lab
                function ($attribute, $value, $fail) use ($request, $id) {
                    $testId = $request->input('test_id');
                    $labId = $request->input('lab_id');
                
                    $exists = DB::table('assignedtests')
                        ->where('id', '!=', $id) // Exclude the current row being updated
                        ->where('test_id', $testId)
                        ->where('lab_id', $labId)
                        ->exists();
                
                    if ($exists) {
                        $fail('This test has already been assigned to this lab.');
                    }
                },
            ],
        ]);

        $assigned_test->test_id = $request->input('test_id');
        $assigned_test->lab_id = $request->input('lab_id');
        $assigned_test->lab_rate = $request->input('lab_rate');
        $assigned_test->final_rate = $request->input('final_rate');

        $assigned_test->save();
        return redirect()->back()->with('Success', 'Modified Successfully');
         }   else {
            return redirect()->back()->with('Error', 'Something went wrong');
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:tests'],
            'parameters' => ['max:25',],
            'test_image' => ['nullable', 'mimes:jpeg,png,jpg', 'max:150']
        ]);

        $test = new Test;
        $test->name = $request->input('name');
        $test->parameters = $request->input('parameters');

        if ($request->file('test_image')) {
            $file = $request->file('test_image');
            $uniqueName = uniqid() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('adminassets/uploads/images/tests');
            $viewImage = 'adminassets/uploads/images/tests/';
            $filename = $viewImage . $uniqueName;
            $file->move($destinationPath, $filename);
            $test->test_image = $filename;
        }

        $test->save();
        return redirect()->back()->with('Success', 'Test created Successfully');
    }

    public function manage_tests()
    {
        $tests = Test::orderBy("created_at", "desc")->get();
        return view("authenticatedviews.managetests", compact("tests"));
    }

    public function edit_test($id)
    {
        $test = Test::where('id', '=', $id)->firstOrFail();
        session(['original_test_id' => $test->id]); // Store the original test ID in the session
        return view("authenticatedviews.edittests", compact("test"));
    }

    public function update_test(Request $request)
    {

        $id = session('original_test_id');
        if ($id) {
            $test = Test::where('id', '=', $id)->firstOrFail();

            $request->validate([
                'name' => ['required', 'string', 'max:255', Rule::unique('tests')->ignore($test->id)],
                'parameters' => ['string', 'max:25',],
                'test_image' => ['nullable', 'mimes:jpeg,png,jpg', 'max:150']
            ]);

            $test->name = $request->input('name');
            $test->parameters = $request->input('parameters');
            if ($request->file('test_image')) {
                File::delete(public_path($test->test_image));
                $file = $request->file('test_image');
                $uniqueName = uniqid() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('adminassets/uploads/images/tests');
                $viewImage = 'adminassets/uploads/images/tests/';
                $filename = $viewImage . $uniqueName;
                $file->move($destinationPath, $filename);
                $test->test_image = $filename;
            }

            $test->save();
            return redirect()->back()->with('Success', 'Test modified Successfully');
        } else {
            return redirect()->back()->with('Error', 'Something went wrong');
        }
    }

    public function delete_test(Test $test)
    {
        $test->assignedTests()->delete();
        $test->delete();
        return redirect()->back()->with('Success', 'Test and related data deleted successfully.');
    }

    public function delete_assignedtest(Assignedtest $assignedtest)
    {
        $assignedtest->delete();
        return redirect()->back()->with('Success', 'Assigned Test deleted successfully.');
    }

    public function assign_test_randomly()
    {
        return view("authenticatedviews.assigntestrandomly");
    }

    public function search_tests_data(Request $request)
    {
        $searchTerm = $request->input('search');
        $data = Test::where('name', 'like', '%' . $searchTerm . '%')->get(); // Example query

        // Format the fetched data as options for the select dropdown
        $options = [];
        foreach ($data as $item) {
            $options[] = [
                'id' => $item->id,
                'text' => $item->name // Assuming 'name' is the attribute you want to display as the option text
            ];
        }

        return response()->json($options);
    }

    public function search_labs_data(Request $request)
    {
        $searchTerm = $request->input('searchsecond');



        // Get the users with the specified role and whose name matches the search term
        $data = User::role('labs') // Filter users by role
            ->where('name', 'like', "%$searchTerm%") // Filter users by name
            ->get();

        // Format the fetched data as options for the select dropdown
        $options = [];
        foreach ($data as $item) {
            $options[] = [
                'id' => $item->id,
                'text' => $item->name // Assuming 'name' is the attribute you want to display as the option text
            ];
        }

        return response()->json($options);
    }

    public function manage_assigned_random_tests()
    {
        $assignedtests = Assignedtest::orderBy("created_at", "desc")
            ->with('lab', 'test')
            ->get();

        return view("authenticatedviews.manageassignerandomtests", compact("assignedtests"));
    }

    public function edit_random_assigned_test($id)
    {
        $assignedtest = Assignedtest::
        with('lab', 'test')
        ->where('id', $id)
        ->firstOrFail();

        session(['original_radom_assigned_test_id' => $assignedtest->id]); // Store the original assigned test ID in the session
        return view("authenticatedviews.editassigntestrandomly", compact("assignedtest"));
    }

    public function paginationtestingfunction()
    {
        echo "test function checked";
    }

}