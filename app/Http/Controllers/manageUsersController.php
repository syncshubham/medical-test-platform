<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class manageUsersController extends Controller
{

    public function register()
    {   
        $roles = Role::pluck('name','name')->all();
        return view("authenticatedviews.createusers", ['roles' => $roles]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', Password::default(), 'confirmed'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'roles' => 'required',
            'profile_photo_path' => ['file', 'image', 'mimes:jpeg,png,jpg', 'max:100'], // 'max' is in kilobytes
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $uniqueName = uniqid() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('admin/assets/uploads/images/profilephotos');
            $viewImage = 'admin/assets/uploads/images/profilephotos/';
            $filename = $viewImage . $uniqueName;
            $file->move($destinationPath, $filename);
            $user->profile_photo_path = $filename;
        }
    
        $user->save();
        $user->syncRoles($request->roles);
        return redirect()->back()->with('Success', 'User registered Successfully');
    }

    public function manage_users()
    {
        $users = User::orderBy("created_at", "desc")->get();
        return view("authenticatedviews.manageusers", compact("users"));
    }
    
    public function edit_user($id)
    {   
        $roles = Role::pluck('name','name')->all();
        $user = User::where('id', '=', $id)->firstOrFail();
        session(['original_user_id' => $user->id]); // Store the original user ID in the session
        return view("authenticatedviews.editusers", compact("user", "roles"));
    }

    public function update_user(Request $request)
    {
        $id = session('original_user_id');
        if ($id) {
        $user = User::where('id', '=', $id)->firstOrFail();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'roles' => 'required',
            'profile_photo_path' => ['file', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:100'] // 'max' is in kilobytes
        ]);

        $user->name = $request->input('name');   
        if ($request->file('profile_photo_path')) {
            File::delete(public_path($user->profile_photo_path));
            $file = $request->file('profile_photo_path');
            $uniqueName = uniqid() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('admin/assets/uploads/images/profilephotos');
            $viewImage = 'admin/assets/uploads/images/profilephotos/';
            $filename = $viewImage . $uniqueName;
            $file->move($destinationPath, $filename);
            $user->profile_photo_path = $filename;
        }
        $user->save();
        $user->syncRoles($request->roles);
        return redirect()->back()->with('Success', 'User Modified Successfully');
     }
        else 
            {
            return redirect()->back()->with('Error', 'Something went wrong');
        }
    }
}