<?php

namespace App\Http\Controllers\Members;

use App\Calendar;
use App\CompanyInfo;
use App\Member;
use App\MemberRole;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/miembros';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('member');
    }

    /**
     * Show the application's register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        \Auth::guard('members')->user()->authorizeRoles(['admin', 'secretary']);
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        return view('members.register',compact('companyInfo'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('/miembros/registro')->withErrors($messages);

        }else{

            if($request->level==1 || $request->level==6 || $request->level==4 || $request->level==5 ){
                $level = 3;
            }elseif($request->level==2){
                $level = 2;
            }else{
                $level = 1;
            }

            $user = new Member();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->birthdate = $request->birthdate;
            $user->level = $level;
            $user->password = Hash::make($request->password);

            $user->save();

            $role = new MemberRole();
            $role->user_id=$user->id;
            $role->role_id=$request->level;

            $role->save();

            /*$calendar = new Calendar();
            $calendar->title='Cumpleaños '.$user->name;
            $calendar->start=$user->birthdate;
            $calendar->level=4;
            $calendar->member_id=$user->id;

            $calendar->save();*/
        }

        return redirect('/miembros/registro')->with('message', '¡Registro guardado con éxito!');

    }
}