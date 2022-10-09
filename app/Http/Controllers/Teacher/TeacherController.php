<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function dashboard ()
    {
        return view('Teacher.dashboard', [
            'title'=>'teacher', 
            'authInfo' => auth()->guard('teacher')->user()
        ]);
    }


    public function student()
    {
        return view('teacher.student.student', [
            'title'=>'Teacher', 
            'authInfo' => auth()->guard('teacher')->user(),
            'students' => User::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function studentStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'displayName' => $request->displayName,
            'dateOfBirth' => $request->dateOfBirth,
            'addressLine1' => $request->addressLine1,
            'addressLine2' => $request->addressLine2,
            'phone' => $request->phone,
            'state' => $request->state,
            'country' => $request->country
        ]);

        return back()->with('msg', 'Student create successfully done');
    }

    public function studentdetail($id)
    {
        $student = User::where('id', $id)->first();

        if (!$student) {
            return view('errors.404');
        }

        return view('Teacher.student.details', [
            'title'=>'Teacher', 
            'authInfo' => auth()->guard('teacher')->user(),
            'student' => $student
        ]);
    }

    public function studentupdate(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->displayName = $request->displayName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->addressLine1 = $request->addressLine1;
        $user->addressLine2 = $request->addressLine2;
        $user->phone = $request->phone;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->save();

        return back()->with('msg', 'User information update successfully');
    }

    public function studentpassupdate(Request $request) 
    {
        $user = User::find($request->id);
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return back()->with('msg', 'User password update successfully');
    }

    

    public function profile()
    {
        return view('Teacher.profile.profile', [
            'title'=>'Teacher', 
            'authInfo' => auth()->guard('teacher')->user()
        ]);
    }

    public function profileUpdate(Request $request)
    {
        // $teacher = Teacher::find($request->id);
        // $teacher->name = $request->name;
        // $teacher->displayName = $request->displayName;
        // $teacher->email = $request->email;
        // $teacher->phone = $request->phone;
        // $teacher->dateOfBirth = $request->dateOfBirth;
        // $teacher->addressLine1 = $request->addressLine1;
        // $teacher->addressLine2 = $request->addressLine2;
        // $teacher->state = $request->state;
        // $teacher->country = $request->country;
        // $teacher->save();

        $teacher = Teacher::find(auth()->guard('teacher')->user()->id);

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email|exists:teachers',
            'thumbnail' => 'image',
            'displayName' => ['string', 'max:100', 'nullable'],
            'phone' => ['string', 'max:20', 'nullable'],
            'dateOfBirth' => ['string', 'max:15', 'nullable'],
            'addressLine1' => ['string', 'max:255', 'nullable'],
            'addressLine2' => ['string', 'max:255', 'nullable'],
            'state' => ['string', 'max:255', 'nullable'],
            'country' => ['string', 'max:255', 'nullable'],
        ]);

        dd(print_r($attributes));

        return back()->with('msg', 'Teacher information update successfully');
    }

    public function updatePass()
    {
        $teacher = Teacher::find(auth()->guard('teacher')->user()->id);

        $attributes = request()->validate([
            'password' => ['required', 'string', 'min:8']
        ]);
        
        if (isset($attributes['password'] )) {
            $attributes['password'] = Hash::make(request()->password);
        }

        dd(print_r($attributes));

        $teacher->update($attributes);

        return back()->with('msg', 'Teacher password update successfully, Re-login to see the update');
    }
    

    public function logout()
    {
        auth()->guard('teacher')->logout();
        session()->flash('msg', 'You have been logged out');

        return redirect('/teacher');
    }
}
