<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('Student.dashboard', [
            'title'=>'Student', 
            'authInfo' => auth()->user()
        ]);
    }

    
    public function profile()
    {
        return view('Student.profile.profile', [
            'title'=>'Student', 
            'authInfo' => auth()->user()
        ]);
    }

    public function apply()
    {
        return view('student.apply.index', [
            'title'=>'Student', 
            'authInfo' => auth()->user()
        ]);
    }

    public function profileUpdate(Request $request)
    {
        // $student = User::find($request->id);
        // $student->name = $request->name;
        // $student->displayName = $request->displayName;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->dateOfBirth = $request->dateOfBirth;
        // $student->addressLine1 = $request->addressLine1;
        // $student->addressLine2 = $request->addressLine2;
        // $student->state = $request->state;
        // $student->country = $request->country;
        // $student->save();

        $user = User::find(auth()->user()->id);

        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'exists:users'],
            'thumbnail' => 'image',
            'displayName' => ['string', 'max:100', 'nullable'],
            'phone' => ['string', 'max:20', 'nullable'],
            'dateOfBirth' => ['string', 'nullable'],
            'addressLine1' => ['string', 'max:255', 'nullable'],
            'addressLine2' => ['string', 'max:255', 'nullable'],
            'state' => ['string', 'max:255', 'nullable'],
            'country' => ['string', 'max:255', 'nullable'],
        ]);

        if (isset($attributes['thumbnail'] )) {            
            $attributes['thumbnail'] = request()->file('thumbnail')->store('Student');
        }

        $user->update($attributes);

        return back()->with('msg', 'Student information update successfully');
    }

    public function updatePass()
    {
        $user = User::find(auth()->user()->id);
        $attributes = request()->validate([
            'password' => ['required', 'string', 'min:8']
        ]);

        if (isset($attributes['password'] )) {
            $attributes['password'] = Hash::make(request()->password);
        }

        // dd(print_r($attributes));

        $user->update($attributes);

        return back()->with('msg', 'Password update successfully, Re-login to see the update');
    }
    

}
