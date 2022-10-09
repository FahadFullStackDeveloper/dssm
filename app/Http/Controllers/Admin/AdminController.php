<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    public function dashboard()
    {
        return view('Admin.dashboard', ['title'=>'Admin', 'authInfo' => auth()->guard('admin')->user()]);
    }
    
    public function instructor()
    {
        return view('Admin.instructor.instructor', [
            'title'=>'Admin', 
            'authInfo' => auth()->guard('admin')->user(),
            'instructors' => Teacher::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function instructorStore(Request $request)
    {
        $teacher = Teacher::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'displayName' => $request->displayName,
            'addressLine1' => $request->addressLine1,
            'addressLine2' => $request->addressLine2,
            'phone' => $request->phone,
            'state' => $request->state,
            'country' => $request->country,
            'about' => $request->about
        ]);

        return back()->with('msg', 'Teacher create successfully done');
    }

    public function instructordetail($id)
    {

        $instructor = Teacher::where('id', $id)->first();

        if (!$instructor) {
            return view('errors.404');
        }

        return view('Admin.instructor.details', [
            'title'=>'Admin', 
            'authInfo' => auth()->guard('admin')->user(),
            'instructor' => $instructor
        ]);
    }

    public function instructorupdate(Request $request)
    {
        $teacher = Teacher::find($request->id);
        $teacher->name = $request->name;
        $teacher->displayName = $request->displayName;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->phone = $request->phone;
        $teacher->addressLine1 = $request->addressLine1;
        $teacher->addressLine2 = $request->addressLine2;
        $teacher->phone = $request->phone;
        $teacher->state = $request->state;
        $teacher->country = $request->country;
        $teacher->about = $request->about;
        $teacher->save();

        return back()->with('msg', 'Teacher information update successfully');
    }


    public function student()
    {
        return view('Admin.student.student', [
            'title'=>'Admin', 
            'authInfo' => auth()->guard('admin')->user(),
            'students' => User::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function studentStore()
    {

        // ======================= comment code Start ==========================
            // dd(request()->all());

            // return 'Done:'. $path;

            // $attributes = request()->validate([
            //     'name' => 'required',
            //     'thumbnail' => 'required|image',
            //     'email' => 'required',
            //     'password' => 'required',
            // ]);

            // $path = request()->file('thumbnail')->store('Student');

        // ======================= comment code End ============================

        $attributes = request()->validate([
            'name' => ['required', 'string'],
            'email' => 'required|unique:users',
            'thumbnail' => 'image',
            'password' => ['required', 'string', 'min:8'],
            'displayName' => ['string', 'max:100', 'nullable'],
            'phone' => ['string', 'max:20', 'nullable'],
            'dateOfBirth' => ['string', 'max:15', 'nullable'],
            'addressLine1' => ['string', 'max:255', 'nullable'],
            'addressLine2' => ['string', 'max:255', 'nullable'],
            'state' => ['string', 'max:255', 'nullable'],
            'country' => ['string', 'max:255', 'nullable'],
        ]);

        // ======================= comment code start ==========================

            // var_dump($attributes);

            // print_r($attributes);

            // dd();

            // $user = User::create([
            //     'name' => request()->name,
            //     'password' => Hash::make(request()->password),
            //     'email' => request()->email,
            //     'thumbnail' => request()->file('thumbnail')->store('Student'),
            //     'displayName' => request()->displayName,
            //     'dateOfBirth' => request()->dateOfBirth,
            //     'addressLine1' => request()->addressLine1,
            //     'addressLine2' => request()->addressLine2,
            //     'phone' => request()->phone,
            //     'state' => request()->state,
            //     'country' => request()->country
            // ]);

        // ======================= comment code End ============================

        if (isset($attributes['thumbnail'] )) {            
            $attributes['thumbnail'] = request()->file('thumbnail')->store('Student');
        }

        User::create($attributes);

        return back()->with('msg', 'Student create successfully done');
    }

    public function studentdetail($id)
    {

        $student = User::where('id', $id)->first();

        if (!$student) {
            return view('errors.404');
        }

        return view('Admin.student.details', [
            'title'=>'Admin', 
            'authInfo' => auth()->guard('admin')->user(),
            'student' => $student
        ]);
    }

    public function studentupdate(User $user)
    {
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

        return back()->with('msg', 'User information update successfully');
    }

    public function studentpassupdate(User $user)
    {
        // dd($user->id);

        // $user = User::find($request->id);
        // $user->password = Hash::make($request->get('password'));
        // $user->save();

        $attributes = request()->validate([
            'password' => ['required', 'string', 'min:8']
        ]);
        
        if (isset($attributes['password'] )) {
            $attributes['password'] = Hash::make(request()->password);
        }

        $user->update($attributes);


        return back()->with('msg', 'User password update successfully');
    }



    public function profile()
    {
        return view('Admin.profile.profile', ['title'=>'Admin', 'authInfo' => auth()->guard('admin')->user()]);
    }

    public function profileUpdate()
    {

        $admin = Admin::find(auth()->guard('admin')->user()->id);

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email|exists:admins',
            'thumbnail' => 'image',
            'displayName' => ['string', 'max:100', 'nullable'],
            'phone' => ['string', 'max:20', 'nullable'],
            'dateOfBirth' => ['string', 'max:15', 'nullable'],
            'addressLine1' => ['string', 'max:255', 'nullable'],
            'addressLine2' => ['string', 'max:255', 'nullable'],
            'state' => ['string', 'max:255', 'nullable'],
            'country' => ['string', 'max:255', 'nullable'],
        ]);

        // ====================== Manual Validation Start ========================
            // $attributes = Validator::make($request->all(), [
            //     'name' => 'required',
            //     'thumbnail' => 'required|image',
            //     'email' => 'required',
            //     'password' => 'required',
            // ]);

            // if ($attributes->fails())
            // { 

            //     // return response()->json(['errors'=>$validator->errors()->all()]); 

            //     dd($attributes->errors()->all());
            //     return back()->with(['errors'=> $attributes->errors()->all() ]);

            // } 

            // $validatedData = $request->validateWithBag('post', [
            //     'title' => ['required', 'unique:posts', 'max:255'],
            //     'body' => ['required'],
            // ]);

            // dd(request()->id);

            // var_dump();


            // $admin = Admin::find($request->id);
            // $admin->name = $request->name;
            // $admin->displayName = $request->displayName;
            // $admin->email = $request->email;
            // $admin->phone = $request->phone;
            // $admin->dateOfBirth = $request->dateOfBirth;
            // $admin->addressLine1 = $request->addressLine1;
            // $admin->addressLine2 = $request->addressLine2;
            // $admin->state = $request->state;
            // $admin->country = $request->country;
            // $admin->save();

        // ====================== Manual Validation End ==========================
        
        if (isset($attributes['thumbnail'] )) {            
            $attributes['thumbnail'] = request()->file('thumbnail')->store('Admin');
        }

        $admin->update($attributes);

        return back()->with('msg', 'Admin information update successfully');
    }

    public function updatePass()
    {

        $admin = Admin::find(auth()->guard('admin')->user()->id);

        $attributes = request()->validate([
            'password' => ['required', 'string', 'min:8']
        ]);
        
        if (isset($attributes['password'] )) {
            $attributes['password'] = Hash::make(request()->password);
        }

        $admin->update($attributes);        

        return back()->with('msg', 'Admin password update successfully, Re-login to see the update');
    }

    public function security()
    {
        return view('Admin.profile.security', ['title'=>'Admin', 'authInfo' => auth()->guard('admin')->user()]);
    }

    public function settings()
    {
        $setting = Setting::find(1);

        return view('Admin.settings.settings', [
            'title'=>'Admin', 
            'authInfo' => auth()->guard('admin')->user(),
            'setting' => $setting
        ]);
    }


    public function settingsupdate(Request $request)
    {
        Setting::updateOrCreate(
            [
                'id'   => 1,
            ],
            [
                'name'     => $request->get('name'),
                'email' => $request->get('email'),
                'copyright'    => $request->get("copyright"),
                'websiteLink' => $request->get('websiteLink'),
                'description'       => $request->get('description')
            ],
        );

        return back()->with('msg', 'Settings information update successfully');
    }


    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return $request->wantsJson()
        //     ? new JsonResponse([], 204)
        //     : redirect('/');

        session()->flash('msg', 'You have been logged out');

        return redirect('/admin');
    }

    // protected function validatePost(?Admin $admin = null)
    // {
    //     $attributes = request()->validate([
    //         'name' => 'required',
    //         'email' => ['required', 'email', 'unique:admins', 'email,', Rule::unique('admins', 'email')->ignore($admin)]
    //     ]);
    //     // $attributes = request()->validate([
    //     //     'title' => 'required',
    //     //     'thumbnail' => $admin->exists ? ['image'] : ['required', 'image'],
    //     //     'slug' => ['required', Rule::unique('posts', 'slug')->ignore($admin)],
    //     //     'excerpt' => 'required',
    //     //     'body' => 'required',
    //     //     'category_id' => ['required', Rule::exists('categories', 'id')]
    //     // ]);

    //     return $attributes;
    // }

}
