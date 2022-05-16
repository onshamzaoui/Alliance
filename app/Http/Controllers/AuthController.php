<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationMail;
use App\Mail\SendPasswordResetLink;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //     public function login(){
    //      return view('login');
    //     }
    public function admin()
    {
        if (!Auth::guard('Admin')->user()) {
            return redirect("/login");
        } 
    }
    public function instructor()
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        } 

        $connecteduser = Auth::guard('Instructor')->user();


        return view('instructor' , [
            'connecteduser' => $connecteduser,
        ]);
    }
    public function etudiant()
    {
        if (!Auth::guard('Student')->user()) {
            return redirect("/login");
        } 

        $connecteduser = Auth::guard('Student')->user();


        return view('etudiant' , [
            'connecteduser' => $connecteduser,
        ]);
    
    }

    public function loginPost(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $this->validate($request, $rules);

        $credential = [
            'email'     => $request->email,
            'password'     => $request->password
        ];



        $authuser = null;

        if(Auth::guard('Admin')->attempt($credential)){
            $authuser = Auth::guard('Admin')->user();
            return redirect('/admin');
        }else if(Auth::guard('Student')->attempt($credential)){
            $authuser = Auth::guard('Student')->user();
            return redirect('/etudiant');
        }else if(Auth::guard('Instructor')->attempt($credential)){
            $authuser = Auth::guard('Instructor')->user();
            return redirect('/instructor');
        }else if(Auth::guard('Agent')->attempt($credential)){
            $authuser = Auth::guard('Agent')->user();
            return redirect('/agent');
        }else{
            return redirect('/login');

        }







        // if (Student::where("email", $request->email)->first()) {
        //     $student = Student::where("email", $request->email)->first();
        //     if (Hash::check($request->password, $student->password)) {
        //         return redirect()->intended(route('etudiant'));
        //     }
        // }
        // if (Instructor::where("email", $request->email)->first()) {
        //     $instructor = Instructor::where("email", $request->email)->first();
        //     if (Hash::check($request->password, $instructor->password)) {
        //         return redirect()->intended(route('instructor'));
        //     }
        // }


        // if (Auth::attempt($credential, $request->remember_me)) {

        //     $auth = Auth::user();

        //la7dhaaa


        //     if($auth->verified == 0){
        //         return redirect("login");
        //     }

        //     if ($request->_redirect_back_to) {
        //         return redirect($request->_redirect_back_to);
        //     }

        //     if ($auth->user_type == "etudiant") {
        //         return redirect()->intended(route('etudiant'));
        //     }
        //     if ($auth->user_type == "instructeur") {
        //         return redirect()->intended(route('instructor'));
        //     }
        //     if ($auth->user_type == "admin") {
        //         return redirect()->intended(route('admin'));
        //     }
        // }

        //->with('error', __t('login_failed'))->withInput($request->input());
    }


    // public function register(){
    //    return view('signup');
    // }
    public function registerPostEtudiant(Request $request)
    {

        // $validated = $request->validate([
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'phone_number' => 'required|min:8',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);




        $user = new Student();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);



        $user->save();

        $id = Crypt::encrypt($user->id);


        Mail::to($request->email)->send(new ConfirmationMail($id , "student"));


        if ($user) {
            return redirect("login");
        }
        return back();
        //->with('error', __t('failed_try_again'))->withInput($request->input());
    }

    public function registerPost(Request $request)
    {

        // $rules = [
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'phone_number' => 'required|min:8',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ];


        // $this->validate($request, $rules);


        // $validated = $request->validate([
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);


        






        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'phone_number' => $request->phone_number,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'user_type' => 'instructeur',
        //     'active_status' => 1
        // ]);




        $user = new Instructor();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->company = $request->company;
        // $user->active_status = 1;
        


        $user->save();

        $id = Crypt::encrypt($user->id);


        Mail::to($request->email)->send(new ConfirmationMail($id , "instructor"));



        if ($user) {
            $this->loginPost($request);
        }
        return back();
        //->with('error', __t('failed_try_again'))->withInput($request->input());
    }

    public function logoutPost()
    {
        Auth::guard('Student')->logout();
        Auth::guard('Admin')->logout();
        Auth::guard('Agent')->logout();
        Auth::guard('Instructor')->logout();
        return redirect("login");
    }

    // public function forgotPassword(){
    //     $title = __t('forgot_password');
    //     return view(theme('auth.forgot_password'), compact('title'));
    // }

    // public function sendResetToken(Request $request){
    //     $this->validate($request, ['email' => 'required']);

    //     $email = $request->email;

    //     $user = User::whereEmail($email)->first();
    //     if ( ! $user){
    //         return back()->with('error', __t('email_not_found'));
    //     }

    //     $user->reset_token = str_random(32);
    //     $user->save();

    //     try {
    //         Mail::to($email)->send(new SendPasswordResetLink($user));
    //     }catch (\Exception $e){
    //         return back()->with('error', $e->getMessage());
    //     }
    // }

    // public function passwordResetForm(){
    //     $title = __t('reset_your_password');
    //     return view(theme('auth.reset_form'), compact('title'));
    // }

    // public function passwordReset(Request $request, $token){
    //     if(config('app.is_demo')){
    //         return redirect()->back()->with('error', 'This feature has been disable for demo');
    //     }
    //     $rules = [
    //         'password'  => 'required|confirmed',
    //         'password_confirmation'  => 'required',
    //     ];
    //     $this->validate($request, $rules);

    //     $user = User::whereResetToken($token)->first();
    //     if ( ! $user){
    //         return back()->with('error', __t('invalid_reset_token'));
    //     }

    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     return redirect(route('login'))->with('success', __t('password_reset_success'));
    // }

}
